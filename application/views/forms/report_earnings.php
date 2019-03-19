<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'blow.jpg';
        $this->Image($image_file, 15, 15, 20, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'Wahu Salon ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-30);
        // Set font
        $this->SetFont('helvetica', 'I', 12);
        //date
        $tDate=date("F j, Y");
        // Page number
        $this->Cell(0, 10, 'Generated on:' .$tDate, 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Cynthia Chebet Korir');
$pdf->SetTitle('Report On Earnings');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);

// add a page
$pdf->AddPage();

// set some text to print
$title = <<<EOD
<h2>Report On Earnings</h2>
EOD;

// print a block of text using Write()
$pdf->WriteHTMLCell(0,0, '','', $title, 0,1,0, true, 'C', true);
$table='<table style="border:1px solid #000; padding:6px;">';
$table.='<tr style="background-color:#ccc;">
            <th style="border:1px solid #000;">No</th>
            <th style="border:1px solid #000;">Id Number</th>
            <th style="border:1px solid #000;">Amount</th>
            <th style="border:1px solid #000;">Date</th>
            <th style="border:1px solid #000;">Served by</th>
        
        </tr>';
$no=1;
foreach($data as $row){
$table.='<tr>
        <td style="border:1px solid #000;">'.$no++.'</td>
        <td style="border:1px solid #000;">'.$row->user_id.'</td>
        <td style="border:1px solid #000;">'.$row->amount.'</td>
        <td style="border:1px solid #000;">'.$row->date_served.'</td>
        <td style="border:1px solid #000;">'.$row->stylist.'</td>
    </tr>';
}
$table .='</table>';

$pdf->WriteHTMLCell(0,0, '','', $table, 0,1,0, true, 'C', true);
// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
