<script>
    $(document).ready(function(){
        $('.btn-danger').click(function() {
            const id = $(this).data('id');

            Swal.fire({
            title: "Eliminación de registro",
            text: "¿Estas seguro de eliminar este documento?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
            }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`delete/${id}`, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    }
                }).then(response => {
                    Swal.fire({
                    title: "Documento eliminado",
                    text: response.data.message,
                    confirmButtonText: 'Aceptar',
                    icon: "success"
                }).then(result => {
                    window.location.reload();
                });
                }).catch(error => {
                    console.log(error);
                })
            }
            });

        });
    })
   
</script>