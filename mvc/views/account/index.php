<?php require_once $_SERVER['DOCUMENT_ROOT'].'/mvc/views/header.php'?>


<h1>
    Привет, <?= User::getName()?>! <?=isset($this->arResult['NEW_USER']) && $this->arResult['NEW_USER'] ? 'Вы успешно зарегистрированы!' : '' ?>
</h1>
<?php

echo 'View Account <br/>';

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/mvc/views/footer.php'?>