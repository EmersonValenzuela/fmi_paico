$(document).ready(function() {

    $('body').on('submit', '#formAddUser', function() {
        $.ajax({
            url: base_url + 'register/addUser',
            data: $(this).serialize(),
            type: 'POST',
            success: function(resultado) {
                if (resultado == "x1") {
                    $("#msjModal").html('<div class="callout callout-danger alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><p><b>Usuario duplicado.</b> El nombre de usuario ya exista, elija otro e inténtelo de nuevo.</p></div>');
                } else {
                    location.reload();
                }
            },
            error: function(data) {
                // $("#msjModal").html('<div class="callout callout-danger">'+data['responseText']+'</div>');
                // alerta('Error interno', data['responseText'], '');
            }
        });
        return false;
    });

});
