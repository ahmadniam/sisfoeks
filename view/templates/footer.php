<!--//doc-wrapper-->
    <br><br>
        <div id="promo-block" class="promo-block">
          <div class="container"></div>
          <!--//container-->
        </div><!--//promo-block-->

    </div>
<!--//page-wrapper-->

<footer id="footer" class="footer text-center">
    <div class="container">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">&copy 2017 Designed and Developed with <em class="fa fa-heart"></em> by <a href="http://linked.in/ahmadniam/" targe="_blank">Edutech Team</a></small></div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<!-- <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script> -->
<script src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src=".../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/plugins/prism/prism.js"></script>
<script type="text/javascript" src="../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>

<!-- datatables-->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('#data_siswa').DataTable();
} );
</script>
<script>
$(document).ready(function() {
$('#data_pembina').DataTable();
} );
</script>

<script>
$(document).ready(function() {
$('#data_jurnal').DataTable();
} );
</script>

<script>
$(document).ready(function() {
$('#akun').DataTable();
} );
</script>


<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
</body>
</html>
