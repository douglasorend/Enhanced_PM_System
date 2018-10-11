<?php
/**********************************************************************************
* EnhancedPMSystem.spanish_latin.php - Latin Spanish language file of the Split Forum Mod
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
$txt['quote_to_all'] = 'Citar a todos';
$txt['pm_unread'] = 'No le&iacute;do';
$txt['pm_msg_label_title'] = 'Mover mensaje';
$txt['pm_msg_label_apply'] = 'Mover a';
$txt['pm_msg_label_remove'] = 'Carpeta actual';
$txt['pm_sel_label_title'] = 'Mover seleccionados';
$txt['pm_manage_labels'] = 'Administrar carpetas';
$txt['pm_labels_delete'] = '¿Est&aacute;s seguro de que deseas borrar la(s) carpeta(s) seleccionada(s)?';
$txt['pm_labels_desc'] = 'Desde aqu&iacute; se puede a&ntilde;adir, editar y borrar la(s) carpeta(s) usada(s) en su centro de mensajes personales.';
$txt['pm_label_add_new'] = 'A&ntilde;adir nueva carpeta';
$txt['pm_label_name'] = 'Nombre de la carpeta';
$txt['pm_labels_no_exist'] = '¡A&uacute;n no tiene carpetas activas!';
$txt['pm_labels'] = 'Carpetas';
$txt['pm_search_choose_label'] = 'Elige carpetas para buscar en... , o busca en todas';
$txt['pm_email'] = 'Acaba de recibir un mensaje privado del REMITENTE en... ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Recuerde, esto es solo una notificaci&oacute;n. Por favor, no responda a este correo.';
$txt['unread_items'] = 'Bandeja de salida';
$txt['unsend_item'] = 'Rectificar el env&iacute;o';
$txt['pm_rule_label'] = 'Mover el mensaje a la carpeta';
$txt['pm_rule_sel_label'] = 'Seleccione una carpeta';

$txt['pm_edit'] = 'Editar';
$txt['edit_message'] = 'Editar el mensaje';
$txt['pm_unsent_denied'] = 'No puede rectificar el env&iacute;o del mensaje';
$txt['pm_unsent'] = 'Su mensaje ha sido retirado de todos los receptores satisfactoriamente';
$txt['pm_unsent_some'] = 'Su mensaje ha sido retirado de todos los receptores que a&uacute;n no lo hayan le&iacute;do satisfactoriamente';
$txt['pm_edited'] = 'Su mensaje ha sido editado y se ha reenviado a todos los receptores.';
$txt['pm_no_edit'] = 'Incapaz de editar un mensaje privado porque al menos un receptor ha le&iacute;do el mensaje que quiere editar';
$txt['pm_send_blocked'] = 'No puede enviar mensajes Privados hasta que hayan pasado 24 horas de la activaci&oacute;n de la cuenta.';
$txt['unsend_message'] = 'Reenviar este mensaje a todos los destinatarios que no han le&iacute;do el mensaje privado todav&iacute;a';
$txt['pm_search_what'] = 'Buscar grupo';
$txt['pm_search_to_user'] = 'Para el usuario';

$txt['pm_actions_filter_by_label'] = 'Filtrar por carpeta';
$txt['pm_current_label'] = 'Carpeta';
$txt['pm_readable_label'] = 'Mover a la carpeta &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Con la respuesta r&aacute;pida puede escribir un mensaje privado cuando est&aacute;s viendo una conversaci&oacute;n sin necesidad de cargar la p&aacute;gina. Puede seguir utilizando BBCodes y Smileys al igual que en un mensaje privado normal.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Mensajes privados mejoradas';
$txt['eps_title'] = 'Sistema mejorado de mensajes privados';
$txt['eps_new_version'] = '¡La versi&oacute;n %s del mod &quot;Sistema mejorado de mensajes privados(Enhanced PM System)&quot; est&aacute; disponible para descargar!';
$txt['eps_no_update'] = '¡Su versi&oacute;n del mod &quot;Sistema mejorado de mensajes privados(Enhanced PM System)&quot; est&aacute; actualizada!';
$txt['eps_allow_unsend'] = 'Grupos de miembros capaces de rectificar el env&iacute;o de un mensaje privado no le&iacute;do';
$txt['eps_allow_edit'] = 'Grupos de miembros capaces de modificar un mensaje privado no le&iacute;do';
$txt['eps_block_1st_day'] = 'Grupos de miembros capaces de enviar mensajes privados el primer d&iacute;a';
$txt['eps_pm_view_switch'] = '¿Permitir a los usuarios seleccionar la vista de mensajes privados a otro distinto al &quot;Modo conversaci&oacute;n&quot;?';
$txt['eps_send_pm_while_muted'] = '¿Permitir a los usuarios muteados enviar mensajes privados?';
$txt['eps_allow_block_admin'] = '¿Permitir a los usuarios bloquear mensajes privados de los administradores en &quot;Reglas de mensajes privados&quot;?';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NO</strong> se permite enviar mensajes privados el primer d&iacute;a';
$txt['permissionhelp_eps_block_1st_day'] = '&Eacute;ste ajuste prohibe a los miembros de este grupo de enviar cualquier mensaje privado en el primer d&iacute;a (24 horas) de su membres&iacute;a. Requiere el permiso &quot;Leer mensajes personales&quot;.';
$txt['permissionhelp_eps_allow_edit'] = '&Eacute;ste ajuste prohibe a los miembros de este grupo de modificar cualquier mensaje privado enviado a otros siempre que el mensaje no haya sido le&iacute;do por ning&uacute;n destinatario. Requiere el permiso &quot;Leer mensajes personales&quot;.';
$txt['permissionname_eps_allow_edit'] = 'Capaces de editar mensajes privados no le&iacute;dos';
$txt['permissionhelp_eps_allow_unsend'] = '&Eacute;ste ajuste permite a los miembros de &Eacute;ste grupo de rectificar el env&iacute;o (o borrar) mensajes privados enviados a otros, siempre que el mensaje no haya sido le&iacute;do por ning&uacute;n destinatario. No afecta a los correos ya enviados notificando un mensaje privado. Requiere el permiso &quot;Leer mensajes personales&quot;.';
$txt['permissionname_eps_allow_unsend'] = 'Capaces de rectificar el env&iacute;o de mensajes privados no le&iacute;dos';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Usar la respuesta r&aacute;pida en la interfaz de los mensajes privados:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'no mostrar nada';
	$txt['display_quick_reply2'] = 'mostrar, desactivado por defecto';
	$txt['display_quick_reply3'] = 'mostrar, activado por defecto';
}
$txt['recent_pms_at_top'] = 'Mostrar las conversaciones m&aacute;s recientes en la parte superior de la lista.';
$txt['recent_msgs_at_top'] = 'Mostrar los mensajes privados m&aacute;s recientes en la parte superior.';
?>