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
 * $Header: /cvsroot/vtigercrm/vtiger_crm/modules/Quotes/language/en_us.lang.php,v 1.3 2005/05/30 12:35:36 crouchingtiger Exp $
 * Description:  Defines the English language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Tarjous',
'LBL_MODULE_TITLE'=>'Tarjous: Pääsivu',
'LBL_SEARCH_FORM_TITLE'=>'Tarjousten haku',
'LBL_LIST_FORM_TITLE'=>'Tarjouslista',
'LBL_NEW_FORM_TITLE'=>'Uusi tarjous',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Jäsen',

'LBL_LIST_ACCOUNT_NAME'=>'Asiakas nimi',
'LBL_RELATED_PRODUCTS'=>'Tilausrivi',
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
'LBL_PHONE'=>'Puhelin:',
'LBL_WEBSITE'=>'Kotisivu:',
'LBL_FAX'=>'Faksi:',
'LBL_TICKER_SYMBOL'=>'Yhtiön tunnus (pörssi):',
'LBL_OTHER_PHONE'=>'Muu puhelin:',
'LBL_ANY_PHONE'=>'Puhelin:',
'LBL_MEMBER_OF'=>'Jäsen:',
'LBL_EMAIL'=>'Sähköposti:',
'LBL_EMPLOYEES'=>'Työntekijöitä:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Muu sähköposti:',
'LBL_ANY_EMAIL'=>'Sähköposti:',
'LBL_OWNERSHIP'=>'Omistaja:',
'LBL_RATING'=>'Verotus:',
'LBL_INDUSTRY'=>'Toimiala:',
'LBL_SIC_CODE'=>'Y-tunnus (ilman viivaa):',
'LBL_TYPE'=>'Tyyppi:',
'LBL_ANNUAL_REVENUE'=>'Vuotuinen liikevaihto:',
'LBL_ADDRESS_INFORMATION'=>'Osoitetiedot',
'LBL_Quote_INFORMATION'=>'Yritys',
'LBL_CUSTOM_INFORMATION'=>'Muut tiedot',
'LBL_BILLING_ADDRESS'=>'Laskutusosoite:',
'LBL_SHIPPING_ADDRESS'=>'Toimitusosoite:',
'LBL_ANY_ADDRESS'=>'Osoite:',
'LBL_CITY'=>'Kaupunki:',
'LBL_STATE'=>'Lääni:',
'LBL_POSTAL_CODE'=>'Postinumero:',
'LBL_COUNTRY'=>'Maa:',
'LBL_DESCRIPTION_INFORMATION'=>'Kuvauken tiedot',
'LBL_DESCRIPTION'=>'Kuvaus:',
'NTC_COPY_BILLING_ADDRESS'=>'Kopioi laskutusosoite toimitusosoitteeksi',
'NTC_COPY_SHIPPING_ADDRESS'=>'Kopioi toimitusosoite laskutusosoitteeksi',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'Mahdollinen kaksoiskappale',
'MSG_DUPLICATE' => 'Tämän asiakkaan tekeminen luo mahdollisesti kaksoiskappaleen. Voit valita asiakkaan alla olevasta listasta tai paina Luo uusi Asiakas-painiketta luodaksesi asiakas näillä tiedoilla.',

'LBL_INVITEE'=>'Yhteystiedot',
'ERR_DELETE_RECORD'=>"A record number must be specified to delete the account.",

'LBL_SELECT_ACCOUNT'=>'Valitse yritys',
'LBL_GENERAL_INFORMATION'=>'Yleiset tiedot',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Uusi mahdollisuus',
'LBL_POTENTIAL_TITLE'=>'Mahdollisuudet',

'LBL_NEW_TASK'=>'Uusi tehtävä',
'LBL_TASK_TITLE'=>'Tehtävät',
'LBL_NEW_CALL'=>'Uusi puhelinneuvottelu',
'LBL_CALL_TITLE'=>'Puhelinneuvottelu',
'LBL_NEW_MEETING'=>'Uusi tapaaminen',
'LBL_MEETING_TITLE'=>'Tapaamiset',
'LBL_NEW_EMAIL'=>'Uusi sähköposti',
'LBL_EMAIL_TITLE'=>'Sähköpostit',
'LBL_NEW_CONTACT'=>'Uusi yhteyshenkilö',
'LBL_CONTACT_TITLE'=>'Yhteyshenkilö',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Kaikki',
'LBL_PROSPECT'=>'Prospekti',
'LBL_INVESTOR'=>'Sijoittaja',
'LBL_RESELLER'=>'Jälleenmyyjä',
'LBL_PARTNER'=>'Yhtiökumppani',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Asiakaan työkalut',
//Added for 4GA
'Subject'=>'Aihe',
'Potential Name'=>'Mahdollisuuden nimi',
'Quote Stage'=>'Tarjouksen tila',
'Valid Till'=>'Voimassaoloaika',
'Team'=>'Tiimi',
'Contact Name'=>'Yhteyshenkilö',
'Currency'=>'Valuutta',
'Carrier'=>'Rahti',
'Sub Total'=>'Yhteensä',
'Shipping'=>'Toimittaja',
'Inventory Manager'=>'Varastopäällikkö',
'Type'=>'Tyyppi',
'Tax'=>'Vero',
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
'Created Time'=>'Luontiaika',
'Modified Time'=>'Muokkausaika',
'Description'=>'Kuvaus',
'Account Name'=>'Yritys',
'Terms & Conditions'=>'Toimitusehdot',
//Quote Info
'LBL_QUOTE_INFORMATION'=>'Tarjouksen tiedot',
'LBL_TERMS_INFORMATION'=>'Toimitusehdot',
'LBL_QUOTE'=>'Tarjous:',

//Added during 4.2 release
'LBL_SUBJECT'=>'Aihe:',
'LBL_POTENTIAL_NAME'=>'Mahdollisuuden nimi:',
'LBL_ACCOUNT_NAME'=>'Yritys:',
'LBL_QUOTE_STAGE'=>'Tila:',
'LBL_MY_TOP_QUOTE'=>'Tärkeimmät tarjoukseni',
//'Quote ID'=>'Tarjouksen tunnus',
'Quote'=>'Tarjous',

//Added for existing Picklist Entries

'Created'=>'Luotu',
'Delivered'=>'Toimitettu',
'Reviewed'=>'Katselmus',
'Accepted'=>'Hyväksytty',
'Rejected'=>'Peruutettu',

'FedEx'=>'Posti',
'UPS'=>'Rahti',
'USPS'=>'Internet',
'DHL'=>'DHL',
'BlueDart'=>'Nouto',
'Sales Tax'=>'Myynti vero',                       

//Added for Reports (5.0.4)
'Tax Type'=>'Veron muoto',
'Discount Percent'=>'Alennusprosentti',
'Discount Amount'=>'Alennussumma',
'Terms & Conditions'=>'Toimitusehdot',
'Adjustment'=>'Tarkennukset',
'S&H Amount'=>'Käsittelykulut',


'Quote No'=>'Tarjouksen Nro',
);

?>
