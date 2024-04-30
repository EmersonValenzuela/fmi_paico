$(() => {
	// Esta función se ejecuta cuando el DOM está completamente cargado

	$("#data-quote").dataTable({
		// Inicialización de la tabla utilizando el plugin DataTables de jQuery
		language: {
			url: "assets/json/Spanish.json", // Se especifica el idioma de la tabla
		},
		ajax: {
			method: "POST", // Se especifica el método HTTP para la solicitud AJAX
			url: "quote/dashboard/data_quote", // Se especifica la URL para obtener los datos de la tabla
		},
		columns: [
			// Definición de las columnas de la tabla
			{ data: "name_drw" }, // Columna para el nombre
			{ data: "number_drw" }, // Columna para el número de dibujo
			{
				// Columna para la fecha de dibujo
				render: function (data, type, row) {
					return get_date(row.date_drw); // Se utiliza una función para formatear la fecha
				},
			},
			{
				// Columna para la fecha de vencimiento del dibujo
				render: function (data, type, row) {
					return get_date(row.date_ex_drw); // Se utiliza una función para formatear la fecha
				},
			},
			{
				// Columna para los botones de acción
				data: "id_drw",
				fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
					// Se crea una celda con botones para ver el cliente y el PDF
					$(nTd).html(
						"<button type='button' class='btn btn-danger waves-effect waves-light' OnClick='view_client(" +
							oData.id_drw +
							")'><i class='fas fa-file-pdf'></i> </button> " +
							"<button type='button' class='btn btn-info waves-effect waves-light' OnClick='view_pdf(" +
							oData.id_drw +
							")'><i class='fas fa-clipboard'></i> </button> "
					);
				},
			},
		],
	});
});

// Función para abrir el PDF del cliente
function view_client(id) {
	let url = $("#url_base").val(); // Se obtiene la URL base del campo oculto
	window.open(url + "pdf-cliente-drywall/" + id); // Se abre una nueva ventana con la URL del PDF del cliente
}

// Función para abrir el PDF del dibujo
function view_pdf(id) {
	let url = $("#url_base").val(); // Se obtiene la URL base del campo oculto
	window.open(url + "pdf-drywall/" + id); // Se abre una nueva ventana con la URL del PDF del dibujo
}

function get_date(input) {
	// Verificar si la cadena de entrada tiene el formato esperado (YYYY-MM-DD)
	if (!/^\d{4}-\d{2}-\d{2}$/.test(input)) {
		return "Fecha inválida";
	}

	// Extraer el año, mes y día de la cadena de entrada utilizando desestructuración
	const [año, mes, dia] = input.split("-");

	// Objeto para mapear los nombres de los meses
	const meses = {
		"01": "Enero",
		"02": "Febrero",
		"03": "Marzo",
		"04": "Abril",
		"05": "Mayo",
		"06": "Junio",
		"07": "Julio",
		"08": "Agosto",
		"09": "Septiembre",
		10: "Octubre",
		11: "Noviembre",
		12: "Diciembre",
	};

	// Obtener el nombre del mes utilizando el objeto de meses
	const nombre_mes = meses[mes];

	// Construir la fecha en el formato deseado y devolverla
	return `${dia} de ${nombre_mes} de ${año}`;
}
