//Carga contenidos según a qué botón se hace clic
$(document).ready( function() {
    $("#addusers").on("click", function() {
        $("#content").load("php/users/add.php");
    });
});