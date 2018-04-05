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
define('DB_NAME', 'freia1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%t4dO,kg;3J_K*DXlHwK2?|>{%;11q/3pXkjROtW*D:c:4VB|!~,ZH<0Ykg>,]/+');
define('SECURE_AUTH_KEY',  '76orZnN6zK`Sa9!HVXlgAmE,J3%z;JK6cTK;HUUzL^igres*460P2~7t/a4ul.3F');
define('LOGGED_IN_KEY',    '?(3jUZm0v0^xnD U:2:]b/e^+lCg~I?6KJ@oBg8N^p1 pePZk%5|,tcb2oyxqj $');
define('NONCE_KEY',        'uAX/Z+s?|xkLfY_rK,`23a;s<&V8#Om({YMk4Rjqj5OCE);=b!A+!y^cM~Wf dTd');
define('AUTH_SALT',        'kSw{{Vd-I;AY[nmf.r^eE1(P|8|g[z)qMECZIp1AzEMtAN<bINB:,crgH<$e.iza');
define('SECURE_AUTH_SALT', 'IF D=P*Sk{C%WuE([:Gnk9tXR~Z%+.(=bhl]<r(ty[;^U%hLr(>;%)=L}2V%}zj2');
define('LOGGED_IN_SALT',   ',bWfE[.r?,~Tc$oo2+_To{H;?9$?^R3Te<.-qikk3g@nwKT^6l+1*q[qn%f|h;:*');
define('NONCE_SALT',       '44XmJq+SEW^Ng 77TVZ>5(CVZnH5spzueg~ Gj4Pea:.9f]ieSP-,c$;^-:/qr&T');

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
