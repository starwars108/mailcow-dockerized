<?php
/*
 * Spanish language file
 */

$lang['footer']['loading'] = "Espere Por Favor...";
$lang['header']['restart_sogo'] = 'Reiniciar SOGo';
$lang['footer']['restart_sogo'] = 'Reiniciar SOGo';
$lang['footer']['restart_now'] = 'Reiniciar ahora';
$lang['footer']['restart_sogo_info'] = 'Algunas tareas, por ejemplo agregar un dominio, requieren que reinicies SOGo para detectar cambios hechos en la UI de mailcow.<br><br><b>Importante:</b> Un reinicio sencillo puede tardar un poco en completarse, por favor espere a que termine.';
$lang['dkim']['confirm'] = "¿Estás Seguro?";
$lang['danger']['dkim_not_found'] = "Registro DKIM no encontrado";
$lang['danger']['dkim_remove_failed'] = "No se puede eliminar el registro DKIM seleccionado";
$lang['danger']['dkim_add_failed'] = "No se puede agregar el registro DKIM dado";
$lang['danger']['dkim_domain_or_sel_invalid'] = "Dominio DKIM ó selector inválido";
$lang['danger']['dkim_key_length_invalid'] = "Longitud de la llave DKIM inválida";
$lang['success']['dkim_removed'] = "Registro DKIM removido";
$lang['success']['dkim_added'] = "Registro DKIM guardado";
$lang['danger']['access_denied'] = "Acceso denegado o datos del formulario inválidos";
$lang['danger']['domain_invalid'] = "Nombre de dominio inválido";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "Cuota máx. excede el limite de cuota del dominio";
$lang['danger']['object_is_not_numeric'] = "El valor %s no es numérico";
$lang['success']['domain_added'] = "Dominio agregado %s";
$lang['danger']['alias_empty'] = "Dirección alias no debe estar vacía";
$lang['danger']['goto_empty'] = "Dirección \"goto\" no debe estar vacía";
$lang['danger']['policy_list_from_exists'] = "Un registro con ese nombre ya existe";
$lang['danger']['policy_list_from_invalid'] = "El registro tiene formato inválido";
$lang['danger']['whitelist_exists'] = "Ya existe un registro con ese nombre en la lista blanca";
$lang['danger']['whitelist_from_invalid'] = "Formato inválido para el registro de lista blanca";
$lang['danger']['alias_invalid'] = "Dirección alias inválida";
$lang['danger']['goto_invalid'] = "Dirección \"goto\" inválida";
$lang['danger']['alias_domain_invalid'] = "El dominio alias es inválido";
$lang['danger']['target_domain_invalid'] = "El dominio \"goto\" es inválido";
$lang['danger']['object_exists'] = "El objeto %s ya existe";
$lang['danger']['domain_exists'] = "El dominio %s ya existe";
$lang['danger']['alias_goto_identical'] = "Las direcciones alias y \"goto\" no deben ser idénticas";
$lang['danger']['aliasd_targetd_identical'] = "El dominio alias no debe ser igual al dominio destino";
$lang['success']['alias_added'] = "Dirección/es alias ha/han sidgo agregada";
$lang['success']['alias_modified'] = "Cambios al alias guardados";
$lang['success']['mailbox_modified'] = "Cambios al buzón %s guardados";
$lang['success']['msg_size_saved'] = "Limite del mensaje establecido";
$lang['danger']['aliasd_not_found'] = "Dominio alias no encontrado";
$lang['danger']['targetd_not_found'] = "Dominio destino no encontrado";
$lang['danger']['aliasd_exists'] = "Dominio alias ya existe";
$lang['success']['aliasd_added'] = "Agregado dominio alias %s";
$lang['success']['aliasd_modified'] = "Cambios al dominio alias %s guardados";
$lang['success']['domain_modified'] = "Cambios al dominio %s guardados";
$lang['success']['domain_admin_modified'] = "Cambios al administrador del dominio %s guardados";
$lang['success']['domain_admin_added'] = "Administrador del dominio %s agregado";
$lang['success']['changes_general'] = 'Cambios guardados';
$lang['success']['admin_modified'] = "Cambios al administrador guardados";
$lang['danger']['exit_code_not_null'] = "Error: Código de salida es %d";
$lang['danger']['mailbox_not_available'] = "Buzón no disponible";
$lang['danger']['username_invalid'] = "Nombre de usuario no se puede utilizar";
$lang['danger']['password_mismatch'] = "Confirmación de contraseña no es identica";
$lang['danger']['password_complexity'] = "La contraseña no cumple con los requisitos";
$lang['danger']['password_empty'] = "El campo de la contraseña no debe estar vacío";
$lang['danger']['login_failed'] = "Inicio de sesión fallido";
$lang['danger']['mailbox_invalid'] = "Nombre de buzón inválido";
$lang['danger']['mailbox_invalid_suggest'] = 'El nombre del buzón es inválido, ¿pretendías escribir "%s"?';
$lang['info']['fetchmail_planned'] = "La tarea para buscar correos se ha planeado. Por favor verifica el proceso más tarde.";
$lang['danger']['fetchmail_source_empty'] = "Por favor define una carpeta fuente";
$lang['danger']['fetchmail_dest_empty'] = "Por favor define una carpeta destino";
$lang['danger']['is_alias'] = "%s ya está definida como una dirección alias";
$lang['danger']['is_alias_or_mailbox'] = "%s ya está definido como un alias ó como un buzón";
$lang['danger']['is_spam_alias'] = "%s ya está definida como una dirección alias de correo no deseado";
$lang['danger']['quota_not_0_not_numeric'] = "Cuota debe ser numérica y >= 0";
$lang['danger']['domain_not_found'] = "Dominio no encontrado.";
$lang['danger']['max_mailbox_exceeded'] = "Máx. de buzones superado (%d de %d)";
$lang['danger']['mailbox_quota_exceeded'] = "Cuota excede el límite de dominio (máx. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "No queda espacio suficiente (espacio libre: %d MiB)";
$lang['success']['mailbox_added'] = "Buzón %s agregado";
$lang['success']['domain_removed'] = "Dominio %s removido";
$lang['success']['alias_removed'] = "Dirección alias %s removida";
$lang['success']['alias_domain_removed'] = "Dominio alias %s removido";
$lang['success']['domain_admin_removed'] = "Administrador del dominio %s removido";
$lang['success']['mailbox_removed'] = "Buzón %s removido";
$lang['danger']['max_quota_in_use'] = "Cuota del buzón debe ser mayor o igual a %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "Cuota del dominio debe ser mayor o igual a %d MiB";
$lang['danger']['mailboxes_in_use'] = "Máx. de buzones debe ser mayor o igual a %d";
$lang['danger']['aliases_in_use'] = "Máx. de alias debe ser mayor o igual a %d";
$lang['danger']['sender_acl_invalid'] = "Valor del remitente ACL inválido";
$lang['danger']['domain_not_empty'] = "No se puede eliminar un dominio que no esté vacío";
$lang['warning']['spam_alias_temp_error'] = "Error temporal: No se puede agregar ese \"spam alias\", inténtelo más tarde.";
$lang['danger']['spam_alias_max_exceeded'] = "Máx. direcciones \"spam alias\" permitidas excedido";
$lang['danger']['fetchmail_active'] = "Un proceso ya se está ejecutando, por favor espera a que termine.";
$lang['danger']['validity_missing'] = 'Por favor asigna un periodo de validez';
$lang['user']['off'] = "Apagado";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'Configuración del usuario';
$lang['user']['mailbox_settings'] = 'Configuración del buzón';
$lang['user']['mailbox_details'] = 'Detalles del buzón';
$lang['user']['change_password'] = 'Cambiar contraseña';
$lang['user']['new_password'] = 'Nueva contraseña:';
$lang['user']['save_changes'] = 'Guardar cambios';
$lang['user']['password_now'] = 'Contraseña actual (confirmar cambios):';
$lang['user']['new_password_repeat'] = 'Confirmación de contraseña (repetir):';
$lang['user']['new_password_description'] = 'Requisitos: longitud de 6 caracteres, letras y números.';
$lang['user']['did_you_know'] = '<b>¿Sabías qué?</b> Puedes utilizar etiquetas en tu dirección email ("me+<b>privat</b>@example.com") para mover mensajes a una carpeta automáticamente (ejemplo: "privat").';
$lang['user']['spam_aliases'] = 'Alias de email temporales';
$lang['user']['alias'] = 'Alias';
$lang['user']['aliases'] = 'Alias';
$lang['user']['is_catch_all'] = 'Atrapa-Todo para el/los dominio/s';
$lang['user']['aliases_also_send_as'] = 'También permitido para mandarse como';
$lang['user']['aliases_send_as_all'] = 'No verifiques el acceso del remitente para los siguientes dominios';
$lang['user']['alias_create_random'] = 'Generar alias aleatorio';
$lang['user']['alias_extend_all'] = 'Extender alias por 1 hora';
$lang['user']['alias_valid_until'] = 'Válido hasta';
$lang['user']['alias_remove_all'] = 'Eliminar todos los alias';
$lang['user']['alias_time_left'] = 'Tiempo restante';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Periodo de validez';
$lang['user']['hour'] = 'Hora';
$lang['user']['hours'] = 'Horas';
$lang['user']['day'] = 'Día';
$lang['user']['week'] = 'Semana';
$lang['user']['weeks'] = 'Semanas';
$lang['user']['spamfilter'] = 'Filtro de spam';
$lang['user']['spamfilter_wl'] = 'Lista blanca';
$lang['user']['spamfilter_wl_desc'] = 'Direcciones en la lista blanca <b>nunca</b> clasificarán como spam. Probablemente se usará un comodín.';
$lang['user']['spamfilter_bl'] = 'Lista negra';
$lang['user']['spamfilter_bl_desc'] = 'Direcciones en la lista negra <b>siempre</b> clasificarán como spam. Probablemente se usará un comodín.';
$lang['user']['spamfilter_behavior'] = 'Clasificación';
$lang['user']['spamfilter_table_rule'] = 'Regla';
$lang['user']['spamfilter_table_action'] = 'Acción';
$lang['user']['spamfilter_table_empty'] = 'No hay datos para mostrar';
$lang['user']['spamfilter_table_remove'] = 'eliminar';
$lang['user']['spamfilter_table_add'] = 'Agregar elemento';
$lang['user']['spamfilter_green'] = 'Verde: éste mensaje no es spam';
$lang['user']['spamfilter_yellow'] = 'Amarillo: éste mensaje puede ser spam, será etiquetado como spam y trasladado a tu carpeta basura';
$lang['user']['spamfilter_red'] = 'Rojo: Este mensaje es spam y sera rechazado por el servidor';
$lang['user']['spamfilter_default_score'] = 'Valores por defecto:';
$lang['user']['spamfilter_hint'] = 'El primer valor representa la "calificación baja de spam", el segundo representa la "calificación alta de spam".';

