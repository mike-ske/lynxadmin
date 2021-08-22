<?php 

$id = $_GET['readAgency'];
if (isset($id)) 
{
   $row = getAllAgent($conn, $id);
   $_SESSION['agt_mail'] = $row['email'];
   $_SESSION['agt_id'] = $id;
}
else {
    echo "<h6 class='text-center m-5'>No Agency ID found</h6>";
}

?>

<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>

        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-reply-agent"><i class="fas fa-reply"></i> Reply</button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body   p-5">
            <div class="mailbox-read-info">
                <h5><?php echo $row['name'] ?></h5>
                <h6>From: <?php echo $row['email'] ?>
                    <span class="mailbox-read-time float-right"><?php echo convertDate($row['created_date']) ?></span>
                </h6>
            </div>
        </div>
        <!-- /.mailbox-controls -->
        <div class="mailbox-read-message  p-5">
            <p>Hello Lynxlaboratories,</p>

            <p><?php echo $row['message'] ?></p>

            <p>Thanks,<br><?php echo $row['name'] ?></p>
        </div>
        <!-- /.mailbox-read-message -->
    </div>
    <a href="./?agency" class="btn btn-primary text-center p-2 mt-5 "><i class="fas fa-arrow-circle-left mr-2"></i>Back to Agency</a>
</div>