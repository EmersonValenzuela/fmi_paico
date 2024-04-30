$(() => {
	const roles = {
		1: "Administrador",
		2: "Author",
		4: "Administrador",
		5: "Cotizador",
	};

	$("#data-users").dataTable({
		searchable: 1,
		language: {
			url: "assets/json/Spanish.json",
		},
		ajax: {
			method: "POST",
			url: "table_users",
		},
		columns: [
			{ data: "id" },
			{ data: "photo" },
			{ data: "name" },
			{ data: "email" },
			{ data: "phone" },
			{ data: "username" },
			{ data: "pass" },
			{ data: "idRol" },
			{ data: "" },
		],
		columnDefs: [
			{ targets: 0, searchable: !1, visible: !1 },
			{
				targets: 1,
				render: function (e, t, a, n) {
					return `<img src="assets/img/user/${e}" class="img-fluid img-radius wid-40" alt="">`;
				},
			},
			{
				targets: 7,
				render: function (e, t, a, n) {
					return roles[e];
				},
			},
			{
				targets: -1,
				searchable: !1,
				orderable: !1,
				render: function (e, t, a, n) {
					return '<a href="#!" class="btn btn-info btn-sm"> <i class="feather icon-edit-2"></i></a> <a href="#!" class="btn btn-danger btn-sm"> <i class="feather icon-trash-2"></i></a>';
				},
			},
		],
	});


	$("#")
});
