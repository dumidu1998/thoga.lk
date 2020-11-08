<?php

require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../../core/View.php');


class BuyerController {
    function __construct()
    {
        $this->model = new item();
    }
}




    ?>