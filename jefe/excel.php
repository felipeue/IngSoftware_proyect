<?php

date_default_timezone_set("Asia/Bangkok");
require_once("../PHPExcel-1.8/Classes/PHPExcel.php");
require_once("../connect.php");
require_once("../validadores.php");
$prov = $_POST["proveedor"];
$objPHPExcel = new PHPExcel();


$objPHPExcel->
	getProperties()
		->setCreator("Agrícola San Guillermo")
		->setLastModifiedBy("Agrícola San Guillermo")
		->setTitle("Registro de gastos")
		->setSubject("registro de gastos proveedor")
		->setDescription("Registro de gastos de un solo proveedor")
		->setKeywords("gastos proveedor")
		->setCategory("reportes");


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Monto')
            ->setCellValue('B1', 'Detalle')
            ->setCellValue('C1', 'Proveedor')
            ->setCellValue('D1', 'Agente de compra')
            ->setCellValue('E1', 'Fecha de compra');
           
           	$result = mysql_query("SELECT compra.monto, compra.detalle, compra.comentario, compra.proveedor, agente_compra.nombre, agente_compra.apellido, compra.fecha, compra.numero_de_compra, boleta.documento, proveedor.nombre FROM compra, agente_compra, boleta, proveedor WHERE proveedor.id ='$prov' AND proveedor.id = compra.proveedor AND compra.rut_ac = agente_compra.rut AND boleta.id_compra = compra.id ") or die (mysql_error());
           				$contador = 2;
           				
						while ($row = mysql_fetch_row($result))
                                            {
                                            $monto = ucwords($row[0]);
                                            $detalle = ucwords($row[1]);
                                	        $comentario = ucwords($row[2]);
                                	        $proveedor = ucwords($row[9]);
                                	        $nagente_compra = ucwords($row[4]);
                                	        $aagente_compra = ucwords($row[5]);
                                	        $fecha = ucwords($row[6]);
                                	        $ncompra = ucwords($row[7]);
                                	        $boleta = ucwords($row[8]);

                                	        $objPHPExcel->setActiveSheetIndex(0)
                                	        ->setCellValue('A'.$contador, $monto)
            								->setCellValue('B'.$contador, $detalle)
          									->setCellValue('C'.$contador, $proveedor)
            								->setCellValue('D'.$contador, $nagente_compra.$aagente_compra)
            								->setCellValue('E'.$contador, $fecha);
           									

           									$contador++;
                                	        }	



$objPHPExcel->getActiveSheet()->setTitle('Usuarios');
$objPHPExcel->setActiveSheetIndex(0);


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="01simple.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
