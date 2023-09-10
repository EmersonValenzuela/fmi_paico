$(() => {
    $('#data-quote').dataTable({
        language: {
            url: 'assets/json/Spanish.json',
        },
        ajax: {
            method: "POST",
            url: "quote/dashboard/data_quote",
        },
        columns: [
            { data: "name_drw" },
            { data: "number_drw" },
            {
                render: function (data, type, row) {
                    return get_date(row.date_drw);
                },
            },
            {
                render: function (data, type, row) {
                    return get_date(row.date_ex_drw);
                },
            },
            {
                data: "id_drw",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(
                        "<button type='button' class='btn btn-danger waves-effect waves-light' OnClick='view_client(" +
                        oData.id_drw +
                        ")'><i class='fas fa-file-pdf'></i> </button> " +
                        "<button type='button' class='btn btn-info waves-effect waves-light' OnClick='view_pdf(" +
                        oData.id_drw +
                        ")'><i class='fas fa-clipboard'></i> </button> "
                    );
                },
            }
        ]
    });
});
function view_client(id) {
    let url = $("#url_base").val();
    window.open(url + "pdf-cliente-drywall/" + id);
}
function view_pdf (id) {
    let url = $("#url_base").val();
    window.open(url + "pdf-drywall/" + id);
}
function get_date(i) {
    let dia = i.substr(8, 2),
        mes = i.substr(5, 2),
        año = i.substr(0, 4);
    switch (mes) {
        case "01":
            mes = "Enero";
            break;
        case "02":
            mes = "Febrero";
            break;
        case "03":
            mes = "Marzo";
            break;
        case "04":
            mes = "Abril";
            break;
        case "05":
            mes = "Mayo";
            break;
        case "06":
            mes = "Junio";
            break;
        case "07":
            mes = "Julio";
            break;
        case "08":
            mes = "Agosto";
            break;
        case "09":
            mes = "Septiembre";
            break;
        case "10":
            mes = "Octubre";
            break;
        case "11":
            mes = "Noviembre";
            break;
        case "12":
            mes = "Diciembre";
            break;
        default:
            break;
    }
    return dia + " de " + mes + " de " + año;
}
