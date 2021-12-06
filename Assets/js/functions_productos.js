
function openModal()
{
    document.querySelector('#idProducto').value ="";
    //document.querySelector('.modal-header').classList.replace("headerUpdate, "headerRegister");
    //document.querySelector('#btnActionForm').classList.replace("btn-info, "btn-primay");
    //document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Producto";
    document.querySelector('#formProductos').reset();
    $('#modalFormProductos').modal('show');
}