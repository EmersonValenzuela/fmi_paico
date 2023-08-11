$(function () {
	"user strict";

	let base_url = "";

	$("#dw_form").on("change", function () {
		let griddle_prc = $("#iron_prc").val(),
			rails_prc = $("#rails_prc").val(),
			studs_prc = $("#studs_prc").val(),
			tin_screw_prc = $("#tin_screw_prc").val(),
			drw_screw_prc = $("#drw_screw_prc").val(),
			putty_prc_bucket = $("#putty_prc_bucket").val(),
			putty_price_box = $("#putty_price_box").val(),
			equine_prc = $("#equine_prc").val(),
			adhesive_prc = $("#adhesive_prc").val(),
			square_meter = $("#square_meter").val();

		$("#iron_prc").val() > 0
			? $("#iron_prc").val(Number.parseFloat(griddle_prc).toFixed(2))
			: "";
		$("#rails_prc").val() > 0
			? $("#rails_prc").val(Number.parseFloat(rails_prc).toFixed(2))
			: "";
		$("#studs_prc").val() > 0
			? $("#studs_prc").val(Number.parseFloat(studs_prc).toFixed(2))
			: "";
		$("#tin_screw_prc").val() > 0
			? $("#tin_screw_prc").val(Number.parseFloat(tin_screw_prc).toFixed(2))
			: "";
		$("#drw_screw_prc").val() > 0
			? $("#drw_screw_prc").val(Number.parseFloat(drw_screw_prc).toFixed(2))
			: "";
		$("#putty_prc_bucket").val() > 0
			? $("#putty_prc_bucket").val(
					Number.parseFloat(putty_prc_bucket).toFixed(2)
			  )
			: "";
		$("#putty_price_box").val() > 0
			? $("#putty_price_box").val(Number.parseFloat(putty_price_box).toFixed(2))
			: "";
		$("#equine_prc").val() > 0
			? $("#equine_prc").val(Number.parseFloat(equine_prc).toFixed(2))
			: "";
		$("#adhesive_prc").val() > 0
			? $("#adhesive_prc").val(Number.parseFloat(adhesive_prc).toFixed(2))
			: "";
		$("#square_meter").val() > 0
			? $("#square_meter").val(Number.parseFloat(square_meter).toFixed(2))
			: "";
	});

	

	$(".input_number").on("input", function () {
		this.value = this.value.replace(/[^0-9.]/g, "");
	});

	// Ronda decimal
	if (!Math.round10) {
		Math.round10 = function (value, exp) {
			return decimalAdjust("round", value, exp);
		};
	}

	$("#btn_send").on("click", function () {
		let name_user = $("#name_user").val(),
			email_user = $("#email_user").val(),
			num_user = $("#num_user").val(),
			meters = $("#line_meters").val(),
			griddle_prc = $("#iron_prc").val(),
			rails_prc = $("#rails_prc").val(),
			studs_prc = $("#studs_prc").val(),
			tin_screw_prc = $("#tin_screw_prc").val(),
			drw_screw_prc = $("#drw_screw_prc").val(),
			amount_putty_bucket = $("#amount_putty_bucket").val(),
			putty_prc_bucket = $("#putty_prc_bucket").val(),
			putty_price_box = $("#putty_price_box").val(),
			amount_putty_box = $("#amount_putty_box").val(),
			equine_prc = $("#equine_prc").val(),
			equine_quantity = $("#equine_quantity").val(),
			adhesive_prc = $("#adhesive_prc").val(),
			amount_adhesive = $("#amount_adhesive").val(),
			square_meter = $("#square_meter").val();

		// cantidad

		a_griddle = Math.round((4 * meters) / 2.44); //cantidad de planchas
		a_riel = Math.round((2 * meters) / 3); //cantidad de rieles
		a_studs = Math.round((7 * meters) / 2.44); //cantidad de parantes
		a_tin_screw = Math.round((33 * meters) / 2.44); //cantidad de tornillos para lata
		a_tin_drw = Math.round10((164 * meters) / 2.44, -1); //cantidad de tornillos para drywall
		a_meters = Math.round10(2.44 * meters, -1); // cantidad de metros cuadrados

		// costos

		cos_griddle = Math.round10(a_griddle * griddle_prc, -1); //costo de planchas de drywall a usar
		cos_riel = Math.round10(a_riel * rails_prc, -1); //costo de rieles a usar
		cos_studs = Math.round10(a_studs * studs_prc, -1); //costo de parantes a usar

		cos_tin_screw = Math.round10((a_tin_screw / 1000) * tin_screw_prc, -1); //costo de tornillos para lata
		cos_tin_drw = Math.round10((a_tin_drw / 1000) * drw_screw_prc, -1); //costo de tornillos para drywall
		cos_putty_bucket = Math.round(amount_putty_bucket * putty_prc_bucket); //costo de masilla en balde a usar
		cos_putty_box = Math.round(amount_putty_box * putty_price_box); //costo de masilla en caja a usar
		cos_equine = Math.round(equine_prc * equine_quantity); //costo de equineros a usar
		cos_adhesive = Math.round(adhesive_prc * amount_adhesive); //costo de cinta a usar

		//precios totales

		let array_prc = [
			cos_griddle,
			cos_riel,
			cos_studs,
			cos_tin_screw,
			cos_tin_drw,
			cos_putty_bucket,
			cos_putty_box,
			cos_equine,
			cos_adhesive,
		];

		let mt_cs = 0;

		array_prc.forEach((e) => {
			mt_cs += e; //costo total de materiales
		});
		material_cos = Math.round10(mt_cs, -1); //costo total de materiales variable definica
		job_cos = Math.round10(a_meters * square_meter, -1); //costo de mano de obra
		total = Math.round10(material_cos + job_cos, -1); //costo total

		let array_var = {
			meters: meters,
			griddle_prc: griddle_prc,
			rails_prc: rails_prc,
			studs_prc: studs_prc,
			tin_screw_prc: tin_screw_prc,
			drw_screw_prc: drw_screw_prc,
			amount_putty_bucket: amount_putty_bucket,
			putty_prc_bucket: putty_prc_bucket,
			putty_price_box: putty_price_box,
			amount_putty_box: amount_putty_box,
			equine_prc: equine_prc,
			equine_quantity: equine_quantity,
			adhesive_prc: adhesive_prc,
			amount_adhesive: amount_adhesive,
			square_meter: square_meter,
			name_user: name_user,
			email_user: email_user,
			num_user: num_user,
			cos_griddle: Number.parseFloat(cos_griddle).toFixed(2),
			cos_riel: Number.parseFloat(cos_riel).toFixed(2),
			cos_studs: Number.parseFloat(cos_studs).toFixed(2),
			cos_tin_screw: Number.parseFloat(cos_tin_screw).toFixed(2),
			cos_tin_drw: Number.parseFloat(cos_tin_drw).toFixed(2),
			cos_putty_bucket: Number.parseFloat(cos_putty_bucket).toFixed(2),
			cos_putty_box: Number.parseFloat(cos_putty_box).toFixed(2),
			cos_equine: Number.parseFloat(cos_equine).toFixed(2),
			cos_adhesive: Number.parseFloat(cos_adhesive).toFixed(2),
			material_cos: Number.parseFloat(material_cos).toFixed(2),
			job_cos: Number.parseFloat(job_cos).toFixed(2),
			total: Number.parseFloat(total).toFixed(2),
			a_meters: a_meters,
			a_griddle: a_griddle,
			a_riel: a_riel,
			a_studs: a_studs,
			a_tin_screw: a_tin_screw,
			a_tin_drw: a_tin_drw,
		};

		let l = Ladda.create(this);

		$.ajax({
			url: "quote/drywall/upDrywall",
			method: "POST",
			dataTYpe: "JSON",
			async: true,
			data: array_var,
			beforeSend: () => {
				$("#btn_send").attr("Guardando");
				l.start();
			},
		})
			.done((a) => {
				if (a.status == 200) {
					console.log(a.rsp);
					msg_alert(
						"Lo estamos redireccionando al PDF",
						"Registro exitoso",
						"success"
					);
					$("#dw_form")[0].reset();
					setTimeout(function () {
						let win = window.open("pdf-drywall/" + a.rsp, "_blank");
						win.focus();
					}, 3200);
				}
			})
			.fail((e) => {
				console.log("error");
			})
			.always(() => {
				l.stop();
				return false;
			});
	});

	function decimalAdjust(type, value, exp) {
		// Si exp no está definido o es cero...
		if (typeof exp === "undefined" || +exp === 0) {
			return Math[type](value);
		}
		value = +value;
		exp = +exp;
		// Si el valor no es un número o la exp no es un número entero...
		if (isNaN(value) || !(typeof exp === "number" && exp % 1 === 0)) {
			return NaN;
		}
		// cambiar
		value = value.toString().split("e");
		value = Math[type](+(value[0] + "e" + (value[1] ? +value[1] - exp : -exp)));
		//  cambiar hacia atrás
		value = value.toString().split("e");
		return +(value[0] + "e" + (value[1] ? +value[1] + exp : exp));
	}

	function msg_alert(msg, title, type) {
		toastr[type](msg, title, {
			positionClass: "toast-top-right",
			closeButton: true,
			progressBar: true,
			preventDuplicates: true,
			newestOnTop: true,
			rtl: $("body").attr("dir") === "rtl" || $("html").attr("dir") === "rtl",
		});
	}
});
