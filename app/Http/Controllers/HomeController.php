<?php

namespace App\Http\Controllers;
use App\Models\Prato;
use App\Models\User;
use Illuminate\Http\Request;
   // Usar as classes sem o namespace
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;





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

            echo view ('auth.login');

        }

        function clean_input($input){
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);

            return $input;
        }

        public function reserva()

        {
            echo view ('layout.header');
            echo view ('cliente.reserva');
            echo view ('layout.footer');


        }

        public function presenca(Request $request)
        {


                    $nome =$request->nome;
                    $email = $request->email;
                    $mensagem =$request->mensagem;
                    $telefone = $request->telefone;
                    $data =$request->data;
                    $numero = $request->num_pessoas;




                    $texto_msg = 'E-mail enviado do sistema de reservas do site' . '<br><br>' .
                    'Nome: ' . $nome . '<br>' .
                    'E-mail: ' . $email . '<br>' .
                    'Numero de pessoas: ' . $numero . '<br>' .
                    'Telefone: ' . $telefone . '<br>' .
                    'Data: ' . $data . '<br>' .
                    'Mensagem: ' . $mensagem . '<br>';

                    // Criação do Objeto da Classe PHPMailer
                    require 'PHPMailer/vendor/autoload.php';
                     $mail = new PHPMailer(true);
                     $mail->CharSet="UTF-8";

                    try {

                 //Retire o comentário abaixo para soltar detalhes do envio
                   $mail->SMTPDebug = 0;

                 // Usar SMTP para o envio
                 $mail->isSMTP();

                 // Detalhes do servidor (No nosso exemplo é o Google)
                 $mail->Host       = env('EMAIL_HOST');

                 // Permitir autenticação SMTP
                 $mail->SMTPAuth = true;

                 // Nome do usuário
                 $mail->Username   = env('EMAIL_USERNAME');
                 // Senha do E-mail
                 $mail->Password   = env('EMAIL_PASSWORD');

                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                 // Tipo de protocolo de segurança
                 $mail->SMTPSecure = 'tls';

                 // Porta de conexão com o servidor
                 $mail->Port = 587;


                 // Garantir a autenticação com o Google
                 $mail->SMTPOptions = array(
                     'ssl' => array(
                         'verify_peer' => false,
                         'verify_peer_name' => false,
                         'allow_self_signed' => true
                     )
                 );

                 // Remetente
                 $mail->setFrom($email, $nome);

                 // Destinatário
                 $mail->addAddress('trabalhopw2021@gmail.com', 'Benjamim');

                 // Conteúdo

                 // Define conteúdo como HTML
                 $mail->isHTML(true);

                 // Assunto
                 $mail->Subject = 'Pedido de Reserva';
                 $mail->Body    = $texto_msg;
                 $mail->AltBody = $texto_msg;

                 // Enviar E-mail
                 $mail->send();
                 echo 'Mensagem enviada com sucesso';
             } catch (Exception $e) {
                 echo 'A mensagem não foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
             }

        }



        public function descricaoPrato($id)

        {

           $pratos=Prato::find($id);
            echo view ('layout.header');
            echo view ('cliente.descricaoPrato',compact('pratos'));
            echo view ('layout.footer');


        }
        public function registoCliente()

        {
            echo view ('layout.header');
            echo view ('auth.register');
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

        public function destroy($id)
    {
        if (Prato::destroy($id)) {
            return redirect()->back()->with('deleted', 'Deleted successfully');
        }
        return redirect()->back()->with('delete-failed', 'Could not delete');
    }

        public function editarView($id)

        {
            $pratosbyId=Prato::find($id);
            echo view ('layout.header');
            echo view ('cliente.editarPratos',compact('pratosbyId'));
            echo view ('layout.footer');


        }

    }

