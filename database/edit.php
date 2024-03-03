<?php
require "MVDB.php";
$pdo= Database::letsconnect();

$condi = $_POST['condition'];
$candidateID = $_POST['candidateID'];
$FirstName = $_POST['Firstname'];
$LastName = $_POST['LastName'];
$MiddleName = $_POST['MiddleName'];
$Extension = $_POST['Extention'];
$GradeLevel = $_POST['GradeLevel'];
$Section = $_POST['Section'];
$Position = $_POST['Position'];
$Partylist = $_POST['Partylist'];


if($condi == "edit"){
$sql = "UPDATE candidates SET CFirstName='$FirstName', CLastname='$LastName', CMiddlename='$MiddleName', CExtension='$Extension', GradeLevel='$GradeLevel', Section='$Section', Partylist='$Partylist', PositionID='$Position' WHERE candidateID='$candidateID'";
$data = Database::ManageRecord($GLOBALS['pdo'], $sql);
}

if($condi == "delete"){
$sql = "Delete from candidates where candidateID = '$candidateID' ";
$data = Database::ManageRecord($GLOBALS['pdo'], $sql);
}
?>