<fieldset>
    <legend>首頁 > 分類網誌 >最新文章區</legend>
    <table>
        <tr style="text-align: center;">
            <td style="width:40%" class="clo">標題</td>
            <td style="width:50%">內容</td>
            <td></td>
        </tr>
        <?php
        $rows = $News->show();
        foreach ($rows as $idx => $row) {
        ?>
            <tr>
                <td class="clo title"><?= $row['title']; ?></td>
                <td>
                    <div class="list">
                        <?= mb_substr($row['text'], 0, 20); ?>
                    </div>
                    <div class="all" style="display: none;">
                        <?= $row['text']; ?>
                    </div>
                </td>
                <td>
                    <div onclick="goods(<?= $row['id']; ?>)">
                        <a href="#">|
                            <?= $Log->showGoods($row['id']); ?>
                        </a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div style="text-align: center;">
        <?= $News->links(); ?>
    </div>
</fieldset>
<script>
    $(".title,.list,.all").click(function() {
        $(this).parent().find(".list,.all").toggle();
    })

    function goods(id) {
        $.post("./api/goods.php", {
            id
        }, (res) => {
            // console.log(res);
            location.reload();
        })
    }
</script>