<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ctake_wp6' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ctake_wp7' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'k1gx4etbaf' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8029.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<jDb:5;fwNcbVqek+PewKpa.HFQU=)^8*H%.oJqpvIr6ETw {?;aw0;px66yudi>' );
define( 'SECURE_AUTH_KEY',  'yW|(A3)mO;c2S7+9VL*dn7HPA?J8mhteX5z}/+iC7AkxN*</Q9]?JpqwaZ38+BTq' );
define( 'LOGGED_IN_KEY',    '~kpy^u%_Zi:i7kj$19iH,Oq.ZE-1QA,H:QU&Le(<1c8Qbe]kBF|;.j_cRYH]@[IJ' );
define( 'NONCE_KEY',        '{_cEo8?OYU6Xs1M3Wk{LG;k`O0L!~Jo;:^][! <Z(egj>dDM<1*JK-s@d2~~+VuF' );
define( 'AUTH_SALT',        'B/Q,KcgU:<seh;Ou8y>K-wMHdZ<7jA^3_u*a|Gt=4Q8?YB[;ll*/#!di<FV@$R6`' );
define( 'SECURE_AUTH_SALT', '$^Y/57%+d>$X}J0%Mrdq{iO>e8lIJ>GO.L@^V&vXid!UCpUnl:V,:R[_)Pn#l4L&' );
define( 'LOGGED_IN_SALT',   '_DVB{dN{<d):_OwzQ*1vk7J^^|9*b:GQV;Sl!#%VM6HEXX$0Fn74b`WrUW5 .=YP' );
define( 'NONCE_SALT',       'Gajg{mwepO$Q41{@zXoiBYt8m2t~cqJejLzSt66h0Hd+H^MS,1iFO5`n1$o8Z.4}' );
define( 'WP_CACHE_KEY_SALT','6*ITVW@%|}d8U/@B(8<y#LYm:f1.gU:o%E=dz)ST!(H/TwFcR[>4.C88ZHRDYAi7' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
