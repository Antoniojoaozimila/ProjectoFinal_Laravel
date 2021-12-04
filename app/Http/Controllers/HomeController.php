<?php

namespace App\Http\Controllers;
use App\Models\Prato;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function index()

        {
            $pratos=Prato::all();
            echo view ('layout.header');
            echo view ('home',compact('pratos'));
            echo view ('layout.footer');
        }
        public function cardapio()

        {
            $pratos=Prato::all();
            echo view ('layout.header');
            echo  view ('cliente.cardapio',compact('pratos'));
            echo view ('layout.footer');
        }
        public function admin()

        {
            $pratos=Prato::all();

            echo view ('layout.header');
            echo view ('cliente.adminGestao',compact('pratos'));
            echo view ('layout.footer');

        }
        public function login()

        {

            echo view ('cliente.loginAdmin');

        }
        public function reserva()

        {
            echo view ('layout.header');
            echo view ('cliente.reserva');
            echo view ('layout.footer');


        }
        public function descricaoPrato()

        {
            $pratos=Prato::all();
            echo view ('layout.header');
            echo view ('cliente.descricaoPrato',compact('pratos'));
            echo view ('layout.footer');


        }
        public function registoCliente()

        {
            echo view ('layout.header');
            echo view ('cliente.registoCliente');
            echo view ('layout.footer');

        }
        public function registarPratos(Request $request)

        {
         $prato= new Prato();
         $prato->nome=$request->input('nome');
         $prato->categoria=$request->input('categoria');
         $prato->descricao=$request->input('descricao');
         $prato->preco=$request->input('preco');
         $prato->calorias=$request->input('calorias');
         $prato->destaque=$request->input('destaque');

         $prato->save();
         return redirect('admin');
        }



        public function editarPratos(Request $request, $id )
        {
            $pratosbyId=Prato::find($id);
            $pratosbyId= new Prato();
            $pratosbyId->nome=$request->input('nome');
            $pratosbyId->categoria=$request->input('categoria');
            $pratosbyId->descricao=$request->input('descricao');
            $pratosbyId->preco=$request->input('preco');
            $pratosbyId->calorias=$request->input('calorias');
            $pratosbyId->destaque=$request->input('destaque');
            $pratosbyId->update();

            return redirect('admin')
            ->with('success', 'Update successfully');


        }

        public function delete(Prato $prato)
        {



            $prato->delete();

            return redirect('admin')
                ->with('success', 'deleted successfully');
        }

        public function editarView($id)

        {
            $pratosbyId=Prato::find($id);
            echo view ('layout.header');
            echo view ('cliente.editarPratos',compact('pratosbyId'));
            echo view ('layout.footer');


        }

    }

