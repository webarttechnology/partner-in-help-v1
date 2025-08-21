<?php
define( 'DB_NAME', 'webart_partnerinhelp' );
define( 'DB_USER', 'webart_partnerinhelp' );
define( 'DB_PASSWORD', '/%dMYi[J8nM)Mxxj' );
define( 'DB_HOST', '148.135.138.226' );
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define( 'AUTH_KEY',         'dmhq9:a{.M=Ms>*laH^DZ#aNr`(% 9]_x3<JsW&AZt+pX]~/[<S-|.s%>(spR%K%' );
define( 'SECURE_AUTH_KEY',  'mf1@4{~A!Iap`I#`E7!bT_IO]_;BQW&;|d(uDSE?jw^}t1&a4BN` H.3 VZ)dfcl' );
define( 'LOGGED_IN_KEY',    'C?p>Yvd<36-+?OMn>EE%W`QDf0jYww9EXvFLH9(MUyU86sHu>;qsOr%X./`M/A&e' );
define( 'NONCE_KEY',        'h3NP8WcFot?:VNBBx|D`SNGDsc|NQAV+MMyaMvJcmkOH;Aw=b6nh?Ie9*,QAwob%' );
define( 'AUTH_SALT',        ';3^+d*zQfOaUmP4z~KJxT:WMwX)QsY@+=BzCc9l cFrv~:T{[OGN#t@8k#PGMw/Q' );
define( 'SECURE_AUTH_SALT', '3!{Ks3kYkI$!v`i!5+3_;oF-GV]U(IPNkOULKFBmW($&^3~?1st6XLnW[vT+Sza>' );
define( 'LOGGED_IN_SALT',   'j#MFB_]dbRI&VS@Ne;%+-@w(;bZd*G,ze{w8&>!?p|iC=p*H@_<_If^YrGhMKAl?' );
define( 'NONCE_SALT',       'b|Z5^|Tw{1gIF_aIXDCpD}925`03G|s&j=`>49dcSO4|5qlz*N_0,1@P:Re@a{q*' );

$table_prefix = 'ch_';

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


define( 'WP_HOME', 'https://partnerinhelp.webartlab.tech' );
define( 'WP_SITEURL', 'https://partnerinhelp.webartlab.tech' );


if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';