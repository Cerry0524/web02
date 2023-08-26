<fieldset>
    <legend>會員登入</legend>
    <table>
        <tr>
            <td>帳號</td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td>密碼</td>
            <td>
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
    </table>
    <div>
        <button onclick="login()">登入</button>
        <button onclick="clearall()">清除</button>
        <span style="float: right;">
            <a href="?do=forgot">忘記密碼</a>|
            <a href="?do=reg">尚未註冊</a>
        </span>
    </div>
</fieldset>
<script>
    function login() {
        let user = {};
        user.acc = $("#acc").val();
        user.pw = $("#pw").val();

        $.post("./api/login.php", user, (res) => {
            console.log(res);
            switch (parseInt(res)) {
                case 0:
                    alert("查無帳號");
                    location.href = "?do=login";
                    break;
                case 2:
                    alert("密碼錯誤");
                    location.href = "?do=login";
                    break;
                case 1:
                    location.href = "index.php";
                    break;
                case 4:
                    location.href = "backend.php";
                    break;

            }
        })
    }

    function clearall() {
        $("input[type='text'],input[type='password'],input[type='number'],input[type='selected']").val("");
    }
</script>