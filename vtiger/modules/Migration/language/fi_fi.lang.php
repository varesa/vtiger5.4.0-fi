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


$mod_strings = Array(
'LBL_MIGRATE_INFO'=>'Syötä siirrettävän tiedon arvot<b><i> Lähde </i></b> kohde <b><i> nykynen (Viimeisin) vTigerCRM </i></b>',
'LBL_CURRENT_VT_MYSQL_EXIST'=>'Nykyisen vTigerCRM:n MySQL sijaitsee',
'LBL_THIS_MACHINE'=>'Tällä koneella',
'LBL_DIFFERENT_MACHINE'=>'Eri koneella',
'LBL_CURRENT_VT_MYSQL_PATH'=>'Nykyisen vTigerCRM:n MySQL polku',
'LBL_SOURCE_VT_MYSQL_DUMPFILE'=>'vTigerCRM <b>Lähde</b> pakettitiedoston nimi (dump)',
'LBL_NOTE_TITLE'=>'Huomioi:',
'LBL_NOTES_LIST1'=>'Jos nykyinen MySQL sijaitsee samalla koneella, niin syötä MySQL polku (tai) tai jos sinulla on, niin voit syöttää pakettitiedoston (dump).',
'LBL_NOTES_LIST2'=>'Jos nykyinen MySQL sijaitsee eri koneella, niin syötä lähde pakettitiedoston (dump) nimi ja koko polku.',
'LBL_NOTES_DUMP_PROCESS'=>'Luodaksesi tietokannasta pakettitiedosto (dump) suorita seuraava komento <b>mysql/bin</b> hakemistossa
			   <br><b>mysqldump --user="mysql_käyttäjätunnuksesi"  --password="mysql_salasanasi" -h "hostname"  --port="mysql_porttisi" "tietokantasi_nimi" > pakettitiedoston_nimi</b>
			   <br>add <b>SET FOREIGN_KEY_CHECKS = 0;</b> -- at the start of the dump file
			   <br>add <b>SET FOREIGN_KEY_CHECKS = 1;</b> -- at the end of the dump file',
'LBL_NOTES_LIST3'=>'Anna MySQL polkusi, esim <b>/home/crm/vTigerCRM/mysql</b>',
'LBL_NOTES_LIST4'=>'Anna pakettitiedostonnimi ja koko tiedostopolku kuten <b>/home/vTigerCRM/pakettitiedosto_dump.txt</b>',

'LBL_CURRENT_MYSQL_PATH_FOUND'=>'Nykyinen MySQL asennuspolku löydetty.',
'LBL_SOURCE_HOST_NAME'=>'Lähde palvelimen nimi:',
'LBL_SOURCE_MYSQL_PORT_NO'=>'Lähde MySql portin nro:',
'LBL_SOURCE_MYSQL_USER_NAME'=>'Lähde MySql käyttäjätunnus:',
'LBL_SOURCE_MYSQL_PASSWORD'=>'Lähde MySql salasana:',
'LBL_SOURCE_DB_NAME'=>'Lähde tietokannan nimi:',
'LBL_MIGRATE'=>'Siirrä nykyiseen versioon',
//Added after 5 Beta 
'LBL_UPGRADE_VTIGER'=>'Päivitä vTiger CRM tietokanta',
'LBL_UPGRADE_FROM_VTIGER_423'=>'Päivitä tietokanta vTiger CRM 4.2.3 -> 5.0.0',
'LBL_SETTINGS'=>'Asetukset',
'LBL_STEP'=>'Vaihe',
'LBL_SELECT_SOURCE'=>'Valitse lähde',
'LBL_STEP1_DESC'=>'Aloittaaksesi tietojen tuonnin, sinun tarvitsee määritellä missä muodossa vanhat tiedot ovat saatavilla',
'LBL_RADIO_BUTTON1_TEXT'=>'Minulla on pääsy vTiger CRM käytössä olevaan tietokantaan',
'LBL_RADIO_BUTTON1_DESC'=>'Tämä tarkoittaa että sinulla on pääsy palvelimelle mihin tietokanta on talletettu (osoite, tietokannan tunnus ja salasana). Sekä paikallinen, että etäjärjestelmä tukevat tätä tapaa. Katso ohjeistuksesta apua.',
'LBL_RADIO_BUTTON2_TEXT'=>'Minulla on pääsy vTiger CRM pakattuun tietokantaan (MySQL datadump)',
'LBL_RADIO_BUTTON2_DESC'=>'Tämä tarkoittaa että sinulla on pakattu tietokanta (dump) paikallisella koneella jolta suoritat päivittämistä. Et voi tuoda pakettia muilta koneilta (etähallitta palvelin). Katso ohjeistuksesta apua.',
'LBL_RADIO_BUTTON3_TEXT'=>'Minulla on uusi tietokanta 4.2.3 sisältöineen',
'LBL_RADIO_BUTTON3_DESC'=>'Tämä tarkoittaa että sinulla on vTiger CRM 4.2.3 tietokanta, ja sen lisäksi palvelimen nimi, käyttäjätunnus sekä salasana. Et voi tuoda pakettia muilta koneilta (etähallitta palvelin).',

'LBL_HOST_DB_ACCESS_DETAILS'=>'Palvelimen tietokannan asetukset',
'LBL_MYSQL_HOST_NAME_IP'=>'MySQL palvelimen nimi tai IP numero : ',
'LBL_MYSQL_PORT'=>'MySQL Portin numero : ',
'LBL_MYSQL_USER_NAME'=>'MySql käyttäjätunnus : ',
'LBL_MYSQL_PASSWORD'=>'MySql salasana : ',
'LBL_DB_NAME'=>'Tietokannan nimi : ',

'LBL_LOCATE_DB_DUMP_FILE'=>'Etsi tietokannan paketti (dump)',
'LBL_DUMP_FILE_LOCATION'=>'Paketti (dump) sijaitsee : ',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">Älä määrittele 4.2.3 tietokannan määreitä. Tämä valinta vaikuttaa määriteltyyn tietokantaan suoraan.</font>
<br>On vahvasti suositeltavaa että toimit seuraavalla tavalla.
<br>1. Ota tietokantapaketti (dump) 4.2.3 tietokannasta
<br>2. Luo uusi tietokanta (Parempi luoda uusi tietokanta palvelimelle missä sinun vTiger CRM 5.0 on käytössä.)
<br>3. Liitä tämä 4.2.3 paketti (dump) uuteen tietokantaan.
<br>Anna nyt tämän tietokannan oikeudet asennukseesi. Tämä päivitys muokkaa tietokantaa niin, että se on yhteensopiva 5.0 kanssa.
Voit vaihtaa tämän uuden tietokannan tiedot config.inc.php tiedostoon, jotta se käyttäisi tätä tietokantaa esim., $dbconfig[\'tk_nimi\'] = \'uusi_tk_nimi\';',

'LBL_ENTER_MYSQL_SERVER_PATH'=>'Anna MySQL palvelimen polku',
'LBL_SERVER_PATH_DESC'=>'MySQL polku on palvelimella esim. <b>/home/5beta/vTigerCRM5_beta/mysql/bin</b> tai <b>c:\Program Files\mysql\bin</b>',
'LBL_MYSQL_SERVER_PATH'=>'MySQL palvelimen polku : ',
'LBL_MIGRATE_BUTTON'=>'Päivitä',
'LBL_CANCEL_BUTTON'=>'Peruuta',
'LBL_UPGRADE_FROM_VTIGER_5X'=>'Päivittää vTiger CRM 5.x tietokannan seuraavaan versioon',
'LBL_PATCH_OR_MIGRATION'=>'sinun pitää määritellä lähdetietokannan versio (Patch päivitys tai Migration)',
//Added for java script alerts
'ENTER_SOURCE_HOST' => 'Anna lähteen nimi tai ip',
'ENTER_SOURCE_MYSQL_PORT' => 'Anna lähteen MySql portti',
'ENTER_SOURCE_MYSQL_USER' => 'Anna lähteen MySql käyttäjätunnus',
'ENTER_SOURCE_DATABASE' => 'Anna lähteen MySql tietokannan nimi',
'ENTER_SOURCE_MYSQL_DUMP' => 'Amma MySQL Dump tiedoston nimi',
'ENTER_HOST' => 'Anna nimi tai ip',
'ENTER_MYSQL_PORT' => 'Anna MySql portti',
'ENTER_MYSQL_USER' => 'Anna MySql käyttäjätunnus',
'ENTER_DATABASE' => 'Anna tietokannan nimi',
'SELECT_ANYONE_OPTION' => 'Valitse joku vaihtoehdoista',
'ENTER_CORRECT_MYSQL_PATH' => 'Anna MySQL hakemiston polku',

);






?>
