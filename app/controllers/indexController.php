<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo "<h1>Hello!</h1>";
        echo "<br>";
        echo memory_get_usage()/1000;
    }
    public function testAction()
    {
    	echo "Hello Phalcon";
    	echo "<br>";
    	echo memory_get_usage()/1000;
    }

}
?>