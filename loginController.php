<?php
sleep(2);
echo "<pre>";
var_dump($_POST);
echo "<pre>";
echo header("location: login.php?success=logado com sucesso");