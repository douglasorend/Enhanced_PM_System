<?php
/**********************************************************************************
* EnhancedPMSystem.english.php - English language file of the Split Forum Mod
*********************************************************************************
* This program is distributed in the hope that it is and will be useful, but
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY
* or FITNESS FOR A PARTICULAR PURPOSE.
*********************************************************************************
* This work is licensed under a Creative Commons Attribution 3.0 Unported License
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

// Replacement language strings for the Enhanced PM System:
//==================================================================
$txt['quote_to_all'] = 'Quote to All';
$txt['pm_unread'] = 'Unread';
$txt['pm_msg_label_title'] = 'Move Message';
$txt['pm_msg_label_apply'] = 'Move to';
$txt['pm_msg_label_remove'] = 'Current Folder';
$txt['pm_sel_label_title'] = 'Move Selected';
$txt['pm_manage_labels'] = 'Manage Folders';
$txt['pm_labels_delete'] = 'Are you sure you wish to delete the selected folders?';
$txt['pm_labels_desc'] = 'From here you can add, edit and delete the folders used in your personal message center.';
$txt['pm_label_add_new'] = 'Add New Folder';
$txt['pm_label_name'] = 'Folder Name';
$txt['pm_labels_no_exist'] = 'You currently have no folders setup!';
$txt['pm_labels'] = 'Folders';
$txt['pm_search_choose_label'] = 'Choose folders to search by, or search all';
$txt['pm_email'] = 'You have just been sent a personal message by SENDER on ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANT: Remember, this is just a notification. Please do not reply to this email.';
$txt['unread_items'] = 'Outbox';
$txt['unsend_item'] = 'Unsend';
$txt['pm_rule_label'] = 'Move message to folder';
$txt['pm_rule_sel_label'] = 'Select Folder';

$txt['pm_edit'] = 'Edit';
$txt['edit_message'] = 'Edit Message';
$txt['pm_unsent_denied'] = 'You cannot unsend a message.';
$txt['pm_unsent'] = 'Your message has been unsent from all recipients successfully.';
$txt['pm_unsent_some'] = 'Your message has been unsent from all recipients who haven\'t read it successfully.';
$txt['pm_edited'] = 'Your message has been edited and all new recipients have been sent emails.';
$txt['pm_no_edit'] = 'Unable to edit PM because at least one recipient has read the PM that you are wanting to edit.';
$txt['pm_send_blocked'] = 'You are not allowed to send PMs until 24 hours after account activation.';
$txt['unsend_message'] = 'Unsend this message to all recipients who haven\'t read it yet';
$txt['pm_search_what'] = 'Search group';
$txt['pm_search_to_user'] = 'To user';

$txt['pm_actions_filter_by_label'] = 'Filter By Folder';
$txt['pm_current_label'] = 'Folder';
$txt['pm_readable_label'] = 'move to folder &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'With Quick-Reply you can write a PM when viewing a conversation without loading a new page. You can still use bulletin board code and smileys as you would in a normal PM.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Enhanced PMs';
$txt['eps_title'] = 'Enhanced PM System';
$txt['eps_new_version'] = 'Enhanced PM System mod version %s is available for download!';
$txt['eps_no_update'] = 'Your install of Enhanced PM System mod is up to date!';
$txt['eps_allow_unsend'] = 'Membergroups allowed to Unsend an unread PM';
$txt['eps_allow_edit'] = 'Membergroups allowed to Edit an unread PM';
$txt['eps_block_1st_day'] = 'Membergroups that can\'t PM for the first day';
$txt['eps_pm_view_switch'] = 'Allow users to select PM views other than conversation mode?';
$txt['eps_send_pm_while_muted'] = 'Allow muted members to send PMs?';
$txt['eps_allow_block_admin'] = 'Allow members to block Admin PMs in PM rules?';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NOT</strong> allowed to PM on 1st day';
$txt['permissionhelp_eps_block_1st_day'] = 'This setting stops members of this group from sending any PMs within the 1st day (24 hours) of their membership.  Requires the \'Read personal messages\' permission.';
$txt['permissionhelp_eps_allow_edit'] = 'This setting allows members of this group to edit personal messages sent to others, as long as the message hasn\'t been read by any recipient.  Requires the \'Read personal messages\' permission.';
$txt['permissionname_eps_allow_edit'] = 'Allowed to Edit unread PMs';
$txt['permissionhelp_eps_allow_unsend'] = 'This setting allows members of this group to unsend (or delete) personal messages sent to others, as long as the message hasn\'t been read by any recipient.  Does not affect emails already sent regarding PM.  Requires the \'Read personal messages\' permission.';
$txt['permissionname_eps_allow_unsend'] = 'Allowed to Unsend unread PMs';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Use quick reply on PM display:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'don\'t show at all';
	$txt['display_quick_reply2'] = 'show, off by default';
	$txt['display_quick_reply3'] = 'show, on by default';
}
$txt['recent_pms_at_top'] = 'Show most recent conversation at top of list.';
$txt['recent_msgs_at_top'] = 'Show most recent personal messages in conversation at top.';

?>