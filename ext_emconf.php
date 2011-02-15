<?php

########################################################################
# Extension Manager/Repository config file for ext "powermail_optin".
#
# Auto generated 06-09-2010 22:50
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Powermail double opt-in',
	'description' => 'Double opt-in for powermail forms. Could be used for admin or user check. DB entries are hidden up to this moment, when user clicks a link with a secure hash in a generated mail...',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Alex Kellner',
	'author_email' => 'alexander.kellner@in2code.de',
	'author_company' => 'in2code',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:12:"ext_icon.gif";s:4:"3905";s:17:"ext_localconf.php";s:4:"ee8a";s:14:"ext_tables.php";s:4:"b87c";s:14:"ext_tables.sql";s:4:"f8c4";s:28:"ext_typoscript_constants.txt";s:4:"2a69";s:24:"ext_typoscript_setup.txt";s:4:"7735";s:16:"locallang_db.xml";s:4:"d5ed";s:14:"doc/manual.sxw";s:4:"36b6";s:40:"lib/class.tx_powermail_optin_confirm.php";s:4:"1fc8";s:36:"lib/class.tx_powermail_optin_div.php";s:4:"c7da";s:47:"lib/class.tx_powermail_optin_dynamicmarkers.php";s:4:"3e92";s:46:"lib/class.tx_powermail_optin_externdbentry.php";s:4:"2a29";s:40:"lib/class.tx_powermail_optin_session.php";s:4:"6bc0";s:39:"lib/class.tx_powermail_optin_submit.php";s:4:"dd54";s:17:"lib/locallang.xml";s:4:"420c";s:37:"templates/tmpl_confirmationemail.html";s:4:"1074";s:39:"templates/tmpl_confirmationmessage.html";s:4:"6157";}',
	'suggests' => array(
	),
);

?>