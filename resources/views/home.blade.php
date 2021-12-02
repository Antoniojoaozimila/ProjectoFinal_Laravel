
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
                <h3>Cardapio</h3>
                <hr></hr>
                </div>
            </div>

            <div class="global-page-container">


                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                      <?php
/*
                        $server = 'localhost';
                        $user = 'root';
                        $password = '';
                        $db_name = 'restaurante';
                        $port = '3306';

                        $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                        mysqli_set_charset($db_connect,"utf8");

                        if ($db_connect->connect_error) {
                            echo 'Falha: ' . $db_connect->connect_error;
                        } else {
                            //echo 'Conexão feita com sucesso' . '<br><br>';
                            $sql = "SELECT * FROM pratos WHERE destaque=1 ";
                            $result = $db_connect->query($sql);

                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc()){ ?>

                                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                                    <div class="cardapio-item">
                                        <a href="prato.php?prato=<?php echo $row['codigo']; ?>">

                                            <div class="cardapio-item-image">
                                                <img src="img/cardapio/<?php echo $row['codigo']; ?>.jpg" alt="camarao"/>
                                            </div>

                                            <div class="item-info">


                                                <div class="title"><?php echo $row['nome']; ?></div>
                                            </div>

                                            <div class="gradient-filter">
                                            </div>

                                        </a>
                                    </div>
                                </div>
                               <?php }
                            } else{
                                'Nao ha destaques';
                            }
                        }
                        */
                        ?>

                    </div>
                </div>
            </div>
        </div>

