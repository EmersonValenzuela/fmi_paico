$(() => {
	// Esta función se ejecuta cuando el DOM está completamente cargado

	// Roles de usuario, un objeto que mapea IDs de roles a nombres legibles por humanos
	const roles = {
		1: "Administrador",
		2: "Author",
		3: "Assistant",
		4: "Administrador",
		5: "Cotizador",
	};

	// Inicialización de la tabla utilizando el plugin DataTables de jQuery
	const tabla = $("#data-users").dataTable({
		// Opciones de la tabla
		searchable: 1, // Permite la búsqueda en la tabla
		language: {
			url: "assets/json/Spanish.json", // Archivo de idioma para DataTables
		},
		ajax: {
			method: "POST", // Método de solicitud AJAX
			url: "table_users", // URL para obtener datos de la tabla
		},
		columns: [
			{ data: "id" }, // Columna para el ID del usuario
			{ data: "photo" }, // Columna para la foto del usuario
			{ data: "name" }, // Columna para el nombre del usuario
			{ data: "email" }, // Columna para el correo electrónico del usuario
			{ data: "phone" }, // Columna para el teléfono del usuario
			{ data: "username" }, // Columna para el nombre de usuario del usuario
			{ data: "pass" }, // Columna para la contraseña del usuario (¡esto no debería estar en una tabla!)
			{ data: "idRol" }, // Columna para el ID del rol del usuario
			{ data: "" }, // Columna vacía para los botones de edición y eliminación
		],
		columnDefs: [
			// Definiciones de columnas
			{ targets: 0, searchable: !1, visible: !1 }, // Ocultar la primera columna (ID)
			{
				targets: 1,
				render: function (e, t, a, n) {
					// Renderizar la columna de fotos como imágenes
					return `<img src="assets/img/img_profile/${e}" class="img-fluid img-radius wid-40" alt="">`;
				},
			},
			{
				targets: 7,
				render: function (e, t, a, n) { // (e) Se guarda el valor de esa columna y el (a) Guarda toda la fila 
					// Renderizar la columna de roles como nombres legibles por humanos
					return a.rol;
				},
			},
			{
				targets: -1,
				searchable: !1,
				orderable: !1,
				render: function (e, t, a, n) {
					// Renderizar la última columna como botones de edición y eliminación
					return '<a href="javascript:void(0)" class="btn btn-info btn-sm btnEdit"> <i class="feather icon-edit-2"></i></a> <a href="javascript:void(0)" class="btn btn-danger btn-sm btnDelete"> <i class="feather icon-trash-2"></i></a>';
				},
			},
		],
	});

	tabla.on("click", ".btnEdit", function (e) {
		let row = $(this).closest("tr");
		let rowData = $(this).closest("table").DataTable().row(row).data();

		$("#iduser").val(rowData.id);
		$("#Name").val(rowData.name);
		$("#Email").val(rowData.email);
		$("#phone").val(rowData.email);
		$("#nameuser").val(rowData.username);
		$("#password").val(rowData.pass);
		$("#rol").val(rowData.idRol);

		$("#modal-edit").modal("show");
	});

	tabla.on("click", ".btnDelete", function (e) {
		let row = $(this).closest("tr");
		let rowData = tabla.DataTable().row(row).data();
		let userId = rowData.id; // Suponiendo que el ID del usuario está en la propiedad 'id'

		// Confirmación antes de eliminar el usuario
		if (confirm("¿Estás seguro de que quieres eliminar este usuario?")) {
			// Enviar solicitud DELETE con AJAX
			$.ajax({
				url: "delete-user", // Ruta a la función de eliminación en el controlador
				method: "POST",
				data: { userId: userId, photo: rowData.photo }, // Datos adicionales a enviar (si es necesario)
				success: function (response) {
					// Si la eliminación es exitosa, actualizar la tabla
					tabla.DataTable().row(row).remove().draw(false);
					// Mostrar un mensaje de éxito
					toastr.success("El usuario ha sido eliminado correctamente."); // Mostrar un toast de éxito
					console.log(response); // Opcional: Mostrar respuesta del servidor en la consola
				},
				error: function (xhr, status, error) {
					// En caso de error, mostrar un mensaje de error
					console.error(xhr.responseText);
					alert("Se produjo un error al intentar eliminar el usuario.");
				},
			});
		}
	});

	
	//INSERT NUEVO USUARIO FUNCION
	// Obtener el formulario de agregar usuario
	const form = document.getElementById("add_user");

	// Agregar un evento de escucha para el envío del formulario
	form.addEventListener("submit", async (event) => {
		event.preventDefault(); // Evitar el envío del formulario por defecto

		const formData = new FormData(form); // Crear un objeto FormData con los datos del formulario

		try {
			const response = await fetch("add-user", {
				// Enviar los datos del formulario al servidor
				method: "POST",
				body: formData,
			});

			if (response.ok) {
				const datos = await response.json(); // Obtener los datos de la respuesta del servidor

				if (datos.status) {
					// Verificar si la operación fue exitosa
					toastr.success("Se agregó el nuevo usuario"); // Mostrar un toast de éxito
					tabla.api().ajax.reload(); // Recargar la tabla de usuarios
					clearForm(); // Limpiar el formulario y cerrar el modal
				} else {
					toastr.error("Error al agregar usuario"); // Mostrar un toast de error
				}
			} else {
				console.error("Error al enviar el formulario:", response.statusText); // Mostrar un mensaje de error en la consola
			}
		} catch (error) {
			console.error("Error en la solicitud:", error); // Mostrar un mensaje de error en la consola
		}
	});
	// FIN DE INSERT NUEVO USUARIO FUNCION


	const editForm = document.getElementById("edit_user");

	// Agregar un evento de escucha para el envío del formulario de edición
	editForm.addEventListener("submit", async (event) => {
		event.preventDefault(); // Evitar el envío del formulario por defecto

		const formData = new FormData(editForm); // Crear un objeto FormData con los datos del formulario de edición

		try {
			const response = await fetch("edit-user", {
				// Enviar los datos del formulario de edición al servidor
				method: "POST",
				body: formData,
			});

			if (response.ok) {
				const data = await response.json(); // Obtener los datos de la respuesta del servidor

				if (data.status) {
					// Verificar si la operación fue exitosa
					toastr.success("Usuario actualizado correctamente"); // Mostrar un toast de éxito
					tabla.api().ajax.reload(); // Recargar la tabla de usuarios
					clearForm(); // Cerrar el modal de edición
				} else {
					toastr.error("Error al actualizar usuario"); // Mostrar un toast de error
				}
			} else {
				console.error(
					"Error al enviar el formulario de edición:",
					response.statusText
				); // Mostrar un mensaje de error en la consola
			}
		} catch (error) {
			console.error("Error en la solicitud de edición:", error); // Mostrar un mensaje de error en la consola
		}
	});

	// Obtener el botón de cerrar modal
	const btnCloseModal = document.getElementById("btnCloseModal");
	const btnCloseModalEdit = document.getElementById("btnCloseModalEdit");

	// Agregar un evento de escucha para el clic en el botón de cerrar modal
	btnCloseModal.addEventListener("click", clearForm);
	btnCloseModalEdit.addEventListener("click", clearForm);

	// Función para limpiar el formulario y cerrar el modal
	function clearForm() {
		form.reset(); // Limpiar el formulario
		$("#modal-report").modal("hide"); // Cerrar el modal
		$("#modal-edit").modal("hide"); // Cerrar el modal
	}
});
