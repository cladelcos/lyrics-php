// JQuery 

$("a.delete").click(function () {
	var id = $(this).attr("id");
	var data = 'id = ' + id;
	var parent = $(this).parent();

	var $meu_alerta = $('#confirm-delete');

	$meu_alerta.modal().find(".btn-ok").on("click", function () {
		$.ajax({
			type: "POST",
			url: "../sql/remove-data.php",
			data: data,
			cache: false, 

			success: function () {
				parent.fadeOut('slow', function(){ $(this).remove();});
				window.location.reload();
			}
		})
	})

})