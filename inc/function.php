<?php 

function add_stylesheet() {
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    echo '<link rel="stylesheet" href="css/slider.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

    switch($page_name){
        case 'contacts':
            echo '<link rel="stylesheet" href="css/contacts.css">';
            break;
        case 'questions':
            echo '<link rel="stylesheet" href="css/accordion.css">';
            break;
    }
}

function add_scripts(){
    echo('<script src="js/menu.js"></script>');
    echo('<script src="js/slider.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'questions':
        echo('<script src="js/accordion.js"></script>');
        break;
    }

}

?>