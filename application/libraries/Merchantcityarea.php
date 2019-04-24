<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchantcityarea{
     public function __construct()
        {
                // Do something with $params
        }
           // `city_area`  `city_area_id`, `city_area_title`, `city_area_token`, `city_area_perant`, `city_area_enterdate` 
    
	  public function toselectperent($tree, $pass = 0 ) {
         $html = '';
             if(!empty($tree)){
             foreach ( $tree as $key=>$v ) {           
       
                $html.= '<option value="'.$v['city_area_id'].'"   data-value="'.$v['city_area_id'].'" >';
                $html .= str_repeat("---", $pass); // use the $pass value to create the --
                $html .= ' '.$v['city_area_title'] . '</option>';
        
                if ( array_key_exists('children', $v) ) {
                    $html.= $this->toselectperent($v['children'], $pass+1);
                }
        
            }
         }
         
        

        
            return $html;
        }
          // `city_area`  `city_area_id`, `city_area_title`, `city_area_token`, `city_area_perant`, `city_area_enterdate` 
    
          public function toselectperentedit($tree, $pass = 0 ,$selected,$unsetme) {
             $html = '';
             echo $selected;
                if(!empty($tree)){
              foreach ($tree as $key=>$v) {      
                    if($selected == $v['city_area_id']){  
                        $selected = 'SELECTED';
                    }else{
                        $selected = '';
                    }
                    
                    if($unsetme != $v['city_area_id'] ){
                      $html.= '<option value="'.$v['city_area_id'].'" '.$selected.' >';
                        $html .= str_repeat("---", $pass); // use the $pass value to create the --
                        $html .= ' '.$v['city_area_title'] . '</option>';
                
                        if ( array_key_exists('children', $v) ) {
                            $html.= $this->toselectperentedit($v['children'], $pass+1,$selected,$unsetme);
                        }  
                    }
                    
            
                }
            
            }
            
                return $html;
        }
         // `city_area`  `city_area_id`, `city_area_title`, `city_area_token`, `city_area_perant`, `city_area_enterdate` 
    
           public  function buildTree($elements, $parentId = 0) {
              $branch = array();
               if(!empty($elements)){
                foreach ($elements as $element) {
                    if ($element['city_area_perant'] == $parentId) {
                        $children = $this->buildTree($elements, $element['city_area_id']);
                        if ($children) {
                            $element['children'] = $children;
                        }
                        $branch[] = $element;
                    }
                }
             }
                return $branch;
            }
            
            
}
?>