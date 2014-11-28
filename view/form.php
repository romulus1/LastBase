<?php
require_once(__DIR__ . "/../model/config.php");
?> 


<hi>Create Blog Post</hi> <!-- displays text--> 


<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"> <!-- creates a form code to put in the text as a form--> 
    <div> 
        <label for="title">title:</label> <!--displays title on to the screen as a text -->  
        <input type="text" name="title" /> 
    </div> 
    <div> 
        <label for="post">Post: </label> <!--Puts post on screen--> 
        <textarea name="post"></textarea> <!--displays post--> 
    </div>          
    <div> 
        <button type="submit"></button> <!--puts a submit button (not yet gives information to the server) --> 
    </div> 
</form> 
