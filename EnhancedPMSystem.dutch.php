<?php
/**********************************************************************************
* EnhancedPMSystem.english.php - Dutch language file of the Split Forum Mod, created by @rjen
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
$txt['quote_to_all'] = 'Allen citeren';
$txt['pm_unread'] = 'Ongelezen';
$txt['pm_msg_label_title'] = 'Verplaats Bericht';
$txt['pm_msg_label_apply'] = 'Verplaats naar';
$txt['pm_msg_label_remove'] = 'Deze Map';
$txt['pm_sel_label_title'] = 'Verplaats Geslecteerde';
$txt['pm_manage_labels'] = 'Beheer Mappen';
$txt['pm_labels_delete'] = 'Weet je zeker dat je de geselecteerde mappen wilt verwijderen?';
$txt['pm_labels_desc'] = 'Hier kun je mappen toevoegen, wijzigen en verwijderen in je persoonlijke berichten.';
$txt['pm_label_add_new'] = 'Maak nieuwe Map';
$txt['pm_label_name'] = 'Mapnaam';
$txt['pm_labels_no_exist'] = 'Je hebt nog geen mappen aangemaakt!';
$txt['pm_labels'] = 'Mappen';
$txt['pm_search_choose_label'] = 'Kies een map om in te zoeken, of zoek in alle mappen';
$txt['pm_email'] = 'Je hebt zojuist een persoonlijk bericht ontvangen van SENDER op ' . $context['forum_name'] . '.' . "\n\n" . 'BELANGRIJK: Onthoud dat dit alleen maar een notificatie is. Reageer niet op deze e-mail!' . "\n\n" . 'Bezoek het forum op ' . $GLOBALS['scripturl'] . '?action=pm om het bericht te lezen.';
$txt['unread_items'] = 'Postvak uit';
$txt['unsend_item'] = 'Bericht intrekken';
$txt['pm_rule_label'] = 'Verplaats bericht naar map';
$txt['pm_rule_sel_label'] = 'Selecteer Map';

$txt['pm_edit'] = 'Wijzig';
$txt['edit_message'] = 'Wijzig Bericht';
$txt['pm_unsent_denied'] = 'Je kunt een bericht niet intrekken.';
$txt['pm_unsent'] = 'Je bericht is succesvol ingetrokken voor alle ontvangers.';
$txt['pm_unsent_some'] = 'Je bericht is succesvol ingetrokken voor alle ontvangers die het bericht nog niet gelezen hebben.';
$txt['pm_edited'] = 'Je bericht is gewijzigd en verstuurd naar alle nieuwe ontvangers.';
$txt['pm_no_edit'] = 'Het is niet mogelijk de PM te wijzigen omdat minstens 1 ontvanger het bericht al gelezen heeft.';
$txt['pm_send_blocked'] = 'Je mag pas PMs versturen 24 uur na activatie van je account.';
$txt['unsend_message'] = 'Trek dit bericht in voor alle ontvangers die het nog niet gelezen hebben';
$txt['pm_search_what'] = 'Zoek in groep';
$txt['pm_search_to_user'] = 'Aan gebruiker';

$txt['pm_actions_filter_by_label'] = 'Filter op Map';
$txt['pm_current_label'] = 'Map';
$txt['pm_readable_label'] = 'verplaats naar map &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Met Snel Antwoorden kun je een PB schrijven in een conversatie scherm zonder een nieuwe pagina te laden. Je kunt gewoon bulletin board code en smileys gebruiken zoals in een normale PB.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Enhanced PMs';
$txt['eps_title'] = 'Enhanced PM System';
$txt['eps_new_version'] = 'Enhanced PM System mod versie %s is beschikbaar als download!';
$txt['eps_no_update'] = 'Jouw installatie van Enhanced PM System mod is up to date!';
$txt['eps_allow_unsend'] = 'Ledengroepen die ongelezen berichten mogen intrekken';
$txt['eps_allow_edit'] = 'Ledengroepen die ongelezen berichten mogen wijzigen';
$txt['eps_block_1st_day'] = 'Ledengroepen die op de eerste dag nog geen PB mogen versturen';
$txt['eps_pm_view_switch'] = 'Sta gebruikers toe om PB views anders dan conversatie modus te kiezen';
$txt['eps_send_pm_while_muted'] = 'Sta muted leden toe om PBs te sturen';
$txt['eps_allow_block_admin'] = 'Sta leden toe om PBs van Admins te blokkeren in PB regels';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NIET</strong> toegestaan om Persoonlijke Berichten te sturen op de eerste dag na registratie';
$txt['permissionhelp_eps_block_1st_day'] = 'Met deze setting wordt het leden van de groep net toegestaan om persoonlijke berichten te sturen in de eerste 24 uur van hun lidmaatschap.  Vereist de  \'Lees persoonlijke berichten\' permissie.';
$txt['permissionhelp_eps_allow_edit'] = 'Met deze setting wordt het leden van deze groep toegestaan om verzonden berichten te wijzigen zolang deze nog niet gelezen zijn door enige ontvanger. Vereist de  \'Lees persoonlijke berichten\' permissie.';
$txt['permissionname_eps_allow_edit'] = 'Toegestaan ongelezen PBs te wijzigen';
$txt['permissionhelp_eps_allow_unsend'] = 'Met deze setting wordt het leden van deze groep toegestaan om verzonden berichten in te trekken of te verwijderen zolang deze nog niet gelezen zijn door enige ontvanger. Vereist de  \'Lees persoonlijke berichten\' permissie.';
$txt['permissionname_eps_allow_unsend'] = 'Toegestaan ongelezen PBs in te trekken';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Gebruik Snel Antwoorden op PB scherm:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'niet tonen';
	$txt['display_quick_reply2'] = 'tonen, standaard uit';
	$txt['display_quick_reply3'] = 'tonen, standaard aan';
}
//$txt['recent_pms_at_top'] = 'Show most recent conversation at top of list.';
//$txt['recent_msgs_at_top'] = 'Show most recent personal messages at top.';

?>