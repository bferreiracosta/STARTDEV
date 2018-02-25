<?php include_once("header.php");?>
<section>
                <div>
                    <nav id="menu3" class="pull-left" style="overflow:scroll">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Introdução a Algoritmos
                            </button>   
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <ul>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/8mei6uVttho')">1- Introdução a Algoritmos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/M2Af7gkbbro')">2- Primeiro Algoritmo - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/RDrfZ-7WE8c')">3- Comando de Entrada e Operadores - Curso de Algoritmos </div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/Ig4QZNpVZYs')">4- Operadores Lógicos e Relacionais - Curso de Algoritmos </div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/GrPkuk1ezyo')">5- Introdução ao Scratch - Curso de Algoritmo</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/v2nCgGSVCeE')">6- Exercícios de Algoritmo Resolvidos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/_g05aHdBAEY')">7- Estruturas Condicionais 1 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/7gGFHzqh4d8')">8- Estruturas Condicionais 2 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/U5PnCt58Q68')">9- Estruturas de Repetição 1 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/fP49L1i_-HU')">10- Estruturas de Repetição 2 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/WJQz20i7CyI')">11- Estruturas de Repetição 3 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/KoNehy7rn8U')">12- Procedimentos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/-nNx7e8GzHQ')">13- Funções - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/j9473xQ39vY')">14- Vetores - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addVideo('https://www.youtube.com/embed/hkE9WrjpAAk')">15- Matrizes - Curso de Algoritmos</div></li>
                                        
                                    </ul>
                                </div>
                        </div>  
                    </nav>
				</div> 
				<div>
                <img id="img"src="../img/logotipo2.png">
            </div>
                <div>
                    <div id="pai">
                        <iframe id="iframeyoutube" width = '560' height = '250' frameborder = '0' allow = 'autoplay; encrypted-media' allowfullscreen > </iframe>
                    </div>
                </div>
                <div>
                    <div id="live-chat">
		
		<header class="clearfix">
			
			<a href="#" class="chat-close">x</a>

			<h4>John Doe</h4>

			<span class="chat-message-counter">3</span>

		</header>

		<div class="chat">
			
			<div class="chat-history">
				
				<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:35</span>

						<h5>John Doe</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->

				<hr>

				<div class="chat-message clearfix">
					
					<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:37</span>

						<h5>Marco Biedermann</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->

				<hr>

				<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:38</span>

						<h5>John Doe</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->

				<hr>

			</div> <!-- end chat-history -->

			<p class="chat-feedback">Your partner is typing…</p>

			<form action="#" method="post">

				<fieldset>
					
					<input type="text" placeholder="Type your message…" autofocus>
					<input type="hidden">

				</fieldset>

			</form>

		</div> <!-- end chat -->

	</div> <!-- end live-chat -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	
                </div>

</section>
<?php include_once("footer.php");?>
