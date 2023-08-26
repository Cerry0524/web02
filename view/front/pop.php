<style>
    .content {
        position: absolute;
    }

    .all {
        position: relative;
        background-color: black;
        color: white;
        width: 300px;
        height: 300px;
        opacity: 0.8;
        z-index: 999;
        display: none;
        overflow: auto;
    }
 
</style>
<fieldset>
    <legend>首頁 > 分類網誌 >人氣文章區</legend>
    <table>
        <tr style="text-align: center;">
            <td style="width:30%" class="clo">標題</td>
            <td style="width:45%">內容</td>
            <td>人氣</td>
        </tr>
        <?php
        $rows = $News->popshow();
        foreach ($rows as $idx => $row) {
        ?>
            <tr>
                <td class="clo title"><?= $row['title']; ?></td>
                <td class="content">
                    <div class="list"><?= mb_substr($row['text'], 0, 20); ?> </div>
                    <div class="all">
                        <h2 style="color:aqua;"> <?= $row['title']; ?></h2>
                        <?= $row['text']; ?>
                    </div>
                </td>
                <td>
                    <div style="display: flex;">
                        <div>
                            <?= $row['goods']; ?> 個人說
                            <img src="./icon/02B03.jpg" style="width:20px;height:20px">
                        </div>
                        <div onclick="goods(<?= $row['id']; ?>)">
                            <a href="#">-
                                <?= $Log->showGoods($row['id']); ?>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div style="text-align: center;">
        <?= $News->links('pop'); ?>
    </div>
</fieldset>
<script>
    $(".title,.content").hover(function() {
        $(this).parent().find(".all").show();
    }, function() {
        $(this).parent().find(".all").hide();
    });

    function goods(id) {
        $.post("./api/goods.php", {
            id
        }, (res) => {
            console.log(res);
            $.post("./api/change_good.php", {
                id,
                res
            })
            location.reload();
        })
    }
</script>