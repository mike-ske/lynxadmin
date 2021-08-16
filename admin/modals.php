    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Delete POST Modal-->
<div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Post?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">�</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?allPost" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_post.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>18</b><br />
" >Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete POST Modal-->

<!-- Delete Bookings Modal-->
<div class="modal fade" id="deleteBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Booking?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">�</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?booking" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_booking.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>38</b><br />
" >Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete Bookings Modal-->

<!-- Delete agent Modal-->
<div class="modal fade" id="deleteAgent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Agency?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">�</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?agency" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_agent.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>58</b><br />
">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete agent Modal-->

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete mail?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">�</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?inbox" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_mail.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>78</b><br />
">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal-->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">�</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <form action="inc/logout.php" method="post">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="crsf" value="$2y$10$ewlgdnVo.kPbdGR8jQhVget7a6/ZnCyaE.sxxIFq29yp0YLx33L1q">
                    <button type="submit" class="btn btn-primary" name="send">Logout</button>
               </form>
                
            </div>
        </div>
    </div>
</div>