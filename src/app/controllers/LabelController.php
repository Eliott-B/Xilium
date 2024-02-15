<?php

namespace app\controllers;

use app\models\Label;

class LabelController
{



    public function liste(){
        $labels = (new \app\models\Label)->all();

        require "../views/labels.php";
    }

}