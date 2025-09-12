<?php
require("controller.php");
if (isset($_GET["updateID"])) {
    $dokter_id = $_GET["updateID"];
    $dokter = getDoctorWithID($dokter_id);
}
?>

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
                        <a class="nav-link" href="view_member.php">Doktor-Specialist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addDokter.php">New Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addSpecialist.php">New Specialist</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Update Member</h1>
                <form method="POST" action="controller_member.php" class="row g-3 w-75 mx-auto">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputName" value="<?=$dokter-> name ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="inputPhone" value="<?=$dokter-> phone ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="inputEmail" value="<?=$dokter-> email ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputNote" class="form-label">Note</label>
                        <input type="text" class="form-control" name="inputNote" value="<?=$dokter-> note ?>">
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="input_id" value="<?=$dokter_id?>">
                        <button name="button_update" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>