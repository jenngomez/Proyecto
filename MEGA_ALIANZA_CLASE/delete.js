function confirmacion(e) {
    if (confirm("¿Está seguro que desea eliminar este registro?")) {
        return true;
    } else {
        e.preventDefault(
        )
    }
}
let linkdelete = document.querySelectorAll(".bi bi-eraser");
for (var i = 0; i < linkdelete.length; i++){
    linkdelete[i].addEventListener('click', confirmacion);
}