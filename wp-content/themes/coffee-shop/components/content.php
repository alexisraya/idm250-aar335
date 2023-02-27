<div class="content-blocks">
<?php 
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    } 
    }else{
        echo 'No content found';
    }
?>
</div>