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
                            <a class="nav-link " href="index.php">Doktor-Specialist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_dokter.php">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view_specialist.php">Specialist</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h1>Specialist</h1>
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Gaji</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allSpecialist = getAllSpecialist();
                            foreach ($allSpecialist as $index => $Specialist) {
                                $counter++;
                                ?>

                                <tr>
                                    <th scope="row"><?= $counter ?></th>
                                    <td><?= $Specialist->name ?></td>
                                    <td><?= $Specialist->tipe ?></td>
                                    <td><?= $Specialist->gaji ?></td>
                                    <td>
                                        <a href="backend/specialist/view_updateSpecialist.php?updateID=<?= $index ?>">
                                            <button class="btn btn-warning">Update</button>
                                        </a>
                                        <a href="backend/controller.php?deleteIDSpecialist=<?= $index ?>"
                                            onclick="return confirm('Jika menghapus specialist, maka specialist yang terkait dengan dokter juga akan terhapus. yakin?')">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>

                    </table>
                    <a href="backend/specialist/view_addSpecialist.php">
                        <button class="btn btn-dark">Add New Specialist</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>