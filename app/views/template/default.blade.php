<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>SOAD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo.css')}} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/simple-line-icons.css')}} " />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="ui inverted menu" id="menu-topo">
			<div class="right menu" style="height:100%">
			<div class="item">
				
				
			</div>
			<a href="" class="item" style="width:80px"><i class="setting icon large"></i></a>
			<a href="" class="item" style="width:80px"><i class="search icon large"></i></a>
			<a href="{{ URL::to('user/logout') }}" class="item"><i class="off icon large"></i></a>
		</div>
	</div>

	<div class="ui grid wrap">
		<div class="wide column" id="menu-lateral">
			<div class="profile">
				<?php $sessao = Session::get("user") ?>
				<img class="circular ui image" src="http://semantic-ui.com/images/demo/photo2.jpg">

				{{-- exibe apenas o primeiro nome do usuário --}}
				<span class="nome">{{ $sessao->nome; }}</span>
				<span class="tipo">{{ ucfirst(Request::segment(1)); }}</span>
			</div>
			<ul class="vertical">
				<li><a href="#"><i class="icon-user"></i>Perfil</a></li>
				<li><a href="#" class="ativo"><i class="icon-speedometer" ></i>Dashboard</a></li>
				<li><a href="#"><i class="icon-speech"></i>Avaliações</a></li>
				<li><a href="#"><i class="icon-folder"></i>Relatórios</a></li>
				<li><a href="#"><i class="icon-graph"></i>Gráficos</a></li>
				<li><a href="#"><i class="icon-question"></i>Ajuda</a></li>
			</ul>
		</div> <!-- /menu-lateral -->

		<div class="wide column" id="principal">
			<div class="content">
				<div class="title">{{ $pagina }}</div>
				@yield('content')
			</div>
		</div>
</body>
<!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
<script src="{{ asset('/javascript/jquery-1.10.1.min.js') }} "></script>
<script src="{{ asset('/javascript/semantic.min.js') }} "></script>
<script src="{{ asset('/javascript/soad.js') }} "></script>
</html>