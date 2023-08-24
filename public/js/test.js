function create() {
	var outputString = "";
	$('#result div pre').html('');
	$('select.as').each(function() {
		var selectedValue = $(this).val();
		if(selectedValue == '-1') {
			selectedValue = 'null';
		}
		// Si el valor seleccionado no es 0
		if (selectedValue !== '0') {
			var idCareerPath = $(this).data('cp');
			var idAdvancedAbility = $(this).data('aa');

			outputString += "[\n";
			outputString += "    'id_career_path' => " + idCareerPath + ",\n";
			outputString += "    'id_advanced_ability' => " + idAdvancedAbility + ",\n";
			outputString += "    'id_advanced_specialization' => " + selectedValue + ",\n";
			outputString += "    'created_at' => date('Y-m-d H:i:s'),\n";
			outputString += "    'updated_at' => date('Y-m-d H:i:s')\n";
			outputString += "],\n";
	

		}
	});

	$('#result div pre').html(outputString);
}
