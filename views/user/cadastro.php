<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<link rel="stylesheet" href="styleForm.css">

<div class="back">
    <img src="../../img/paisagem.jpg" alt="">
</div>
<div class="inicio">
<form method="POST" action="<?php echo DIRPAGE.'controllers/ControllerCadastro.php'; ?>">
<label id="lb1">Email:</label><input type="text" name="email" id="email"><br>
<label id="lb2">Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cad"><br>
<a href="login.php" id="link">Fazer Login</a>
</form>
</div>
<?php include(DIRREQ."lib/html/footer.php"); ?>
