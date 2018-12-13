<h2>Блок для <?php if(!empty($_POST['id'])){ echo "изменения"; } else { echo "добавления"; } ?> пользователя</h2>
<strong class="error"><?php echo (isset($vars['errors']))?$vars['errors']:""; ?></strong>

<div class="formAdd">
<form action="" method="post">
    <input type="text" placeholder="ID" name="id" value="<?php if(!empty($_POST['id'])){ echo $vars['arrUser']['id']; } else { echo (isset($vars['count']))?$vars['count']:""; } ?>">
    <input type="text" placeholder="Имя" name="name" value="<?php if(!empty($_POST['id'])){ echo $vars['arrUser']['name'];}  ?>">
    <input type="text" placeholder="Логин" name="login" value="<?php if(!empty($_POST['id'])){ echo $vars['arrUser']['login']; } ?>">
    <input type="date" placeholder="День рождение" name="birthday" value="<?php if(!empty($_POST['id'])){ echo $vars['arrUser']['birthday']; } ?>">
    <input type="hidden" name="submit" value="1" />
    <button class="addContent" type="submit" name="addPerson"><?php if(!empty($_POST['id'])){ echo "Изменить"; } else { echo "Добавить"; } ?></button>
</form>
</div>
