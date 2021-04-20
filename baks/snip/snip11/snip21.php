<?php  //var_dump(get_post(108));  ?>


<?php $test = get_post( 405  ); $testshow = $test-> post_name; _e($testshow); ?>

<div id="boxmID">
<div class="welcome-panel"> 
<div <?php post_class() ?>>
<?php 

$postlogo = get_post( 405 ); 
$postlogo_content = $postlogo->post_content; 
_e($postlogo_content);

?>
<label for="w3review">Edit Logo:</label>

<textarea id="w3review" name="w3review" rows="15" cols="150">
<?php 

$postlogo = get_post( 405 ); 
$postlogo_content = $postlogo->post_content; 
_e($postlogo_content);

?>
</textarea>
</div>






 </div>
 </div>


$examplePost = get_post(405);
 
//echo $examplePost->post_content; // Don't do this
 
echo apply_filters( 'the_content', $examplePost->post_content ); // Do this instead