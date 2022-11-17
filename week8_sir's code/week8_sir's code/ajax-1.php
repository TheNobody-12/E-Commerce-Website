<?php
session_start();

$action = filter_input( INPUT_POST, 'action',
            FILTER_SANITIZE_SPECIAL_CHARS  );

if ( $action == 'add' ) {
    if ( isset( $_SESSION['list'] ) ) {
        $id = count( $_SESSION['list'] );
        $id++;
    } else {
        $_SESSION['list']=[];
        $id = 1;
    }

    echo '<tr><td>ID is '.$id.'</td>'.
             '<td>PHP says "Hi!"</td>'.
             '<td><button onclick="doRemove('.$id.')">Remove</button></td>'.
         '</tr>';

    $_SESSION['list'][$id] = 'PHP says "Hi!"';
    
} else if ( $action == 'rem' ) {
    $target = filter_input( INPUT_POST, 'id', FILTER_VALIDATE_INT );

    if ( $target !== false && $target !== null && 
         isset( $_SESSION['list'][$target] ) ) {

        //$id = count($_SESSION['list'] ); // always remove the last
        unset( $_SESSION['list'][ $target ] );

        foreach ( $_SESSION['list'] as $key => $value ) {
            echo '<tr><td>ID is '.$key.'</td>'.
            '<td>'.$value.'</td>'.
            '<td><button onclick="doRemove('.$key.')">Remove</button></td>'.
            '</tr>';
        }
    }
} else if ( $action == "reset" ) {
    session_destroy();
}

?>