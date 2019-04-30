<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'urlUtil.php';
    require_once 'userController.php';

    $uri = curPageURI();
    //testUrl();

    switch($uri) {
        case '/firstphp/':
        case '/firstphp/index.php':
        case '/firstphp/index.php/':
            renderListOfUsers();
            break;
        case '/firstphp/index.php/user':
            if (isset($_GET['id'])) {
                renderUser($_GET['id']);
            }
            else {
                renderErrorPage();
            }
            break;
        case '/firstphp/index.php/create':
            renderCreatedUser();
            break;
        case '/firstphp/index.php/update':
            if (isset($_GET['id']) && isset($_GET['lastname']) && isset($_GET['firstname'])) {
                renderUpdatedUser($_GET['id'], $_GET['lastname'], $_GET['firstname']);
            }
            else {
                renderErrorPage();
            }
            break;
        case '/firstphp/index.php/delete':
            if (isset($_GET['id'])) {
                renderDeletedUser($_GET['id']);
            }
            else {
                renderErrorPage();
            }
            break;
        default:
            renderErrorPage();
    }


    function renderErrorPage() {
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>404 Oh No!!! Page Not Found :\'(</h1></body></html>';
    }

    function testUrl() {
        echo "url : ".curPageURL();
        echo '<br>';
        echo "page : ".curPageName();
        echo '<br>';
        echo "uri : ".$uri;
        echo '<br>';
    }
?>