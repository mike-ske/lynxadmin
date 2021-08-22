 <!-- /.card -->
 <div class="card card-info">

     <div class="card-body p-0">
         <!-- /.col -->
         <div class="col-md-12">
             <div class="card card-primary card-outline">
                 <div class="card-header">
                     <h3 class="card-title">New Notifications</h3>
                     <h6 class="card-title">Found <?php echo getAllNotification($conn) ?> New Messages </h6>
                 </div>
                 <!-- /.card-tools -->
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">

                 <div class="table-responsive mailbox-messages">
                     <table class="table table-hover table-striped">
                         <tbody>

                            <?php

                            echo get_all_notif_by_type($conn, 'mail');
                            echo get_all_notif_by_type($conn, 'contact');
                            echo get_all_notif_by_type($conn, 'booking');
                            ?>
                         </tbody>
                     </table>
                 </div>
                 <!-- /.card -->

             </div>

         </div>
         <!-- /.card-body -->

     </div>
     <!-- /.card -->
 </div>
 <!-- /.col -->