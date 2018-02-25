<?php include_once("header.php");

$con = mysqli_connect('localhost', 'root', '') or die();	//Conecta com o MySQL
mysqli_select_db($con, 'Hackaton');						//Seleciona banco de dados

$login = (isset($_POST['login'])) ? $_POST['login'] : '';//Pegando dados passados por AJAX
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

  
  //Consulta no banco de dados
$sql = "select * from CADASTRO where USUARIO ='" . $login . "' and SENHA='" . sha1($senha) . "'";
$resultados = mysqli_query($con, $sql) or die(mysqli_error());
$res = mysqli_fetch_array($resultados); //
if (@mysqli_num_rows($resultados) == 0) {
    echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
} else {
    echo 1;	//Responde sucesso
    if (!isset($_SESSION)) 	//verifica se há sessão aberta
    session_start();		//Inicia seção
		//Abrindo seções
    $_SESSION['usuarioID'] = $res['id'];
    $_SESSION['nomeUsuario'] = $res['nome'];
    header("curso.php");
   
    exit;
}
?>

   <section>
    <div>
                    <nav id="menu2" class="pull-left">
                            <ul>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Sobre</a></li>
                                <li><a href="#">Contato</a></li>
                                
                            </ul>
                        </nav>
            </div> 
   <div id="all">
            <h2 id="errolog">Usuário ou senha errados!</h2>
            <form id="formlogin">
                <input type="text" id="usuario" placeholder="Digite seu Usuario" required="" />
                <input type="password" id="senha" placeholder="Senha" required="" />
                <button type="submit">Entrar</button>
            </form>
        </div>
    </section> 
<?php include_once("footer.php");?>
      