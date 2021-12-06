
function openModal()
{
    document.querySelector('#idCliente').value ="";
    //document.querySelector('.modal-header').classList.replace("headerUpdate, "headerRegister");
    //document.querySelector('#btnActionForm').classList.replace("btn-info, "btn-primay");
    //document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Cliente";
    document.querySelector('#formCliente').reset();
    $('#modalFormCliente').modal('show');
}