<!DOCTYPE html>
<html>

<head>
    <title>4. Formularios y Validación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-5">
        <h1>4. Formularios y Validación</h1>
        <form class="row g-3 mb-5" autocomplete="off">
            <div class="col-12 alert alert-danger d-none" role="alert" id="divMsg"></div>
            <div class="mb-3 col-6">
                <label for="nombre" class="form-label">Nombre <small>*</small></label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3 col-6">
                <label for="edad" class="form-label">Edad <small>*</small></label>
                <input type="text" class="form-control" id="edad" name="edad">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Procesar datos</button>
            </div>
        </form>
        <a href="index.php">Volver a la página de inicio</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const formData = document.querySelector('form');
        const divMsg = document.querySelector('#divMsg');
        formData.onsubmit = async function(e) {
            e.preventDefault();
            divMsg.classList.add('d-none');
            const body = new FormData(formData);
            const response = await fetch('controllers/procesar_formulario.php', {
                method: 'POST',
                body
            });
            const data = await response.json();
            divMsg.innerHTML = data?.message;
            divMsg.classList.remove('d-none', 'alert-success', 'alert-danger');
            if (response.ok) {
                divMsg.classList.add('alert-success');
            } else {
                divMsg.classList.add('alert-danger');
            }
        }
    </script>
</body>

</html>