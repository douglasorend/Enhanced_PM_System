<?php
/**********************************************************************************
* Subs-EnhancedPM.php - Subs of Enhanced PM System mod
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF')) 
	die('Hacking attempt...');

//================================================================================
// Hook functions to add new subsection to the Modifications Setting page:
//================================================================================
function EPS_Admin_Area(&$area)
{
	global $txt;
	loadlanguage('EnhancedPMSystem');
	$area['config']['areas']['modsettings']['subsections']['eps'] = array($txt['eps_area'], 'admin_forum');
}

function EPS_Modification_Area(&$sub)
{
	$sub['eps'] = 'EPS_Settings';
}

function EPS_Settings($return_config = false)
{
	global $context, $modSettings, $txt, $scripturl, $sourcedir;

	// Get latest version of the mod and display whether current mod is up-to-date:
	isAllowedTo('admin_forum');
	if (($file = cache_get_data('eps_mod_version', 86400)) == null)
	{
		$file = file_get_contents('http://www.xptsp.com/tools/mod_version.php?url=Enhanced_PM_System');
		cache_put_data('eps_mod_version', $file, 86400);
	}
	if (preg_match('#Enhanced_PM_System_v(.+?)\.zip#i', $file, $version))
	{
		if (isset($modSettings['eps_version']) && $version[1] > $modSettings['eps_version'])
			$context['settings_message'] = '<strong>' . sprintf($txt['eps_update'], $version[1]) . '</strong>';
		else
			$context['settings_message'] = '<strong>' . $txt['eps_no_update'] . '</strong>';
	}

	// Assemble the options available in this mod:
	$config_vars = array(
			array('title', 'eps_title'),
			array('permissions', 'eps_allow_edit'),
			array('permissions', 'eps_allow_unsend'),
			array('permissions', 'eps_block_1st_day'),
			'',
			array('check', 'eps_pm_view_switch'),
			array('check', 'eps_send_pm_while_muted'),
			array('check', 'eps_allow_block_admin'),
	);
	if ($return_config)
		return $config_vars;
		
	$context['post_url'] = $scripturl . '?action=admin;area=modsettings;sa=eps;save';
	$context['settings_title'] = $txt['eps_title'];

	// Saving?
	if (isset($_GET['save']))
	{
		checkSession();
		saveDBSettings($config_vars);
		redirectexit('action=admin;area=modsettings;sa=eps');
	}
	prepareDBSettingContext($config_vars);
}

//================================================================================
// Hook functions to add permissions to the forum:
//================================================================================
function EPS_Permissions(&$permissionGroups, &$permissionList, &$leftPermissionGroups, &$hiddenPermissions, &$relabelPermissions)
{
	$list = array();
	foreach ($permissionList['membergroup'] as $permission => $other)
	{
		$list[$permission] = $other;
		if ($permission == 'pm_send')
		{
			$list['eps_allow_edit'] = array(false, 'pm', 'use_pm_system');
			$list['eps_allow_unsend'] = array(false, 'pm', 'use_pm_system');
			$list['eps_block_1st_day'] = array(false, 'pm', 'use_pm_system');
		}
	}
	$permissionList['membergroup'] = $list;
}

function EPS_Illegal_Guest()
{
	global $context;
	$context['non_guest_permissions'] = array_merge($context['non_guest_permissions'], array(
		'eps_allow_edit',
		'eps_allow_unsend',
		'eps_block_1st_day',
	));
}

?>