$lang['user']['tls_policy_warning'] = '<strong>Advertencia:</strong> Si decides forzar la transmisión de correo encriptado, puedes perder correos.<br>Mensajes que no satisfagan la política serán rebotados con una falla grave en el sistema de correos .';
$lang['user']['tls_policy'] = 'Política de encriptación';
$lang['user']['tls_enforce_in'] = 'Aplicar TLS entrante';
$lang['user']['tls_enforce_out'] = 'Aplicar TLS saliente';
$lang['user']['no_record'] = 'Sin registro';

$lang['user']['misc_settings'] = 'Otras configuraciones de usuario';
$lang['user']['misc_delete_profile'] = 'Otras configuraciones de usuario';

$lang['user']['tag_handling'] = 'Establecer manejo para el correo etiquetado';
$lang['user']['tag_in_subfolder'] = 'En subcarpeta';
$lang['user']['tag_in_subject'] = 'En asunto';
$lang['user']['tag_help_explain'] = 'En subcarpeta: una nueva subcarpeta llamada como la etiqueta será creada debajo de INBOX ("INBOX/Facebook").<br>
En asunto: los nombres de las etiquetas serán añadidos al asunto de los correos, ejemplo: "[Facebook] Mis Noticias".';
$lang['user']['tag_help_example'] = 'Ejemplo de una dirección email etiquetada: mi<b>+Facebook</b>@ejemplo.org';

