<div class="cardapio small-11 large-12 columns no-padding small-centered">
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                <h3>Cardapios</h3>
                <hr></hr>
                </div>
            </div>

            <div class="global-page-container">


                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">
                    {{-- @foreach ($pratos as $prato1 )


                        <div class="category-slider small-12 columns no-padding">
                            <h4>{{$prato1->categoria}}</h4> --}}


                 @foreach ($pratos as $prato)

                  <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                    <div class="cardapio-item">
                        <a href="{{('descricaoPrato')}}/{{$prato->id}}">

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

                 @endforeach

{{--
                </div>
                @endforeach --}}


                    </div>
                </div>
            </div>
        </div>

