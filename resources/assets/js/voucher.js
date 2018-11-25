import swal from 'sweetalert2'

$(document).ready(function() {

	$('#btnAdd').click(function() {
		var appenditem = "<tr>"
							+ "<td><input type='text' class='form-control' name='item_name[]' required></td>"
							+ "<td><input type='text' pattern='[0-9]+' title='This field allows only numbers' class='form-control ' name='item_amount[]' required ></td>"
							+ "<td><button class='btn btn-sm btn-danger btnDelete' id='btnDelete' type='button'><i class='fa fa-minus'></></button></td>"
						+ "</tr>"
		$(appenditem).insertBefore('#AddItems');
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

    function numberToEnglish(n, custom_join_character) {

    var string = n.toString(),
        units, tens, scales, start, end, chunks, chunksLen, chunk, ints, i, word, words;

    var and = custom_join_character || 'AND';

    /* Is number zero? */
    if (parseInt(string) === 0) {
        return 'zero';
    }

    /* Array of units as words */
    units = ['', 'ONE', 'TWO', 'THREE', 'FOUR', 'FIVE', 'SIX', 'SEVEN', 'EIGHT', 'NINE', 'TEN', 'ELEVEN', 'TWELVE', 'THIRTEEN', 'FOURTEEN', 'FIFTEEN', 'SIXTEEN', 'SEVENTEEN', 'EIGHTEEN', 'NINETEEN'];

    /* Array of tens as words */
    tens = ['', '', 'TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY'];

    /* Array of scales as words */
    scales = ['', 'THOUSAND', 'MILLION', 'BILLION', 'TRILLION', 'QUADRILLION', 'QUINTILLION', 'SEXTILLION', 'SEPTILLION', 'OCTILLION', 'NONILLION', 'DECILLION', 'UNDECILLION', 'DUODECILLION', 'TREDECILLION', 'QUATTTUOR-DECILLION', 'QUINDECILLION', 'SEXDECILLION', 'SEPTEN-DECILLION', 'OCTODECILLION', 'NOVEMDECILLION', 'VIGINTILLION', 'CENTILLION'];

    /* Split user arguemnt into 3 digit chunks from right to left */
    start = string.length;
    chunks = [];
    while (start > 0) {
        end = start;
        chunks.push(string.slice((start = Math.max(0, start - 3)), end));
    }

    /* Check if function has enough scale words to be able to stringify the user argument */
    chunksLen = chunks.length;
    if (chunksLen > scales.length) {
        return '';
    }

    /* Stringify each integer in each chunk */
    words = [];
    for (i = 0; i < chunksLen; i++) {

        chunk = parseInt(chunks[i]);

        if (chunk) {

            /* Split chunk into array of individual integers */
            ints = chunks[i].split('').reverse().map(parseFloat);

            /* If tens integer is 1, i.e. 10, then add 10 to units integer */
            if (ints[1] === 1) {
                ints[0] += 10;
            }

            /* Add scale word if chunk is not zero and array item exists */
            if ((word = scales[i])) {
                words.push(word);
            }

            /* Add unit word if array item exists */
            if ((word = units[ints[0]])) {
                words.push(word);
            }

            /* Add tens word if array item exists */
            if ((word = tens[ints[1]])) {
                words.push(word);
            }

            /* Add 'and' string after units or tens integer if: */
            if (ints[0] || ints[1]) {

                /* Chunk has a hundreds integer or chunk is the first of multiple chunks */
                if (ints[2] || !i && chunksLen) {
                    words.push(and);
                }

            }

            /* Add hundreds word if array item exists */
            if ((word = units[ints[2]])) {
                words.push(word + ' HUNDRED');
            }

        }

    }

    return words.reverse().join(' ');

}
	var conv = $('#convertToString').text();
	var stringnum = numberToEnglish(conv);
	console.log(stringnum);
	$('#convertToString').text(stringnum + ' PESOS');


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

     $(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
});