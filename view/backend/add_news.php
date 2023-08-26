<form action="./api/add_form.php" method="post">
    <fieldset>
        <legend>新增文章</legend>
        <table style="width:80%;margin:auto">
            <tr>
                <td>標題</td>
                <td>
                    <input type="text" name="title" id="title">
                </td>
            </tr>
            <tr>
                <td>
                    分類
                </td>
                <td>
                    <select name="type" id="type">
                        <?php
                        for ($i = 0; $i < 4; $i++) {
                        ?>
                            <option value="<?=$i;?>"><?= $type = $News->type($i); ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>內容</td>
                <td>
                    <textarea name="text" id="text" style="width:90%;height:350px"></textarea>
                </td>
            </tr>
        </table>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </fieldset>
</form>