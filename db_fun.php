<?php 

function add_user(Mysqli $_db, &$post){

    /** Set request */
    $q = "INSERT INTO korisnik.users (user_ID) VALUES( null )";

    /** Return Query */
    /** Save users everything DISABLED */
    $_db->query($q);

    $inserted_id = $_db->insert_id;

    /** Update only checked things */
    $update_q = "UPDATE korisnik.users SET ";
    $update_set_q = "";

    foreach($post['korisnik'] as $field){

        $update_set_q .= ( $field . "= 1," );

    }

    /** Remove last , */
    $update_set_q = rtrim( $update_set_q, ',' );

    /** Disable Post */
    unset($post['korisnik']);

    /** Update */
    if ($_db->query( $update_q . $update_set_q . " WHERE user_ID = " . $inserted_id ) )

        return $inserted_id;

    else 

        return false;

}
function add_empty_user(Mysqli $_db){

    /** Set request */
    $q = "INSERT INTO korisnik.users (user_ID) VALUES( null )";

    if( $_db->query($q) ){
        return $_db->insert_id;
    } else {
        return false;
    }

}

function update_user( Mysqli $_db, $post, $user_id){

    /** Delete old user */
    $qd = "DELETE FROM korisnik.users WHERE user_ID = " . $user_id;
    $_db->query($qd);

    /** Set request */
    $q = "INSERT INTO korisnik.users (user_ID) VALUES( $user_id )";

    if( !empty($post) ){

        /** Return Query */
        /** Save users everything DISABLED */
        $_db->query($q);

        /** Update only checked things */
        $update_q = "UPDATE korisnik.users SET ";
        $update_set_q = "";
    
        foreach($post['korisnik'] as $field){
    
            $update_set_q .= ( $field . "= 1," );
    
        }
    
        /** Remove last , */
        $update_set_q = rtrim( $update_set_q, ',' );
    
        /** Disable Post */
        unset($post['korisnik']);
    
        /** Update */
        return $_db->query( $update_q . $update_set_q . " WHERE user_ID = " . $user_id );

    } else {

        return $_db->query($q);

    }

}

function get_users($_db){

    /** Query */
    $q = "SELECT * FROM korisnik.users";
    
    /** Return Result */
    return $_db->query($q);

}

function get_user($_db, $user_id){

    /** Query */
    $q = "SELECT * FROM korisnik.users WHERE user_ID = " . $user_id ;
    
    /** Return Result */
    return $_db->query($q);

}

?>