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

<!-- AdminLTE for demo purposes -->
<script src="../packed/dist/js/demo.js"></script>
<script src="../js/main.js"></script>

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

<script src="../ckeditor/ckeditor.js"></script>


<script>
	CKEDITOR.replace( 'textarea' );
</script>


    <?php
        if (isset($_SESSION['status']) && isset($_SESSION['status_code'])) 
        {
    ?>
     <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            showConfirmButton: false,
            timer: 3000
        })

        Swal.fire({
            icon: "<?php echo $_SESSION['status_code']?>",
            text: "<?php echo $_SESSION['status']?>",
            title: "<?php echo $_SESSION['status_title']?>",
            showConfirmButton: true,
        });
    </script>
    <?php 
        unset($_SESSION['status']);
    }; 
    ?>

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
    // $(function() {
    //     // Summernote
    //     $('.textarea').summernote("code")
    //     ;
    // })
</script>



</body>

</html>