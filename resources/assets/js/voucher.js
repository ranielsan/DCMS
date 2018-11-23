$(document).ready(function() {
	$('#btnAdd').click(function() {
		var appenditem = "<tr>"
							+ "<td><input type='text' class='form-control' name='item_name[]'></td>"
							+ "<td><input type='text' class='form-control' name='item_amount[]'></td>"
							+ "<td><button class='btn btn-sm btn-danger btnDelete' id='btnDelete' ><i class='fa fa-minus'></></button></td>"
						+ "</tr>"
		$(appenditem).insertBefore('#AddItems');
	});

	$('body').on('click','.btnDelete', function() {
		$(this).closest('tr').remove();
	});
});