<?php

/**
 * Description of MainController
 *
 * @author Leandro Perini
 */
class LoginController extends AppController {

    public function index($param) {
        $this->page = 'login/login';
        
        //$password   = $_POST["password"];
        
        // Verifica se o usuário digitou o usuário e a senha   
         if (isset($_POST) && isset($_POST["user"])) {
            $usuario   = $_POST["user"];
            
            if (isset($_POST["submit"])) { // Verifica se houve submit
                $sql = $this->db->execute("SELECT nome_user FROM user WHERE nome_user = $usuario");
                
                $userBanco = $sql['nome_user'];
                
                print_r($sql);
                
                /*
                $userBanco = $sql['nome_user'];
                echo $userBanco;
                                
                if ($userBanco == $usuario){
                    header('Location: /principal/home');
                }
                else{
                    echo "Login inválido!";
                    
                }
                 * 
                 */  
            }
            else {
                echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
            }
         }
    }
    
    public function recuperarSenha($param) {
        $this->page = 'login/recuperarSenha';

    }

    public function cadastroNovo($params) {
        // Busca dos cargos no banco de bados
        $query = $this->db->execute("SELECT * FROM cargo");
        // Atribui os valores da conulta para passagem para a view
        $this->cargosUsuarios = $query;
        
        $this->page = 'login/cadastrar';
        
        if (isset($_POST["nome"]) && isset($_POST["user"]) && isset($_POST["senha"])) {
            $nome   = $_POST["nome"];
            $user   = $_POST["user"];
            $senha  = MD5($_POST["senha"]);
            $email  = $_POST["email"];
            $cargo  = $_POST["cargo"];
            $status = $_POST["status"];

            if (isset($_POST["submit"])) {
                $resultado = $this->db->execute("INSERT user (nome_user, email_user, cargo_user, senha_user, status_user) values (?, ?, ?, ?, ?);", [
                'values' => [
                    $user,
                    $email,
                    $cargo,
                    $senha,
                    $status,
                ],
                'types'  => [
                    's',
                    's',
                    'i',
                    's',
                    'i',
                ],
            ]);
            header('Location: /login/cadastrado');
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
            }   
        }
    }

    public function cadastroSalvo($param) {
        $this->page = 'login/cadastrado';
    }

    public function usuarios($param) {
        $this->page = 'login/usuarios';

        $query = $this->db->execute("SELECT * FROM user");

        $this->usuariosCadastrados = $query; // aqui é como você passa uma variável para a view assim pode preencher o html com o conteúdo dela, na view ela terá o mesmo nome, vá até a view para entender o resto
//        esses são outros exemplos de variaveis que pode passar todas elas serão acessiveis na view através de: $class->nomeVariavel, por boa prática atribua os valores que serão passados para a view sempre no fim da função
        $this->usuarioLogado       = true;
        $this->horaAtual           = '10:35';
        $this->quantidadeDeAcessos = 66;
    }

}
