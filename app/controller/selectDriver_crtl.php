<?php
require_once(__DIR__.'/../models/driverModel.php');

class driver{
    function __construct()
    {
        $this->model = new driverModel();
    }

    function getAll_get(){
        $result = $this->model->get_all();
        print_r($result);
        echo json_encode($result);
    }
}

?>

<?php
    $t = new driver();

    $t->getAll_get();
?>