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
define('DB_NAME', 'web-test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'ZiTzFHYLSz6^MbN=??&_~g$)Q9kcEoqos;oU3_fpt!,sn?Q$&novn(c5faGnr/|3');
define('SECURE_AUTH_KEY',  'Qa>)b9YAY]ERdF6 _8u<CmJMeT0i0q$78$Ri0gZ2NQW8]{oC{O5EVl#De%Dac-_C');
define('LOGGED_IN_KEY',    'P4>{)llYw/!}43_cY?+k$<CSi+6bK3j|.A@kt==czV[_I%dqa^*EtV%Eop5:={3Q');
define('NONCE_KEY',        'ohD{wM;eUNt|H&eX&*7rN7fvT?T7^M%cxs/AN%k9Y_!&n~k2q1{$+5v^wP;WC>G;');
define('AUTH_SALT',        '+):@RCTZVpx&WeF*HLnOdNa1?<2cIv.vY]q9AC38u;qG]ixDm,3hPnL=)/1%wQGo');
define('SECURE_AUTH_SALT', ';}kW| m):Vyr&U6pb//IIlf$91&wI}g%;aw51lS$cmSIjt:,z&2)AH:pl_UITRXp');
define('LOGGED_IN_SALT',   '@$A=1:K<P^=Nt}%&[a&Qr&o<GjbjLjl.CZQii|Y?u*UxpZ*AEoZBP${,R>  (n4J');
define('NONCE_SALT',       'kp6{`u#aCW+u3E2lyu-a8l;y6:=^E?b!ng}nxgX}A6Q4CH2TwsiKUS197fftgHJ#');

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