$lang['start']['dashboard'] = '%s - panel';
$lang['start']['start_rc'] = 'Abrir Roundcube';
$lang['start']['start_sogo'] = 'Abrir SOGo';
$lang['start']['mailcow_apps_detail'] = 'Utiliza una aplicación de mailcow para acceder a tus correos, calendario, contactos y más.';
$lang['start']['mailcow_panel'] = 'Iniciar mailcow UI';
$lang['start']['mailcow_panel_description'] = 'mailcow UI está disponible para administradores y usuarios de buzón.';
$lang['start']['mailcow_panel_detail'] = '<b>Administradores del dominio</b> crean, modifican o eliminan buzones y alias, cambia dominios y lee información más detallada sobre sus dominios asignados<br>
	<b>Usuarios de buzón</b> son capaces de crear alias de tiempo limitado (spam alias), cambiar su contraseña y la configuración del filtro de spam.';
$lang['start']['recommended_config'] = 'Configuración recomendada (sin ActiveSync)';
$lang['start']['imap_smtp_server'] = 'IMAP- y SMTP datos del servidor';
$lang['start']['imap_smtp_server_description'] = 'Para la mejor experiencia recomendamos utilizar <a href="%s" target="_blank"><b>Mozilla Thunderbird</b></a>.';
$lang['start']['imap_smtp_server_badge'] = 'Leer/Escribir correos';
$lang['start']['imap_smtp_server_auth_info'] = 'Por favor utiliza tu dirección de correo completa y el mecanismo de autenticación PLANO.<br>
Tus datos para iniciar sesión serán encriptados por la encriptación obligatoria del servidor';
$lang['start']['managesieve'] = 'ManageSieve';
$lang['start']['managesieve_badge'] = 'Filtro de correos';
$lang['start']['managesieve_description'] = 'Por favor utiliza <b>Mozilla Thunderbird</b> con la <a style="text-decoration:none" target="_blank" href="%s"><b>extensión nightly sieve</b></a>.<br>Inicia Thunderbird, abre la configuración de complementos y suelta el archivo xpi descargado en la ventana abierta.<br>El servidor es <b>%s</b>, utiliza el puerto <b>4190</b> si se te pregunta. Los datos para iniciar sesión coinciden con los datos de tu correo.';
$lang['start']['service'] = 'Servicio';
$lang['start']['encryption'] = 'Método de encriptación';
$lang['start']['help'] = 'Mostrar/Ocultar panel de ayuda';
$lang['start']['hostname'] = 'Hostname';
$lang['start']['port'] = 'Port';
$lang['start']['footer'] = '';
$lang['header']['mailcow_settings'] = 'Configuracion';
$lang['header']['administration'] = 'Administración';
$lang['header']['mailboxes'] = 'Buzones';
$lang['header']['user_settings'] = 'Configuraciones de usuario';
$lang['header']['login'] = 'Inicio de sesión';
$lang['header']['logged_in_as_logout'] = 'Sesión iniciada como <b>%s</b> (cerrar sesión)';
$lang['header']['locale'] = 'Idioma';
$lang['mailbox']['domain'] = 'Dominio';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['aliases'] = 'Alias';
$lang['mailbox']['domains'] = 'Dominios';
$lang['mailbox']['mailboxes'] = 'Buzones';
$lang['mailbox']['mailbox_quota'] = 'Tamaño máx. de cuota';
$lang['mailbox']['domain_quota'] = 'Cuota';
$lang['mailbox']['active'] = 'Activo';
$lang['mailbox']['action'] = 'Acción';
$lang['mailbox']['ratelimit'] = 'Límite de la tarifa saliente/h';
$lang['mailbox']['backup_mx'] = 'Respaldar MX';
$lang['mailbox']['domain_aliases'] = 'Alias de dominio';
$lang['mailbox']['target_domain'] = 'Dominio destino';
$lang['mailbox']['target_address'] = 'Dirección Goto';
$lang['mailbox']['username'] = 'Nombre de usuario';
$lang['mailbox']['fname'] = 'Nombre completo';
$lang['mailbox']['filter_table'] = 'Filtrar tabla';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['quota'] = 'Cuota';
$lang['mailbox']['in_use'] = 'En uso (%)';
$lang['mailbox']['msg_num'] = 'Mensaje #';
$lang['mailbox']['remove'] = 'Eliminar';
$lang['mailbox']['edit'] = 'Editar';
$lang['mailbox']['archive'] = 'Archivar';
$lang['mailbox']['no_record'] = 'Sin registro';
$lang['mailbox']['add_domain'] = 'Agregar dominio';
$lang['mailbox']['add_domain_alias'] = 'Agregar alias de dominio';
$lang['mailbox']['add_mailbox'] = 'Agregar buzón';
$lang['mailbox']['add_alias'] = 'Agregar alias';

