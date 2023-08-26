<form action="./api/add_que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        <div style="display: flex;">
            <div class="clo">問卷名稱</div>
            <div><input type="text" name="text"></div>
        </div>
        <div class="options clo">
            <label>選項</label>
            <input type="text" name="opt[]">
            <input type=button onclick="more()" value="更多"></button>
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="清空">
        </div>
    </fieldset>
</form>
<fieldset>
    <legend>問卷管理</legend>
    <form action="./api/update_que.php" method="post">
        <table style="width:100%;margin:auto;text-align: center">
            <tr style="text-align: center;">
                <td style="width:10%">編號</td>
                <td style="width:70%">標題</td>
                <td style="width:10%">顯示</td>
                <td>刪除</td>
            </tr>
            <?php
            foreach ($rows as $idx => $row) {
            ?>
                <tr>
                    <td><?= $start + $idx; ?></td>
                    <td><?= $row['text']; ?></td>
                    <td>
                        <input type="checkbox" value="<?= $row['id']; ?>" name="sh[<?= $row['id']; ?>]" <?= ($row['sh'] == 1) ? "checked" : "";; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[<?= $row['id']; ?>]" value="<?= $row['id']; ?>">
                        <input type="hidden" name="id[<?= $row['id']; ?>]" value="<?= $row['id']; ?>">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div style="text-align: center;">
            <?= $links; ?>
        </div>
        <div style="text-align: center;">
            <input type="submit" value="確定修改">
        </div>
    </form>
</fieldset>
<script>
    function more() {
        let opt = `
        <div>
            <label>選項</label>
            <input type="text" name="opt[]">
        </div>`;

        $(".options").append(opt);
    }
</script>