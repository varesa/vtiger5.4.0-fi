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
 * $Header: /cvsroot/vtigercrm/vtiger_crm/modules/SalesOrder/language/en_us.lang.php,v 1.2 2005/12/27 12:28:44 saraj Exp $
 * Description:  Defines the English language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Myyntitilaukset',
'LBL_SO_MODULE_NAME'=>'Myyntitilaukset',
'LBL_RELATED_PRODUCTS'=>'Tilausrivi',
'LBL_MODULE_TITLE'=>'Myyntitilaukset: Pääsivu',
'LBL_SEARCH_FORM_TITLE'=>'Tilausten haku',
'LBL_LIST_SO_FORM_TITLE'=>'Myyntitilauslista',
'LBL_NEW_FORM_SO_TITLE'=>'Uusi myyntitilaus',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Jäsen organisaatio',

'LBL_LIST_ACCOUNT_NAME'=>'Yritys',
'LBL_LIST_CITY'=>'Kaupunki',
'LBL_LIST_WEBSITE'=>'Kotisivu',
'LBL_LIST_STATE'=>'Lääni',
'LBL_LIST_PHONE'=>'Puhelin',
'LBL_LIST_EMAIL_ADDRESS'=>'Sähköposti',
'LBL_LIST_CONTACT_NAME'=>'Yhteyshenkilö',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Yritys:',
'LBL_ACCOUNT_NAME'=>'Yritys:',
'LBL_PHONE'=>'Puhelin:',
'LBL_WEBSITE'=>'Kotisivu:',
'LBL_FAX'=>'Faksi:',
'LBL_TICKER_SYMBOL'=>'Yhtiötunnus (pörssi):',
'LBL_OTHER_PHONE'=>'Muu puhelin:',
'LBL_ANY_PHONE'=>'Mikä tahansa puhelin:',
'LBL_MEMBER_OF'=>'Jäsen:',
'LBL_EMAIL'=>'Sähköposti:',
'LBL_EMPLOYEES'=>'Työntekijöitä:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Muu sähköposti:',
'LBL_ANY_EMAIL'=>'Sähköposti:',
'LBL_OWNERSHIP'=>'Omistaja:',
'LBL_RATING'=>'Arviointi:',
'LBL_INDUSTRY'=>'Toimiala:',
'LBL_SIC_CODE'=>'Y-tunnus (ilman viivaa):',
'LBL_TYPE'=>'Tyyppi:',
'LBL_ANNUAL_REVENUE'=>'Vuotuinen liikevaihto:',
'LBL_ADDRESS_INFORMATION'=>'Osoite tiedot',
'LBL_Quote_INFORMATION'=>'Asiakastiedot',
'LBL_CUSTOM_INFORMATION'=>'Muut tiedot',
'LBL_BILLING_ADDRESS'=>'Laskutusosoite:',
'LBL_SHIPPING_ADDRESS'=>'Toimitusosoite:',
'LBL_ANY_ADDRESS'=>'Osoite:',
'LBL_CITY'=>'Kaupunki:',
'LBL_STATE'=>'Lääni:',
'LBL_POSTAL_CODE'=>'Postinumero:',
'LBL_COUNTRY'=>'Maa:',
'LBL_DESCRIPTION_INFORMATION'=>'Kuvauksen tiedot',
'LBL_TERMS_INFORMATION'=>'Toimitusehdot',
'LBL_DESCRIPTION'=>'Kuvaus:',
'NTC_COPY_BILLING_ADDRESS'=>'Kopioi laskutusosoite toimitusosoitteeksi',
'NTC_COPY_SHIPPING_ADDRESS'=>'Kopioi toimitusosoite laskutusosoitteeksi',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'Mahdollinen kaksoiskappale',
'MSG_DUPLICATE' => 'Tämän asiakkaan tekeminen voi luoda kaksoiskappaleen. Valitse asiakas alla olevasta listasta tai paina Luo uusi Asiakas-painiketta jatkaaksesi asiakkaan luomista näillä tiedoilla.',

'LBL_INVITEE'=>'Yhteystiedot',
'ERR_DELETE_RECORD'=>"A record number must be specified to delete the account.",

'LBL_SELECT_ACCOUNT'=>'Valitse asiakas',
'LBL_GENERAL_INFORMATION'=>'Yleiset tiedot',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Uusi mahdollisuus',
'LBL_POTENTIAL_TITLE'=>'Mahdollisuudet',

