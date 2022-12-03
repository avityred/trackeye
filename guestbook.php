<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Track The Eye</title>
        <meta charset="UTF-8">
        <meta name="description" content="Rebirth of personal websites.">
        <meta name="keywords" content="web">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles.css">
        <link rel="icon" type="image/x-icon" href="img/trippy.gif">
    </head>
    <body>
        <noscript>Good job! You've disabled javascript. <img src="img/nojs.gif" /></noscript>
        
        <h1>Track the eye</h1>
        <hr/>
        <nav>
            <a href="./index.html">&lt;HOME&gt;</a>
            <a href="articles/index.html">&lt;ARTICLES&gt;</a>
            <a href="learn/index.html">&lt;TUTORIALS&gt;</a>
            <a href="./about.html">&lt;ABOUT&gt;</a>
        </nav>
        <hr/>
        <br/>
        <div style="text-align: center; vertical-align: middle; width: 800px;">
            <h1>Guestbook</h1>
            <hr/>
            <em>♥ Sign our guestbook to let us know you were here! ♥</em>
            <br/><br/><br/>

            <div class="special" style="background-image: url(img/sky.gif); color: white; width: 300px; height: 300px;">
                 <form action="guestbook.php" method="POST">

                    <h3 style="color: red;">Guestbook</h3>
                    <section class="spec">
                        <label>
                            Nickname<span class="req">*</span>:
                        </label>
                        <input name="name" type="text" required="" />
                    </section>
                    <section class="spec">
                        <label style="margin-right: 50px;">
                            Website:
                        </label>
                        <input name="www" type="url" />
                    </section>
                    <section class="spec">
                        <label>
                            Message<span class="req">*</span>:
                        </label>
                        <textarea name="message" required=""></textarea>
                    </section>
                    <br/>
                    <input type="submit" id="submit" value="Submit" style="padding-right: 80px; padding-left: 80px;">
                </form>
                </div>
                <hr style="color: red;"/>
                <h2 style="color: red;">Messages:</h2>
                
                <div class="msgdiv">
                    <?php

                        if(isset($_POST['name'])) {
                            $name = $_POST['name'];
                            $web = $_POST['www'];
                            $msg = $_POST['message'];


                            $file = fopen("catacombs.html", "a");
                            fwrite($file, "<div style=\"width: 300px;\">");
                            fwrite($file, "<b> Name: </b>" .$name. "<br/>");
                            fwrite($file, "<b> Website: </b> <a href=\"" .$web. "\">" .$web. "</a> <br/>");
                            fwrite($file, "<b> Message: </b>" .$msg);
                            fwrite($file, "</div> <br/>");
                            fclose($file);
                        }

                        require("catacombs.html")
                    ?>
                </div>

            
        </div>
    </body>
</html>