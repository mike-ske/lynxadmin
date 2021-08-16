<?php


function getAllCategory($db)
{
    $sql = "SELECT * FROM category";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    return $data;
}

function selectAllCategory($db) 
{
    $sql = "SELECT * FROM category";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        echo $post['cat_name'];
    }
}

function getAllPost($db, $limit)
{
    $sql = "SELECT * FROM post ORDER BY id DESC LIMIT $limit ";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database!" . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h3 class='text-center m-5'>No Records found</h3>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    return $data;
}

function getPost($db, $limit)
{
    $sql = "SELECT * FROM post ORDER BY  category_id DESC LIMIT $limit ";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database!" . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h3 class='text-center m-5'>No Records found</h3>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    return $data;
}

function getAllCategoryByLim($db, $limit)
{
    $sql = "SELECT * FROM category LIMIT $limit";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    return $data;
}

function getAllCategoryById($db, $post_id)
{
    $sql = "SELECT * FROM category WHERE id = $post_id";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    // $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        echo $row['cat_name'];
    }
 
}
function getPostImageById($db, $post_id)
{
    $sql = "SELECT * FROM `images` WHERE `post_id` = '$post_id' ";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        echo $post['img_name'];
    }
 
}

function viewPostById($db, $post_id)
{
    $sql = "SELECT * FROM post WHERE `id` = $post_id ";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach ($data as $catValue) {
        return $catValue;
     }
}


function getSingleCategoryById($db, $post_id)
{
    $sql = "SELECT * FROM category WHERE id = $post_id ";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }

    foreach ($data as $catValue) {
       echo $catValue['cat_name'];
    }
 
}

function editPostById($db, $post_id)
{
    $sql = "SELECT * FROM post WHERE id = $post_id";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database " . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }

    foreach ($data as $post) {
        return $post;
    }
    
}


function getPostByCatId($db, $cat_id)
{
    $sql = "SELECT * FROM post WHERE category_id = $cat_id";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database " . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No Post Category Records found</h6>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }
    return $data;
}


function getImageById($db, $post_id)
{
    $sql = "SELECT * FROM images WHERE post_id = $post_id";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }

    foreach ($data as $image) {
        return $image;
    }
    
}

function paginator($page, $rows_per_page, $db, $table)
{
    $records_par_page = $rows_per_page;
    // get the start record
    $start_from = ($page - 1) * $records_par_page;

    // Query the database to get the rows per page
    $sql_1 = "SELECT * FROM $table  ORDER BY `created_date` DESC LIMIT $start_from, $records_par_page";
    $query_1 = mysqli_query($db, $sql_1) or die("Failed to get data from database!" . mysqli_error($db));
    $records = array();
    $num_rows = mysqli_num_rows($query_1);

    // get total records show live pages
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $total_records = mysqli_num_rows($query);
    $_SESSION['liveShow'] = 'Showing page '.$page.' of '.$total_records.' Entries';
   
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h3 class='text-center m-5'>No Records found</h3>";
    }
    foreach ($query_1 as $row) {
        
        $records[] = $row;
    }
    

    return $records;
}

function paginatorLink($row_par_page, $link_page, $db, $table)
{
    // get total records
    $sql = "SELECT * FROM `$table`";
    $query = mysqli_query($db, $sql) or die("Failed to get data from database!" . mysqli_error($db));
   
    $total_records = mysqli_num_rows($query);
    // === loop through each table rows
    

    // get number of pages
    $total_pages = ceil($total_records / $row_par_page);

    for ($i=1; $i < $total_pages; $i++) 
    { 
        echo "<li class='paginate_button page-item previous' id='dataTable_previous'>
                    <a href='$link_page?page=$i' aria-controls='dataTable' class='page-link'>".$i."</a>
                </li>
                ";
    }
}

function nextPage($row_par_page, $db, $table)
{
     // get total records
     $sql = "SELECT * FROM $table";
     $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
     $total_records = mysqli_num_rows($query);
     // === loop through each table rows

     // get number of pages
     $total_pages = ceil($total_records / $row_par_page);
    return $total_pages;
}

function previousPage($page, $link_page)
{
     if ($page > 1) 
     {
         $calc = ($page-1);
         echo "<li class='paginate_button page-item previous' id='dataTable_previous'>
                    <a href=".$link_page=$calc." aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>Prev</a>
                  </li>
                  ";
      
     }
}

function getBookingsById($db, $bk_id)
{
    $sql = "SELECT * FROM bookings WHERE id = $bk_id";
    $query = mysqli_query($db, $sql) or die("Failed to get post from database " . mysqli_error($db));
    $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h3 class='text-center m-5'>No Contacts Records found</h3>";
    }
    else
    {
        // === loop through each table rows
        while ($row =  mysqli_fetch_assoc($query)) 
        {
            $data[] = $row;
        }
        foreach ($data as $post) {
            return $post;
        }
    }
   
}

function cutString($text)
{
    $max = 400;
    $words = substr($text, 0, $max).'...';
    echo $words;
    
}


function convertDate($date = '')
{
    $convert_date = strtotime($date);
   return date('j F Y H:i:sa', $convert_date);
}



?>