const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Bienvenido',
    text:'Administrador',
    icon: 'success',
    showCancelButton: false,
    confirmButtonText: 'OK !',
    allowOutsideClick: false,
    
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      
        document.location ='../vista/HomeAdministrador.php';
     
    }
  })