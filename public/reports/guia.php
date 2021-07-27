<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("phpjasperxml/PHPJasperXML.inc.php");
include('../app.ado/TConnection.class.php');

$dbc = new TConnection;
$server = $dbc::DB_HOST;
$db = $dbc::DB_NAME;
$user = $dbc::DB_USER;
$pass = $dbc::DB_PASS;

$id=$_GET['recordID'];

error_reporting(0);


$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("solec_id"=>$id);
$PHPJasperXML->load_xml_file("guia.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
ob_end_clean();
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