$lang['info']['no_action'] = 'No hay acción aplicable';

$lang['delete']['title'] = 'Eliminar objeto';
$lang['delete']['remove_domain_warning'] = '<b>Advertencia:</b> ¡Estás a punto de eliminar el dominio <b>%s</b>!';
$lang['delete']['remove_domainalias_warning'] = '<b>Advertencia:</b> ¡Estás a punto de eliminar el alias de dominio <b>%s</b>!';
$lang['delete']['remove_domainadmin_warning'] = '<b>Advertencia:</b> ¡Estás a punto de eliminar el administrador de dominio <b>%s</b>!';
$lang['delete']['remove_alias_warning'] = '<b>Advertencia:</b> ¡Estás a punto de eliminar la dirección alias <b>%s</b>!';
$lang['delete']['remove_mailbox_warning'] = '<b>Advertencia:</b> ¡Estás a punto de eliminar el buzón <b>%s</b>!';
$lang['delete']['remove_mailbox_details'] = 'El buzón será <b>purgado permanentemente</b>!';
$lang['delete']['remove_domain_details'] = 'Esto también eliminará alias de dominio.<br><br><b>Un dominio debe estar vacío para poder ser eliminado.</b>';
$lang['delete']['remove_alias_details'] = 'Los usuarios ya no serán capaces de recibir correos o enviar correos desde esta dirección.</b>';
$lang['delete']['remove_button'] = 'Eliminar';
$lang['delete']['previous'] = 'Página anterior';

