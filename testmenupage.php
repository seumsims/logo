<?php   ?>
<div id="boxmID">
<div class="welcome-panel"> 
<?php 

$post   = get_post( 405 );
$output =  apply_filters( 'the_content', $post->post_content );
_e($output);

?>
</div>
</div>
