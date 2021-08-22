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

function getAdminAccount($db)
{; // Get the total number for each notification   
     $sql = "SELECT * FROM admin_acct";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        return $post;
    }
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

function getAllAgent($db, $limit)
{
    $sql = "SELECT * FROM agency ORDER BY id DESC LIMIT $limit ";
    $query = mysqli_query($db, $sql) or die("Failed to get AGENCY DATA from database!" . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No Records found</h6>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        return $post;
    }
}

function getTotalAgent($db, $limit)
{
    $sql = "SELECT * FROM agency ORDER BY id DESC LIMIT $limit ";
    $query = mysqli_query($db, $sql) or die("Failed to get AGENCY DATA from database!" . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No Records found</h6>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
   
    return $data;
}

function getAllMails($db, $limit)
{
    $sql = "SELECT * FROM mails ORDER BY id DESC LIMIT $limit ";
    $query = mysqli_query($db, $sql) or die("Failed to get MAIL DATA from database!" . mysqli_error($db));
    $data = array();

    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No Records found</h6>";
    }
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        return $post;
    }
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

function getCategory($db)
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

function getAllCategoryById($db, $post_id)
{
    $sql = "SELECT * FROM category WHERE id = '$post_id' ";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    // $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        echo $row['cat_name'];
    }
 
}

function getAllPostById($db, $post_id)
{
    $sql = "SELECT * FROM post WHERE id = $post_id";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }
    foreach($data as $post)
    {
        return $data;
    }
}

function getTotalRecord($db, $table)
{
    $sql = "SELECT * FROM $table ";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $num_rows = mysqli_num_rows($query);
    // === loop through each table rows
    
    return $num_rows;
}


function getTotalRecordById($db, $table, $id)
{
    $sql = "SELECT * FROM $table WHERE id = $id";
    $query = mysqli_query($db, $sql) or die("Failed to get category from database!" . mysqli_error($db));
    $num_rows = mysqli_num_rows($query);
    // === loop through each table rows
    $num_rows = mysqli_num_rows($query);
    // if ($num_rows == 0 || !isset($num_rows)) 
    // {
    //     // echo "<h6 class='text-center m-5'>No $table Records found</h6>";
    // }

    $data = array();
    // === loop through each table rows
    while ($row =  mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach ($data as $catValue) {
        return $catValue;
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
        echo "<h6 class='text-center m-5'>No Records found</h6>";
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
                    <a href='$link_page=$i' aria-controls='dataTable' class='page-link'>".$i."</a>
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


function getAllBookings($db, $limit = "")
{ 
    $sql = "SELECT * FROM bookings ORDER BY id DESC LIMIT $limit";
    $query = mysqli_query($db, $sql) or die("Failed to get BOOKINGS from database " . mysqli_error($db));
    $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No Contacts Records found</h6>";
    }
    // === loop through each table rows
    while ($row = mysqli_fetch_assoc($query)) 
    {
        $data[] = $row;
    }
    return $data; 
        // foreach ($data as $post) {
        //     return $post;
        // }
    
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



function getAllNotification($db)
{
    $sql = "SELECT * FROM notifications WHERE viewed = 1";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    // $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        echo "<h6 class='text-center m-5'>No NOTIFICATION Records found</h6>";
    }
    // === loop through each table rows
    return $num_rows;  
}

function getNotifEntityId($db, $type)
{
    $sql = "SELECT * FROM notifications WHERE types = '$type' AND viewed = 1 ORDER BY entity_id DESC ";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    // $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows > 1) 
    {
           // === loop through each table rows
            while ($row = mysqli_fetch_assoc($query)) 
            {
                $data[] = $row;
            }
            return $data;
    }
    else
    {
        echo "";
    }

    
}




function get_New_Notifications($db, $table)
{
    $nums = array();
    if ($table === 'mail') 
    {
        $row1 = getNotifEntityId($db, 'mail');
        if (isset($row1)) 
        {
            foreach ($row1 as $value) 
            {
                $nums[] = $value['entity_id']; // GET Entity ID For each notification
            
                $record = getTotalRecordById($db, 'mails', $value['entity_id']);

                echo "<a class='dropdown-item d-flex align-items-center' href='./?notification'>
                        <div class='dropdown-list-image mr-3'>
                            <img class='rounded-circle' src='img/undraw_profile_1.svg'>
                            <div class='status-indicator bg-success'></div>
                        </div>
                        <div class='font-weight-bold'>
                            <div class='small text-gray-500'>". convertDate($record['created_date'])."</div>
                            <div class='small text-gray-500'>". $record['email']. "</div>
                            <div class='text-truncate'>". substr($record['message'], 0, 30)."..."."</div>
                        </div>
                    </a>";
                
            }
        }

        $_SESSION['num_notif'] = count($nums); // Get the total number for each notification
    }
    elseif ($table === 'contact') 
    {
        $row1 = getNotifEntityId($db, 'contact');
        if (isset($row1)) 
        {
            foreach ($row1 as $value) 
            {
                $nums[] = $value['entity_id']; // GET Entity ID For each notification
            
                $record = getTotalRecordById($db, 'bookings', $value['entity_id']);
                
                echo "<a class='dropdown-item d-flex align-items-center' href='./?notification'>
                    <div class='mr-3'>
                        <div class='icon-circle bg-primary'>
                            <i class='fas fa-file-alt text-white'></i>
                        </div>
                    </div>
                    <div>
                        <div class='small text-gray-500'>". convertDate($record['created_date'])."</div>
                        <div class='small text-gray-300'>". $record['full_name']."</div>
                        <span class='font-weight-bold'>". substr($record['message'], 0, 30)."..."."</span>
                    </div>
                </a>";
            }
        }
       
        $_SESSION['num_notif'] = count($nums); // Get the total number for each notification
    }
    elseif ($table === 'booking') 
    {
        $row1 = getNotifEntityId($db, 'booking');
        if(isset($row1))
        {
            foreach ($row1 as $value) 
            {
                $nums[] = $value['entity_id']; // GET Entity ID For each notification
            
                $record = getTotalRecordById($db, 'agency', $value['entity_id']);
            
            
                echo "<a class='dropdown-item d-flex align-items-center' href='./?notification'>
                        <div class='mr-3'>
                            <div class='icon-circle bg-primary'>
                                <i class='fas fa-file-alt text-white'></i>
                            </div>
                        </div>
                        <div>
                            <div class='small text-gray-500'>". convertDate($record['created_date'])."</div>
                            <div class='small text-gray-300'>". $record['name']."</div>
                            <span class='font-weight-bold'>". substr($record['message'], 0, 30)."..."."</span>
                        </div>
                    </a>";
            
            }
        }
        $_SESSION['num_notif'] = count($nums); // Get the total number for each notification
    }
    
}
// logic for the notification: 7 new mails found

function getContactNotif($db)
{
    $sql = "SELECT * FROM notifications WHERE `types` = 'contact' ";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    // $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        // echo "";
    }
    return $num_rows;
}

function getBookNotif($db)
{
    $sql = "SELECT * FROM notifications WHERE  `types` = 'booking' ";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    // $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        // echo "";
    }
    return $num_rows;
}

