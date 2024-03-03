<?php
require "MVDB.php";
$pdo= Database::letsconnect();

$FirstName = $_POST['Firstname'];
$LastName = $_POST['LastName'];
$MiddleName = $_POST['MiddleName'];
$Extension = $_POST['Extention'];
$GradeLevel = $_POST['GradeLevel'];
$Section = $_POST['Section'];
$Position = $_POST['Position'];
$Partylist = $_POST['Partylist'];

// Generate the next ID starting from 001
$nextId = getNextId($pdo);

$sql = "insert into candidates (candidateID, CFirstname, CLastname, CMiddlename, CExtension, GradeLevel, Section, PositionID, Partylist)
values('$nextId', '$FirstName', '$LastName', '$MiddleName', '$Extension', '$GradeLevel', '$Section', '$Position', '$Partylist')";
$data = Database::ManageRecord($GLOBALS['pdo'], $sql);

// Function to generate the next ID
function getNextId($pdo) {
    $sql = "SELECT MAX(candidateID) as maxId FROM candidates";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $lastId = $result['maxId'];

    if ($lastId) {
        $lastNum = (int) substr($lastId, -3); // Extract the last 3 digits
        $nextNum = $lastNum + 1;
        $nextId = str_pad($nextNum, 3, '0', STR_PAD_LEFT); // Pad with zeros to ensure 3 digits
    } else {
        $nextId = '001'; // Start with 001 if no previous ID exists
    }

    return $nextId;
}
?>
