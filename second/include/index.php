<?php include_once 'inc/header.php';?>
<?php include_once 'functions.php';?>

<?php
//require and require_once are language constructs, not functions. Also can be use
function render_article(){
    include 'functions.php';
    return "
            <article>
                <h1>$title</h1>
                $content
             </article>
    ";
}

echo render_article();

?>

<?php include_once 'inc/footer.php'?>