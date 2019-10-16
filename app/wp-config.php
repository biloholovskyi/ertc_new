<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ertc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ertc_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Qrs016Tfk' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.tYB{|kh(&c<fN#u*:_be8QB9q-^z8Ccon:+Ymec)kR-u/H)}`cwR59X;Y]w;Q{^' );
define( 'SECURE_AUTH_KEY',  'u8kJs2(,PtsxP/YRM6($MpzLgQC9&1 zpd#Xu/h)=e_sq/qL(voJ^LuVgP1;e8=)' );
define( 'LOGGED_IN_KEY',    'Nc@rP;r-y6*%o3,<4:`~AW[11M>YI_>lu8O)M8I}-=c@y@/y63+^6CD+mHir<N$E' );
define( 'NONCE_KEY',        'c4,g7K&Su [yn`p.!W+!Ta[70!:F4k -4DO9V];86F.xPDyOKcwQN69.(6N;reU#' );
define( 'AUTH_SALT',        '(fAS;V_~sPC1@5].U^VnHUlzxTm*7qBobyc T_T,&B^2Qva~/J]0f;].9eMJw@$R' );
define( 'SECURE_AUTH_SALT', 'efO@YBMK}CyZ7p~=f.v,yE9abL`QkrnDo}E}q]okdQN1{NTiM#XR]PQi`tRy%:y(' );
define( 'LOGGED_IN_SALT',   '[:F_hlx/o2Dxwe{3+w~0wyMMo[uS4l45D97qdOY8QhFKa})-1@pWmQK]a4,or]6:' );
define( 'NONCE_SALT',       '>yTXKev(O^i+)t4}9};watr(0?6>?Y7?{|v:u0]-Q$`m lnTH:DLV!G>pU0smf,!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
