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
                                <th scope="col">No</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Specialist</th>
                                <th scope="col">Note</th>                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allDokter = getAllDoctors();
                            $allSpecialist = getAllSpecialist();
                            foreach ($allDokter as $index => $member) {
                                $counter++;
                                ?>

                                <tr>
                                    <th scope="row"><?= $counter ?></th>
                                    <td><?= $member->name ?></td>
                                    <td><?= $member->phone ?></td>
                                    <td><?= $member->email ?></td>
                                    <td><?= $member->note ?></td>
                                    <td>
                                        <a href="view_updatemember.php?updateID=<?=$index?>">
                                        <button class="btn btn-warning">Update</button>
                                        </a>
                                        <a href="controller_member.php?deleteID=<?=$index?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>