<style>
    #linebar {
        background-color: #CCC;
        height: 32px;

    }
</style>
<fieldset>
    <legend>首頁 > 問卷調查 ><?= $Que->find($_GET['id'])['text']; ?></legend>
    <h3><?= $Que->find($_GET['id'])['text']; ?></h3>
    <table>
        <?php
        $rows = $Que->all(['subject_id' => $_GET['id']]);
        $total = $Que->sum('vote',['subject_id' => $_GET['id']]);
        $total = ($total == 0) ? "1" : $total;
        foreach ($rows as $idx => $row) {
            $vote = $row['vote'];
            $rate = $vote / $total;
        ?>
            <tr>

                <td>
                    <?= $row['text']; ?>
                </td>
                <td style="display: flex;">
                    <div id="linebar" style="width:<?= $rate * 500; ?>px"></div>
                    <div><?= $vote; ?>票(<?= round($rate * 100); ?>%)</div>
                </td>
                <td>
                </td>
                <td>

                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</fieldset>