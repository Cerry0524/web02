<fieldset>
    <legend>首頁 > 問卷調查</legend>
    <table>
        <tr>
            <td>編號</td>
            <td>問卷題目</td>
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
        <?php
        $rows = $Que->all(['subject_id' => 0]);
        foreach ($rows as $idx => $row) {
            $vote = $Que->sum('vote', ['subject_id' => $row['id']]);
        ?>
            <tr>
                <td>
                    <?= $idx + 1; ?>.
                </td>
                <td>
                    <?= $row['text']; ?>
                </td>
                <td>
                    <?= $vote; ?>
                </td>
                <td>
                    <a href="?do=result&id=<?= $row['id']; ?>">結果</a>
                </td>
                <td>
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <a href="?do=vote&id=<?= $row['id']; ?>">參與投票</a>
                    <?php
                    }else{
                        echo "請先登入";
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</fieldset>
<script>

</script>