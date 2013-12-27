$('.popup')
  .popup({ inline: false })
;
$('.ui.selection.dropdown')
  .dropdown()
;

/**
* Coordenador
**/

$(function()
{
	$("#btn-abrir-avaliacao").click(function(e)
	{
		$(".formulario-abrir-avaliacao .content").css("height",250);
		$("#btn-abrir-avaliacao").text("Criar avaliação");
	});
});