'LBL_NEW_TASK'=>'Uusi tehtävä',
'LBL_TASK_TITLE'=>'Tehtävät',
'LBL_NEW_CALL'=>'Uusi puhelinneuvottelu',
'LBL_CALL_TITLE'=>'Puhelinneuvottelut',
'LBL_NEW_MEETING'=>'Uusi tapaaminen',
'LBL_MEETING_TITLE'=>'Tapaamiset',
'LBL_NEW_EMAIL'=>'Uusi sähköposti',
'LBL_EMAIL_TITLE'=>'Sähköpostit',
'LBL_NEW_CONTACT'=>'Uusi yhteyshenkilö',
'LBL_CONTACT_TITLE'=>'Yhteystiedot',

//Added fields after RC1 - Release
'LBL_ALL'=>'Kaikki',
'LBL_PROSPECT'=>'Prospekti',
'LBL_INVESTOR'=>'Sijoittaja',
'LBL_RESELLER'=>'Jälleenmyyjä',
'LBL_PARTNER'=>'Yhtiökumppani',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Asiakkaan työkalut',
//Added for 4GA
'Subject'=>'Otsikko',
'Quote Name'=>'Tarjous',
'Vendor Name'=>'Toimittaja',
'Requisition No'=>'Tilauksen numero',
'Tracking Number'=>'Seurantanumero',
'Contact Name'=>'Yhteyshenkilö',
'Due Date'=>'Eräpäivä',
'Carrier'=>'Rahti',
'Type'=>'Tyyppi',
'Sales Tax'=>'Myyntivero',
'Sales Commission'=>'Myyntiproviisio',
'Excise Duty'=>'Valmistusvero',
'Total'=>'Yhteensä',
'Product Name'=>'Tuotenimi',
'Assigned To'=>'Ohjattu',
'Billing Address'=>'Laskutusosoite',
'Shipping Address'=>'Toimitusosoite',
'Billing City'=>'Kaupunki',
'Billing State'=>'Lääni',
'Billing Code'=>'Postinumero',
'Billing Country'=>'Maa',
'Billing Po Box'=>'Postilokero',
'Shipping Po Box'=>' Postilokero',
'Shipping City'=>' Kaupunki',
'Shipping State'=>' Lääni',
'Shipping Code'=>' Postinumero',
'Shipping Country'=>' Maa',
'City'=>'Kaupunki',
'State'=>'Lääni',
'Code'=>'Postinumero',
'Country'=>'Maa',
'Created Time'=>'Luontiaika',
'Modified Time'=>'Muokkausaika',
'Description'=>'Kuvaus',
'Potential Name'=>'Mahdollisuuden nimi',
'Customer No'=>'Asiakasnumero',
'Purchase Order'=>'Ostotilaus',
'Vendor Terms'=>'Myyntiehdot',
'Pending'=>'Kuluessa',
'Account Name'=>'Yritys',
'Terms & Conditions'=>'Toimitusehdot',
//Quote Info
'LBL_SO_INFORMATION'=>'Myyntitilauksen tiedot',
'LBL_SO'=>'Myyntitilaus:',

 //Added for 5.0 GA
'LBL_SO_FORM_TITLE'=>'Myynnit',
'LBL_SUBJECT_TITLE'=>'Otsikot',
'LBL_VENDOR_NAME_TITLE'=>'Myyjän nimi',
'LBL_TRACKING_NO_TITLE'=>'Seuranta numero:',
'LBL_SO_SEARCH_TITLE'=>'Myyntitilausten haku',
'LBL_QUOTE_NAME_TITLE'=>'Tarjouksen nimi',
'Order No'=>'Tilauksen numero',
'LBL_MY_TOP_SO'=>'Tärkeimmät myyntitilaukset',
'Status'=>'Tilauksen tila',
'SalesOrder'=>'Myyntitilaus',

//Added for existing Picklist Entries

'FedEx'=>'Posti',
'UPS'=>'Rahti',
'USPS'=>'Internet',
'DHL'=>'DHL',
'BlueDart'=>'Nouto',

'Created'=>'Luotu',
'Approved'=>'Vahvistettu',
'Delivered'=>'Toimitettu',
'Cancelled'=>'Peruttu',
'Adjustment'=>'Asetus',
'Sub Total'=>'Välisumma',

//Added for Reports (5.0.4)
'Tax Type'=>'Veron muoto',
'Discount Percent'=>'Alennusprosentti',
'Discount Amount'=>'Alennussumma',
'Terms & Conditions'=>'Toimitusehdot',
'S&H Amount'=>'Käsittelykulut',

//Added after 5.0.4 GA
'SalesOrder No'=>'Myyntitilausten Nro',

'Recurring Invoice Information' => 'Toistuvan laskun tiedot',
'Enable Recurring' => 'Salli toistuva',
'Frequency' => 'Toiston taajuus',
'Start Period' => 'Aloitus jakso',
'End Period' => 'Päättymis jakso',
'Payment Duration' => 'Maksun kesto',
'Invoice Status' => 'Laskun tila',

);

?>
