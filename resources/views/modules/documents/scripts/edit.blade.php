<script>

    const proceso = document.getElementById('proceso');
    const tipo = document.getElementById('tipo_documento');
    const inputCodigo = document.getElementById('codigo');
    const btnEdit = document.getElementById('btnEdit');

    function calcular_codigo(){
        var ruta = "{{ route('documents.calculate_code', ['id_proceso' => '__proceso__', 'id_tipo' => '__tipo__']) }}"
        .replace('__proceso__', proceso.value)
        .replace('__tipo__', tipo.value);

        axios.get(ruta, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(response => {
            var consecutivo = document.getElementById('consecutivo');
            inputCodigo.value = response.data.code;
            consecutivo.value = response.data.consecutive_new;
        }).catch(error => {
            console.log(error);
        })
    }

    proceso.addEventListener('change', calcular_codigo);
    tipo.addEventListener('change', calcular_codigo);

    
    btnEdit.addEventListener('click', () => {

        let field = true;

        let fields = [
            'nombre',
            'tipo_documento',
            'proceso',
            'codigo',
            'contenido'
        ]

        fields.forEach(fieldName => {
            let element = document.getElementById(fieldName);
            if (element && element.value.trim() === '') {
                field = false;
            }
        });

        if (field) {

            let data = {
                nombre: document.getElementById('nombre').value,
                tipo_documento: document.getElementById('tipo_documento').value,
                proceso: document.getElementById('proceso').value,
                codigo: document.getElementById('codigo').value,
                contenido: document.getElementById('contenido').value,
                consecutivo: document.getElementById('consecutivo').value
            }
            var ruta = "{{ route('documents.update', ['id' => '__id__']) }}".replace('__id__', {{ $documento->DOC_ID }});

            axios.patch(ruta, data, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(response => {
                Swal.fire({
                icon: "success",
                title: "Registro actualizado",
                text: response.data.message,
                confirmButtonText: 'Aceptar',
                }).then(result => {
                    window.location.href = "{{ route('documents.index') }}";
                });
            }).catch(error => {
                console.log(error);
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Ocurio un error al actualizar el documento, por favor intente más tarde.",
                confirmButtonText: 'Aceptar',
                });
            })

        } else {
            Swal.fire({
            icon: "warning",
            title: "Campos vacios",
            text: "Recuerda, todos los campos con asterisco son obligatorios.",
            confirmButtonText: 'Aceptar',
            });
        }

    });

</script>