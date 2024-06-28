<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
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