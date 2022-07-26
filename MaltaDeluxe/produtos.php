<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
  <div class="row mt-3">
<?php
for ($i=0; $i < 9; $i++) { 
  ?>
  <div class="card mt-4" style="width: 23rem;">
  <img src="./img/<?php echo $produtos[$i]['imagem']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos[$i]['nome']?></h5>
    <p class="card-text"><?php echo $produtos[$i]['preco']?></p>
    <a href="produto-detalhe.php?id=<?php echo $i?>" class="btn btn-primary">Comprar</a>
  </div>
</div>
<?php
}
?>
  </div>
</div>



<?php
include_once './includes/_footer.php';
?>