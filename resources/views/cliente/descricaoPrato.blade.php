 <div class="product-page small-11 large-12 columns no-padding small-centered">

            <div class="global-page-container">
                <?php $idfind=$_GET['id'];?>





@foreach ($pratos as $prato)
    @if ($prato->id==$idfind)
    <div class="product-section">
        <div class="product-info small-12 large-5 columns no-padding">
            <h3><?php echo $prato->nome?></h3>
            <h4><?php echo $prato->categoria?></h4>
            <p><?php echo $prato->descricao?>
            </p>

            <h5><b>Preço: </b>R$ <?php echo $prato->preco?></h5>
            <h5><b>Calorias: </b><?php echo $prato->alorias?></h5>
        </div>

        <div class="product-picture small-12 large-7 columns no-padding">
            <img src="img/cardapio/<?php echo $prato->nome?>.jpg" alt="Foto do prato: <?php echo $prato->nome?>">
        </div>

    </div>

    <div class="go-back small-12 columns no-padding">
        <a href="cardapio.php"><< Voltar ao Cardápio</a>
    </div>

</div>
</div>

    @endif



 @endforeach
</div>
</div>






