
        <div class="welcome-gallery small-12 columns">



            <div class="photo-section small-12 columns">
                <img class="homepage-main-photo" src="{{asset('img/front.jpg')}}" alt="slider imagem 1">
            </div>

            <div class="main-section-title small-10 columns">
                <div class="table">
                    <div class="table-cell">
                        <h1>Bem vindo ao Moza Food</h1>
                        <h2>A cozinha tradicional na Brasa</h2>

                    </div>
                </div>

            </div>

            <div class="photo-gradient">

            </div>

        </div>







        <div class="cardapio small-11 large-12 columns no-padding small-centered">
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                <h3>Cardapios EM Destaque</h3>
                <hr></hr>
                </div>
            </div>

            <div class="global-page-container">


                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                 @foreach ($pratos as $prato)
                  @if ($prato->destaque==1)
                  <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                    <div class="cardapio-item">
                        <a href="{{url('descricaoPrato')}}/{{$prato->id}}">

                            <div class="cardapio-item-image">
                                <img src="{{asset("img/cardapio/$prato->id.jpg")}}" alt="prato principal"/>

                            </div>

                            <div class="item-info">


                                <div class="title"><?php echo  $prato->nome; ?></div>
                            </div>

                            <div class="gradient-filter">
                            </div>

                        </a>
                    </div>
                </div>


                  @endif




                 @endforeach


                    </div>
                </div>
            </div>
        </div>

