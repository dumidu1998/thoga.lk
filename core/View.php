<?php


class View
{
private $data = array();

private $render = FALSE;

public function __construct($template)
{
    try {
        $file = __DIR__ ."/../app/views/" . $template . ".php";

        if (file_exists($file)) {
            $this->render = $file;
        } else {
            echo "Not found";
            die();
            //throw new Error('Template ' . $template . ' not found!');
        }
    }
    catch (Error $e) {
        echo "Error";
    }
}

public function assign($variable, $value)
{
    $this->data[$variable] = $value;
}

public function __destruct()
{
    extract($this->data);
    // echo $this->render;
    // die();
    include($this->render);

}
}
?>