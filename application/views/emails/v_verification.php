

<!--<h2><a href="http://epic-demo.com/furniture/services/customers/Activeuser?customer_mail_token=<?=$customer_mail_token?>">Verify your E-mail</a> </h2> -->
<?php if(isset($customer_mail_token)){?>
<h2>Dear customer please check your verification code:&nbsp;<?=$customer_mail_token?></h2>
<?php }else{?>

<h2>Dear Merchant please check your verification code:&nbsp;<?=$merchant_mail_token?></h2>
<?php } ?>