<?php var_dump(get_post(108));  ?>
<?php //get_post(108); ?>
<?php print_r(get_post([108 => 'post_content'])); ?>

<?php $post_7 = get_post( 108 ); 
$title = $post_7->post_title; 
_e($title);

?>

<?php $postlogo = get_post( 108 ); 
$postlogo_content = $postlogo->post_content; 
_e($postlogo_content);

?>
<div id="boxmID">
<div class="welcome-panel"> </div>
 </div>
