<?php

if(isset($_POST['email'])){
    var_dump($_POST['email']);
}
//passing by URL
if(isset($_GET['email'])){
    var_dump($_POST['email']);
}
?>

<form action="form.php" method="post">    
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"/>
    </div>
    <button type="submit">Submit</button>
</form>

<form action="form.php" method="get">    
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"/>
    </div>
    <button type="submit">Submit</button>
</form>