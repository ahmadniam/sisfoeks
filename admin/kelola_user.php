<?php
    include 'pagination.php';
    //$qData = mysqli_query($con, "SELECT*FROM users ORDER BY studentid ASC");
    $result = tampilUser();
    //pagination config start
    $rpp = 20; // jumlah record per halaman
    $reload = "index.php?u=KelolaUser&pagination=true";
    $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
    $tcount = mysqli_num_rows($result);
    $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
    $count = 0;
    $i = ($page-1)*$rpp;
    $no_urut = ($page-1)*$rpp;

?>

<div class="panel panel-default">
  <div class="panel-body">


        <div class="col-md-12 col-sm-6 col-xs-4">
            <h4><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</h4>

        <hr>
        <?php
        if ($_SESSION['username'] == "admin"){
        ?>

        <ul class="nav nav-pills">

            <li><a href="index.php?u=KelolaUser"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</a></li>

            <li><a href="index.php?u=tambahadmin"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Admin</a></li>

            <li><a href="index.php?u=tambahpembina"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Pembina</a></li>

            <li><a href="index.php?u=tambahsiswa"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Siswa</a></li>

        </ul>

        <?php
        }else{
        ?>

        <ul class="nav nav-pills">

            <li><a href="index.php?u=KelolaUser"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</a></li>

            <li><a href="index.php?u=tambahuser"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;User</a></li>

        </ul>

        <?php } ?>

        <br>

          <table id="datatable" class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th style="font-size: 14px" class="col-md-0">#</th>
                        <th style="font-size: 14px" class="col-md-2">Username</th>
                        <th style="font-size: 14px" class="col-md-3">Firstname</th>
                        <th style="font-size: 14px" class="col-md-4">Email</th>
                        <th style="font-size: 14px" class="col-md-1">Jenis</th>
                        <th style="font-size: 14px" class="col-md-2">Action</th>

                    </tr>
                </thead>

				<tbody>

					<?php

							while(($count<$rpp) && ($i<$tcount)) {
                            mysqli_data_seek($result,$i);
                            $data = mysqli_fetch_array($result);

					?>

					<tr>
                        <td style="font-size: 12px"><?php echo ++$no_urut;?></td>

                        <td style="font-size: 12px"><?php echo $data['username'];?></td>
                        <td style="font-size: 12px"><?php echo $data['firstname'];?></td>
                        <td style="font-size: 12px"><?php echo $data['email'];?></td>
                        <td style="font-size: 12px"><?php echo $data['level']; ?></td>
                        <td>
                            <?php
                            if ($data['username'] == "admin" || $data['username'] == "$_SESSION[username]"){
                            ?>
                            <a href="#" class='btn btn-xs btn-warning disabled' id='<?php echo  $data['id_user']; ?>' data-toggle='modal'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                            <a href="#" class="btn btn-xs btn-danger disabled" data-toggle='modal' onclick="confirm_modal('user_delete.php?&id=<?php echo  $data['id_user']; ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                            <?php
                            }else{
                                if ($data['level'] == "admin"){
                            ?>
                            <a href="index.php?u=editadmin&id=<?=$data['id_user'];?>" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                            <a href="#" class="btn btn-xs btn-danger" data-toggle='modal' onclick="confirm_modal('user_delete.php?&id=<?php echo  $data['id']; ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                <?php
                              }else if ($data['level'] == "pembina"){
                                ?>

                            <a href="index.php?u=editpembina&id=<?=$data['id_user'];?>" class="btn btn-xs btn-warning" id="<?php echo  $data['id_user']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                            <a href="#" class="btn btn-xs btn-danger" data-toggle='modal' onclick="confirm_modal('user_delete.php?&id=<?php echo  $data['id_user']; ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                              <?php
                            }else if ($data['level'] == "siswa"){
                              ?>

                            <a href="index.php?u=editsiswa&id=<?=$data['id_user'];?>" class="btn btn-xs btn-warning" id="<?php echo  $data['id_user']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                            <a href="#" class="btn btn-xs btn-danger" data-toggle='modal' onclick="confirm_modal('user_delete.php?&id=<?php echo  $data['id_user']; ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                <?php
                                }
                                else{
                                    echo "error";
                                }
                            }
                                ?>
                        </td>
                    </tr>


					<?php
						$i++;
                        $count++;
                        }
					?>

                </tbody>
          </table>

          <hr>
          <p style="font-size: 12px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> : Untuk mengubah data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> : Untuk menghapus data</p>
          <div class="text-right"><?php echo paginate_one($reload, $page, $tpages); ?></div>
          </div>


    <!-- Modal Popup untuk delete-->

    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog">
            <div class="modal-content col-xs-6" style="margin-top:150px; margin-left: 200px;">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">Anda Yakin Ingin Menghapus ?<br><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-top: 8px;"></h4>
            </div>

            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Batal</button>
            </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Javascript untuk popup modal Edit-->
    <script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "user_modal_edit.php",
                        type: "GET",
                        data : {id: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</div>
</div>
