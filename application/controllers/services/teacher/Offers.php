<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class offers extends CI_Controller {

   public function __construct() {
            parent::__construct();
          //  $this->MainModel->is_logged_in_merchant();

   }
    public function index()
    {
        /* print_r('you are right!');
         return;*/
        $data['title'] = 'Khassmy';
        $customer = $this->MainModel->getwhere('customers','customer_id',$this->session->userdata('customer_id'),'customer_id ASC');
        $data['customer_name'] = $customer[0]['customer_name'];
        $data['customer_photo'] = $customer[0]['customer_photo'];
        $data['customer_id']   = $customer[0]['customer_id'];

        //$this->MainModel->pre($data);
        $this->load->template_customer('cpanel/customer/dashboard/dashboard',$data);
        //$this->load->view('cpanel/customer/login/login',$data);

    }
    public function getdata()
    {
      $token = $this->uri->segment(5);
      print_r($token);
      return;
      $selectoffersdiscount  = array(
                    "offer_id",
                    "offer_title",
                    "offer_desc",
                    "offer_status",
                    "offer_category",
                    "offer_merchant_category",
                    "offer_marchant_id",
                    "offer_price",
                    "offer_discount",
                    "offer_discount_type",
                    "offer_photo",
                    "offer_enterdate",
                    "merchant_mname"
                      );





              $searcharray_offers_discount = array(
                                        'offer_title'=>$token,
                                        //'offer_desc'=>$title
                                        );


              /*$offersdiscount = $this->MainModel->searcharray('offers_discount',$searcharray_offers_discount,$selectoffersdiscount);*/
               //$offersdiscount = $this->MainModel->searcharrayjoin('offers_discount','merchant','offers_discount.offer_marchant_id = merchant.merchant_id',$searcharray_offers_discount,$selectoffersdiscount);
               $offersdiscount = $this->MainModel->searcharrayboth('direct_points',$searcharray_offers_discount,$selectoffersdiscount);

              echo json_encode($offersdiscount);


    }

}
?>
