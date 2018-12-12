<h1>Пользователи</h1>

<form action="" method="post" style="display: flex">
    <input type="search" placeholder="Поиск данных" value="<?php echo (isset($vars['search']))?$vars['search']:""; ?>" name="searchFile" class="searchFile" id="search">
    <input type="hidden" name="test" value="1" id="test">
</form>

<div style="display: flex; flex-wrap:wrap;">

<?php foreach ($vars['arr'] as $val): ?>
    <div class="UsersBlock">
        <div class="UserName">
            <div>
                <strong>ID: <?php echo $val['id'] ?></strong><br>
            </div>
            <div>
                <strong>NAME: <?php echo $val['name'] ?></strong><br>
            </div>
            <div>
                <strong>LOGIN: <?php echo $val['login'] ?></strong><br>
            </div>
            <div>
                <strong>BIRTHDAY: <?php echo $val['birthday'] ?></strong><br>
            </div>
        </div>
        <div class="changeDelete">

            <form action="/person/change" method="post">
                <input type="hidden" name="id" value="<?php echo $val['id'] ?>" />
                <button type="submit" name="change" value="change" class="blockChange">Изменить</button>
            </form>

            <form action="/person/delete" method="post">
                <input type="hidden" name="id" value="<?php echo $val['id'] ?>" />
                <button type="submit" name="delete" value="delete" class="blockDelete">Удалить</button>
            </form>

        </div>
    </div>
<?php endforeach; ?>

</div>
<div class="blockAdd">
    <a href="/person/add">Добавить</a>
</div>

<div class="search_result" id="resSearch"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(function(){
    $("#search").keyup(function(){
        var search = $("#search").val();
        $.ajax({
            type: "POST",
            url: "http://test.app.devspark.ru/",
            data: {"searchFile": search},
            success: function(response){
                $("#resSearch").html(response);
            }
        });
    });
});

</script>
