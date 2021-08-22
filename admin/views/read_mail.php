    <?php 

        $id = $_GET['readMail'];
        if (isset($id)) 
        {
        $row = getAllMails($conn, $id);
        $_SESSION['mails'] = $row['email'];
        $_SESSION['ml_id'] = $row['id'];
        }
        else {
            echo "<h6 class='text-center m-5'>No Mail ID found</h6>";
        }

    ?>


<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title"><?php echo $row['email'] ?></h3>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-reply-mail"><i class="fas fa-reply"></i> Reply</button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body  p-5">
            <div class="mailbox-read-info">
                <h5><?php echo $row['email'] ?></h5>
                <h6>From: <?php echo $row['phone'] ?>
                    <span class="mailbox-read-time float-right"><?php echo convertDate($row['created_date']) ?></span>
                </h6>
            </div>
        </div>
        <!-- /.mailbox-controls -->
        <div class="mailbox-read-message  p-5">
            <p>Hello Lynxlaboratories,</p>

            <p><?php echo $row['message'] ?></p>

            <p>Thanks,<br><?php echo $row['email'] ?></p>
        </div>
        <!-- /.mailbox-read-message -->
    </div>
    <a href="./?inbox" class="btn btn-primary text-center p-2 mt-5 "><i class="fas fa-arrow-circle-left mr-2"></i>Back to Mails</a>
    <!-- /.card-footer -->

</div>