<?php  var_dump(get_post(108));  ?>


<div id="boxmID">
<div class="welcome-panel"> 
<div <?php post_class() ?>>
<?php 

$postlogo = get_post( 405 ); 
$postlogo_content = $postlogo->post_content; 
_e($postlogo_content);

?>
</div>

<label for="w3review">Review of W3Schools:</label>

<textarea id="w3review" name="w3review" rows="4" cols="50">
At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
</textarea>

 </div>
 </div>
