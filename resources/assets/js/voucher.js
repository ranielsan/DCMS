import swal from 'sweetalert2'

$(document).ready(function() {

	$('#btnAdd').click(function() {
		var appenditem = "<tr>"
							+ "<td><input type='text' class='form-control' name='item_name[]' required></td>"
							+ "<td><input type='text' id='numInput' class='form-control ' name='item_amount[]' required ></td>"
							+ "<td><button class='btn btn-sm btn-danger btnDelete' id='btnDelete' type='button'><i class='fa fa-minus'></></button></td>"
						+ "</tr>"
		$(appenditem).insertBefore('#AddItems');
        $('#numInput').keypress(validateNumber);
            function validateNumber(event) {
            var key = window.event ? event.keyCode : event.which;
            if (event.keyCode === 8 || event.keyCode === 46) {
                return true;
            } else if ( key < 48 || key > 57 ) {
                return false;
            } else {
                return true;
            }
        };
	});

	$('body').on('click','.btnDelete', function() {
		$(this).closest('tr').remove();
	});

	
	$('body').on('click', 'a[data-method=delete]', function (e) {
        /**
         * Generic 'are you sure' confirm box
         */
        e.preventDefault();

        var link = $(this),
            title = link.attr('data-trans-title') ? link.attr('data-trans-title') : "Are you sure you want to delete this item?",
            cancel = link.attr('data-trans-button-cancel') ? link.attr('data-trans-button-cancel') : "Cancel",
            confirm = link.attr('data-trans-button-confirm') ? link.attr('data-trans-button-confirm') : "Continue";

        swal({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            type: 'info'
        }).then(function (result) {
            result.value && window.location.assign(link.attr('href'));
        });
    });

	


    $('.numInput').keypress(validateNumber);
    function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};
function spellOut(amount) {
    var exp = ["", "THOUSAND", "MILLION", "BILLION", "TRILLION"];
    var dec = ["", "", "TWENTY", "THIRTY", "FORTY", "FIFTY", "SIXTY", "SEVENTY", "EIGHTY", "NINETY"];
    var sing = ["", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE", "TEN",
                "ELEVEN", "TWELVE", "THIRTEEN", "FOURTEEN", "FIFTEEN", "SIXTEEN", "SEVENTEEN", "EIGHTEEN", "NINETEEN"];

    // Round to two decimal points and format as a string
    var str = parseFloat(amount).toFixed(2);

    // Extract the integer part and the fraction part
    var intStr = str.substring(0, str.length - 3);
    var frac = str.substring(str.length - 2);

    // Compute the number of three-digit groups
    var tot = "";
    var len = intStr.length;
    var grp = Math.floor(len / 3) + (len % 3 == 0 ? 0 : 1);

    // For each group ...
    for (var g = grp; g > 0; --g) {
        var p = len - 3 * g;
        var s = "";

        // Format the hundreds
        if (p >= 0 && intStr[p] != '0') {
            s += sing[parseInt(intStr[p])] + " HUNDRED";
        }

        // Format values between 1 and 99
        if (p >= -1) {
            if (intStr[p + 1] < '2') {
                if (s != "") s += " ";
                s += sing[10 * parseInt(intStr[p + 1]) + parseInt(intStr[p + 2])];
            } else {
                if (s != "") s += " ";
                s += dec[parseInt(intStr[p + 1])];
                if (intStr[p + 2] > '0') {
                    s += '-' + sing[parseInt(intStr[p + 2])];
                }
            }

        // Special case if amount < 10
        } else if (intStr[p + 2] > '0') {
            if (s != "") s += " ";
            s += sing[parseInt(intStr[p + 2])];
        }

        // Add exponent descriptor
        if (s != "") {
            var e = exp[g - 1];
            if (e != "") {
                s += " " + e;
            }
        }

        // Append to total string
        if (tot != "") tot += " ";
        tot += s;
    }

    // Append "dollar(s)"
    var d = parseInt(intStr);
    if (d == 1) {
        tot += " PESOS";
    } else if (d > 1) {
        tot += " PESOS";
    }

    // Append fractional part, if not zero
    if (frac != "00") {
        if (tot != "") tot += " AND ";
        var c = "";
        if (frac[0] < '2') {
            c = sing[10 * parseInt(frac[0]) + parseInt(frac[1])];
        } else {
            c = dec[parseInt(frac[0])];
            if (frac[1] > '0') {
                c += '-' + sing[parseInt(frac[1])];
            }
        }
        tot += c + (frac == "01" ? " CENT" : " CENTS");
    }

    // Special case if amount == 0
    if (tot == "") tot = "ZERO";

    return tot;
}
    var conv = $('#convertToString').text();
    var stringnum = spellOut(conv);
    console.log(stringnum);
    $('#convertToString').text(stringnum);

});
