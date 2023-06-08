<?php
require_once('./class/class.aktor.php');

if (isset($_GET['aktorid'])) {
    $objAktor = new Aktor();
    $objAktor->userid = $_GET['aktorid'];
    $objAktor->DeleteAktor();
    echo "<script> alert('$objAktor->message'); </script>";
    echo "<script>window.location = '?p=aktorlist'</script>";
} else {
    echo '<script>window.history.back()</script>';
}
?>