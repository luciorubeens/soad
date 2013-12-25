<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>SOAD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo.css')}} " />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="ui menu" id="menu-topo">
			<div class="right menu" style="height:100%">
			<div class="item">
				<img class="ui avatar image" src="http://semantic-ui.com/images/demo/photo2.jpg">
				<?php $sessao = Session::get("user") ?>
				{{-- exibe apenas o primeiro nome do usuário --}}
				<span class="nome">{{ explode(" ", $sessao->nome, 2)[0]; }}</span>

				<span class="tipo">{{ ucfirst(Request::segment(1)); }}</span>
			</div>
			<a href="" class="item" style="width:80px"><i class="search icon large"></i></a>
			<a href="" class="item"><i class="off icon large"></i></a>
		</div>
	</div>

	<div class="ui grid wrap">
		<div class="one wide column" id="menu-lateral">
			<ul class="vertical">
				<li class="ativo"><a href="#" class="popup" data-content="Dashboard" data-variation="inverted" data-position="right center"><i class="dashboard icon big" ></i></a></li>
				<li><a href="#" class="popup" data-content="Avaliações" data-variation="inverted" data-position="right center"><i class="text file icon big"></i></a></li>
				<li><a href="#" class="popup" data-content="Relatórios" data-variation="inverted" data-position="right center"><i class="archive icon big"></i></a></li>
				<li><a href="#" class="popup" data-content="Gráficos" data-variation="inverted" data-position="right center"><i class="pie chart basic icon big"></i></a></li>
				<li><a href="#" class="popup" data-content="Configurações" data-variation="inverted" data-position="right center"><i class="setting icon big"></i></a></li>
				<li><a href="#" class="popup" data-content="Relatar problema" data-variation="inverted" data-position="right center"><i class="bug icon big"></i></a></li>
				<li><a href="#" class="popup" data-content="Ajuda" data-variation="inverted" data-position="right center"><i class="help icon big"></i></a></li>
			</ul>
		</div> <!-- /menu-lateral -->

		<div class="wide column" id="principal">
			<div class="content">
				<div class="title">{{ ucfirst(Request::segment(2)); }}</div>
				@yield('content')
			</div>
		</div>
</body>
<!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
<script src="{{ asset('/javascript/jquery-1.10.1.min.js') }} "></script>
<script src="{{ asset('/javascript/semantic.min.js') }} "></script>
<script src="{{ asset('/javascript/soad.js') }} "></script>
</html>