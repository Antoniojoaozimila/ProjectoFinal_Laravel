<?php /*include "conexao.php"; include "DAOcardapio.php";
  // fetch dados actualizados
	if (isset($_GET['editar'])) {
		$id = $_GET['editar'];
		$editar_v=true;

		$rec = mysqli_query($conn, "SELECT * FROM pratos WHERE id=$id");
		$record = mysqli_fetch_assoc($rec);
		$nome = $record['nome'];
		$categoria = $record['categoria'];
        $descricao=$record['descricao'];
        $preco=$record['preco'];
        $calorias=$record['calorias'];
        $destaque=$record['destaque'];
        $id = $record['id'];
  }
  */
  ?>

<div class="Container">
    <div class="row">
        <div class="col">
            <div class="cardapio small-11 large-12 columns no-padding small-centered">
                <div class="global-page-container">
                   <div class="cardapio-title small-12 columns no-padding">
                   <h3>Gestão de Cardapios</h3>
                   <hr></hr>
                   </div>
               </div>
           </div>
        <form action ="{{url('registarPratos')}}" method="POST">
            @csrf

             <div   class="input-group">
             <input type="hidden"  name="id" value="<?php "" ?>">
               <label for="marca" class="input-group"></label>
               <input type="text" class="form-control" name="nome"  placeholder="Nome do Prato" autofocus="" >

             </div>

             <div class="input-group">
               <label for="modelo" class="input-group"></label>
               <input type="text" class="form-control" name="categoria"  placeholder="Categoria" autofocus="">
             </div>

             <div class="input-group">
               <label for="descricao" class="input-group"></label>

               <textarea type="text" name="descricao" class="form-control" placeholder="descriação"  autofocus="" ></textarea>


             <div class="input-group">
               <label for="preco" class="input-group"></label>
               <input type="text" class="form-control" name="preco" placeholder="Preco"  autofocus="">

             </div>


             <div class="input-group">
               <label for="anolancamento" class="input-group"></label>
               <input type="text" class="form-control" name="calorias" placeholder="Calorias"  autofocus="" >

             </div>

             <div class="input-group">
               <label for="anolancamento" class="input-group"></label>
               <input type="text" class="form-control" name="destaque" placeholder="Destaque"  autofocus="">

             </div>


             </div>


             <div class="input-group">

				<button type="submit"  class="btn btn-outline-success">Editar</button>
         </form>


