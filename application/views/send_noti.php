    <div class="container">
         <?php
            	 if(isset($error)){
                         echo '<div class="red  row ">'.$error.'</div>';
                 }elseif(isset($done)){
                      echo '<div class="  green row ">'.$done.'</div>';
                 }
          ?>
     <div class="row">
        <?php

                $arrayattr = array('role'=>'form' , 'class'=>'col s12');
                echo   form_open_multipart('notifications/newnoti',$arrayattr);
                if(isset($return)){
                  $this->MainModel->pre($return);
                }

                ?>
        <div class="row">

            <div class="input-field col s12">

                  <input style="height: 150px;" type="text" id="autocomplete-input" name="token" class="autocomplete" />
                  <label for="autocomplete-input">Token <small>If Send To Many Add Token,Token,Token </small></label>
                </div>

                   <div class="input-field col s12">
                        <select class="form-control" name="type">
                            <!--<option >please if you want send to all type of os</option> -->
                            <option >Send to specific users</option>
                            <option value="android">android</option>
                            <option value="ios">ios</option>
                        </select>

                  <label for="autocomplete-input">Type <small> </small></label>
                </div>
            <div class="input-field col s12">
                <input  id="title" name="title" type="text" class="validate"/>
                 <label for="title">Title</label>
            </div>

            <div class="input-field col s12">
              <textarea id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
             <div class="input-field col s12">
                  <div id="url-div"></div>
                  <input type="checkbox" id="haveurl" />
                  <label for="haveurl">Have Url</label>
             </div>


              <center>
              <div class='row'>
                <button type='submit' name='Send' value="Send"  class='btn btn-large waves-effect indigo right'>Send</button>
              </div>
            </center>
          </div>
        </form>
      </div>



    </div>
 <?php
    foreach($users as $key=>$value){
                    $tokens_arr[$value['Token']] = 'http://epic-demo.com/notifications/assets/notifications-01.png' ;
               }
?>
    <script>
     $(document).ready(function () {


     $('#haveurl').change(function() {
         if($(this).is(":checked")) {
            $("#url-div").html('<div class="input-field col s12"><input  id="url" name="url" type="text" class="validate"/><label for="url">Url</label></div>');
        }else{
            $("#url-div").html('');
        }

    });
    $('input.autocomplete').autocomplete({
        data: <?= json_encode($tokens_arr); ?>
    });


         });
    </script>