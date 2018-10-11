<?php
global $smcFunc, $sourcedir;

// If SSI.php is in the same place as this file, and SMF isn't defined, this is being run standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');
require($sourcedir.'/Subs-Admin.php');
db_extend('packages');

// Insert forumid column into categories table to associate each category with a particular forum:
$smcFunc['db_add_column']('{db_prefix}members', 
	array('name' => 'activation_time', 'type' => 'int(10)', 'null' => 'not null', 'default' => '0'), 
	array(), 
	'ignore');

?>