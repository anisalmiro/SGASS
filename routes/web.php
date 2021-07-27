<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Rotas para seccao do index
// Route::get('PainelInicial','Frontcontrol@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('PainelInicial','dashController@index')->middleware('auth');
//Rota para sessao de login e logaut
Route::get('/','loginController@index');
Route::get('logout','loginController@logout');
Route::resource('log','loginController');

//Rotas para utilisador
Route::resource('usuariodo','user_Controller')->middleware('auth');
Route::get('usuario','user_Controller@create');

//Rota para sessao do cliente
Route::get('cliente','cliente_Controller@create');

//Rotas para Controlpainel
Route::resource('dash','dashController')->middleware('auth');
Route::get('dashb','dashController@index')->middleware('auth');


//Roas para Marca
Route::get('marcaviw','marcaController@index');
Route::resource('marca','marcaController');

//Rotas para Modelo
Route::resource('modelo','modeloController');
Route::get('modelov','modeloController@index');

//Rotas para Provincia
Route::resource('provincia','provincia_Controller');
Route::get('v_prov','provincia_Controller@index');

//Rotas para Distrito
Route::resource('distrito','distrito_Controller');
Route::get('v_dist','distrito_Controller@index');


//Rotas para Especificacao
Route::resource('especif','especif_Controller');
Route::get('v_espec','especif_Controller@index');

//Rotas para Avaria
Route::resource('avaria','avaria_Controller');
Route::get('v_avaria','avaria_Controller@index');

//Rotas para Equipamento
Route::resource('equipamento','equipamento_Controller');
Route::get('v_equipamento','equipamento_Controller@index');


//Rotas para Stock/consumivel
Route::resource('consumivel','stock_Controller');
Route::get('v_consumivel','stock_Controller@index');

Route::resource('stock_movimento','movimento_Controller');
Route::get('v_stock','movimento_Controller@index');
Route::get('inicial_stock','movimento_Controller@show');
//Pesquisa por criterio lable
Route::get('pesquisa_partn','movimento_Controller@getAutocompleteData'); 

//Report for stock
//Route::get('v_stock_pdf/pdf{id}','stockController@pdf');
Route::get('v_stock_pdf','stockController@getAllStock');


//Rotas para Clientes
Route::resource('cliente','cliente_Controller');
Route::get('v_cliente','cliente_Controller@index');
Route::get('distritosget/{id}','cliente_Controller@getDistrito');


//Rotas para Solecitacao
Route::resource('chamado','solecitacao_Controller');
Route::get('v_chamado','solecitacao_Controller@index');
Route::get('distritosget/{id}','solecitacao_Controller@getDistrito');
Route::get('client_equip_get/{id}','solecitacao_Controller@getEquipamento');

//Rotas para Solecitacao cliente
Route::resource('chamado_cli','abrir_solec_Controller');
Route::get('v_cli_chamado','abrir_solec_Controller@index');

//ROta para alocacao
Route::resource('alocacao','alocacao_Controller');
Route::get('v_alocacao','alocacao_Controller@index');


Route::get('search','stockController@result');


//Rotas para Validar Pedido do cliente
Route::resource('validar','validarSolec_Controller');
Route::get('v_validar','validarSolec_Controller@index');


//Estado das alocacoes
Route::resource('estadoAloc','alocacao_Controller');


//Emissao de observacao daa avaria. a ser feita pelo tecnico
Route::resource('obs_tecn','observacao_Controller');
Route::get('v_obs_tecn','observacao_Controller@index');


//Rotas para Cotacao

Route::resource('cotacao','Cotacao_Controller');
Route::resource('cotacaoPart','CotacaoPart_Controller');
Route::get('v_cotacao','Cotacao_Controller@index');
Route::get('v_cot','Cotacao_Controller@indexEP');
Route::get('v_cotacaoP','CotacaoPart_Controller@index');  

//Requisicao
Route::resource('requisica','requis_Controller');
Route::post('requisicao','requis_Controller@store')->name('requisica.store');
Route::get('v_requis_stock/{id}','requis_Controller@getstockdetail');


//Estado das Requisicoes pedentes por aprovar
Route::resource('estado_requisicaop','req_pdent_Controller');
Route::get('v_estado_requisicao','req_pdent_Controller@index')->name('v_estado_requisicao');
// Relatorios do Sistema

Route::resource('relatorio_geral','Relatorio_Controller');
Route::get('v_relatorio','Relatorio_Controller@index');
Route::get('v_relatorioGR','Relatorio_Controller@roll');

//ROTA DE APROVACAO

Route::resource('estado_requisicao','aprovados_Controller');
Route::get('v_aprovado','aprovados_Controller@index');

//Rotas Relatorios dashboard
Route::get('api', 'dashController@getApi');

//Rotas Relatorios balanco
Route::get('solapi', 'Relatorio_Controller@getApi');


//solecitacoes fechadas
Route::get('solfechado', 'Relatorio_Controller@getSol');
 
 
 //Create PDF GUIA DE ENTREGA
Route::Resource('guia_pedidos','guia_Controller');
 Route::get('v_guia_pedidos','guia_Controller@guiasaida');
 
 //ABATE DAS REQUISICOES
Route::resource('abate_requisicao','abateController');
Route::get('v_abate_requisicao','abateController@index')->name('v_abate_requisicao');
Route::get('q_getstock_abate','abateController@find');



 
 //send emal to client
 Route::get('laravel-send-email', 'EmailController@sendEMail');
 
 //Saidas de equipamentos
 $this->get('pdf', 'guia_controller@show')->name('pdf');
 Route::get('req/pdf', 'guia_Controller@createPDF');


