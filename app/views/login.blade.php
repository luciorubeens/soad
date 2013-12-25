<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>SOAD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo.css')}} " />
	<style>
		@import url(http://fonts.googleapis.com/css?family=Dosis:400,600);
		.campo, .field {
			margin: 0.5em 0!important;
		}
		input {
			padding: 0.5em;
			color: #666;
			text-transform: uppercase;
			font:20px 'Dosis'!important;
		}
		button i {
			font-size: 14pt!important;
			color:white;
		}
	</style>
</head>
<body class="login">
	<div class="painel-login">

		<div style="margin:1em">

			{{ Form::open(array('url'=>'user/signin','class'=>'signin ui form')) }}

				<div class="ui icon input campo">
					{{ Form::email('email',null,array('placeholder'=>'email')) }}
					<i class="user basic icon large"></i>
				</div>
				
				<div class="ui icon input campo">
					{{ Form::text('nascimento',null,array('placeholder'=>'data de nascimento')) }}
					<i class="calendar icon large"></i>
				</div>

				<button class="fluid positive ui small button" style="margin-top:0.5em"><i class="checkmark icon"></i></button>
			{{ Form::close() }}

		</div>
		

	</div>
</body>
</html>