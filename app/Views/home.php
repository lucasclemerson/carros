<div class="row p-3">
    <h2>Listagem de carros</h2>
</div>


<div class="row">
<?php for ($i=0; $i<=10; $i++): ?>
    
  <div class="col-sm-3 m-0 mb-2">
        <div class="card">
        <img height="200" src="<?=base_url()?>/public/logo.png" class="card-img-top" alt="imagem do carro em promoção">
        <div class="card-body">
            <h5 class="card-title">Marca: Ford KA</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-success">100,00 R$</a>
        </div>
        </div>
    </div>
<?php endfor; ?>