function getMailNotif($db)
{
    $sql = "SELECT * FROM notifications WHERE  `types` = 'mail' ";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    // $data = array();
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0 || !isset($num_rows)) 
    {
        // echo "";
    }
    return $num_rows;
}

function get_all_notif_by_type($db, $type)
{
    if ($type === 'mail') 
    {
        $sql = "SELECT * FROM notifications WHERE `types` = 'mail' ";
        $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $data[] = $row;
        }
        foreach ($data as $date) {
            $id = $date['viewed'];
            $date_1 = convertDate($date['created_date']) ;
        }
        $result = getNotifEntityId($db, $type) ;
        if(isset($result))
        {
                    echo "
                        <tr>
                            <a href='./?inbox=$id' class='dropdown-item mt-2 mb-2'>
                                <i class='fas fa-users mr-2'></i>".count(getNotifEntityId($db, $type))." new Mails 
                                <span style='color:#858796;font-size:14px;margin-left:25px'>". $date_1 . "</span>
                            </a>
                        </tr>
                    ";
        }
    }
    elseif ($type === 'contact') 
    {
        $sql = "SELECT * FROM notifications WHERE `types` = '$type' ";
        $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $data[] = $row;
        }
        foreach ($data as $date) {
            $id = $date['viewed'];
            $date_1 = convertDate($date['created_date']) ;
        }
        $result = getNotifEntityId($db, $type) ;
        if(isset($result))
        {
            echo "
                <tr>
                    <a href='./?booking=$id' class='dropdown-item mt-2 mb-2'>
                        <i class='fas fa-users mr-2'></i>". count(getNotifEntityId($db, 'contact')) ." new Bookings 
                        <span style='color:#858796;font-size:14px;margin-left:25px'>". $date_1 . "</span>
                    </a>
                </tr>
                ";
        }
        
    }
    elseif ($type === 'booking') 
    {
        $sql = "SELECT * FROM notifications WHERE `types` = 'booking' ";
        $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $data[] = $row;
        }
        foreach ($data as $date) {
            $id = $date['viewed'];
            $date_1 = convertDate($date['created_date']) ;
        }

        $result = getNotifEntityId($db, $type) ;
        if(isset($result))
        {
        echo "
                <tr>
                    <a href='./?agency=$id' class='dropdown-item mt-2 mb-2'>
                        <i class='fas fa-users mr-2'></i>".count(getNotifEntityId($db, 'booking'))." new Agency 
                        <span style='color:#858796;font-size:14px;margin-left:25px'>". $date_1 . "</span>
                    </a>
                </tr>
            ";
        }
    }
}


function deleteMessage($db, $type)
{
    $sql = "DELETE FROM notifications WHERE viewed = 1 AND types = '$type' ";
    $query = mysqli_query($db, $sql) or die("Failed to get NOTIFICATION from database " . mysqli_error($db));
    
}

?>