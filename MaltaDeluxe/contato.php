<?php
include_once './includes/_head.php';
include_once './includes/_header.php';

if ( isset($_POST['txtNome'] ) ) {
    $name = strtoupper($_POST['txtNome']);
echo $name;
}
if ( isset($_POST['txtEmail'] ) ) {
    $email = strtoupper($_POST['txtEmail']);
echo $email;
}
if ( isset($_POST['txtTelefone'] ) ) {
    $telefone = strtoupper($_POST['txtTelefone']);
echo $telefone;
}
if ( isset($_POST['txtMensagem'] ) ) {
    $msg = strtoupper($_POST['txtMensagem']);
echo $msg;
}
?>

<form action="./contato.php" method="post">
<label for="txtNome">Nome Completo</label>
<input type="text" name="txtNome" id="txtNome" required>

<label for="txtEmail">Email</label>
<input type="text" name="txtEmail" id="txtEmail" required>

<label for="txtTelefone">Telefone</label>
<input type="text" name="txtTelefone" id="txtTelefone" required>

<label for="txtMensagem">Mensagem</label>
<textarea name="txtMen" id="txtMen" cols="30" rows="5"></textarea>

<button type="submit" class="btn btn-primary" style="margin-top: 1.5rem">Enviar</button>
</form>

<?php
include_once './includes/_footer.php';
?>