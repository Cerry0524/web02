<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/del_acc.php" method="post">
        <table style="width:100%;margin:auto;text-align:center">
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td><?= $row['acc']; ?></td>
                    <td><?= $row['pw']; ?></td>
                    <td>
                        <input type="checkbox" name="del[<?= $row['id']; ?>]" value="<?= $row['id']; ?>">
                        <input type="hidden" name="id[]" >
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="ct">
            <input type="submit" value="確定刪除">
            <input type="reset" value="清空選取">
        </div>
    </form>

    <h1>新增會員</h1>
    <div style="color:red">請設定您要註冊的帳號及密碼（最長12個字元）</div>
    <table>
        <tr>
            <td>Step1:登入帳號</td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td>Step2:登入密碼</td>
            <td>
                <input type="text" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td>Step3:再次確認密碼</td>
            <td>
                <input type="text" name="pw2" id="pw2">
            </td>
        </tr>
        <tr>
            <td>Step4:信箱（忘記密碼時使用）</td>
            <td>
                <input type="text" name="email" id="email">
            </td>
        </tr>
    </table>
    <div>
        <button onclick="reg()">新增</button>
        <button onclick="clearall()">清除</button>
    </div>
</fieldset>
<script>
    function reg() {
        let user = {};
        user.acc = $("#acc").val();
        user.pw = $("#pw").val();
        user.pw2 = $("#pw2").val();
        user.email = $("#email").val();

        if (user.acc == '' || user.pw == '' || user.pw2 == '' || user.email == '') {
            alert("不可空白");
        } else if (acc.pw != acc.pw2) {
            alert("密碼錯誤");
        } else {
            $.post("./api/reg.php", user, (res) => {
                // console.log(res);
                switch (parseInt(res)) {
                    case 1:
                        alert("註冊成功，歡迎加入")
                        location.href = "index.php";
                        break;
                    case 0:
                        alert("帳號重複");
                        location.href = "?do=login";
                        break;
                }
            })
        }
    }

    function clearall() {
        $("input[type='text'],input[type='password'],input[type='number'],input[type='selected']").val("");
    }
</script>