<?php include_once("header.php");?>
   <section>
    <div>
                    <nav id="menu2" class="pull-left">
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                
                            </ul>
                        </nav>
			</div> 
			<div>
                <img id="img"src="../img/logotipo2.png">
            </div>
			<div id="all">
			<h2>Faça login no sistema</h2>
				<form action="curso.php">
			<div class="form-group">
				<label for="Usuario">Usuario:</label>
				<input type="Usuario" class="form-control" id="Usuario">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" onclick="Login()" class="btn btn-default" value=Login>Login</button>
			</form>
		</div>
	</div>
</div>
    </section> 
<?php include_once("footer.php");?>
      