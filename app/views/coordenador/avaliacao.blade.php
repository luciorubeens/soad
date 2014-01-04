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
		<ul class="cbp_tmtimeline">
			@foreach ($avaliacoes as $avaliacao)
		    <li>
		        <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>{{$avaliacao["criada"]}}</span></time>

		        @if ($avaliacao["status"]=="aberto")
		        <div class="cbp_tmicon icon-clock aberto"></div>
		        @endif

		        <div class="cbp_tmlabel">
			            <h4>{{$avaliacao["curso"]}}</h4>
			            <p>Módulo: {{$avaliacao["modulo"]}}</p>
			            <p>Turno: {{$avaliacao["turno"]}}</p>
		        </div>
		    </li>
		    @endforeach
		</ul>
	</div>
</div>
@stop