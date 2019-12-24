 <!-- General JS Scripts -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
 <!-- <script src="../assets/js/stisla.js"></script> -->
 <!-- JS Libraies -->

 <!-- Template JS File -->
 <script src="<?php echo base_url("/assets_stisla/js/stisla.js") ?>"></script>
 <script src="<?php echo base_url("/assets_stisla/js/scripts.js") ?>"></script>
 <script src="<?php echo base_url("/assets_stisla/js/custom.js") ?>"></script>
 <script src="<?php echo base_url("/assets_stisla/js/page/features-setting-detail.js") ?>"></script>
 <!-- <script src="../assets/js/scripts.js"></script> -->
 <!-- <script src="../assets/js/custom.js"></script> -->

 <!-- Page Specific JS File -->

 <!-- Core plugin JavaScript-->
 <script src="<?php echo base_url("/assets/jquery-easing/jquery.easing.min.js") ?>"></script>
 <!-- Page level plugin JavaScript-->
 <script src="<?php echo base_url("/assets/chart.js/Chart.min.js") ?>"></script>
 <script src="<?php echo base_url("/assets/datatables/jquery.dataTables.js") ?>"></script>
 <script src="<?php echo base_url("/assets/datatables/dataTables.bootstrap4.js") ?>"></script>
 <!-- Custom scripts for all pages-->
 <script src="<?php echo base_url("/js/sb-admin.min.js") ?>"></script>
 <!-- Demo scripts for this page-->
 <script src="<?php echo base_url("/js/demo/datatables-demo.js") ?>"></script>
 <script src="<?php echo base_url("/js/demo/chart-area-demo.js") ?>"></script>
 <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
 <!-- Index 0 -->
 <script src="<?php echo base_url("/assets_stisla/js/page/index-0.js") ?>"></script>
 <script src="<?php echo base_url("/assets_stisla/js/page/index.js") ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/chocolat/0.4.21/js/jquery.chocolat.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>


 <!-- Register -->
 <script src="<?php echo base_url('/assets_stisla/js/page/auth-register.js') ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.full.min.js"></script>
 <script src="<?php echo base_url('/assets_stisla/js/page/forms-advanced-forms.js') ?>"></script>

 <!-- OneTech Assets JS -->
 <script src="<?php echo base_url('/assets_onetech/js/cart-custom.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/animation.gsap.min.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/custom.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/easing.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/owl.carousel.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/scrollToPlugin.min.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/slick.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/TimelineMax.min.js') ?>"></script>
 <script src="<?php echo base_url('/assets_onetech/js/TweenMax.min.js') ?>"></script>

 <script>
     $('#foto').on('change', function() {
         //get the file name
         var fileName = $(this).val();
         //replace the "Choose a file" label
         $(this).next('.custom-file-label').html(fileName);
     })
 </script>
 <script>
     if (jQuery().summernote) {
         $(".summernote").summernote({
             dialogsInBody: true,
             minHeight: 250,
         });
         $(".summernote-simple").summernote({
             dialogsInBody: true,
             minHeight: 150,
             toolbar: [
                 ['style', ['bold', 'italic', 'underline', 'clear']],
                 ['font', ['strikethrough']],
                 ['para', ['paragraph']]
             ]
         });
     }
 </script>