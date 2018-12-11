<h1>Пользователи</h1>

<form action="" method="post" style="display: flex">
    <input type="search" placeholder="Поиск данных" value="<?php echo $search;?>" name="searchFile" class="searchFile">
    <button type="submit" name="searchInput" class="searchInput" style="background: indigo; color:white">Поиск</button>
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