$lang['edit']['save'] = 'Guardar cambios';
$lang['edit']['archive'] = 'Acceso a archivos';
$lang['edit']['max_mailboxes'] = 'Máx. buzones posibles:';
$lang['edit']['title'] = 'Editas objeto';
$lang['edit']['target_address'] = 'Dirección/es goto <small>(separadas por coma)</small>:';
$lang['edit']['active'] = 'Activo';
$lang['edit']['target_domain'] = 'Dominio destino:';
$lang['edit']['password'] = 'Contraseña:';
$lang['edit']['ratelimit'] = 'Límite de la tarifa saliente/h:';
$lang['danger']['ratelimt_less_one'] = 'El límite de la tarifa saliente/h no puede ser menos que 1';
$lang['edit']['password_repeat'] = 'Confirmación de contraseña (repetir):';
$lang['edit']['domain_admin'] = 'Editar administrador del dominio';
$lang['edit']['domain'] = 'Editar dominio';
$lang['edit']['alias_domain'] = 'Alias de dominio';
$lang['edit']['edit_alias_domain'] = 'Editar alias de dominio';
$lang['edit']['domains'] = 'Dominios';
$lang['edit']['destroy'] = 'Entrada manual de datos';
$lang['edit']['alias'] = 'Editar alias';
$lang['edit']['mailbox'] = 'Editar buzón';
$lang['edit']['description'] = 'Descripción:';
$lang['edit']['max_aliases'] = 'Máx. alias:';
$lang['edit']['max_quota'] = 'Máx. cuota por buzón (MiB):';
$lang['edit']['domain_quota'] = 'Cuota de dominio:';
$lang['edit']['backup_mx_options'] = 'Opciones del respaldo MX:';
$lang['edit']['relay_domain'] = 'Dominio de retransmisión';
$lang['edit']['relay_all'] = 'Retransmitir todos los recipientes';
$lang['edit']['dkim_signature'] = 'Firma ARC + DKIM:';
$lang['edit']['dkim_record_info'] = '<small>Por favor agrega un registro TXT con el siguiente valor a tu configuración DNS.</small>';
$lang['edit']['relay_all_info'] = '<small>Si eliges <b>no</b> retransmitir a todos los recipientes, necesitas agregar un buzón "blind"("ciego") por cada recipiente que debe ser retransmitido.</small>';
$lang['edit']['full_name'] = 'Nombre completo';
$lang['edit']['full_name'] = 'Nombre completo';
$lang['edit']['quota_mb'] = 'Cuota (MiB)';
$lang['edit']['sender_acl'] = 'Permitir envío como:';
$lang['edit']['sender_acl_info'] = 'Los alias no pueden deseleccionarse.';
$lang['edit']['dkim_txt_name'] = 'Nombre del registro TXT:';
$lang['edit']['dkim_txt_value'] = 'Valor del registro TXT:';
$lang['edit']['previous'] = 'Página anterior';
$lang['edit']['unchanged_if_empty'] = 'Si no hay cambios dejalo en blanco';
$lang['edit']['dont_check_sender_acl'] = 'No verifiques remitente para el dominio %s';

