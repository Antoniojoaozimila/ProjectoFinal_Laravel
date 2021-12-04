
<div class="Container">
    <div class="row">
        <div class="col">
            <div class="cardapio small-11 large-12 columns no-padding small-centered">
                <div class="global-page-container">
                   <div class="cardapio-title small-12 columns no-padding">
                   <h3>Gestão de Cardapios</h3>
                   <hr>
                   </div>
               </div>
           </div>
        <form action ="{{route('editarPratos',$pratosbyId->id)}}" method="POST">
            @csrf

             <div   class="input-group">
             <input type="hidden"  name="id" value="<?php "" ?>">
               <label for="marca" class="input-group"></label>
               <input type="text" class="form-control" name="nome" value="{{ $pratosbyId->nome }}" placeholder="Nome do Prato" autofocus="">

             </div>

             <div class="input-group">
               <label for="modelo" class="input-group"></label>
               <input type="text" class="form-control" name="categoria" value="{{ $pratosbyId->categoria}}" placeholder="Categoria" autofocus="">
             </div>

             <div class="input-group">
               <label for="descricao" class="input-group"></label>

               <textarea type="text" name="descricao" class="form-control" value="{{ $pratosbyId->descricao}}" placeholder="descrição"  autofocus="" ></textarea>


             <div class="input-group">
               <label for="preco" class="input-group"></label>
               <input type="text" class="form-control" name="preco" value="{{ $pratosbyId->preco}}" placeholder="Preco"  autofocus="">

             </div>


             <div class="input-group">
               <label for="anolancamento" class="input-group"></label>
               <input type="text" class="form-control" name="calorias" value="{{ $pratosbyId->calorias}}" placeholder="Calorias"  autofocus="" >

             </div>

             <div class="input-group">
               <label for="destaque" class="input-group"></label>
               <input type="text" class="form-control" name="destaque" value="{{ $pratosbyId->destaque}}" placeholder="Destaque"  autofocus="">

             </div>


             </div>


             <div class="input-group">

				<button type="submit"  class="btn btn-outline-success">Editar</button>
         </form>
        </div>
    </div>
</div>


