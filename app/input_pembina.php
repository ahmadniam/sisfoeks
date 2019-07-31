<?php
require_once('header.php');
 ?>

				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Input Kehadiran Pembina</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
<?php
require_once('../view/templates/side-menu.php')
 ?>
            <div class="col-md-9">

            <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Input Kehadiran <strong>Pembina </strong>atau <strong>Pelatih !</strong>
			</div>

       <!-- Area Form Input Kegiatan -->

            <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-md-3" for="pwd">Nama Ekstra</label>
                    <div class="col-md-5">
          <select class="form-control" id="ekstrakurikuler">
                        <option>Pramuka</option>
                        <option>PMR</option>
                        <option>Paskibra</option>
                        <option>Volley</option>
                        <option>Basket</option>
                        <option>Rebana</option>
                        <option>Band</option>
                    </select>
                    </div>
                  </div>




 <div class="form-group">
                  <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

                    <div class="form-group" >
                      <div class="col-md-3">
                        <div class="datepicker-center">
                          <div class="input-group date" data-date="" data-date-format="dd-mm-yyyy">
                            <input class="form-control" type="text" name="tgl_regis"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

        <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i> Lihat</button>
                </div>
                </div>



              </form>


      <!-- Akhir Area Form Input Kegiatan -->








              <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
               <br>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama </th>
                      <th>Hadir</th>
                      <th>Izin</th>
                      <th>Alfa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>

                    </tr>
                  </tbody>
                </table>
                <div class="row">
                  <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Simpan</button>
                </div>
                </div>
                </div>
              </div>

            </div>
          <br><br>
          </div>
        </div>
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
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */--><small class="copyright">&copy 2017 Designed and Developed with <em class="fa fa-heart"></em> by <a href="http://themes.3rdwavemedia.com/" targe="_blank">ICT Team</a></small></div><!--//container-->
    </footer><!--//footer-->


    <!-- Main Javascript -->
    <!-- <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script> -->
    <script src="../js/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/prism/prism.js"></script>
    <script type="text/javascript" src="../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>

	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>


</body>
</html>
