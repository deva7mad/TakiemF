<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchantcategory{
     public function __construct()
        {
                // Do something with $params
        }
           // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate` 
    
	  public function toselectperent($tree, $pass = 0 ) {
         $html = '';
             if(!empty($tree)){
             foreach ( $tree as $key=>$v ) {           
       
                $html.= '<option value="'.$v['mtype_id'].'"   data-value="'.$v['mtype_id'].'" >';
                $html .= str_repeat("---", $pass); // use the $pass value to create the --
                $html .= ' '.$v['mtype_title'] . '</option>';
        
                if ( array_key_exists('children', $v) ) {
                    $html.= $this->toselectperent($v['children'], $pass+1);
                }
        
            }
         }
         
        

        
            return $html;
        }
          // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate` 
    
          public function toselectperentedit($tree, $pass = 0 ,$selected,$unsetme) {
             $html = '';
             echo $selected;
                if(!empty($tree)){
              foreach ($tree as $key=>$v) {      
                    if($selected == $v['mtype_id']){  
                        $selected = 'SELECTED';
                    }else{
                        $selected = '';
                    }
                    
                    if($unsetme != $v['mtype_id'] ){
                      $html.= '<option value="'.$v['mtype_id'].'" '.$selected.' >';
                        $html .= str_repeat("---", $pass); // use the $pass value to create the --
                        $html .= ' '.$v['mtype_title'] . '</option>';
                
                        if ( array_key_exists('children', $v) ) {
                            $html.= $this->toselectperentedit($v['children'], $pass+1,$selected,$unsetme);
                        }  
                    }
                    
            
                }
            
            }
            
                return $html;
        }
         // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate` 
    
           public  function buildTree($elements, $parentId = 0) {
              $branch = array();
               if(!empty($elements)){
                foreach ($elements as $element) {
                    if ($element['mtype_perant'] == $parentId) {
                        $children = $this->buildTree($elements, $element['mtype_id']);
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