<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
  <div class="row mt-3">
<?php
foreach ($produtos as $key => $value) {
    if ($value ['categoria'] == 'whisky') {
  ?>
  <div class="card mt-4" style="width: 23rem;">
  <img src="./img/<?php echo $value['imagem']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['nome']?></h5>
    <p class="card-text"><?php echo $value['preco']?></p>
    <a href="produto-detalhe.php?id=<?php echo $key?>" class="btn btn-primary">Comprar</a>
  </div>
</div>
<?php
}
?>
<?php
}
?>
  </div>
</div>

<?php
include_once './includes/_footer.php';
?>