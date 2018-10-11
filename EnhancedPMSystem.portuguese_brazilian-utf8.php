<?php
/**********************************************************************************
* EnhancedMPSystem.english-utf8.php - English language file of the Split Forum Mod
*********************************************************************************
* This program is distributed in the hope that it is and will be useful, but
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY
* or FITNESS FOR A PARTICULAR PURPOSE.
*********************************************************************************
* This work is licensed under a Creative Commons Attribution 3.0 Unported License
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

// Replacement language strings for the Enhanced MP System:
//==================================================================
$txt['quote_to_all'] = 'Citar a todos';
$txt['pm_unread'] = 'N&atilde;o lidas';
$txt['pm_msg_label_title'] = 'Mover Mensagem';
$txt['pm_msg_label_apply'] = 'Mover para';
$txt['pm_msg_label_remove'] = 'Pasta Atual';
$txt['pm_sel_label_title'] = 'Mover Selecionado';
$txt['pm_manage_labels'] = 'Gerenciar Pastas';
$txt['pm_labels_delete'] = 'Tem certeza de que deseja excluir as pastas selecionadas?';
$txt['pm_labels_desc'] = 'A partir daqui voc&ecirc; pode adicionar, editar e excluir as pastas usadas no seu centro de mensagens pessoais.';
$txt['pm_label_add_new'] = 'Adicionar Nova Pasta';
$txt['pm_label_name'] = 'Nome da Pasta';
$txt['pm_labels_no_exist'] = 'Voc&ecirc; est&aacute; atualmente com nenhuma configura&ccedil;&atilde;o de pastas!';
$txt['pm_labels'] = 'Pastas';
$txt['pm_search_choose_label'] = 'Escolha as pastas para pesquisar, ou pesquise em todas';
$txt['pm_email'] = 'Voc&ecirc; acaba de enviar uma mensagem pessoal com remetente do ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Lembre-se, esta &eacute; apenas uma notifica&ccedil;&atilde;o. Por favor n&atilde;o responda esse e-mail.';
$txt['unread_items'] = 'Caixa de sa&iacute;da';
$txt['unsend_item'] = 'Cancelar Envio';
$txt['pm_rule_label'] = 'Mover a mensagem para a pasta';
$txt['pm_rule_sel_label'] = 'Selecione a pasta';

$txt['pm_edit'] = 'Editar';
$txt['edit_message'] = 'Editar Mensagem';
$txt['pm_unsent_denied'] = 'Voc&ecirc; n&atilde;o pode cancelar o envio desta mensagem.';
$txt['pm_unsent'] = 'Suas mensagens foram canceladas em todos os destinat&aacute;rios com sucesso.';
$txt['pm_unsent_some'] = 'Suas mensagens foram canceladas em todos os destinat&aacute;rios que n&atilde;o leram com sucesso.';
$txt['pm_edited'] = 'Sua mensagem foi editada e e enviada a todos os destinat&aacute;rios de novos e-mails.';
$txt['pm_no_edit'] = 'N&atilde;o &eacute; poss&iacute;vel editar a MP porque pelo menos um dos destinat&aacute;rios leu a MP que voc&ecirc; quer editar.';
$txt['pm_send_blocked'] = 'N&atilde;o pode enviar MPs at&eacute; 24 horas ap&oacute;s a ativa&ccedil;&atilde;o da conta.';
$txt['unsend_message'] = 'Reenviar esta mensagem a todos os destinat&aacute;rios que n&atilde;o leram ainda';
$txt['pm_search_what'] = 'Procurar grupo';
$txt['pm_search_to_user'] = 'Para usu&aacute;rio';

$txt['pm_actions_filter_by_label'] = 'Filtrar por Pasta';
$txt['pm_current_label'] = 'Pasta';
$txt['pm_readable_label'] = 'mover para pasta &quot;{LABEL}&quot;';

// Language string for MP Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Com Resposta-rapida, voc&ecirc; pode escrever uma MP ao exibir uma conversa sem carregar uma nova p&aacute;gina.';

// Language strings for the Enhanced MP System settings page:
//==================================================================
$txt['eps_area'] = 'Melhorada MPs';
$txt['eps_title'] = 'Sistema de MP melhorada';
$txt['eps_new_version'] = 'Avan&ccedil;ado sistema de MP mod vers&atilde;o %s est&aacute; dispon&iacute;vel para download!';
$txt['eps_no_update'] = 'Sua instala&ccedil;&atilde;o do mod Sistema Melhorado de MPs est&aacute; atualizado!';
$txt['eps_allow_unsend'] = 'Grupos de Membros autorizados a cancelar uma MP n&atilde;o lida';
$txt['eps_allow_edit'] = 'Grupos Membros autorizados a editar uma MP n&atilde;o lida';
$txt['eps_block_1st_day'] = 'Grupos Membros que n&atilde;o pode enviar MP no primeiro dia';
$txt['eps_pm_view_switch'] = 'Permitir que os usu&aacute;rios selecionem modo diferente de visualizar as conversas?';
$txt['eps_send_pm_while_muted'] = 'Permitir que os membros sejam silenciados para enviar MPs?';
$txt['eps_allow_block_admin'] = 'Permitir que os membros para bloquear MPs admin em regras MP?';

// Language strings for the Enhanced MP System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>N&AtildeO</strong> &eacute; permitida MP no primeiro dia';
$txt['permissionhelp_eps_block_1st_day'] = 'Esta defini&ccedil;&atilde;o p&aacute;ra membros deste grupo de mandar quaisquer MPs no primeiro dia (24 horas) de seus membros. Requer \'Ler mensagens pessoais\' permiss&atilde;o.';
$txt['permissionhelp_eps_allow_edit'] = 'Esta configura&ccedil;&atilde;o permite que os membros deste grupo para editar mensagens pessoais enviadas para os outros, enquanto a mensagem n&atilde;o foi lido por qualquer destinat&aacute;rio.  Requer \'Ler mensagens pessoais\' permiss&atilde;o.';
$txt['permissionname_eps_allow_edit'] = 'Autorizado a editar MPs n&atilde;o lidas';
$txt['permissionhelp_eps_allow_unsend'] = 'Esta configura&ccedil;&atilde;o permite que os membros deste grupo cancelar o envio de (ou excluir) mensagens pessoais enviadas para os outros, enquanto a mensagem n&atilde;o foi lida por qualquer destinat&aacute;rio. N&atilde;o afeta e-mails j&aacute; enviados a respeito de MP.  Requer \'Ler mensagens pessoais\' permiss&atilde;o.';
$txt['permissionname_eps_allow_unsend'] = 'Permitir para cancelar MPs n&atilde;o lidas';

// Language strings for the Enhanced MP System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Usar a resposta r&aacute;pida em MPs:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'n&atilde;o mostrar em tudo';
	$txt['display_quick_reply2'] = 'mostrar, desligada por padr&atilde;o';
	$txt['display_quick_reply3'] = 'mostrar, ligada por padr&atilde;o';
}

?>