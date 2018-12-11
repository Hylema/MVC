<h2>Блок для добавления изменения/пользователя</h2>
<strong class="error"><?php echo (isset($vars['errors']))?$vars['errors']:""; ?></strong>

<div class="formAdd">
<form action="" method="post">
    <input type="text" placeholder="ID" name="id" value="<?php if(!empty($_POST['id'])){echo (isset($_POST['id']))?$_POST['id']:"";} else { echo (isset($vars['count']))?$vars['count']:""; }  ?>">
    <input type="text" placeholder="Имя" name="name" value="<?php echo (isset($vars['user']['name']))?$vars['user']['name']:""; ?>">
    <input type="text" placeholder="Логин" name="login" value="<?php echo (isset($vars['user']['login']))?$vars['user']['login']:""; ?>">
    <input type="date" placeholder="День рождение" name="birthday" value="<?php echo (isset($vars['user']['birthday']))?$vars['user']['birthday']:""; ?>">
    <input type="hidden" name="submit" value="1" />
    <button class="addContent" type="submit" name="addPerson">Добавить нового</button>
</form>
</div>