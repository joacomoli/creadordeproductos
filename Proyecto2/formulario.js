$(document).ready(function() {
    var contador = 1;
    $("#agregarProducto").click(function() {
        var nuevoProducto = '<div><label for="nombre' + contador + '">Nombre:</label>' +
            '<input type="text" name="nombres[]" id="nombre' + contador + '" required>' +
            '<label for="descripcion' + contador + '">Descripción:</label>' +
            '<textarea name="descripciones[]" id="descripcion' + contador + '" rows="5" cols="40" required></textarea></div>';
        $("#productos").append(nuevoProducto);
        contador++;
    });
});
