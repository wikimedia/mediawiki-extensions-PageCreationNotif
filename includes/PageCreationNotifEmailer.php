<?php

/**
 * Class holding functions for sending emails.
 *
 * @since 0.1
 *
 * @file PageCreationNotifEmailer.php
 * @ingroup PageCreationNotif
 *
 * @licence GNU GPL v3 or later
 * @author Nischay Nahata < nischayn22@gmail.com >
 */
class PageCreationNotifEmailer {

	/**
	 * This function will notify all users using PCN by emails about
	 * creation of a new article.
	 *
	 * @since 0.1
	 *
	 */
	public static function notifyOnNewWikiPage( $wikiPage, $creator ) {
		global $wgPCNSender, $wgPCNSenderName;

		$users = self::getNotifUsers();

		foreach( $users as $user ) {

			if( $user->getId() === $creator->getId() ) {
				continue;
			}

			$subject = wfMessage(
				'page-creation-email-subject',
				$wikiPage->getTitle()->getFullText(),
				$GLOBALS['wgSitename'],
				$creator->getName()
			)->parse();

			$emailText = wfMessage(
				'page-creation-email-body',
				$user->getName(),
				$wikiPage->getTitle()->getFullText(),
				$creator->getName(),
				$wikiPage->getTitle()->getFullURL(),
				ContentHandler::getContentText( $wikiPage->getContent() )
			)->parse();

			UserMailer::send(
				new MailAddress( $user ),
				new MailAddress( $wgPCNSender, $wgPCNSenderName ),
				$subject,
				$emailText,
				array( 'contentType' => 'text/html; charset=ISO-8859-1' )
			);
			// die silently ignoring the status message
		}
	}

	/**
	 * Get all the users
	 *
	 * @since 0.1
	 *
	 * @return Array of User objects
	 */
	public static function getNotifUsers() {
		$dbr = wfGetDB( DB_REPLICA );

		$rows = $dbr->select(
			'pcn_users',
			array(
				'pcn_user_id'
			),
			array(
				'pcn_notify' => 1
			)
		);

		$users = array();

		foreach ( $rows as $row ) {
			$users[] = User::newFromId( intval( $row->pcn_user_id ) );
		}

		return $users;
	}
}