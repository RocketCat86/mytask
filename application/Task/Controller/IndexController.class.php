<?php

namespace Task\Controller;

use Common\Controller\HomebaseController;

class IndexController extends HomebaseController{

    public function index(){

        $this->show('test');

    }

}
