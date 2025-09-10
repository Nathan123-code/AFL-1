<?php
require("controller_member.php");
if (isset($_GET["updateID"])) {
    $member_id = $_GET["updateID"];
    $member = getMemberWithID($member_id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Membership</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_member.php">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addmember.php">New Member</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Update Member</h1>
                <form method="POST" action="controller_member.php" class="row g-3 w-75 mx-auto">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputName" value="<?=$member-> name ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="inputPhone" value="<?=$member-> phone ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="inputEmail" value="<?=$member-> email ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputNote" class="form-label">Note</label>
                        <input type="text" class="form-control" name="inputNote" value="<?=$member-> note ?>">
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="input_id" value="<?=$member_id?>">
                        <button name="button_update" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>