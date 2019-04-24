<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Offer extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
       $title  = $this->get('title');

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
                                            'offer_title'=>$title,
                                            //'offer_desc'=>$title
                                            );


                  /*$offersdiscount = $this->MainModel->searcharray('offers_discount',$searcharray_offers_discount,$selectoffersdiscount);*/
                   //$offersdiscount = $this->MainModel->searcharrayjoin('offers_discount','merchant','offers_discount.offer_marchant_id = merchant.merchant_id',$searcharray_offers_discount,$selectoffersdiscount);
                   $offersdiscount = $this->MainModel->searcharrayboth('direct_points',$searcharray_offers_discount,$selectoffersdiscount);







                      $this->set_response(array('offersdiscount'=>$offersdiscount), REST_Controller::HTTP_OK);

                  




            }





}
?>
