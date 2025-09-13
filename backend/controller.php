<?php
include("dokter/model_dokter.php");
include("specialist/model_specialist.php");
session_start();

if (!isset($_SESSION["dokterlist"])) {
    $_SESSION['dokterlist'] = array();
}
if (!isset($_SESSION["specialList"])) {
    $_SESSION['specialList'] = array();
}

function createDokter() {
    $doctor = new Dokter(
        $_POST['inputName'],
        $_POST['inputPhone'],
        $_POST['inputEmail'],
        $_POST['inputNote'] ?? "No Note",
        $_POST['specialist_id'] 
    );
    $_SESSION['dokterlist'][] = $doctor;
}
function updateDokter($id) {
    if (isset($_SESSION['dokterlist'][$id])) {
        $doctor = $_SESSION['dokterlist'][$id];
        $doctor->name = $_POST['inputName'];
        $doctor->phone = $_POST['inputPhone'];
        $doctor->email = $_POST['inputEmail'];
        $doctor->note = !empty($_POST['inputNote']) ? $_POST['inputNote'] : "No Note";
        $doctor->specialist_id = $_POST['specialist_id'];
    }
}

function createSpecialist()
{
    $specialist = new specialist(
        trim($_POST['inputName'] ?? ''),
        trim($_POST['inputTipe'] ?? ''),
        $_POST['inputGaji'] ?? 0
    );
    $_SESSION['specialList'][] = $specialist;
}


function updateSpecialist($specialistID)
{
    $specialist = $_SESSION['specialList'][$specialistID];
    $specialist->name = $_POST['inputName'];
    $specialist->tipe = $_POST['inputTipe'];
    $specialist->gaji = $_POST['inputGaji'];
}



//getter deleter
function getAllDoctors()
{
    return $_SESSION['dokterlist'];
}
function deleteDoctor($dokterIndex)
{
    unset($_SESSION['dokterlist'][$dokterIndex]);
}
function getAllSpecialist()
{
    return $_SESSION['specialList'];
}
function deleteSpecialist($specialist_id) {
    
    foreach ($_SESSION['dokterlist'] as $doctor_id => $doctor) {
        if ($doctor->specialist_id == $specialist_id) {
            unset($_SESSION['dokterlist'][$doctor_id]);
        }
    }

    unset($_SESSION['specialList'][$specialist_id]);
}
function getDokterrWithID($dokterID)
{
    return $_SESSION['dokterlist'][$dokterID] ?? null;
}
function getSpecialistWithID($specialistID)
{
    return $_SESSION['specialList'][$specialistID] ?? null;
}








//button register rek
if (isset($_POST['button_registerDokter'])) {
    createDokter();
    header("Location: ../view_dokter.php");
} else if (isset($_POST["button_registerSpecialist"])) {
    createSpecialist();
    header("Location: ../view_specialist.php");
}
//button delete
if (isset($_GET['deleteIDDokter'])) {
    deleteDoctor($_GET['deleteID']);
    header("Location: ../view_dokter.php");
} else if (isset($_GET["deleteIDSpecialist"])) {
    deleteSpecialist($_GET['deleteIDSpecialist']);
    header("Location: ../view_specialist.php");
}

//button_update
if (isset($_POST['button_updateDokter'])) {
    updateDokter($_POST['input_id']);
    header("Location: ../../view_dokter.php?success=updated");
} else if (isset($_POST["button_updateSpecialist"])) {
    updateSpecialist($_POST['input_id']);
    header("Location: ../view_specialist.php");
}
?>