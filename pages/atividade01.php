<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CN - UFPB - 2017.2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/global.css">
	<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
</head>
<body>
	<div id="main">
	<div class="container">
		<div id="base">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<a class="navbar-brand" href="/"><img src="/assets/images/logo.png" width="150" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<li class="nav-item">
								<a class="btn btn-outline-primary menuTopo" href="/">INÍCIO</a>
							</li>
							<div class="dropdown">
							  <button class="btn btn-outline-primary dropdown-toggle menuTopo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    ETAPA 1
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="/pages/atividade01">ATIVIDADE 01 - MÁQUINA BINÁRIA</a>
							    <a class="dropdown-item" href="/pages/atividade02">ATIVIDADE 02 - SISTEMA DE PONTO FLUTUANTE</a>
							    <a class="dropdown-item" href="/pages/atividade03">ATIVIDADE 03 - BISSECÇÃO</a>
							    <a class="dropdown-item" href="/pages/atividade04">ATIVIDADE 04 - NEWTON</a>
							  </div>
							</div>
						</li>
					</ul>
				</div>

				<div class="groups">
					<a href="https://www.facebook.com/yanffernandes" target="_blank">
						<img src="/assets/images/yan-nav.png" class="img-responsive nossosLogos" title="Yan Ferreira" alt="Yan Ferreira" style="float: right;">
					</a>
					<a href="https://www.facebook.com/jose.olivio.5" target="_blank">
						<img src="/assets/images/olivio-nav.png" class="img-responsive nossosLogos" title="José Olívio" alt="José Olívio" style="float: right;">
					</a>
					<a href="https://www.facebook.com/icaro.targino.a" target="_blank">
						<img src="/assets/images/icaro-nav.png" class="img-responsive nossosLogos" title="Ícaro Targino" alt="Ícaro Targino" style="float: right;">
					</a>
					<a href="https://www.facebook.com/brunocorr" target="_blank">
						<img src="/assets/images/bruno-nav.png" class="img-responsive nossosLogos" title="Bruno Correia" alt="Bruno Correia" style="float: right;">
					</a>
					<a href="https://www.facebook.com/arthur.curty" target="_blank">
						<img src="/assets/images/arthur-nav.png" class="img-responsive nossosLogos" title="Arthur Curty" alt="Arthur Curty" style="float: right;">
					</a>
				</div>				
			</nav>

			<div id="slide">
				<h1>CÁLCULO NUMÉRICO</h1>
			</div>
			
			<div id="forms">
				<div class="alert alert-primary" role="alert">
	  				<b>ATIVIDADE 01 - MÁQUINA BINÁRIA</b>
				</div>

			<form name="calcform" method="post" action="">
			   
			   <fieldset>
			      <legend>Conversor (Decimal > Binario)</legend>
			    <div class="form-group">
			      <label for="numero">Digite o valor: </label>
			      <input type="text" placeholder="Digite o número" name="numero" id="numero" />
				</div>

				<div class="form-group">
			      <label for="tNumero">Selecione a operação:</label>
			      <select name="tNumero" id="tNumero">
			         <option value="inteiro">inteiro</option>
			         <option value="flutuante">flutuante</option>
			       </select>
			    </dev>

			    <input type="button" value="Calcular" class="botao" onClick="calcular(document.calcform.tNumero.value)"/>

			    <div class="form-group">
			      <label for="res">Resultado:</label>
			      <input type="text" name="res" id="res" />
			    </div>

			   </fieldset>
				</form>


			</style>



			<script type="text/javascript">

			  	function convert() {
			   		partereal = parseInt(document.getElementById("partereal").value);
			   		partefloat = parseFloat(document.getElementById("partefloat").value);
			   		total = partereal + partefloat;
			   		var binario = total.toString(2);
			   		document.getElementById('resultado').value = binario;
			   	}

				/*

			   function calcular(tNumero) {
			   var numero = document.calcform.numero.value;
			   

			   if (tNumero == "inteiro") {
			           
			      	var decInteiro = parseInt(numero);
					var binario = decInteiro.toString(2);
					var res = binario;
			   } 
			   else {
			      if (tNumero == "flutuante") {
			           
			        var decQuebrado = parseFloat(numero);
					var binario = decQuebrado.toString(2);
					var res = binario;

			      } 
			      
			   }
			   document.calcform.res.value = res;
				
					}

				*/

			 </script>

			</div>

		</div>
	</div>
	</div>
	<div class="container">
		<div id="forms">
			<div class="alert alert-primary" role="alert">
				<div class="footer">
					<a href="http://ufpb.br" target="_blank">
						<img src="/assets/images/ufpb.png" width="90" title="Universidade Federal da Paraíba" alt="UFPB">
					</a>
					<a href="http://ci.ufpb.br" target="_blank">
						<img src="/assets/images/ci.png" width="90" title="Centro de Informática" alt="CI">
					</a>
				</div>
			</div>
		</div>
	</div>	
</body>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>
