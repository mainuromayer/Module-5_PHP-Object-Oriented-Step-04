<?php

namespace CloudStorage;
// include "mail/mailer.php";

spl_autoload_register(function($className){
    // echo $className;    # CloudStorage\Mail\Mailer
    // die();

    // $path = str_replace("CloudStorage\\", "", $className);
    // echo $path;
    // die();


    $path = strtolower(str_replace("CloudStorage\\", "", $className)) . ".php";
    // $path = str_replace("\\", "/", $path);
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);
    // echo $path;
    include_once($path);
    // die();
});

use CloudStorage\Mail\Mailer;

class Main {
    function __construct() {
        // (new Mail\Mailer())->sendMail();;
        // $mailer = new Mail\Mailer();
        $mailer = new Mailer();
        $mailer->sendMail();
    }
}

new Main();