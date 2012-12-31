<?php
/**
 * Internationalisation file for the extension PageCreationNotif
 *
 * @file
 * @ingroup Extensions
 * @author Nischay Nahata <nischayn22@gmail.com>
 */

$messages = array();

/** English
 * @author Nischayn22
 */
$messages['en'] = array(
	'page-creation-notif-desc'  => 'Sends e-mail notification when new pages are created',
	'page-creation-notification' => 'Email me on creation of new pages',
	'page-creation-email-subject' => 'New page - $1 created on $2',
	'page-creation-email-body'  => 'A new page $1 has been created by user $2 at $3, the page can be viewed at $4',
);

/** Message documentation (Message documentation)
 * @author Nischayn22
 * @author Siebrand
 */
$messages['qqq'] = array(
	'page-creation-notif-desc' => '{{desc}}',
	'page-creation-notification' => 'This message is a label for preferences to get notified by email on creation of new pages',
	'page-creation-email-subject' => 'This message is used as the subject for emails on creation of a new page $1 in a wiki $2',
	'page-creation-email-body' => 'This message is the body of the notification saying that a new page was created. Parameters:
* $1 is a page name
* $2 is a user name
* $3 is a site name
* $4 is a link to the new page',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'page-creation-notif-desc' => 'Ermöglicht beim Erstellen neuer Seiten das Senden von E-Mail-Benachrichtigungen',
	'page-creation-notification' => 'Mich per E-Mail benachrichtigen, wenn neue Seiten erstellt werden',
	'page-creation-email-subject' => 'Neue Seite – $1 erstellt am $2',
	'page-creation-email-body' => 'Die neue Seite „$1“ wurde am $3 von $2 erstellt. Die Seite kann unter $4 betrachtet werden.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'page-creation-notif-desc' => 'Envoie une notification par courriel quand de nouvelles pages sont créées',
	'page-creation-notification' => "M'envoyer un courriel lors de la création de nouvelles pages",
	'page-creation-email-subject' => 'Nouvelle page - $1 créé le $2',
	'page-creation-email-body' => "Une nouvelle page $1 a été créée par l'utilisateur $2 à $3, la page peut être consultée à $4",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'page-creation-notif-desc' => 'ページが作成されたら通知メールを送信する',
	'page-creation-notification' => '新しいページが作成されたらメールを受け取る',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'page-creation-notif-desc' => 'Scheck en <i lang="en">e-mail</i>, wann en neu Sigg aanjelaat wood.',
	'page-creation-notification' => 'Scheck mer en <i lang="en">e-mail</i>, wann en neu Sigg aanjelaat weed.',
	'page-creation-email-subject' => 'Neu Sigg „$1“ {{GRAMMAR:em|{{ucfirst:$2}}}} aanjelaat',
	'page-creation-email-body' => 'Neu Sigg „$1“ wood {{GENDER:$2|vum|vum|vum_Metmaacher|vun dä|vum}} $2 {{GRAMMAR:em|{{ucfirst:$3}}}} aanjelaat un kann onger $4 beloort wääde.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'page-creation-notification' => 'Mir eng Mail schécke wann nei Säiten ugeluecht ginn',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'page-creation-notif-desc' => 'Испраќа известувања по е-пошта кога ќе се создадат нови страници',
	'page-creation-notification' => 'Известувај ме по е-пошта кога ќе се создаваат нови страници',
	'page-creation-email-subject' => 'Нова страница - Создадена „$1“ на $2',
	'page-creation-email-body' => 'Корисникот $2 создаде нова страница „$1“ на $3. Можете да ја погледате на $4',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'page-creation-notif-desc' => "Stuurt een e-mail als nieuwe pagina's worden aangemaakt",
	'page-creation-notification' => "Mij e-mailen als nieuwe pagina's worden aangemaakt",
	'page-creation-email-subject' => 'Nieuwe pagina - $1 aangemaakt in $2',
	'page-creation-email-body' => 'De pagina $1 is aangemaakt door $2 op $3. Bekijk de pagina via de volgende koppeling: $4',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'page-creation-notif-desc' => "A manda n'e-mail ëd notìfica quand che neuve pagine a son creà",
	'page-creation-notification' => 'Mandme un corel creand neuve pagine',
	'page-creation-email-subject' => 'Pagine neuve - $1 creà dzor $2',
	'page-creation-email-body' => "Na pagina neuva $1 a l'é stàita creà da l'utent $2 a $3, la pagina a peul esse vëddùa a $4",
);
