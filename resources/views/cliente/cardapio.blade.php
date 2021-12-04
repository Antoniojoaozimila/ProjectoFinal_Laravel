
        <div class="cardapio-list small-11 large-12 columns no-padding small-centered">

            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                    <h3>Cardapio</h3>
                    <hr></hr>
                </div>

            <div class="global-page-container">


                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                 @foreach ($pratos as $prato)

                  <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                    <div class="cardapio-item">
                        <a href="{{URL::to('descricaoPrato',$prato->id)}}">

                            <div class="cardapio-item-image">
                                <img src="{{asset('img/cardapio/<?php echo $prato->nome; ?>.jpg')}}" alt="camarao"/>

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



            </div>
        </div>
    </div>
</div>


