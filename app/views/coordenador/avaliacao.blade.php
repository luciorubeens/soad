@extends('template.default')

@section('content')
<div class="ui grid" id="agregador">
	<div class="four wide column box" id="painel-abrir-avaliacao">

		<div class="ui stacked segment">

			<a class="ui right red corner label">
			    <i class="question icon"></i>
		  	</a> <!-- / icone de ajuda -->

			<div class="formulario-abrir-avaliacao">
				<div class="content">
					
					<div class="ui form">
						<div class="field">
							<label for="modulo">Selecione o módulo:</label>
							<div class="ui fluid selection dropdown">
								<div class="text">1</div>
								<i class="dropdown icon"></i>
								<div class="menu">
									<div class="item" data-value="1">1</div>
									<div class="item" data-value="2">2</div>
									<div class="item" data-value="3">3</div>
								</div>

							</div> <!-- / selection -->
						</div>

						<div class="field">
							<label for="data-inicial">Data de inicio:</label>
							<div class="ui icon input">
								<input type="text" name="data-inicial" id="data-inicial">
								<i class="calendar icon"></i>
							</div>
						</div>

						<div class="field">
							<label for="data-inicial">Data de termino:</label>
							<div class="ui icon input">
								<input type="text" name="data-final" id="data-final">
								<i class="calendar icon"></i>
							</div>
						</div>

						<div class="field">
							<label for="data-inicial">Selecione o curso:</label>
							<div class="ui fluid selection dropdown">
								<div class="text"></div>
								<i class="dropdown icon"></i>
								<div class="menu">
									@foreach ($cursos as $curso)
									<div class="item" data-value="{{$curso->id}}">{{$curso->curso}}</div>
									@endforeach
								</div>

							</div> <!-- / selection -->
						</div>

					</div> <!-- / form -->
					
				</div> <!-- /content -->
				<a href="#" class="btn turquoise" id="btn-abrir-avaliacao">Abrir avaliação</a>
			</div>
		</div>
	</div>

	<div class="twelve wide column box" id="avaliacoes-criadas">
		<div class="box-header">Avaliações Criadas</div>
		<div class="box-content">
			
			<div class="ui items">
				@foreach ($avaliacoes as $avaliacao)
					<div class="item">
						<div class="content">
							<div class="meta popup" data-content="" data-variation="" data-position="bottom center">
								<a class="ui 
								@if ($avaliacao['status']=='aberta') 
									{{'green'}} 
								@elseif ($avaliacao['status']=='pendente') 
									{{'orange'}}
								@elseif ($avaliacao['status']=='cancelada')
									{{'red'}}
								@endif
								label">{{$avaliacao['status']}}</a>
							</div>
							<div class="name">{{$avaliacao['curso']}}</div>
							<div class="description">
								<p>Módulo {{$avaliacao['modulo']}}</p>
								<p>Turno: {{$avaliacao['turno']}}</p>
								<p>Início: {{$avaliacao['inicio']}} </p>
								<p>Término: {{$avaliacao['fim']}} </p>
							</div>
						</div>
						<div class="ui bottom attached label center">
							<a href="#" class="popup" data-content="Editar" data-variation="small" data-position="bottom center"><i class="circular pencil icon large"></i></a>
							<a href="#" class="popup" data-content="Visualizar" data-variation="small" avaliações" data-position="bottom center"><i class="circular comment icon large"></i></a>
						</div>		
					</div>
				@endforeach
			</div>

		</div>
	</div>		

</div>
@stop