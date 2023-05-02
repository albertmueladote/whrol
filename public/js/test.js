$(window).ready(function() {
	$('#create').click(function(){
		test();
	});
});

function test()
{
	$('#result').html('');
	$('table tbody').find('input').each (function() {
		if($(this).is(':checked')) {
			var profession = $(this).attr('data-p');
			var race = $(this).attr('data-r');
			$('#result').append("[<br/>'id_race' => " + race + ",<br/>'id_profession' => " + profession + ",<br/>created_at' => date('Y-m-d H:i:s'),<br/>'updated_at' => date('Y-m-d H:i:s')<br/>],<br/>");
		}
	}); 
	$('table').toggle();
}