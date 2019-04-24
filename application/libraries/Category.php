<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category{
     public function __construct()
        {
                // Do something with $params
        }
	  public function toselectperent($tree, $pass = 0 ) {
         $html = '';
             if(!empty($tree)){
             foreach ( $tree as $key=>$v ) {           
       
                $html.= '<option value="'.$v['category_id'].'"   data-value="'.$v['category_id'].'" >';
                $html .= str_repeat("---", $pass); // use the $pass value to create the --
                $html .= ' '.$v['category_title'] . '</option>';
        
                if ( array_key_exists('children', $v) ) {
                    $html.= $this->toselectperent($v['children'], $pass+1);
                }
        
            }
         }
         
        

        
            return $html;
        }
          public function toselectperentedit($tree, $pass = 0 ,$selected,$unsetme) {
             $html = '';
            // echo $selected;
                if(!empty($tree)){
              foreach ($tree as $key=>$v) {      
                    if($selected == $v['category_id']){  
                        $selected = 'SELECTED';
                    }else{
                        $selected = '';
                    }
                    
                    if($unsetme != $v['category_id'] ){
                        $html .= '<option value="'.$v['category_id'].'" '.$selected.' >';
                        $html .= str_repeat("---", $pass); // use the $pass value to create the --
                        $html .= ' '.$v['category_title'] . '</option>';
                
                        if ( array_key_exists('children', $v) ) {
                            $html.= $this->toselectperentedit($v['children'], $pass+1,$selected,$unsetme);
                        }  
                    }
                    
            
                }
            
            }
            
                return $html;
        }
          public  function buildTree($elements, $parentId = 0) {
              $branch = array();
               if(!empty($elements)){
                foreach ($elements as $element) {
                    if ($element['category_parent'] == $parentId) {
                        $children = $this->buildTree($elements, $element['category_id']);
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