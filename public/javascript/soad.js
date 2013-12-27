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
		e.preventDefault();
		$("#painel-abrir-avaliacao .content-hide").toggleClass('hide');
		$("#painel-abrir-avaliacao .content-hide .content").css('height',"300");
		$("#painel-abrir-avaliacao .show").removeClass('show').addClass('hide');
	});

	$("#btn-cancelar-avaliacao").click(function(e)
	{
		e.preventDefault();
		$("#painel-abrir-avaliacao").find('.content-hide').addClass('hide');
		$("#painel-abrir-avaliacao").find('.content-show').toggleClass('hide').addClass('show');
	});
});

