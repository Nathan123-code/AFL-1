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
function createDokter()
{
    $dokter = new dokter();
    $dokter->name = $_POST['inputName'];
    $dokter->phone = $_POST['inputPhone'];
    $dokter->email = $_POST['inputEmail'];
    $dokter->note = $_POST['inputNote'];
    array_push($_SESSION['dokterlist'], $dokter);
}
function updateDokter($dokterID)
{
    $dokter = $_SESSION['dokterlist'][$dokterID];
    $dokter->name = $_POST['inputName'];
    $dokter->phone = $_POST['inputPhone'];
    $dokter->email = $_POST['inputEmail'];
    $dokter->note = $_POST['inputNote'];
}
function createSpecialist() {
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
function deleteSpecialist($specialistIndex)
{
    unset($_SESSION['specialList'][$specialistIndex]);
}
function getDoctorWithID($dokterID)
{
    return $_SESSION['dokterlist'][$dokterID];
}
function getSpecialistWithID($specialistID) {
    return $_SESSION['specialList'][$specialistID] ?? null;
}

if (isset($_POST['button_registerDokter'])) {
    createDokter();
    header("Location: ../view_dokter.php");
} else if (isset($_POST["button_registerSpecialist"])) {
    createSpecialist();
    header("Location: ../view_specialist.php");
}

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
    header("Location: ../view_dokter.php");
} else if (isset($_POST["button_updateSpecialist"])) {
    updateSpecialist($_POST['input_id']);
    header("Location: ../view_specialist.php");
}
?>