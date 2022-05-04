<?php include("../../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Calendário</title>
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.css';?>">
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>
<div class="back">
    <img src="../../img/paisagem.jpg" alt="">
</div>    
<div class="inicio">
<form method="POST" action="<?php echo DIRPAGE.'controllers/ControllerLogin.php'; ?>">
<p>Bem Vindo a  Agenda Vitual</p>
<a href= "login.php"><input type="button" value="Realizar Login" id="login"></a> 
<a href="cadastro.php"><input type="button" value="Realizar Cadastro" id="cadastro"></a>
</form>
</div>

<script src="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.js'; ?>"></script>
    <script src="<?php echo DIRPAGE.'lib/js/javascript.js'; ?>"></script>
</body>
</html>