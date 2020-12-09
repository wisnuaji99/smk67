 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Letters</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item">Letters</li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $arr; ?></li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
                  <a href="/kerangka" class="btn btn-success pull-right">Daftar Surat Permintaan Telah Dibuat</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>No</th>
                      <th>Isi Permintaan </th>
                      <th>Pengirim</th>
                      <th>Tanggal Kirim</th>
                      <th>Status Surat</th>
                      <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>No</th>
                      <th>Isi Permintaan </th>
                      <th>Pengirim</th>
                      <th>Tanggal Kirim</th>
                      <th>Status Surat</th>
                      <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      
                      <?php 
                        $no = 1;
                        foreach($surats as $row) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['isi']?></td>
                                <td><?php echo $row['pengirim']?></td>
                                <td><?php echo str_replace('`', '',$row['waktu'])?></td> 
                                <td><?php
                                          if ($row['status'] == 1) {
                                               echo "Terkirim Ke Operator";
                                          } else if($row['status']== 2) {
                                               echo "Surat Telah Dibuat";
                                          } 
                                      ?>
                                </td> 
                                <td>
                                    <a  class="btn btn-success" href="/kerangka/add/<?php echo $row['id'] ?>"
                                    data-toggle="tooltip" data-html="true" title="Buat Surat Permintaan"
                                    ><i class="fas fa-plus"></i></a>
                                    <a  class="btn btn-info" href="/permintaan/edit/<?php echo $row['id'] ?>"
                                    data-toggle="tooltip" data-html="true" title="Edit Status"
                                    ><i class="fas fa-pen"></i></a>
                                  
                             
                               
                                </td>
                            </tr>
                        <?php }?>
                      
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>
  