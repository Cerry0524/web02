<div>首頁 > 分類網誌 > <span id="header">健康新知</span></div>
<div style="display:flex">
    <fieldset style="width: 35%;">
        <legend>分類網誌</legend>
        <div class="navbar">
            <div class="nav" data-type="0">
                <a href="#">健康新知</a>
            </div>
            <div class="nav" data-type="1">
                <a href="#">菸害防治</a>
            </div>
            <div class="nav" data-type="2">
                <a href="#">癌症防治</a>
            </div>
            <div class="nav" data-type="3">
                <a href="#">慢性病防治</a>
            </div>
        </div>
    </fieldset>
    <fieldset style="width: 55%;">
        <legend>文章列表</legend>
        <div id="lists">
            <div class="list"></div>
        </div>
        <div class="post"></div>
    </fieldset>
</div>
<script>
    list(1);

    $(".nav,.post").click(function() {
        // console.log($(this));
        let type = $(".nav").eq($(this).index()).data('type');
        list(type);
    })

    function list(type) {
        // console.log($(this));
        $("#header").text($(".nav").eq(type).text());
        $.get("./api/list.php", {
            type
        }, (list) => {
            $("#lists").html(list);
            $(".post").html("");
        })
    }

    function post(id) {
        // console.log(id);
        $.post("./api/post.php", {
            id
        }, (post) => {
            $(".post").html(post);
            $("#lists").html("");
        })
    }
</script>