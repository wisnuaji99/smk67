<!doctype html>
	<!-- <table>
		<tr>
			<td>Nomor</td>
			<td>:</td>
			<td>72 /-1.851.75</td>
		</tr>

		<tr>
			<td>Lampiran </td>
			<td>:</td>
			<td>-</td>
		</tr>

		<tr>
			<td>Perihal</td>
			<td>:</td>
			<td>Permohonan tempat praktik kerja industri</td>
		</tr>

    </table> -->
    
    <p align="right">
	Bekasi 22, Desemer 2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
	Plt Kepala SMK Negeri 67 Jakarta <br>
	<br><br><br><br><br><br><br>
	<u>Dra. Siti Nuryaningsih,M.M</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
	NIP.196104271989022001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<html lang="en">
  <head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>
<body>
    <form id="form1">
    <div id="dvContainer">
        This content needs to be printed.
    </div>
    <input type="button" value="Print Div Contents" id="btnPrint" />
    </form>
</body>
</html>