<form action="./api/add_que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        <div style="display: flex;">
            <div class="clo">問卷名稱</div>
            <div><input type="text" name="text"></div>
        </div>
        <div class="options">
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