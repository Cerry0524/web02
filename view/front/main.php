<style>
    .navbar {
        display: flex;
    }

    .nav {
        border: 1px solid black;
        background-color: #CCC;
        padding: 5px 10px;
        margin-bottom: -1px;
    }

    .nav-select {
        background-color: white;
        border-bottom: 1px solid white;
    }

    .posts {
        padding: 5px 10px;
        border: 1px solid black;
    }

    .post {
        display: none;
    }

    .post-select {
        display: block;
    }
</style>
<div class="navbar">
    <div class="nav nav-select">健康新知</div>
    <div class="nav">菸害防治</div>
    <div class="nav">癌症防治</div>
    <div class="nav">慢性病防治</div>
</div>
<div class="posts">
    <pre>
    <?php
    for ($i = 1; $i <= 4; $i++) {
    ?>
            <div class="post <?= ($i == 1) ? "post-select" : ""; ?>">
                <h2><?= $News->type($i); ?></h2>
                <span><?= $News->find(['type' => $i])['title']; ?>
                <?= $News->find(['type' => $i])['text']; ?></span>
            </div>
            <?php
        }
            ?>
    </pre>
</div>
<script>
    $(".nav").click(function() {
        console.log(($(this).data('nav')));
        $(".nav").removeClass("nav-select");
        $(this).addClass("nav-select");

        $(".post").removeClass("post-select");
        $(".post").eq(($(this).index())).addClass("post-select");
    })
    $(".nav").eq(0).addClass("nav-select");
</script>