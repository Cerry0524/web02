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
                    <input type="radio" name="vote" id="vote" value="<?=$row['id'];?>">
                </td>
                <td>
                    <?= $row['text']; ?>
                </td>
               
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct">
        <button onclick="vote()">我要投票</button>
    </div>
</fieldset>
<script>
    function vote(){
        id=$("#vote:checked").val();
        // console.log(opt);
        $.post("./api/vote.php",{id},(res)=>{
            // console.log(res);
            location.href="?do=result&id="+res;
        });

    }
</script>