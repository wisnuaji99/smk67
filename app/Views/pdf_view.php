<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Surat Permintaan</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <link href="<?php echo base_url().'/template/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container mt-5">

    <h2>Tampilan PDF Untuk Surat Balasan</h2>

    <div class="d-flex flex-row-reverse bd-highlight">
      <a href="<?php echo base_url('PdfController/htmlToPDF') ?>" class="btn btn-primary">
        Download PDF
      </a>
    </div>
<?php


$path =  'kop_surat.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data2 = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data2);
?>
<img src="<?php echo $base64; ?>" width="100%">
   

	<br>
	<div align="left">
	<p> kepada Yth.<br>
	pimpinan pt pixel pro <br>

	jati bening baru <br>
	di Tempat
	</div>
	<br><br><br><br>
	dengan hormat,<br>
	dengan ini saya mengajukan lamaran kerja di kantor atau perusahaan bapak/ibu, berikut data pribadi saya :
	</p>
	<table id="coeg">
		<tr>
			<td id="td" valign="top">nama</td>
			<td valign="top">:</td>
			<td valign="top">cucu desi anggraeni</td>
		</tr>
		<tr>
			<td id="td" valign="top">tempat tanggal lahir</td>
			<td valign="top">:</td>
			<td valign="top">jakarta 12 juli 1994</td>
		</tr>
		<tr>
			<td id="td" valign="top">jenis kelamin</td>
			<td valign="top">:</td>
			<td valign="top">perempuan</td>
		</tr>
		<tr>
			<td id="td" valign="top">pendidikan terakhir</td>
			<td valign="top">:</td>
			<td valign="top">smkn rekayasa perangkat lunak</td>
		</tr>
		<tr>
			<td id="td" valign="top">no.hp</td>
			<td valign="top">:</td>
			<td valign="top">xxxxxxxxxxxx</td>
		</tr>
		<tr>
			<td id="td" valign="top">email</td>
			<td valign="top">:</td>
			<td valign="top">desianggaeni@gmail</td>
		</tr>
		<tr>
			<td  id="td" valign="top">alamat</td>
			<td  valign="top">:</td>
			<td  valign="top">jl sekian rt 5 rw 12 no 105 jakarta timur</td>
		</tr>

	</table>
	<p> untuk melengkapi data yang diperlukan sebagai bahan pertimbangan maka disertakan data sebagai berikut : </p>
	<p style="margin-left:30">
	1. <br>
	2. <br>
	3. <br>
	4. <br>
	demikian surat lamaran ini saya buat dengan sebenarnya, besar harapan saya dapat diterima untuk bekerja di perusahaan ibu/bapak
	saya mengucapkan terima kasih 
	</p><br>

  </div>
</body>

</html>