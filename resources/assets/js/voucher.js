import swal from 'sweetalert2'
$(document).ready(function() {
	$('#btnAdd').click(function() {
		var appenditem = "<tr>"
							+ "<td><input type='text' class='form-control' name='item_name[]' required></td>"
							+ "<td><input type='text' class='form-control' name='item_amount[]' required></td>"
							+ "<td><button class='btn btn-sm btn-danger btnDelete' id='btnDelete' type='button'><i class='fa fa-minus'></></button></td>"
						+ "</tr>"
		$(appenditem).insertBefore('#AddItems');
	});

	$('body').on('click','.btnDelete', function() {
		$(this).closest('tr').remove();
	});

	
	$('body').on('submit', 'form[name=delete-item]', function (e) {
        e.preventDefault();
        console.log('test');
        var form = this,
            link = $('a[data-method="delete"]'),
            title = link.attr('data-trans-title') ? link.attr('data-trans-title') : "Are you sure you want to delete?",
            cancel = link.attr('data-trans-button-cancel') ? link.attr('data-trans-button-cancel') : "Cancel",
            confirm = link.attr('data-trans-button-confirm') ? link.attr('data-trans-button-confirm') : "Confirm";

        swal({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            type: 'info'
        }).then(function (result) {
            result.value && form.submit();
        });
    });
});