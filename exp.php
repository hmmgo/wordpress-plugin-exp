
//experimental plugin do not install in production

class  exp {
//should be static as codex
     static function install() {
            // timely written code
     }
     
          static function uninstall() {
            // timely written code
     }
}
register_activation_hook( __FILE__, array( 'exp', 'install' ) );
register_deactivation_hook( __FILE__, array( 'exp', 'uninstall' ) );
