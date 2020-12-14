<?php namespace App\Controllers;
use App\models\Template_model;
use TCPDF;

class TcpdfController extends BaseController
{

    public function surat()
	{
		$id = $this->request->uri->getSegment(3);
		//var_dump($id);die();
        $model = new Template_model();

		$data['template'] = $model->getTemplate($id)->getRow();

		$html = view('pdf_view',$data);

		$pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Wisnu');
		$pdf->SetTitle('Invoice');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
		
	}
}