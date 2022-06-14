$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: true,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'Nom'], [2, 'Nombre'], [3, 'Prix_unitaire'], [4, 'Prix_total'], [5, 'Description'],[6, 'Date_premiere'],[7, 'Date_derniere']]
		},
		hideIdentifier: false,
		url: 'live_edit.php'
	});
});