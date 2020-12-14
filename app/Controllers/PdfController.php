<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\models\Template_model;

class PdfController extends Controller
{

    public function index($id) 
	{   
        $model = new Template_model();
        $data['template'] = $model->getTemplate($id)->getRow();
        return view('pdf_view',$data);
    }

    function htmlToPDF(){
        $model = new Template_model();
        //$data['template'] = $model->getTemplate($id)->getRow();
        $options = new Options();
        $options->setIsPhpEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsRemoteEnabled(true);
      
        $dompdf = new Dompdf($options);
    
        $dompdf->loadHtml(view('pdf_view'));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream();
    }

}