<?php

$url = array(
    'login' => 'auth/login.php',
    'allPost' => 'pages/view_post.php',
    'addPost' => 'pages/add_post.php',
    'category' => 'pages/category.php',
    'booking' => 'pages/booking.php',
    'agency' => 'pages/agency.php',
    'inbox' => 'pages/mail.php',
    'notification' => 'pages/notification.php',
    'profile' => 'pages/profile.php',
    'editPost' => 'pages/edit_post.php',
    'readMail' => 'views/read_mail.php',
    'readContact' => 'views/read_contact.php',
    'readAgency' => 'views/read_agency.php',
);

$url_data = array();
foreach ($url as $keyWord => $urls) {
       
    $url_data[] = $keyWord;

    if (isset($_SERVER['REQUEST_URI']) && !in_array($_SERVER['REQUEST_URI'], $url_data)) {
        // echo "invalid url";
        
    }
}

if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) 
{
    // header('location: auth/login.php');
} 
else if (isset($_SERVER['REQUEST_URI']) == '/lynxadmin/') 
{
    header('location: pages/home.php');

} 
else if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/lynxadmin/') 
{
    header('location: errors/400.php');
}
