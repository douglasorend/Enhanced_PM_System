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
$txt['pm_unread'] = 'Não lidas';
$txt['pm_msg_label_title'] = 'Mover Mensagem';
$txt['pm_msg_label_apply'] = 'Mover para';
$txt['pm_msg_label_remove'] = 'Pasta Atual';
$txt['pm_sel_label_title'] = 'Mover Selecionado';
$txt['pm_manage_labels'] = 'Gerenciar Pastas';
$txt['pm_labels_delete'] = 'Tem certeza de que deseja excluir as pastas selecionadas?';
$txt['pm_labels_desc'] = 'A partir daqui você pode adicionar, editar e excluir as pastas usadas no seu centro de mensagens pessoais.';
$txt['pm_label_add_new'] = 'Adicionar Nova Pasta';
$txt['pm_label_name'] = 'Nome da Pasta';
$txt['pm_labels_no_exist'] = 'Você está atualmente com nenhuma configuração de pastas!';
$txt['pm_labels'] = 'Pastas';
$txt['pm_search_choose_label'] = 'Escolha as pastas para pesquisar, ou pesquise em todas';
$txt['pm_email'] = 'Você acaba de enviar uma mensagem pessoal com remetente do ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Lembre-se, esta é apenas uma notificação. Por favor não responda esse e-mail.';
$txt['unread_items'] = 'Caixa de saída';
$txt['unsend_item'] = 'Cancelar Envio';
$txt['pm_rule_label'] = 'Mover a mensagem para a pasta';
$txt['pm_rule_sel_label'] = 'Selecione a pasta';

$txt['pm_edit'] = 'Editar';
$txt['edit_message'] = 'Editar Mensagem';
$txt['pm_unsent_denied'] = 'Você não pode cancelar o envio desta mensagem.';
$txt['pm_unsent'] = 'Suas mensagens foram canceladas em todos os destinatários com sucesso.';
$txt['pm_unsent_some'] = 'Suas mensagens foram canceladas em todos os destinatários que não leram com sucesso.';
$txt['pm_edited'] = 'Sua mensagem foi editada e e enviada a todos os destinatários de novos e-mails.';
$txt['pm_no_edit'] = 'Não é possível editar a MP porque pelo menos um dos destinatários leu a MP que você quer editar.';
$txt['pm_send_blocked'] = 'Não pode enviar MPs até 24 horas após a ativação da conta.';
$txt['unsend_message'] = 'Reenviar esta mensagem a todos os destinatários que não leram ainda';
$txt['pm_search_what'] = 'Procurar grupo';
$txt['pm_search_to_user'] = 'Para usuário';

$txt['pm_actions_filter_by_label'] = 'Filtrar por Pasta';
$txt['pm_current_label'] = 'Pasta';
$txt['pm_readable_label'] = 'mover para pasta &quot;{LABEL}&quot;';

// Language string for MP Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Com Resposta-rapida, você pode escrever um MP ao exibir uma conversa sem carregar uma nova página. Você ainda pode usar o código bulletin board e os smileys como faria em um MP normal.';

// Language strings for the Enhanced MP System settings page:
//==================================================================
$txt['eps_area'] = 'Melhorada MPs';
$txt['eps_title'] = 'Sistema de MP melhorada';
$txt['eps_new_version'] = 'Avançado sistema de MP mod versão %s está disponível para download!';
$txt['eps_no_update'] = 'Sua instalação do mod Sistema Melhorado de MPs está atualizado!';
$txt['eps_allow_unsend'] = 'Grupos de Membros autorizados a cancelar uma MP não lida';
$txt['eps_allow_edit'] = 'Grupos Membros autorizados a editar uma MP não lida';
$txt['eps_block_1st_day'] = 'Grupos Membros que não pode enviar MP no primeiro dia';
$txt['eps_pm_view_switch'] = 'Permitir que os usuários selecionem vistas MP diferente modo de conversa?';
$txt['eps_send_pm_while_muted'] = 'Permitir que os membros sejam silenciados para enviar MPs?';
$txt['eps_allow_block_admin'] = 'Permitir que os membros para bloquear MPs admin em regras MP?';

// Language strings for the Enhanced MP System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NÃO</strong> é permitida MP no primeiro dia';
$txt['permissionhelp_eps_block_1st_day'] = 'Esta definição pára membros deste grupo de mandar quaisquer MPs no primeiro dia (24 horas) de seus membros. Requer \'Ler mensagens pessoais\' permissão.';
$txt['permissionhelp_eps_allow_edit'] = 'Esta configuração permite que os membros deste grupo para editar mensagens pessoais enviadas para os outros, enquanto a mensagem não foi lido por qualquer destinatário.  Requer \'Ler mensagens pessoais\' permissão.';
$txt['permissionname_eps_allow_edit'] = 'Allowed to Edit unread MPs';
$txt['permissionhelp_eps_allow_unsend'] = 'Esta configuração permite que os membros deste grupo cancelar o envio de (ou excluir) mensagens pessoais enviadas para os outros, enquanto a mensagem não foi lida por qualquer destinatário. Não afeta e-mails já enviados a respeito de MP.  Requer \'Ler mensagens pessoais\' permissão.';
$txt['permissionname_eps_allow_unsend'] = 'Permitir para cancelar MPs não lidas';

// Language strings for the Enhanced MP System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Usar a resposta rápida em MPs:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'não mostrar em tudo';
	$txt['display_quick_reply2'] = 'mostrar, desligada por padrão';
	$txt['display_quick_reply3'] = 'mostrar, ligada por padrão';
}

?>