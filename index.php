<?php
require("backend/controller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hospital</title>
</head>

<body>
    <div class="container p-3">
        <div class="container p-3">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Doktor-Specialist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_dokter.php">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_specialist.php">Specialist</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h1>UC Hospital</h1>
                    <h1>Dokter-Specialist List</h1>
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th>No</th>
                                <th>Doctor Name</th>
                                <th>Specialist</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            if (!empty($_SESSION['dokterlist'])):
                                foreach ($_SESSION['dokterlist'] as $index => $doctor):
                                    $counter++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $counter ?></th>
                                    <td><?= htmlspecialchars($doctor->name) ?></td>
                                    <?php if (isset($_SESSION['specialList'][$doctor->specialist_id])): ?>
                                        <?php $spec = $_SESSION['specialList'][$doctor->specialist_id]; ?>
                                        <td><?= htmlspecialchars($spec->name) ?></td>
                                        <td><?= htmlspecialchars($spec->tipe) ?></td>
                                    <?php else: ?>
                                        <td colspan="2" class="text-danger text-center">Specialist Deleted</td>
                                    <?php endif; ?>
                                </tr>
                            <?php
                                endforeach;
                            else:
                            ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No doctors available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>