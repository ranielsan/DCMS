import $ from 'jquery';

$(document).ready( function () {
	$('#Tblvoucher').DataTable({
		"order" :[["0" , "desc"]]
	});
});