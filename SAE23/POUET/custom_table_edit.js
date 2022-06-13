$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'Nom'], [2, 'Nombre'], [3, 'Prix_unitaire'], [4, 'Prix_total'], [5, 'Description']]
		},
		hideIdentifier: false,
		url: 'live_edit.php'
	});
});