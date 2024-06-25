<?php
$can_edit = false;
$is_admin = true;

$can_aprove = true;




if($is_admin){
    echo "Welcome, admin!";
    $can_edit = true;
    if($can_aprove){
        echo "Please approve the pending items";
    }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP if Statement Demo</title>
</head>
<body>

        <?php $is_admin = true;  ?>

            <?php if($is_admin) :  ?>
            <a href="#">edit</a>
            <?php endif ; ?>

            <a href="#">view</a>


</body>
</html>
