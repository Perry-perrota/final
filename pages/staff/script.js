$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title='Term Results';
	// DataTable initialisation
	$('#example').DataTable(
		{
			"responsive": true,
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
				'colvis',
				'copyHtml5',
        'csvHtml5',
				'excelHtml5',
        //'pdfHtml5',
				'print'
			]
		}
	);
});