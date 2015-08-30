<form method="post" action="" class="formstyle">
    <input class="textbox" type="text" name="select[id]" placeholder="Id"><br /><br />
    <input class="textbox" type="text" name="select[login]" placeholder="Login"><br /><br />
    <input class="textbox" type="email" name="select[user_email]" placeholder="Email" > <br /><br />
    <input class="textbox" type="text" name="select[user_name]" placeholder="Name" > <br /><br />
    <input class="textbox" type="text" name="select[create_date]" placeholder="Date"><br /><br /><br />
    <input class="submit" type="submit" name="select_user_btn" value="Select"><br /><br />
    <input class="submit" type="submit" name="show_user_list_btn" value="Userlist">
</form>

<table border="2" cellpadding="5" class="center2">
    <thead>
    <tr>
      <th id="id_td">  <!-- перенес из прошлой таблички-->
            ID
        </th>
        <th>
            Логин
        </th>
        <th>
            Имя
        </th>
        <th>
            E-mail
        </th>
        <th>
            Дата регистрации
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
        if (isset($user)) {
            foreach ($user as $sub_arr) {
                echo '<tr>
                      <td >
                         ' . $sub_arr['id'] . '
                      </td >
                      <td >
                         ' . $sub_arr['login'] . '
                      </td >
                      <td>
                         ' . $sub_arr['user_name'] . '
                      </td>
                      <td >
                         ' . $sub_arr['user_email'] . '
                      </td >
                      <td >
                         ' . $sub_arr['create_date'] . '
                      </td >
                  </tr >';
            }
        }
    ?>
    </tbody>
</table>
