<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'test' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tDSwPl@RBB5IQ{x#n2jmi&J/N}6{4<!R,tyjy?V#)+^J}brE[`)o=L<VNSa~~{ez' );
define( 'SECURE_AUTH_KEY',  'x_^[z},LfLWw,k7M86cu3`]B7vVDi]6>`q<?[^9{;3D.* -7Ku=Xk?R%8D`3.>*=' );
define( 'LOGGED_IN_KEY',    's/X]`O(<J#}EoHf2#NjIt wt{W4,>zjN-EXvOC<7?%&.qZE[^j|T7wQ )PVHlOv ' );
define( 'NONCE_KEY',        'q5lxO0i@[$2= +!u@FkGikcPNw5RrR6Ga~!/f6-^R|e@s`B9q-{A]>K_].#w72{:' );
define( 'AUTH_SALT',        '#KM_CrKXgLrgJqW[Ox-4Ne9 n2+PyWXQR?Fx|NEh@o31D[3%$?)42/]Gx%ogtHLk' );
define( 'SECURE_AUTH_SALT', 'X,q1u1+FnOo3=^MSTE#@GeS{zXCfT9I*x|vy-T19}60Ybpw7(2=IQL+%)c1 jKKE' );
define( 'LOGGED_IN_SALT',   'eIU%6HHMnt@fhP3~|s=A{T,epi?iKMaP2XJBGe.}5MqbxcnK,-_x`X}+;A,kq1P=' );
define( 'NONCE_SALT',       '%,oT1}dr$-=e Xc`[LN-.<AP*4y#IC+mKW91g`^~09qyVs>(^*eB4}xO=TXO<k:9' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';