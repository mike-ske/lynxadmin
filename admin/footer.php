<!-- jQuery -->
<script src="../packed/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../packed/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../packed/dist/js/adminlte.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="../packed/vendor/jquery/jquery.min.js"></script>
<script src="../packed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ========================== PLUGINS SECTIONS =================================== -->
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Summernote -->
<script src="../packed/plugins/summernote/summernote-bs4.min.js"></script>


<!-- SWEAT ALERT scripts -->
<script src="../packed/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../packed/plugins/toastr/toastr.min.js"></script>
<script src="js/main.js"></script>


<script>
    // window.Category EventListener('load',function () {
    //      //AJAX REQ
    //     xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function () {
    //         if(this.readyState == 4 && this.status == 200)
    //         {
    //             document.querySelector('#ajx_1').innerHTML = this.responseText;
    //             document.querySelector('#ajx_2').innerHTML = this.responseText;
    //         }
    //     }
    //     xhttp.open("GET", "inc/noteEngine.php", true);
    //     xhttp.send();
    // });
   
</script>


<script src="../ckeditor5/ckeditor.js"></script>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>


<!-- <script>
	CKEDITOR.replace( 'textarea' );
</script> -->

<script>
	// ClassicEditor
	// 	.create( document.querySelector( '#textarea' ), {
	// 		// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    //         autoParagraph: false,
    //         enterMode: 2
	// 	} )
	// 	.then( editor => {
	// 		window.editor = editor;
	// 	} )
	// 	.catch( err => {
	// 		console.error( err.stack );
	// 	} )
</script>

<script>
    $(function() {
        // Summernote
        $('.textarea').summernote("code").replace(/<\/p>/gi, "\n")
                                        .replace(/<br\/?>/gi, "\n")
                                        .replace(/<\/?[^>]+(>|$)/g, "")
        ;
    })
</script>



</body>

</html>