var blnk,
		count = 0;

$('#variables').after('<button id="newVar">Add Another</button>');
$('#newVar').click(function() {
	return false;
	$("#variables tr").first().clone().appendTo($("#variables"));
})