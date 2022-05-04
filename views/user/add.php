<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));?>
    <form name = "formAdd" id="formAdd" method="POST" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
        Nome: <input type="text" name="title" id="title"><br>
        Descrição: <input type="text" name="description" id="title"><br>
        Data de Início: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora de Início: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        Data de Encerramento: <input type="date" name="date2" id="date2" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora de Encerramento: <input type="time" name="time2" id="time2" value="<?php echo $date->format("H:i"); ?>"><br>
        Quanto tempo deseja de atendimento: 
        <select name="status" id="status">
            <option value="">Selecione</option>
            <option value="green">Concluída</option>
            <option value="blue">Pendente</option>
            <option value="red">Cancelada</option>
        </select><br>
        <input type="submit" value="Adicionar Atividade">
    </form>

<?php include(DIRREQ."lib/html/footer.php"); ?>