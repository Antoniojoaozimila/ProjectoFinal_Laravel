 <div class="product-page small-11 large-12 columns no-padding small-centered">

            <div class="global-page-container">
                <?php //$prato->id=$_GET['id'];


                ?>





{{-- @foreach ($pratos as $prato) --}}
    {{-- @if ($prato->id==6) --}}
    <div class="product-section">
        <div class="product-info small-12 large-5 columns no-padding">
            <h3>{{$pratos->nome}}</h3>
            <h4>{{$pratos->categoria}}</h4>
            <p>{{$pratos->descricao}}>
            </p>

            <h5><b>Preço: </b>R$ {{$pratos->preco}}</h5>
            <h5><b>Calorias: </b>{{$pratos->calorias}}</h5>
        </div>

        <div class="product-picture small-12 large-7 columns no-padding">
            <img src="{{asset("img/cardapio/$pratos->id.jpg")}}" alt="Foto do prato: {{$pratos->nome}}">
        </div>

    </div>

    <div class="go-back small-12 columns no-padding">
        <a href="cardapio.php"><< Voltar ao Cardápio</a>
    </div>

</div>
</div>

    {{-- @endif --}}



 {{-- @endforeach --}}
</div>
</div>






