$(document).ready(function() {
$('select').material_select();
});

$('#teacher').on('click', function(e){
// alert( $(e.target).attr('id') );
$('input#disabled').prop("disabled", false);
});

$('#student').on('click', function(e){
// alert( $(e.target).attr('id') );
$('input#disabled').prop("disabled", true);
});

$('input#disabled').on('focus', function(e){
$(e.target).val('');
});
