$(document).ready(function () {
    $("#btnObtenerDatos").click(function () {
        $.ajax({
            url: '../SERV/json_1.php',
            type: 'POST',
            dataType: 'json',
            data: {},
            beforeSend: function () {
                $("#divContenido").html("cargando Datos...");
            },
            success: function (data, textStatus, xhr) {
                $("#divContenido").empty();
                $("#divContenido").append("<table class='table table-striped table-hover table-bordered'>");
                $("#divContenido table").append("<tr>");
                $("#divContenido table tr:last").append($("<th>").html("Codigo"));
                $("#divContenido table tr:last").append($("<th>").html("Nombres"));
                $("#divContenido table tr:last").append($("<th>").html("Apellidos"));
                $("#divContenido table tr:last").append($("<th>").html("Nota"));
                for (x in data.producto) {
                    $("#divContenido table").append("<tr>");
                    $("#divContenido table tr:last").append($("<td>").html(data.producto[x].nombre));
                    $("#divContenido table tr:last").append($("<td>").html(data.producto[x].precio));
                    $("#divContenido table tr:last").append($("<td>").html());
                    $("#divContenido table tr:last").append($("<td>").html());
                };
            },
            error: function (xhr, textStatus, errorThrown) {
                $("#divContenido").html("error" + errorThrown);
            }
        });
    });
});


