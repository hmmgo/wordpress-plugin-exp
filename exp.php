
//experimental plugin do not install in production

class  exp {
     static function install() {
            // timely written code
     }
}
register_activation_hook( __FILE__, array( 'exp', 'install' ) );
