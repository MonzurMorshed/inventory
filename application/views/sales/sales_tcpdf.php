<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    // Include the main TCPDF library (search for installation path).
    //require_once('tcpdf_include.php');
    
    // include ('./tcpdf.php');
    
    // Extend the TCPDF class to create custom Header and Footer
    class MYPDF extends TCPDF {
    
    	//Page header
    	public function Header() {
    		// Logo
    		$image_file = base_url().'/assets/company/uploads/envit1.png';
    		$this->Image($image_file, 10, 10, 60, 20 , 'PNG', '', 'T', false, 30, '', false, false, 0, false, false, false);
    		
    		$right = '';
    		$right .= '<div style="line:0.5;float:right;font-size:0.8em;font-family:times;"><h2>Invoice</h2>' ;
    		$right .= '<p>
    		                <span style="font-weigth:600;">Environ IT</span>
    		          </p>
            		  <p>Phone  <span style="font-size:0.8em;margin-left:10px;">0123456789</span></p>
            		  <p>Mobile <span style="font-size:0.8em;margin-left:10px;">9012345678</span></p>
            		  </div>';
            		  
            // $this->WriteHTMLCell(0, 0,'','',$right,0,1,0, true,'R',true);
    	}
    
    	// Page footer
    	public function Footer() {
    	    $this->SetY(-15);
    		// Set font
    		$this->SetFont('helvetica', 'B', 8);
    		// Page number
    		$this->Cell(0, 10, 'Thanks for choosing us.', 0, false, 'L', 0, '', 0, false, 'T', 'M');
    		// Position at 15 mm from bottom
    		$this->SetY(-15);
    		// Set font
    		$this->SetFont('helvetica', 'I', 8);
    		// Page number
    		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    		
    		
    	}
    }
    
    // create new PDF document
    $this->mytcpdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    // set document information
    $this->mytcpdf->SetCreator(PDF_CREATOR);
    $this->mytcpdf->SetAuthor('Nicola Asuni');
    $this->mytcpdf->SetTitle('TCPDF Example 003');
    $this->mytcpdf->SetSubject('TCPDF Tutorial');
    $this->mytcpdf->SetKeywords('TCPDF, PDF, example, test, guide');
    
    // set default header data
    $this->mytcpdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
    // set header and footer fonts
    $this->mytcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $this->mytcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
    // set default monospaced font
    $this->mytcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
    // set margins
    $this->mytcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $this->mytcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $this->mytcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
    // set auto page breaks
    $this->mytcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
    // set image scale factor
    $this->mytcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    	require_once(dirname(__FILE__).'/lang/eng.php');
    	$this->mytcpdf->setLanguageArray($l);
    }
    
    // ---------------------------------------------------------
    
    // set font
    //$this->mytcpdf->SetFont('times', '', 12);
    
    // add a page
    $this->mytcpdf->AddPage();
    
    // set some text to print
    // $txt = <<<EOD
    // TCPDF Example 003
    
    $right_header = '';
    
    $right_header .= '<div style="width:50%;font-size:10px;line-height:1;">
            <h2>INVOICE</h2>
            <p>'.$this->session->userdata('c_name').'</p>
            <p>6A Plot 1/A Road:1/B Nikunjo - 2 </p>
            <p>Dhaka - 1229 </p>
            <p>Bangladesh </p>
            <p>Date : '.date("j F Y h:i:s A").'</p></div>
        ';
        
    $this->mytcpdf->WriteHTMLCell(0,0,0,5,$right_header,0,1,0, true,'R',true);
    
    $hr = '';
    $hr .= '<hr/>';
    
    $this->mytcpdf->WriteHTMLCell(0, 0,'','',$hr,0,1,0, true,'C',true);
    
    $leftdata = '';
    
    $leftdata .= '<div style="width:100%;background:blue;">
        <div style="width:50%;float:right;font-size:10px;line-height:1;">
            <p>Invoice No : 1234567</p>
            <p>Payment : 12345</p>
            <p>Date : '.date("j F Y h:i:s A").'</p>
        </div>';
        
        
        
    $this->mytcpdf->WriteHTMLCell(0, 0,0,50,$leftdata,0,1,0, true,'R',true);
    
    $rdata = '';
    
    $rdata .= '
        <div style="width:50%;float:right;font-size:10px;line-height:1;">
            <p>Bill To  :   '.$this->session->userdata('login_email').'</p>
            <p>Contact Number   :   123456456987</p>
            <p>Dhaka</p>
            <p>Bangladesh</p>
        </div>
    </div>';
    
    $this->mytcpdf->WriteHTMLCell(0,0,15,55,$rdata,0,1,0, true,'L',true);
    
    
    
    $html = '';
    
    $html .= '
            <table id="info_table" class="table table-striped" id="info_table" style="">
                <h1 style="color:#470011;opacity:1">Environ IT</h1>
                <tr style="background-color:#470011;color:#fff;padding:10%;font-size:0.8em;font-family:times;">
                    
                    <th>Date</th>
                    <th>Sales ID</th>
                    <th>Product ID</th>
                    <th>Quantity </th>
                    <th>Price</th>
                    <th>Amount Price</th>
                </tr>
                <tbody>';     
    $val = 0 ;
    foreach($sales_report as $report){            
            $html .= '<tr style="padding:10%;font-size:0.8em;font-family:times;">
                        <td>'.$report->selling_date.'</td>
                        <td>'.$report->sales_id.'</td>
                        <td>'.$report->p_id.'</td>
                        <td>'.$report->quantity.'</td>
                        <td>'.$report->price.'  TK</td>
                        <td>'.$report->price * $report->quantity.'  TK</td>
                        
                     </tr>';
            $val += $report->price * $report->quantity;
    }
    
    $html .=  '</tbody>
         </table>
            <br><br><br><hr style="height:1px;background-color:#470011;">';
    
    // Custom page header and footer are defined by extending the TCPDF class and overriding the Header() and Footer() methods.
    // EOD;
    
    // print a block of text using Write()
    $this->mytcpdf->WriteHTMLCell(0, 0,'','',$html,0,1,0, true,'C',true);
    
    $amount = '';
    $amount .= '<span style="font-size:10px;font-weight:600;">Total : '.$val.'TK<span>';
    $this->mytcpdf->WriteHTMLCell(0, 0,'','',$amount,0,1,0, true,'R',true);
    
    // ---------------------------------------------------------
    
    //Close and output PDF document
    $this->mytcpdf->Output('example_003.pdf');
    //============================================================+
    // END OF FILE
    //============================================================+
    exit;

?>