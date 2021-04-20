<?php class WPDribbble {
    public function __construct()
    {
        _e('WPDribbble');
    }

    public  $test = "WPDribbble Test Var";
    public function test()
    {
        _e('WPDribbble Test');
    }
}
 
$wpDribbble = new WPDribbble(); 
_e($wpDribbble -> test);
var_dump($wpDribbble );
 ?>
<div id="boxmID">
<div class="welcome-panel"> </div>
 </div>
