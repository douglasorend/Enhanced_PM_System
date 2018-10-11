<?php
/**********************************************************************************
* add_remove_hooks.php                                                            *
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* This file is a simplified database installer. It does what it is suppoed to.    *
**********************************************************************************/

// If we have found SSI.php and we are outside of SMF, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');
db_extend('packages');
	
// Define the hooks
$hook_functions = array(
	'integrate_admin_include' => '$sourcedir/Subs-EnhancedPM.php',
	'integrate_admin_areas' => 'EPS_Admin_Area',
	'integrate_modify_modifications' => 'EPS_Modification_Area',
	'integrate_load_permissions' => 'EPS_Permissions',
	'integrate_load_illegal_guest_permissions' => 'EPS_Illegal_Guest',
);

// Adding or removing them?
if (!empty($context['uninstalling']))
	$call = 'remove_integration_function';
else
{
	$call = 'add_integration_function';
	
	// Capture mod version number during the run of this script:
	$contents = file( dirname(__FILE__) . '/package-info.xml' );
	if (preg_match('#\<version\>(.+?)\</version\>#i', implode('', $contents), $version))
		$new['eps_version'] = $version[0];
	updateSettings( $new );
}

// Do the deed
foreach ($hook_functions as $hook => $function)
	$call($hook, $function);

if (SMF == 'SSI')
   echo 'Congratulations! You have successfully installed this mod!';

?>