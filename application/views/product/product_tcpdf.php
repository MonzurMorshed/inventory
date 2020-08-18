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
    		$right .= '<div style="line-height:0.8;float:right;font-size:12px;font-family:times;">' ;
    		$right .= '<p>
    		                <span style="font-weigth:600;">Environ IT</span>
    		          </p>
    		          <p>6A Plot 1/A Road:1/B Nikunjo - 2, </p>
                      <p>Dhaka - 1229 </p>
                        <p>Bangladesh </p>
            		  <p>Phone  <span style="font-size:0.8em;margin-left:10px;">0123456789</span></p>
            		  <p>Mobile <span style="font-size:0.8em;margin-left:10px;">9012345678</span></p>
            		  </div>';
            		  
            $this->WriteHTMLCell(0, 0,'','',$right,0,1,0, true,'R',true);
            
            $hr = '';
            $hr .= '<hr/>';
            
            $this->WriteHTMLCell(0, 0,'','50',$hr,0,1,0, true,'C',true);
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
    $this->mytcpdf->SetAuthor($this->session->userdata('login_email'));
    $this->mytcpdf->SetTitle('Product in stock');
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
    
    $this->mytcpdf->AddPage();
    
    $rdata = '';
    
    $rdata .= '
        <div style="width:50%;float:right;font-size:12px;line-height:0.8;">
            <p>User  :   '.$this->session->userdata('login_email').'</p>
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
                <tr style="line-height:2;background-color:#470011;color:#fff;padding:15%;font-size:1em;font-family:times;">
                    
                    <th style="line-height:2;padding:15%;font-size:1em;font-family:times;">Product ID</th>
                    <th style="line-height:2;padding:15%;font-size:1em;font-family:times;">Product Name</th>
                    <th style="line-height:2;padding:15%;font-size:1em;font-family:times;">Quantity </th>
                    <th style="line-height:2;padding:15%;font-size:1em;font-family:times;">Price </th>
                    <th style="line-height:2;padding:15%;font-size:1em;font-family:times;">Entry Date </th>
                </tr>
                <tbody>';     
    $val = 0 ;
    foreach($product_report as $p){            
            $html .= '<tr style="line-height:2;padding:15%;font-size:1em;font-family:times;">
                        <td style="line-height:2;padding:15%;font-size:1em;font-family:times;">'.$p->p_id.'</td>
                        <td style="line-height:2;padding:15%;font-size:1em;font-family:times;">'.$p->p_name.'</td>
                        <td style="line-height:2;padding:15%;font-size:1em;font-family:times;">'.$p->quantity.'</td>
                        <td style="line-height:2;padding:15%;font-size:1em;font-family:times;">'.$p->p_buying_price.'</td>
                        <td style="line-height:2;padding:15%;font-size:1em;font-family:times;">'.$p->date_of_entry.'</td>
                     </tr>';
    }
    
    $html .=  '</tbody>
         </table>
            <br><br><br><hr style="height:1px;background-color:#470011;">';
    
    $this->mytcpdf->WriteHTMLCell(0, 0,'','',$html,0,1,0, true,'C',true);
    
    
    
    $this->mytcpdf->Output('Product.pdf');
    exit;

?>