<!DOCTYPE html>
<html>
    <head>
        <title>
            Users Authorization
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/style.css">
    </head>
    <body>
    <div class="container">

            <div class="center">
                <div class="back"></div>
                <div class="text">Введите данные пользователя: </div>
                <form method="post" action="" class="formstyle">
                    <input class="textbox" type="text" name="user[login]" placeholder="Login"><br /><br />
                    <input class="textbox" type="password" name="user[user_password]" placeholder="Password"><br /><br />
                    <input class="textbox" type="email" name="user[user_email]" placeholder="Email" > <br /><br />
                    <input class="textbox" type="text" name="user[user_name]" placeholder="Name" > <br /><br /><br />
                    <input class="submit" type="submit" name="save_user_btn" value="GO">
                 </form>
            </div>
        </div>
    </body>
</html>
