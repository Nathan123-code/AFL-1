<?php
include("model_member.php");
session_start();
if (!isset($_SESSION["memberlist"])) {
    $_SESSION['memberlist'] = array();
} 
function createMember(){
    $member = new member();
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->email = $_POST['inputEmail'];
    $member->note = $_POST['inputNote'];
    array_push($_SESSION['memberlist'], $member);
}

function getAllMembers(){
    return $_SESSION['memberlist'];
}
function deleteMember($memberIndex){
    unset( $_SESSION['memberlist'][$memberIndex]);
}

if (isset($_POST['button_register'])){
    createMember();
    header("Location: view_member.php");
}
?>