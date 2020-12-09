<?php

$id = isset($surat) ? $surat->id : "";
$isi = isset($surat) ? $surat->isi : "";
$waktu = isset($surat) ? $surat->waktu : "";
$pengirim = isset($surat) ? $surat->pengirim : "";
$status = isset($surat) ? $surat->status : "";

$btn = isset($surat) ? "Ubah" : "Simpan";
?>
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Balasan Permintaan Surat</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/hello'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item">Balasan Permintaan Surat</li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $arr; ?></li>
            </ol>
          </div>
       
       <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
                </div>
                <div class="card-body">
                  <form action="<?php echo site_url($urlmethod) ?>" method="post"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                 
                  <div class="form-group">
                  <div class="form-group">
                      <label for="editor">Isi Surat</label>
                      <textarea class="form-control" id="editor" name="isi" rows="3" readonly><?php echo $isi; ?></textarea>
                      <small id="editor" class="form-text text-muted">Input ISI properly.</small>
                    </div>
        
                  </div>              
                  <div class="form-group">


  
  <label for="select2Single">Status Surat</label>

    <select class="select2-single form-control" name="status" id="select2Single">
    <?php if (isset($surat)) { ?>

      <option value="<?php echo $status; ?>">
        <?php 
       if ($status == 1) {
        echo "Terkirim Ke Operator";
     } else if($status == 2) {
        echo "Surat Telah Dibuat";
      }?>
         
      
      </option>
        
    <?php } else { ?>
      
      <option value="">Select Status</option>

    <?php   } ?>
   
    <option value="1">Terkirim Ke Operator</option>
    <option value="2">Surat Telah Dibuat</option>
   
  </select>

 


  </div>

                    <div>
                      <label>Pengirim</label>
                      <p><?php echo $pengirim; ?></p>
                    </div>

                    <div>
                      <label>Waktu Kirim</label>
                      <p><?php echo str_replace('`', '',$waktu);?></p>
                    </div>
                 
                      <button type="submit" class="btn btn-primary"><?php echo $btn; ?></button>
                    <a href="/permintaan" class="btn btn-primary" >Kembali</a>
                  </form>
                </div>
              </div>
            </div>
        </div>

        <script src="<?php echo base_url().'/ckeditor5/ckeditor.js'?>"></script>
        <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
                editor.isReadOnly = true;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>