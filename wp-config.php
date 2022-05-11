<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'gazpromcps' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-Twhz4-s=ZEY<:)M=<9KZ1(BI|+zaEIThveV<pf2TD0xW-yB-htI<35JZj5#(?eT');
define('SECURE_AUTH_KEY',  ' =OI_,lVB6P0i>$|do|Ac[MA*]igJ,|>[m;VS@DV>(][Gb 6CcKf!-L1)_.*arW)');
define('LOGGED_IN_KEY',    'gt7-qc|rcM!S(fIUe+sCYff8yQdL%<-w-W>-F[=0p[1iJ%SS4h.U<ERe:@=*Q+<C');
define('NONCE_KEY',        '/qP5JO+oS&4-FBG[$%^e9.DXP-4(M v:0BCL}ClU@e+|#e$`[~g0<B9MV/7Q>[uy');
define('AUTH_SALT',        'OX!C-y8E U2^&b]F_b|jZ:&K_w/suBaH_-YB$ ?nit0ED-chL0|ud~:_gl@l;DjI');
define('SECURE_AUTH_SALT', '3`4L^AxZc!3dM@&]<=Cao+ED|Z*V!X#M,In%5us;&hitsvU-)~iPYoU?GuG; v&;');
define('LOGGED_IN_SALT',   'XP}H|~XGvJrX$V^BW_g,rO?.>-P<-duJ,N+DDW=Tgz@8EB*l%=9$+-+9m; }d6nJ');
define('NONCE_SALT',       '/+^H++7Lradd12OTM)C?yravL/o|,X`7uc%U_8-.0T95Zq62:~!|bm+|w!|ojT`@');

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
