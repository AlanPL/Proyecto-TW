<?php
	session_start();
	include '../php/conexion.php';
	$con=conectar();
	$correo=$_SESSION['correo'];
	require('../fpdf/fpdf.php');

	class PDF extends FPDF{
        // Cabecera de página
        function Header(){
            // Logo
            $this->Image("../img/IPN.png",20,20,30,15);
            $this->Image("../img/logoESCOM.png",170,20,20);
            $this->Ln(20);
        }

        // Pie de página
        function Footer(){
            // Posición: a 1.5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,utf8_decode("Escuela Superior de Cómputo / Sem. 2020-2"),0,0,'C');
        }
    }

     $sql = "SELECT * FROM alumno WHERE correo = '$correo'";
    $res = mysqli_query($con, $sql);
    $infAlumno = mysqli_fetch_row($res);
	
	$pdf=new PDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(80,30,utf8_decode('Lista de materias a registrar'),0,1,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,7,utf8_decode("Boleta: $infAlumno[0]"),0,1);
    $pdf->Cell(0,7,utf8_decode("Nombre: $infAlumno[1] $infAlumno[2] $infAlumno[3]"),0,1);
    $pdf->Cell(0,7,utf8_decode("Correo: $infAlumno[4]"),0,1);
    $pdf->Ln(5);
    $sql1 = "select * from `alumno` where correo='".$correo."'"; //esta es una tabla q contiene un listado de titulos principales
    $res1=mysqli_query($con,$sql1) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
    $row1 = mysqli_fetch_assoc($res1);
    $boleta=$row1["boleta"];

    	$pdf->setFillColor(232,232,232);
    	$pdf->SetFont('Arial','B',12);
    	$pdf->Cell(10,10,utf8_decode("No."),1,0,'C',1);
    	$pdf->Cell(100,10,utf8_decode("Materia"),1,0,'C',1); //string,1:Marco,0:texto comienza a la derecha,'C':centrado
    	$pdf->Cell(20,10,utf8_decode("Nivel"),1,1,'C',1);
    $i=0;
    $pdf->SetFont('Arial','',12);
    $consulta = "SELECT * FROM horario JOIN materia ON horario.Id_materia=materia.Id_materia WHERE boleta='".$boleta."'";
	$resultado = $con->query($consulta);
	while($row = $resultado->fetch_assoc()){
        $i=$i+1;
        $pdf->Cell(10,10,$i,1,0,'C');
        $pdf->Cell(100,10,utf8_decode($row['Nombre']),1,0,'C'); //string,1:Marco,0:texto comienza a la derecha,'C':centrado
        $pdf->Cell(20,10,utf8_decode($row['Nivel']),1,0,'C');
        $pdf->Ln();
    }
	$pdf->Output();

?>