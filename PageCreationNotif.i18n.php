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
	'page-creation-notification' => 'E-mail me when a new page is created',
	'page-creation-email-subject' => 'New page - $1 created on $2 by $3',
	'page-creation-email-body'  => 'Dear $1,

This is a notification from {{SITENAME}} that a new page $2 has been {{Gender:$3|created}} by user $3.

You can see it at
$4

The text of the page is:
$5

Your friendly {{SITENAME}} notification system.

To change your e-mail notification settings, visit
{{canonicalurl:{{#special:Preferences}}}}',
);

/** Message documentation (Message documentation)
 * @author Nischayn22
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'page-creation-notif-desc' => '{{desc|name=Page Creation Notif|url=http://www.mediawiki.org/wiki/Extension:PageCreationNotif}}',
	'page-creation-notification' => 'This message is a label for preferences to get notified by email on creation of a new page',
	'page-creation-email-subject' => 'This message is used as the subject for emails on creation of a new page. Parameters:
* $1 is a page name
* $2 is a wiki name
* $3 is a user name',
	'page-creation-email-body' => 'This message is the body of the notification saying that a new page was created. Parameters:
* $1 is a user name
* $2 is a page name
* $3 is a user name of page creator
* $4 is the URL of the new page
* $5 is the text of the page',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'page-creation-notif-desc' => 'Дасылае e-mail-абвестку па стварэньні новых старонак',
	'page-creation-notification' => 'Апавяшчаць мяне праз e-mail, калі ствараецца новая старонка',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'page-creation-notif-desc' => 'Ermöglicht beim Erstellen neuer Seiten das Senden von E-Mail-Benachrichtigungen',
	'page-creation-notification' => 'Mich per E-Mail benachrichtigen, wenn eine neue Seite erstellt wurde',
	'page-creation-email-subject' => 'Neue Seite – $1 erstellt am $2 von $3',
	'page-creation-email-body' => 'Hallo $1!

Dies ist eine Benachrichtigung von {{SITENAME}}, um dir mitzuteilen, dass die neue Seite „$2“ {{GENDER:$3|vom Benutzer|von der Benutzerin}} $3 erstellt wurde.

Du kannst sie hier sehen:
$4

Der Text der Seite ist:
$5

Dein freundliches {{SITENAME}}-Benachrichtigungssystem.

Um deine E-Mail-Benachrichtigungseinstellungen zu ändern, besuche bitte
{{canonicalurl:{{#special:Preferences}}}}',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'page-creation-notif-desc' => 'Envoie une notification par courriel quand de nouvelles pages sont créées',
	'page-creation-notification' => "M'envoyer un courriel quand une nouvelle page est créée",
	'page-creation-email-subject' => 'Nouvelle page - $1 créée le $2 par $3',
	'page-creation-email-body' => "Cher $1,

Ceci est une notification de {{SITENAME}} qu'une nouvelle page $2 a été {{Gender:$3|créée}} par l'utilisateur $3.

Vous pouvez la voir ici
$4

Le contenu de la page est:
$5

Le système de notification de {{SITENAME}}.

Pour modifier vos paramètres de notification par courriel, allez sur
{{canonicalurl:{{#special:Preferences}}}}",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'page-creation-notif-desc' => 'Mande na notificacion per mèssageria èlèctronica quand de pâges novèles sont fêtes',
	'page-creation-notification' => 'Mè mandar un mèssâjo pendent la crèacion de pâges novèles',
	'page-creation-email-subject' => 'Pâge novèla - $1 fêta lo $2',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'page-creation-notif-desc' => 'Envía unha notificación por correo electrónico cando se crean novas páxinas',
	'page-creation-notification' => 'Enviádeme un correo electrónico cando se cree unha páxina nova',
	'page-creation-email-subject' => 'Nova páxina - "$1" creada por $3 o $2',
	'page-creation-email-body' => 'Boas, $1:

Esta é unha notificación de {{SITENAME}} para informar de que {{GENDER:$3|o usuario|a usuaria}} $3 creou a páxina "$2".

Pode botarlle unha ollada en
$4

O texto da páxina é:
$5

O sistema de notificación de {{SITENAME}}.

Para modificar as opcións de notificación por correo electrónico, visite
{{canonicalurl:{{#special:Preferences}}}}',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'page-creation-notif-desc' => 'Invia una e-mail di notifica quando vengono creati nuove pagine',
	'page-creation-notification' => 'Inviami una e-mail quando una nuova pagina viene creata',
	'page-creation-email-subject' => 'Nuova pagina - $1 creata su $2 da $3',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'page-creation-notif-desc' => 'ページが作成されたら通知メールを送信する',
	'page-creation-notification' => '新しいページが作成されたらメールを受け取る',
	'page-creation-email-subject' => '新しいページ - $3が$2に$1を作成しました',
	'page-creation-email-body' => '利用者 $2 が $3 で新しいページ $1 を作成しました。このページは $4 で閲覧できます。', # Fuzzy
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'page-creation-notif-desc' => 'Scheck en <i lang="en">e-mail</i>, wann en neu Sigg aanjelaat wood.',
	'page-creation-notification' => 'Scheck mer en <i lang="en">e-mail</i>, wann en neu Sigg aanjelaat weed.', # Fuzzy
	'page-creation-email-subject' => 'Neu Sigg „$1“ {{GRAMMAR:em|{{ucfirst:$2}}}} aanjelaat {{GENDER:$2|vum|vum|vumm Metmaacher|vun dä|vum}} $3',
	'page-creation-email-body' => 'Neu Sigg „$1“ wood {{GENDER:$2|vum|vum|vum_Metmaacher|vun dä|vum}} $2 {{GRAMMAR:em|{{ucfirst:$3}}}} aanjelaat un kann onger $4 beloort wääde.', # Fuzzy
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
	'page-creation-notification' => 'Известувај ме по е-пошта кога некој ќе создаде нова страница',
	'page-creation-email-subject' => 'Нова страница - На $2 создадена страницата „$1“ од $3',
	'page-creation-email-body' => '{{Gender:$3|Почитуван|Почитуванa|Почитуван}} $1,

Ве известуваме дека на {{SITENAME}} е создадена новата страница $2 од корисникот $3.

Можете да ја погледате на
$4

Текстот на страницата е:
$5

Вашиот известителен систем на {{SITENAME}}

Сако сакате да ги измените поставките за известувања, појдете на:
{{canonicalurl:{{#special:Preferences}}}}',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'page-creation-notif-desc' => "Stuurt een e-mail als nieuwe pagina's worden aangemaakt",
	'page-creation-notification' => 'Mij e-mailen als een nieuwe pagina wordt aangemaakt',
	'page-creation-email-subject' => 'Nieuwe pagina - $1 aangemaakt in $2 door {{GENDER:$3|$3}}',
	'page-creation-email-body' => 'De pagina $1 is aangemaakt door $2 op $3. Bekijk de pagina via de volgende koppeling: $4', # Fuzzy
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'page-creation-notif-desc' => "A manda n'e-mail ëd notìfica quand che neuve pagine a son creà",
	'page-creation-notification' => "Mandme un corel quand na neuva pagina a l'é creà",
	'page-creation-email-subject' => 'Pagine neuve - $1 creà dzor $2 da $3',
	'page-creation-email-body' => "Car $1,

Costa a l'é na notìfica da {{SITENAME}} che na pagina neuva $2 a l'é stàita {{Gender:$3|creà}} da l'utent $3.

It peule vëddla a 
$4

El test ëd la pagina a l'é:
$5

Tò sistem ëd notificassion amichévol ëd {{SITENAME}}.

Për cangé toe ampostassion ëd notìfica email, vìsita {{canonicalurl:{{#special:Preferences}}}}",
);
