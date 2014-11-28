<?php
    require_once(__DIR__ . "/../model/config.php"); //connects to config.php to connect proper file to display as post.php 
?> 
<nav> 
    <ul> 
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Forum</a></li> <!--uses path variable to connect to the post.php file-->  
    </ul> 
</nav> 