$lang['add']['title'] = 'Agregar objeto';
$lang['add']['domain'] = 'Dominio';
$lang['add']['active'] = 'Activo';
$lang['add']['save'] = 'Guardar cambios';
$lang['add']['description'] = 'Descripción:';
$lang['add']['max_aliases'] = 'Máx. alias posibles:';
$lang['add']['max_mailboxes'] = 'Máx. buzones posibles:';
$lang['add']['mailbox_quota_m'] = 'Máx. cuota por buzón (MiB):';
$lang['add']['domain_quota_m'] = 'Cuota total del dominio (MiB):';
$lang['add']['backup_mx_options'] = 'Opciones del respaldo MX:';
$lang['add']['relay_all'] = 'Retransmitir todos los recipientes';
$lang['add']['relay_domain'] = 'Retransmitir este dominio';
$lang['add']['relay_all_info'] = '<small>Si eliges <b>no</b> retransmitir a todos los recipientes, necesitas agregar un buzón "blind"("ciego") por cada recipiente que debe ser retransmitido.</small>';
$lang['add']['alias'] = 'Alias';
$lang['add']['alias_spf_fail'] = '<b>Nota:</b> Si tu dirección destino está en un buzón externo, el <b>servidor de correo que recibe</b> puede rechazar tu mensaje por una falla SPF.</a>';
$lang['add']['alias_address'] = 'Dirección/es alias:';
$lang['add']['alias_address_info'] = '<small>Dirección/es de correo completa/s ó @ejemplo.com, para atrapar todos los mensajes para un dominio (separado por coma). <b>Dominios mailcow solamente</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Nombres de dominio válidos solamente (separado por coma).</small>';
$lang['add']['target_address'] = 'Direcciones goto:';
$lang['add']['target_address_info'] = '<small>Dirección/es de correo completa/s (separado por coma).</small>';
$lang['add']['alias_domain'] = 'Dominio alias';
$lang['add']['select'] = 'Por favor selecciona...';
$lang['add']['target_domain'] = 'Dominio destino:';
$lang['add']['mailbox'] = 'Buzón';
$lang['add']['mailbox_username'] = 'Nombre de usuario (parte izquierda de una dirección de correo):';
$lang['add']['full_name'] = 'Nombre completo:';
$lang['add']['quota_mb'] = 'Cuota (MiB):';
$lang['add']['select_domain'] = 'Por favor elige un dominio primero';
$lang['add']['password'] = 'Constraseña:';
$lang['add']['password_repeat'] = 'Confirmación de contraseña (repetir):';
$lang['add']['previous'] = 'Página anterior';
$lang['add']['restart_sogo_hint'] = '¡Necesitas reiniciar el contenedor del servicio SOGo antes de agregar un nuevo dominio!';
$lang['add']['port'] = 'Port';
$lang['login']['title'] = 'Inicio de sesión';
$lang['login']['administration'] = 'Administración';
$lang['login']['administration_details'] = 'Por favor utiliza tu inicio de sesión de Administrador para realizar tareas administrativas.';
$lang['login']['user_settings'] = 'Configuración de usuario';
$lang['login']['user_settings_details'] = 'Usuarios de buzón pueden utilizar mailcow UI para cambiar sus contraseñas, crear alias temporales (alias de spam), ajustar el comportamiento del filtro de spam ó importar mensajes desde un servidor IMAP remoto.';
$lang['login']['username'] = 'Nombre de usuario';
$lang['login']['password'] = 'Contraseña';
$lang['login']['reset_password'] = 'Reiniciar mi contraseña';
$lang['login']['login'] = 'Inicio de sesión';
$lang['login']['previous'] = "Página anterior";
$lang['login']['delayed'] = 'El inicio de sesión ha sido retrasado %s segundos.';

$lang['login']['tfa'] = "Autenticación de dos factores";
$lang['login']['tfa_details'] = "Por favor confirma tu contraseña de un solo uso en el campo de abajo";
$lang['login']['confirm'] = "Confirmar";
$lang['login']['otp'] = "Contraseña de un solo uso";
$lang['login']['trash_login'] = "Inicio de sesión basura";

