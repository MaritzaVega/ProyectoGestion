const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Datos Invalidos',
    icon: 'error',
    showCancelButton: false,
    confirmButtonText: 'OK !',
    allowOutsideClick: false,
    
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      
        document.location ='../index.php';
     
    }
  })