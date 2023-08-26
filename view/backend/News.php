<form action="./api/update_news.php" method="post">
    <table style="width: 80%;margin:auto;text-align: center">
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
                <td><?= $row['title']; ?></td>
                <td>
                    <input type="checkbox" name="sh[<?= $row['id']; ?>]" <?= ($row['sh'] == 1) ? "checked" : "";; ?>>
                </td>
                <td>
                    <input type="checkbox" name="del[<?= $row['id']; ?>]">
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
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
        <input type="button" onclick="addNews()" style="float:left;" value="新增文章"></button>
        <input type="submit" value="確定修改">
    </div>
</form>
<script>
    function addNews(){
        location.href="?do=add_news";
    }
</script>