<?php include_once("header.php");?>
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
	<div id="login-box">
		<div id="login-header">
			Faça login no sistema
		</div>
		<div id="login-inputs">
			<input type="text" placeholder="Nome de usuário" name=usuario>
			<br />
			<input type="password" placeholder="Senha" name=senha>
		</div>
		<div id="enviar">
			<button onclick="Login()" class="botao" value=Login>Login</button>
		</div>
	</div>
</div>
    </section> 
<?php include_once("footer.php");?>
      