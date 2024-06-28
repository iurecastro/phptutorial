<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="name" href="css/style.css">
        <title>PHP form Demo</title>
    </head>
    <body>
        <main>
            <form action="subscribe.php" method="post">
                <div>
                    <label>Name: </label>
                    <input type="text" name="name" placeholder="Type your name" />                    
                </div>

                <div>
                    <label>Email: </label>
                    <input type="text" name="email" placeholder="Type your email" />                    
                </div>

                <button type="submit">subscribe</button>


            </form>
        </main>

    </body>
</html>