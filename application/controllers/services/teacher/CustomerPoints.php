<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class CustomerPoints extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
public function index_get()
    {

        $customer_id   = $this->get('customer_id');



        $datamerchent = [];
        $CustomerPoints = $this->MainModel->getwhere('points','point_customer_id',$customer_id,'point_enterdate');

            $this->set_response($CustomerPoints, REST_Controller::HTTP_OK);



    }
    public function index_post()
    {

    }




}
?>
