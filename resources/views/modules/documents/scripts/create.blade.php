<script>

    const proceso = document.getElementById('proceso');
    const tipo = document.getElementById('tipo_documento');
    const inputCodigo = document.getElementById('codigo');
    const btnCreate = document.getElementById('btnCreate');

    function calcular_codigo(){
        axios.get(`calculate_code/${proceso.value}/${tipo.value}`, {
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

    
    btnCreate.addEventListener('click', () => {

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
            console.log('todo esta bien');

            let data = {
                nombre: document.getElementById('nombre').value,
                tipo_documento: document.getElementById('tipo_documento').value,
                proceso: document.getElementById('proceso').value,
                codigo: document.getElementById('codigo').value,
                contenido: document.getElementById('contenido').value,
                consecutivo: document.getElementById('consecutivo').value
            }

            axios.post("{{ route('documents.store') }}", data, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(response => {
                Swal.fire({
                icon: "success",
                title: "Registro creado",
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
                text: "Ocurio un error al registrar el documento, por favor intente más tarde.",
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