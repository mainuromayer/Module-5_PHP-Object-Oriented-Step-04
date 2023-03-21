<?php

namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContract;
use \CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract {
    function getDimantion(){
        (new Mailer())->sendMail();
        return "100 x 100";

    }
}