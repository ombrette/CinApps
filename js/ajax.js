$(document).on('click', '.btn', function(e){
    e.preventDefault();

    $(".questionnaire").load($(this).attr('href') +" .Q > *", function() {
      //success;
    });
});

$( document ).ajaxStop(function() {
	$( ".Q" ).attr('href', 'fin_questionnaire.php');
});