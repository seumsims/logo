<?php class WPDribbble {
    public function __construct()
    {
        
    }

    
    public function test()
    {
        _e('WPDribbble Test');
        do_shortcode( '[baztag]content[/baztag]');
    }
}
 
$wpDribbble = new WPDribbble(); 
$wpDribbble -> test();
// var_dump($wpDribbble);
 ?>
<div id="boxmID">
<div class="welcome-panel"> </div>
 </div>
