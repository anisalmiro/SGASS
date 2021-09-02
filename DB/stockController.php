<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\stock;
use DB;
use Session;
use Redirect;
use PDF;

class stockController extends Controller
{
     public function index(){
      $stock_list = $this->get_stock_list();
    	    //  $consumivl= consumivel::paginate(5);
     	 $stock_sl = DB::table('stock as st')
           ->leftjoin('consumivel as cons', 'cons.idcons', '=', 'st.cons_id')
           ->select("cons.*", "st.*")        
            ->paginate(4);
            return view("formularios.form_stock")->with('stock_sl', $stock_sl);


          
    }


    public function getAllStock(){


      $data['stock_list']=DB::table('stock as st')
           ->leftjoin('consumivel as cons', 'cons.idcons', '=', 'st.cons_id')
           ->select("cons.*", "st.*")        
            ->get();
    }

    //metodo para buscar a lista de dados a serem convertidos
    public function get_stock_list(){
        $stock_sl=DB::table('stock as st')
           ->leftjoin('consumivel as cons', 'cons.idcons', '=', 'st.cons_id')
           ->select("cons.*", "st.*")        
            ->get();
            return $stock_sl;

    }

   public function store(Request $request){
            stock::create([
               'tipo'   =>$request['tipo'],
               'designacao'   =>$request['nome'],    
               'partN'   =>$request['partn'],
               'cor'   =>$request['cor'],
         	]);

      return Redirect::to('v_stock');
    }

       ///pesquisa para tabela Consumivel
   public function search(Request $request)
    {
           $posts = Stock::where('partN', $request->keywords)->get();

    return response()->json($posts);
}

public function pdf(){
     $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($this->converter_dados_pdf());
      $pdf->stream();
}




public function converter_dados_pdf($id){

  $stock_list=$this->get_stock_list();
  $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Tipo de Iten</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Descriçáo</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Part Number</th>
    <th style="border: 1px solid; padding:12px;" width="15%">cor</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Quantidade</th>
   </tr>
     ';  
     foreach($stock_list as $st){
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$st->tipo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->designacao.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->partN.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->cor.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->quantidade.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }



}
