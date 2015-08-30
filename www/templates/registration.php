<title>Users Authorization</title>
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
        <div class = "text" style = "margin-top: 87%;">
            <?php
                if (isset($last_inserted_id)) {
                     echo 'Успешно. <br />  Ваш ID = ' . $last_inserted_id;
                    unset($last_inserted_id);
                } elseif ((isset($notice))){
                    echo '<a id="notice">Необходимо заполнить поля:<br />' . $notice . '</a>';
                    unset($notice);//Нужны ли эти строчки
                }
            ?>
        </div>
    </div>
</div>