
//from codex I will modify later


//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

$option_name = 'plugin_option_name';

delete_option( $option_name );

// For site options in multisite
delete_site_option( $option_name );  

//drop a custom db table
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );

//note in multisite looping through blogs to delete options on each blog does not scale. You'll just have to leave them.
