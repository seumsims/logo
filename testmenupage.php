<?php // var_dump(get_post(108));  ?>


<div id="boxmID">
<div class="welcome-panel"> 
<div <?php post_class() ?>>
<?php 

$postlogo = get_post( 405 ); 
$postlogo_content = $postlogo->post_content; 
_e($postlogo_content);

?>
</div>
 </div>
 </div>
