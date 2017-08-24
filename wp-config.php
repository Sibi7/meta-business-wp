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
define('DB_NAME', 'meta63_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123edsaqw');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L`I.mti1?Lv2udd/wuD4LpnHlb69=op)ZgeHpSpP~82<m:kKHN0T0yoi?+HAbI0?');
define('SECURE_AUTH_KEY',  'C-tGnNW16n_h0WAjg_+_&8`)?sB]t+:Ox` 3hJF~A3Vq@UBl3nt6E-nO%l:Cfah9');
define('LOGGED_IN_KEY',    '.xFFgB.>P,[_S_[^{bXuOsf^ip4Yb5m1;Juy!V$xmM<_Yb.mJnNd~v24LoT*<dZ1');
define('NONCE_KEY',        'My]S`E48+2p+iI] 5@*$$ZM_rx|-7HohrPO1m/o b*VNngWa{KBY/Q64(O,u5m^a');
define('AUTH_SALT',        'n)@OI!8kaLLh=0MUNH)XEEH{`HQ35Mn!il<ds.zO@?#j}XE-;HV8^Ck!zo(}}w{h');
define('SECURE_AUTH_SALT', 'xd2+[P$!raR2c!$8^I3cdREkBPwQi Z~3#Tcd.qrfW}E!nw>H-.73U%4r0VUfv)y');
define('LOGGED_IN_SALT',   'NSB6Y>=lsVR0t]PFuP$m 9Hmvj$QlY%(S^S/[ch^90$.FT[q>/EVH93*.4j:r&#9');
define('NONCE_SALT',       'NA==L#5xHk%5]Uop8Aq?5IZ{hU)7NQj8~?E]ZLfpl]Uc1R&x43%-+Y[>?L::N%~P');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
