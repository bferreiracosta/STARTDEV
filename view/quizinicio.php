<?php include_once("header.php");?>
                <div>
                    <nav id="menu4" class="pull-left" style="overflow:scroll">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Introdução a Algoritmos
                            </button>   
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <ul>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/8mei6uVttho')">1- Introdução a Algoritmos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/M2Af7gkbbro')">2- Primeiro Algoritmo - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/RDrfZ-7WE8c')">3- Comando de Entrada e Operadores - Curso de Algoritmos </div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/Ig4QZNpVZYs')">4- Operadores Lógicos e Relacionais - Curso de Algoritmos </div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/GrPkuk1ezyo')">5- Introdução ao Scratch - Curso de Algoritmo</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/v2nCgGSVCeE')">6- Exercícios de Algoritmo Resolvidos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/_g05aHdBAEY')">7- Estruturas Condicionais 1 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/7gGFHzqh4d8')">8- Estruturas Condicionais 2 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/U5PnCt58Q68')">9- Estruturas de Repetição 1 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/fP49L1i_-HU')">10- Estruturas de Repetição 2 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/WJQz20i7CyI')">11- Estruturas de Repetição 3 - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/KoNehy7rn8U')">12- Procedimentos - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/-nNx7e8GzHQ')">13- Funções - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/j9473xQ39vY')">14- Vetores - Curso de Algoritmos</div></li>
                                        <li><div class="dropdown-item" onclick="addQuiz('https://www.youtube.com/embed/hkE9WrjpAAk')">15- Matrizes - Curso de Algoritmos</div></li>
                                        
                                    </ul>
                                </div>
                        </div>  
                    </nav>
                    <div>
                <img id="img"src="../img/logotipo2.png">
            </div>
                     <div>
                    <div id="pai">
                        <iframe id="iframequiz" width = '560' height = '250' frameborder = '0'> </iframe>
                    </div>
                </div>
                <div>   
                              
		
                <div id="quiz">
                <form  name=formmail>
                <center><font id=center>Responda as perguntas abaixo</font></center>
                <center><font id=normal>cada questão vale 1 ponto</font></center>
                <br>
                <div align=center> 
                <table border=0 cellpading=3 cellspacing=3 style="border:1px solid #f8f8f8;background-color:#ffffff;" width=400>
                <tr><td>
                <font id=pergunta> 
                Coloque seu Nome:&nbsp;</font><input class="form-group" type="text" name="onome" value="" placeholder="Insira seu nome" size=44 id=input><font color=#0099cc face=verdana size=1><b>&nbsp;*</b><br>
                <font id=pergunta> 
                <div id="questoes" style="overflow:scroll">
                    <br>
                1 - Que número é este [1]?</font>
                <br><font id=resposta> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question1" VALUE="A"><font id=resposta>Um<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question1" VALUE="B"><font id=resposta>Dois<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question1" VALUE="C"><font id=resposta>Três<br>
                <br>
                <font id=pergunta> 
                2 - Que número é este [6]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question2" VALUE="A"><font id=resposta>Cinco<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question2" VALUE="B"><font id=resposta>Seis<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question2" VALUE="C"><font id=resposta>Sete<br>
                <br>
                <font id=pergunta> 
                4 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                5 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                6 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                7 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                8 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                9 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                10 - Que letra é esta [c]?</font>
                <br> 
                <font id=pergunta>(A)</font><input TYPE="radio" NAME="question3" VALUE="A"><font id=resposta>b<br>
                <font id=pergunta>(B)</font><input TYPE="radio" NAME="question3" VALUE="B"><font id=resposta>c<br>
                <font id=pergunta>(C)</font><input TYPE="radio" NAME="question3" VALUE="C"><font id=resposta>d<br>
                <br>
                </div>
                <center>
                <input TYPE="button" NAME="valide" class="btn btn-danger" VALUE="Resultado" onclick="javascript:solution(this.form);"> 
                </center></td></form></tr>
                </table> 
                
                
<?php include_once("footer.php");?>