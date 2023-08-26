<fieldset>
    <div>請輸入信箱以查尋密碼</div>
    <div><input type="text" name="email" id="email"></div>
    <div id="result"></div>
    <div>
        <button onclick="forgot()">尋找</button>
    </div>
</fieldset>
<script>
    function forgot(){
        $.post("./api/forgot.php",{email:$("#email").val()},(res)=>{
            // console.log(res);
            $("#result").text(res);
        })
    }
</script>