$lang['admin']['search_domain_da'] = 'Buscar dominios';
$lang['admin']['restrictions'] = 'Restricciones Postfix';
$lang['admin']['rr'] = 'Restricciones Postfix para recipientes';
$lang['admin']['reset_defaults'] = 'Restablecer los valores predeterminados';
$lang['admin']['sr'] = 'Restricciones Postfix para remitentes';
$lang['admin']['r_inactive'] = 'Restricciones inactivas';
$lang['admin']['r_active'] = 'Restricciones activas';
$lang['admin']['r_info'] = 'Elementos en gris/deshabilitados en la lista de restricciones activas no son reconocidas como restricciones válidas para mailcow y no pueden ser movidas. Restricciones desconocidas serán establecidas en el orden de aparicion de todas maneras. <br>Puedes agregar nuevos elementos en <code>inc/vars.local.inc.php</code> para ser capaz de habilitarlas.';
$lang['admin']['public_folders'] = 'Carpetas Públicas';
$lang['admin']['public_folders_text'] = 'Un espacio de nombres "Public" (Público) será creado. Debajo del nombre de la carpeta pública se indica el nombre del primer buzón creado automáticamente dentro de este espacio de nombres';
$lang['admin']['public_folder_name'] = 'Nombre de la carpeta <small>(alfanumérico)</small>';
$lang['admin']['public_folder_enable'] = 'Habilitar carpeta pública';
$lang['admin']['public_folder_enable_text'] = 'Activar ésta opción no elimina correos en cualquier otra carpeta pública.';
$lang['admin']['public_folder_pusf'] = 'Habilitar el indicador visto por usuario';
$lang['admin']['public_folder_pusf_text'] = 'Un sistema habilitado por indicador "por usuario visto" no marcará un correo como leído para el Usuario B, cuando el Usuario A lo haya visto, pero el Usuario B no.';
$lang['admin']['privacy'] = 'Privacidad';
$lang['admin']['privacy_text'] = 'Ésta opción activa una tabla PCRE para remover "User-Agent", "X-Enigmail", "X-Mailer", "X-Originating-IP" y remplaza las cabezeras "Received: from" con localhost/127.0.0.1.';
$lang['admin']['privacy_anon_mail'] = 'Anonimizar correo saliente';
$lang['admin']['dkim_txt_name'] = 'Nombre del registro TXT:';
$lang['admin']['dkim_txt_value'] = 'Valor del registro TXT:';
$lang['admin']['dkim_key_length'] = 'Longitud de la llave DKIM (bits)';
$lang['admin']['previous'] = 'Página anterior';
$lang['admin']['quota_mb'] = 'Cuota (MiB):';
$lang['admin']['sender_acl'] = 'Permitir envío como:';
$lang['admin']['msg_size'] = 'Tamaño del mensaje';
$lang['admin']['msg_size_limit'] = 'Límite del tamaño del mensaje ahora';
$lang['admin']['msg_size_limit_details'] = 'Aplicando un nuebo límite reiniciará Postfix y el servidor web.';
$lang['admin']['maintenance'] = 'Mantenimiento e Información';
$lang['admin']['sys_info'] = 'información del sistema';
$lang['admin']['dkim_add_key'] = 'Agregar registro ARC/DKIM';
$lang['admin']['dkim_keys'] = 'Registros ARC/DKIM';
$lang['admin']['add'] = 'Agregar';
$lang['admin']['configuration'] = 'Configuración';
$lang['admin']['password'] = 'Contraseña';
$lang['admin']['password_repeat'] = 'Confirmación de contraseña (repetir)';
$lang['admin']['active'] = 'Activo';
$lang['admin']['action'] = 'Acción';
$lang['admin']['add_domain_admin'] = 'Agregar Administrador del dominio';
$lang['admin']['admin_domains'] = 'Asignaciones de dominio';
$lang['admin']['domain_admins'] = 'Administradores de dominio';
$lang['admin']['username'] = 'Nombre de usuario';
$lang['admin']['edit'] = 'Editar';
$lang['admin']['remove'] = 'Eliminar';
$lang['admin']['save'] = 'Guardar cambios';
$lang['admin']['admin'] = 'Administrador';
$lang['admin']['admin_details'] = 'Editar detalles del administrador';
$lang['admin']['unchanged_if_empty'] = 'Si no hay cambios dejalo en blanco';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Acceso';
$lang['admin']['invalid_max_msg_size'] = 'Tamaño máx. del mensaje no válido';
$lang['admin']['site_not_found'] = 'No se puede localizar la configuración del sitio de mailcow';
$lang['admin']['public_folder_empty'] = 'El nombre de la carpeta pública no debe estar vacío';
$lang['admin']['set_rr_failed'] = 'No se pueden establecer las restricciones de Postfix';
$lang['admin']['no_record'] = 'Sin registro';
