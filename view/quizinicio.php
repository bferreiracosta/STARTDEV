<?php include_once("header.php");?>
<div id="quiz">
<form  name=formmail>
<center><font id=center>Responda as perguntas abaixo</font></center>
<br>
<center><font id=normal>cada questão vale 1 ponto</font></center>
<center><a href=# onClick="vai()"><font id=normal>[ Clique aqui para fazer Novamente ]</font></a></center>
<center><font id=normal>[ marque somente uma questão por pergunta ]</font></center>
<div align=center> 
<table border=0 cellpading=3 cellspacing=3 style="border:1px solid #f8f8f8;background-color:#ffffff;" width=400>
<tr><td>
<font id=pergunta> 
Coloque ao lado o seu Nome:&nbsp;</font><input type="text" name="onome" value="" size=44 id=input><font color=#0099cc face=verdana size=1><b>&nbsp;*</b><br>
<font id=pergunta> 
<div id="questoes" style="overflow:scroll">
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
</div>
<?php include_once("footer.php");?>