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

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'page-creation-notif-desc' => 'Envía una notificación por correo electrónico cuando se crean páginas nuevas',
	'page-creation-notification' => 'Enviarme un mensaje cuando se cree una página nueva',
	'page-creation-email-subject' => 'Página nueva – $1 creada el $2 por $3',
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
	'page-creation-notification' => 'Mè mandar un mèssâjo pendent la crèacion de pâges novèles', # Fuzzy
	'page-creation-email-subject' => 'Pâge novèla - $1 fêta lo $2', # Fuzzy
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
	'page-creation-email-body' => "Gentile $1,

Questa è una notifica da {{SITENAME}} che una nuova pagina $2 è stata {{Gender:$3|creata}} dall'utente $3.

Puoi vederla qui
$4

Il testo della pagina è:
$5


             Il sistema di notifica di {{SITENAME}}, al tuo servizio

--
Per modificare le impostazioni delle notifiche via posta elettronica, visita 
{{canonicalurl:{{#special:Preferences}}}}",
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

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'page-creation-notif-desc' => '새 문서가 만들어질 때 이메일 알림을 보냅니다',
	'page-creation-notification' => '새 문서가 만들어질 때 내게 이메일 보내기',
	'page-creation-email-subject' => '새 문서 - $3 사용자가 $2에 만든 $1',
	'page-creation-email-body' => '$1님,

{{SITENAME}}에서 $3 사용자가 $2 새 문서를 {{Gender:$3|만들었음}}을 알립니다.

다음에서 볼 수 있습니다
$4

문서의 텍스트는 다음과 같습니다:
$5

친절한 {{SITENAME}} 알림 시스템입니다.

이메일 알림 설정을 바꾸려면 다음을 방문하세요
{{canonicalurl:{{#special:Preferences}}}}',
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
	'page-creation-notification' => 'Mir eng Mail schécke wann nei Säiten ugeluecht ginn', # Fuzzy
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
	'page-creation-email-body' => 'Beste $1,

Dit is een melding van {{SITENAME}}. De pagina $2 is aangemaakt door {{GENDER:$3|gebruiker}} $3.

U kunt deze bekijken via de volgende koppeling:
$4

De tekst van de pagina is:
$5

Het meldingensysteeem van {{SITENAME}}.

Op {{canonicalurl:{{#special:Preferences}}}} kunt u uw instellingen voor meldingen aanpassen.',
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

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'page-creation-notif-desc' => 'Відправляє повідомлення на електронну пошту, коли створюються нові сторінки',
	'page-creation-notification' => 'Написати мені на електронну пошту, коли створюється нова сторінка',
	'page-creation-email-subject' => '$3 створив нову сторінку у $2 — $1',
	'page-creation-email-body' => 'Шановний $1,

Це сповіщення з проекту {{SITENAME}} про те, що було {{Gender:$3|створено}} нову сторінку $2 користувачем $3.

Ви можете переглянути її
$4

Текст сторінки:
$5

Щиро Ваша, система сповіщення {{SITENAME}}.

Щоб змінити налаштування e-mail сповіщень, зайдіть на 
{{canonicalurl:{{#special:Preferences}}}}',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'page-creation-notif-desc' => '当创建新页面时发送电子邮件通知',
	'page-creation-notification' => '当创建了一个新页面时发电子邮件给我',
	'page-creation-email-subject' => '新的页面 - $1 由 $3 创建在 $2',
	'page-creation-email-body' => '您好 $1，

本通知来自 {{SITENAME}}，一个新页面 $2 已被{{Gender:$3|创建}}由用户 $3。

您可以看到它在
$4

该页面的文本是：
$5

您的友好的{{SITENAME}}通知系统。

要更改您的电子邮件通知设置，请访问
{{canonicalurl:{{#special:Preferences}}}}',
);
