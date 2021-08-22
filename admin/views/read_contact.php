

<?php 

$id = $_GET['readContact'];
if (isset($id) )
{
   $row = getBookingsById($conn, $id);
   $_SESSION['bk_mail'] = $row['email'];
   $_SESSION['bk_id'] = $row['id'];
}
else {
    echo "<h6 class='text-center m-5'>No Contact ID found</h6>";
}
?>

<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title"><?php echo $row['full_name'] ?></h3>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-reply-cont"><i class="fas fa-reply"></i> Reply</button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body  p-5">
            <div class="mailbox-read-info">
                <h5><?php echo $row['full_name'] ?></h5>
                <h6>From: <?php echo $row['email'] ?>
                    <span class="mailbox-read-time float-right"><?php echo convertDate($row['created_date']) ?></span>
                </h6>
            </div>
        </div>
        <!-- /.mailbox-controls -->
        <div class="mailbox-read-message  p-5">
            <p>Hello lynxlaboratories,</p>

            <p><?php echo $row['message'] ?></p>

            <p>Thanks,<br><?php echo $row['full_name'] ?></p>
        </div>
        <!-- /.mailbox-read-message -->
    </div>
    <a href="./?booking" class="btn btn-primary text-center p-2 mt-5 "><i class="fas fa-arrow-circle-left mr-2"></i>Back to Bookings</a>
    <!-- /.card-footer -->

</div>