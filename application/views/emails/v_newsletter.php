
<h1>latest posts of <?=$category_name?> </h1>

<?php  foreach($post_info as $value)  {            ?>

          <?php if($category_type == 'blog_category') { ?>
           <h2><?=$value['post_title']?></h2>
          <br>
          <h2><a href="http://stream.wsiksa.com/blog/post/<?=$value['post_slug']?>">Details</a> </h2>
          <?php } elseif($category_type == 'resource_category') { ?>
           <h2><?=$value['resource_title']?></h2>
          <br>
          <h2><a href="http://stream.wsiksa.com/resources/single/<?=$value['resource_slug']?>">Details</a> </h2>
          <?php } ?>
          <p>-----------------------------------------------------------------------------</p>
     <?php } ?>


<h1>newsletter_test</h1>