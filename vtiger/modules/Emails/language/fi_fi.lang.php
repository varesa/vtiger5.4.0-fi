<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Emails/language/en_us.lang.php,v 1.17 2005/03/28 06:31:38 rank Exp $
 * Description:  Defines the English language pack for the Account module.
 ********************************************************************************/
 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'Yleiset tiedot',

'LBL_MODULE_NAME'=>'Sähköposti',
'LBL_MODULE_TITLE'=>'Sähköposti: Pääsivu',
'LBL_SEARCH_FORM_TITLE'=>'Sähköpostin haku',
'LBL_LIST_FORM_TITLE'=>'Sähköpostilista',
'LBL_NEW_FORM_TITLE'=>'Jäljitä sähköposti',

'LBL_LIST_SUBJECT'=>'Aihe',
'LBL_LIST_CONTACT'=>'Yhteystieto',
'LBL_LIST_RELATED_TO'=>'Liittyy',
'LBL_LIST_DATE'=>'Lähetyspäivä',
'LBL_LIST_TIME'=>'Lähetysaika',

'ERR_DELETE_RECORD'=>"A record number must be specified to delete the account.",
'LBL_DATE_SENT'=>'Lähetyspäivä:',
'LBL_DATE_AND_TIME'=>'Lähetys päivä ja aika:',
'LBL_DATE'=>'Lähetyspäivä:',
'LBL_TIME'=>'Lähetysaika:',
'LBL_SUBJECT'=>'Aihe:',
'LBL_BODY'=>'Viesti:',
'LBL_CONTACT_NAME'=>' Yhteystieto: ',
'LBL_EMAIL'=>'Sähköposti:', 
'LBL_DETAILVIEW_EMAIL'=>'Sähköposti', 
'LBL_COLON'=>':',
'LBL_CHK_MAIL'=>'Tarkista posti',
'LBL_COMPOSE'=>'Uusi viesti',
//Single change for 5.0.3
'LBL_SETTINGS'=>'Saapuvan sähköpostin asetukset',
'LBL_EMAIL_FOLDERS'=>'Sähköpostin hakemistot',
'LBL_INBOX'=>'Saapuneet',
'LBL_SENT_MAILS'=>'Lähetetyt',
'LBL_TRASH'=>'Roskakori',
'LBL_JUNK_MAILS'=>'Roskapostit',
'LBL_TO_LEADS'=>'Liideille',
'LBL_TO_CONTACTS'=>'Yhteystiedoille',
'LBL_TO_ACCOUNTS'=>'Asiakkaille',
'LBL_MY_MAILS'=>'Postini',
'LBL_QUAL_CONTACT'=>'Kelvolliset postit (Yhteystiedoilta)',
'LBL_MAILS'=>'Postit',
'LBL_QUALIFY_BUTTON'=>'Kelpuuta',
'LBL_REPLY_BUTTON'=>'Vastaa',
'LBL_FORWARD_BUTTON'=>'Välitä',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'Lataa liitteet',
'LBL_FROM'=>'Keneltä :',
'LBL_CC'=>'Kopio :',
'LBL_BCC'=>'Piilokopio :',

'NTC_REMOVE_INVITEE'=>'Are you sure you want to remove this recipient from the email?',
'LBL_INVITEE'=>'Vastaanottajat',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'Massapostitukset',
'LBL_ATTACHMENT'=>'Liite',
'LBL_UPLOAD'=>'Lataa',
'LBL_FILE_NAME'=>'Tiedoston nimi',
'LBL_SEND'=>'Lähetä',

'LBL_EMAIL_TEMPLATES'=>'Sähköpostin mallipohjat',
'LBL_TEMPLATE_NAME'=>'Mallipohjan nimi',
'LBL_DESCRIPTION'=>'Viesti',
'LBL_EMAIL_TEMPLATES_LIST'=>'Sähköpostin mallipohjien lista',
'LBL_EMAIL_INFORMATION'=>'Sähköpostin tiedot',




//for v4 release added
'LBL_NEW_LEAD'=>'Uusi liidi',
'LBL_LEAD_TITLE'=>'Liidit',

'LBL_NEW_PRODUCT'=>'Uusi tuote',
'LBL_PRODUCT_TITLE'=>'Tuotteet',
'LBL_NEW_CONTACT'=>'Uusi yhteystieto',
'LBL_CONTACT_TITLE'=>'Yhteystiedot',
'LBL_NEW_ACCOUNT'=>'Uusi asiakas',
'LBL_ACCOUNT_TITLE'=>'Asiakkaat',

