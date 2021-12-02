
<div class="Container">
    <div class="row">
        <div class="col">
            <div class="cardapio small-11 large-12 columns no-padding small-centered">
             <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                <h3>REGISTO DE NOVOS CLIENTES</h3>
                <hr></hr>
                </div>
            </div>
        </div>
        <form action ="DAOcardapio.php" method="POST">

             <div   class="input-group">
             <input type="hidden"  name="id" value="<?php "" ?>">
               <label for="marca" class="input-group"></label>
               <input type="text" class="form-control" name="nome" placeholder="Nome Cliente" autofocus="">

             </div>

             <div class="input-group">
               <label for="modelo" class="input-group"></label>
               <input type="text" class="form-control" name="modelo" placeholder="Email" autofocus="">
             </div>


             <div class="input-group">
               <label for="anolancamento" class="input-group"></label>
               <input type="text" class="form-control" name="destaque" placeholder="Destaque" autofocus="">
            </div>

            <div class="input-group">
                <div class="control">
                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                </div>
            </div>

            <div class="input-group">
                <div class="control">
                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                </div>
            </div>


             <div>
                <button type="submit" name="salvar" class="btn btn-outline-success">Gravar</button>
             </div>

         </form>

        </div>

    </div>

</div>

