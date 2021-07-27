<?php

namespace Gestao_Assistencias\Http\Controllers;


use Illuminate\Http\Request;
use Gestao_Assistencias\requisicoes;
use Gestao_Assistencias\produto;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\req_Transacao;
use Gestao_Assistencias\stock;
use Gestao_Assistencias\logsaidas;
use Datatables;
use Redirect;
use Session;
use DB;
use Dompdf\Dompdf;

class guia_Controller extends Controller
{
    public function show($id){
        $st = solecitacao::find($id);

        $listpecas = DB::table('requisicoes as req')
                ->leftjoin('users as us', 'us.id', '=', 'req.user_id')
                ->where('req.solec_id', '=', $st->id)
                ->select("req.*","us.nameapelido")
                ->get();

    return \PDF::loadView('pdf_report.form_guiastock_saida', compact('listpecas'))
                ->setPaper('a4', 'portrait')
            ->stream('Guia-arquivo-pdf-gerado'.time().'.pdf',array("Attachment" => 0));
//                ->download('Guia-arquivo-pdf-gerado.pdf');
    
      

        
    }
    
     // Generate PDF
    public function createPDF(Request $request) {
      // retreive all records from db
      $data = DB::table('produto as pro')
                ->leftjoin('requisicoes as req', 'req.id', '=', 'pro.req_id')
                ->where('req.solec_id', '=', request('id'))
                ->select("pro.*", "req.*")
                ->get();
      
      // share data to view
      view()->share('Requisicoes',$data);
      $pdf = \PDF::loadView('pdf_report.form_guiastock_saida', $data);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
  
}
