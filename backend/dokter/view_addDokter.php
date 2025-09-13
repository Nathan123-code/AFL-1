<?php
require("../controller.php");
$HAS_SPECIALISTS = !empty($_SESSION['specialList']);
if (!$HAS_SPECIALISTS) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <a class="nav-link active" href="#">New Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../specialist/view_addSpecialist.php">New specialist</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning text-center mb-3">
                        Dokter tidak bisa ditambahkan karena belum ada data specialist.<br>Silakan tambahkan data specialist terlebih dahulu.
                    </div>
                    <div class="text-center">
                        <a href="../specialist/view_addSpecialist.php" class="btn btn-primary">Add Specialist</a>
                        <a href="../../view_specialist.php" class="btn btn-outline-secondary ms-2">View Specialists</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>';
    exit;
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
                        <a class="nav-link" href="index.php">Doktor-Specialist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_dokter.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../view_specialist.php">Specialist</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>New Dokter</h1>
                <form method="POST" action="../controller.php" class="row g-3 w-75 mx-auto">
                    <input type="hidden" name="action" value="add_doctor">

                    <div class="mb-3">
                        <label class="form-label">Doctor Name</label>
                        <input type="text" name="inputName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="inputPhone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="inputEmail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Note</label>
                        <textarea name="inputNote" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Specialist</label>
                        <select name="specialist_id" class="form-select" required>
                            <option value="" disabled selected>-- PILIHAN YANG TERSEDIA--</option>
                            <?php foreach ($_SESSION['specialList'] as $id => $spec): ?>
                                <option value="<?= $id ?>"><?= htmlspecialchars($spec->name) ?>
                                    (<?= htmlspecialchars($spec->tipe) ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button name="button_registerDokter" button type="submit" class="btn btn-primary">Save Doctor</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>