// Added fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'Käyttäjät',
'LBL_NEW_USER'=>'Uusi käyttäjä',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'Sähköpostin työkalut',
//Added for 4GA
'Date & Time Sent'=>'Lähetys aika ja päivä',
'Sales Enity Module'=>'Myynnin kokonaisuus moduuli',
'Related To'=>'Liittyy',
'Assigned To'=>'Ohjattu',
'Subject'=>'Aihe',
'Attachment'=>'Liite',
'Description'=>'Viesti',
'Time Start'=>'Alkamisaika',
'Created Time'=>'Luontiaika',
'Modified Time'=>'Muokkausaika',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'Tarkista sähköpostipalvelimen nimi...',
'MESSAGE_CHECK_MAIL_ID'=>'Tarkista sähköpostista vastaanottajan nimi...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'Viesti on lähetetty seuraaville käyttäjille :',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Viesti on lähetetty seuraaville yhteystiedoille :',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'Sähköpostin tunnus on epäkelpo, tarkista se...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Lisää mikä tahansa käyttäjä tai yhteystieto...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>'Viesti lähetetty onnistuneesti!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Nouda posti',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Kaikki',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Tämä yhteystieto EI halua vastaanottaa sähköposteja.',
'LBL_WEBMAILS_TITLE'=>'WebMail',
'LBL_EMAILS_TITLE'=>'Sähköpostit',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Virhe yhdistäessä postipalvelimeen!<br> Tarkista Käyttäjätilini->Lista postipalvelimista -> Lista sähköpostin käyttäjätileistä',
'LBL_ALLMAILS'=>'Kaikki postit',
'LBL_TO_USERS'=>'Käyttäjille',
'LBL_TO'=>'Vastaanottaja:',
'LBL_IN_SUBJECT'=>'Otsikossa',
'LBL_IN_SENDER'=>'Aiheessa',
'LBL_IN_SUBJECT_OR_SENDER'=>'Otsikossa tai aiheessa',
'CHOSE_EMAIL'=>'Valitse viestin tunniste',
'Sender'=>'Lähettäjä',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'Saapuvan postin palvelin ei ole määritetty',
'LBL_MAILSELECT_INFO1'=>'Nämä sähköpostiosoitteet liittyvät kohteeseen.',
'LBL_MAILSELECT_INFO2'=>'Valitse sähköpostiosoite johon viesti lähetettään',
'LBL_MULTIPLE'=>'Monelle',
'LBL_COMPOSE_EMAIL'=>'Uusi viesti',
'LBL_VTIGER_EMAIL_CLIENT'=>'vTiger Webmail Client',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'vTigerCRM sähköposti',
'TITLE_COMPOSE_MAIL'=>'Uusi viesti',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'Viestiä ei voitu lähettää käyttäjälle.',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'Tarkista vastaanottajan sähköpostiosoite...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'Tarkista sähköpostiosoite',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'Viestiä ei voitu lähetää tähän osoitteeseen',
'PLEASE_CHECK_THIS_EMAILID'=>'Tarkista tämä osoite...',
'LBL_CC_EMAIL_ERROR'=>'Kopio kentässä oleva osoite ei ole kelvollinen',
'LBL_BCC_EMAIL_ERROR'=>'Piilokopio kentässä oleva osoite ei ole kelvollinen',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'Vastaanottajaa ei ole määritelty',
'LBL_CONF_MAILSERVER_ERROR'=>'Määrittele lähtevänpostipalvelimen asetukset kohdasta Asetukset ---> Lähteväpostipalvelin',
'LBL_VTIGER_EMAIL_CLIENT'=>'vTiger sähköpostiohjelma',
'LBL_MAILSELECT_INFO3'=>'You don\'t have permission to view email id(s) of the selected Record(s).',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => 'Tämä ominaisuus on käytössä vain Microsoft Internet Explorer 5.5+ käyttäjillä, 
odota päivitystä!',
'DOWNLOAD_CONFIRAMATION' => 'Haluatko ladata tiedoston?',
'LBL_PLEASE_ATTACH' => 'Valitse kelvollinen tiedosto liitteeksi ja yritä uudelleen.',
'LBL_KINDLY_UPLOAD' => 'Aseta <font color="red">upload_tmp_dir</font> muuttuja php.ini tiedostoon.',
'LBL_EXCEED_MAX' => 'Valitettavasti lataamasi tiedosto ylittää sallitut kokorajoitukset. Lataa tiedosto joka on pienempi kuin  ',
'LBL_BYTES' => ' tavua.',
'LBL_CHECK_USER_MAILID' => 'Tarkista nykyisen käyttäjän sähköpostiosoite. Sen pitää olla kelvollinen jotta voit lähettää viestejä.',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'Aktiivisuus tyyppi',
'LBL_MAILSELECT_INFO'=>'liittyy seuraavat sähköpostiosoitteet. Valitse osoite johon viesti lähetetään',
'LBL_NO_RECORDS' => 'Tietueita ei löytynyt',
'LBL_PRINT_EMAIL'=> 'Tulosta',

);

?>
