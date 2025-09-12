<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UC Hospital</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Doktor-Specialist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../view_dokter.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../../view_specialist.php">Specialist</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>New specialist</h1>
                <form method="POST" action="../controller.php" class="row g-3 w-75 mx-auto">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputName">
                    </div>
                    <div class="col-12">
                        <label for="inputTipe" class="form-label">Tipe</label>
                        <input type="text" class="form-control" name="inputTipe">
                    </div>
                    <div class="col-12">
                        <label for="inputGaji" class="form-label">Gaji</label>
                        <input type="text" class="form-control" name="inputGaji">
                    </div>
                    <div class="col-12">
                        <button name="button_registerSpecialist" type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>