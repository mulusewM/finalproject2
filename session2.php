<?php
session_start();
if (!isset($_SESSION['applicant_id']) || (trim($_SESSION['applicant_id']) == '')) {
    header("location:../index.php?");
    exit();
}
$session_id=trim($_SESSION['applicant_id']);

?>