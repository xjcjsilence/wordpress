<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'mysqlForUimaster');

/** MySQL主机 */
define('DB_HOST', 'mysql');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z]KB_z(4]19b6[A2<r8p_4ux}ghWeUKz&5j1M&PBq-p)3yc{L~=M:IKEUU97Nb`S');
define('SECURE_AUTH_KEY',  '4eK~wbw,7@2uoOAgp@$lf_|HF`* j}=WYcFmQ*-QBk4sTh$jeBSb1 _{F^3/IksQ');
define('LOGGED_IN_KEY',    'oL]*R+(?v9BwKogL[N$#g?SrpQx3$I=*e>D$ty9s~Z4`k-3u@KV}E7sQiTiPB&L]');
define('NONCE_KEY',        'UJ/$qomJR3%mB<tzim`0yGfxQ3b{q-/,5O|%#86B*ydqF)RShd+T6lgI~Xf)zG W');
define('AUTH_SALT',        ':}2!x:tdh&~o}eI,*pE1&2|Z:j:4uHPEFKX):&>*GS}pMsx(o$x268MRPXBuSL-N');
define('SECURE_AUTH_SALT', '&0k6B(Cma^YAYr]IU3L::U}Q#gf gY;a%a=-:3I[c?sepat6hq?@/E?s0QlNLaM!');
define('LOGGED_IN_SALT',   '7EW}wG+HyB!qRMT|)f`Vi|Tw/!1+hv<Vr7<W6t0&D@I$`J3x=EZ#Ku[-./=L+4a3');
define('NONCE_SALT',       'i>}]r>~WS@I76Qs9N$*Yaa[x#O<oc,1uU=g#^}L27iI/F7J,5i)|f=mM%Sm $.67');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'sl_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

define('WP_ALLOW_REPAIR', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
