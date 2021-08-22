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
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="./?allPost" type="button" data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary" href="inc/delete_post.php?id=<?php echo $value['id'] ?>">Delete</a>
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
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="./?booking" type="button" data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary" href="inc/delete_booking?id=<?php echo $values['id']?>">Delete</a>
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
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="./?agency" type="button" data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary" href="inc/delete_agency.php?id=<?php echo $values['id']?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete agent Modal-->

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete mail?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="./?inbox" type="button" data-dismiss="modal">Cancel</a>
                    <a class="btn btn-primary" href="inc/delete_mail?id=<?php echo $values['id']?>">Delete</a>
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
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form action="auth/logout" method="post">
                        <input type="hidden" name="crsf" value="<?php print_r(password_hash('user', PASSWORD_DEFAULT))?>">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="send">Logout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- /.modal-dialog -->
    <!-- ADD CATEGORIES MODAL /.modal-dialog -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal form -->
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="inc/manage_cat">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="cat_name" class="form-control" id="inputEmail3" placeholder="Enter name">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <button type="submit" name="send" class="btn btn btn-primary">Add Category</button>
                            <button type="submit" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- modal form -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.modal-dialog -->
    <!-- ADD VIDEO MODAL /.modal-dialog -->
    <div class="modal fade" id="modal-lg-video">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Video URL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- modal form -->
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="inc/manage_video" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row mb-5">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Attach Link</label>
                                <div class="col-sm-10">
                                    <input type="url" name="video_url" class="form-control" id="inputEmail3" placeholder="http://www.lynxlabboratories.com">
                                </div>
                            </div>

                            <div class="form-group row mb-2" style="align-items: center;margin-bottom: 0px !important; font-size: 13px">
                                <div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> Please Note!</h5>
                                    Covert all videos type (e.g mp4, wav, podcast, recoded, encoder) format to YouTube links/url
                                    before uploading for proper video quality display. Generate the link and upload to database.
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <button type="submit" name="send" class="btn btn btn-primary">Upload</button>
                            <button type="submit" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- modal form -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.modal-dialog -->
    <!-- ADD REPLAY AGENCY MODAL /.modal-dialog -->
    <div class="modal fade" id="modal-lg-reply-agent">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reply Agency Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- modal form -->
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="views/mail_agent" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group mb-5">
                                <input class="form-control" type="email" name="email" placeholder="To:" value="<?php echo $_SESSION['agt_mail']?>">
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control"type="text" name="subject" placeholder="Subject:">
                            </div>
                            <div class="form-group mb-5">
                                <textarea id="compose-textarea" name="message" class="form-control" style="height: 200px" placeholder="Enter message here"></textarea>
                            </div>

                            <div class="row">
                                <div class="form-group mb-5 col-md-4">
                                    <label for="exampleInputFile">Attach File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer ">
                            <input type="submit" name="send" class="btn btn btn-primary" value="Send">
                            <button type="reset" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- modal form -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->

    <!-- /.modal-dialog -->
    <!-- ADD REPLY MAIL MODAL /.modal-dialog -->
    <div class="modal fade" id="modal-lg-reply-cont">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reply Contacts Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- modal form -->
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="views/mail_booking" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group mb-5">
                                <input type="email"  class="form-control" name="email" placeholder="To:" value="<?php echo $_SESSION['bk_mail'] ?>">
                            </div>
                            <div class="form-group mb-5">
                                <input  type="text" class="form-control" name="subject" placeholder="Subject:">
                            </div>
                            <div class="form-group mb-5">
                                <textarea id="compose-textarea" name="message" class="form-control" style="height: 200px" placeholder="Enter message here"></textarea>
                            </div>

                            <div class="row">
                                <div class="form-group mb-5 col-md-4">
                                    <label for="exampleInputFile">Attach File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer ">
                            <button type="submit" name="send" class="btn btn btn-primary">Send</button>
                            <button type="reset" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
            <!-- modal form -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->

    <!-- /.modal-dialog -->
    <!-- ADD REPLAY MAILS MODAL /.modal-dialog -->
    <div class="modal fade" id="modal-lg-reply-mail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reply Mails Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- modal  form -->
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="views/send_mail" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group mb-5">
                                <input type="email"  name="email" class="form-control" placeholder="To:" value="<?php echo $_SESSION['mails']?>">
                            </div>
                            <div class="form-group mb-5">
                                <input type="text" name="subject" class="form-control" placeholder="Subject:">
                            </div>
                            <div class="form-group mb-5">
                                <textarea id="compose-textarea" name="message"class="form-control" style="height: 200px" placeholder="Enter message here"></textarea>
                            </div>

                            <div class="row">
                                <div class="form-group mb-5 col-md-4">
                                    <label for="exampleInputFile">Attach File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer ">
                            <button type="submit" name="send" class="btn btn btn-primary">Send</button>
                            <button type="reset" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- modal form -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- /.modal-dialog -->