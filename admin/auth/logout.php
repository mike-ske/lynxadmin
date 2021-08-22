
<?php 
session_start();

if (isset($_POST['send']))
{
    if (isset($_POST['crsf']) && isset($_SESSION['ad_name'])) 
    {
        unset($_SESSION['ad_name']);
        session_destroy();
        header('location: ./login');
    }
}
?>