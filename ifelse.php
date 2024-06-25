<?php

//IFELSE operator


$is_authenticated = true;

if( $is_authenticated ){
    echo "Welcome!";
}else{
    echo "You are not autorized to access this page";

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP if Statement Demo</title>
</head>
<body>

<?php if ($is_authenticated) :?>
    <a href="#">Logout</a>
    <?php else: ?>
        <a href="#">login</a>
<?php endif; ?>

  
</body>
</html>