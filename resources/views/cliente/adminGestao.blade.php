

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
             </div>

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

				<button type="submit"  class="btn btn-outline-success">Gravar</button>
         </form>




<div class="bd-example">
  <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descricao</th>
      <th scope="col">Preco</th>
      <th scope="col">Calorias</th>
      <th scope="col">Destaque</th>


    </tr>
  </thead>

  <tbody>

@foreach ($pratos as $prato)
<tr>
    <th scope='row'>{{$prato->nome}}   </th>
    <td>{{$prato->categoria}} </td>
    <td>{{$prato->descricao}}</td>
    <td>{{$prato->preco}}</td>
    <td>{{$prato->calorias}}</td>
    <td>{{$prato->destaque}}</td>
    <td>
<a  href="{{URL::to('editarView')}}/{{$prato->id}}" class="btn btn-success">editar</a>
<a  href="{{ URL::to('delete') }}/{{ $prato->id }}" class="btn btn-success">excluir</a>
    </td>
  </tr>

@endforeach

  </tbody>

  </table>



</div>
         <a href="index.php" class="btn btn-primary ">Voltar ao inicio</a>
         </div>

    </div>

    </div>
