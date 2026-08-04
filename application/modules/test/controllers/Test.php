<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Test extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function test_cart() {
		$this->load->library('cart');
		
		$data = array(
	        'id'      => '3',
	        'qty'     => 1,
	        'price'   => 39.95,
	        'name'    => 'กกก๊',
	        'options' => array(
	        	'Size' => 'L', 
	        	'Color' => 'ขขข๊'
	        )
		);

		$this->cart->insert($data);
		
		pre($this->cart->contents());
	}
	
	public function testReCaptcha() {
?>
		<!-- Start ไม่ต้องเอามา -->
		<script src="<?php echo base_url('asset/backend/jquery-1.12.3.js');?>"></script>
		<!-- End ไม่ต้องเอามา -->
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<div class="g-recaptcha" data-sitekey="6Ld_8noUAAAAAMg-hr23RRo3e_KmazN59bFh-vBf" data-callback="recaptchaCallback"></div>
		
		<button id="submitBtn" style="display: none;">Submit</button>
		
		<script>
			function recaptchaCallback() {
    			$('#submitBtn').show();
			};
		</script>
<?php
	}
	
	public function testPlusTime() {
		$final = date("Y-m-d H:i:s", strtotime("+36 hour"));
		
		echo $final;
	}
	
	public function mpdf() {
		require_once FCPATH.'composer/vendor/autoload.php';

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML('<h1>Hello world!</h1>');
		$mpdf->Output();
	}
	
	public function phpmailer() {
		// Load Composer's autoloader
		$this->load->helper('phpmailer');

		$sender = array(
			'sitiporn@orange-thailand.com'
		);

		$subject = 'Test';

		$message = 'Test';

		$from_email = 'info@lasectabeauty.com';

		$from_name = 'NoReply';

		send_email($sender, $subject, $message, $from_email, $from_name);

		// Instantiation and passing `true` enables exceptions
		/*$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'contact.lasectabeauty@gmail.com';                     // SMTP username
		    $mail->Password   = 'hptdebgprzripyyz';                               // SMTP password
		    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('from@example.com', 'Mailer');
		    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
		    $mail->addAddress('sitiporn@orange-thailand.com');               // Name is optional
		    $mail->addReplyTo('info@example.com', 'Information');
		    $mail->addCC('cc@example.com');
		    $mail->addBCC('bcc@example.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}*/
	}

	public function phpexcel() {
		/**
		 * PHPExcel
		 *
		 * Copyright (c) 2006 - 2015 PHPExcel
		 *
		 * This library is free software; you can redistribute it and/or
		 * modify it under the terms of the GNU Lesser General Public
		 * License as published by the Free Software Foundation; either
		 * version 2.1 of the License, or (at your option) any later version.
		 *
		 * This library is distributed in the hope that it will be useful,
		 * but WITHOUT ANY WARRANTY; without even the implied warranty of
		 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
		 * Lesser General Public License for more details.
		 *
		 * You should have received a copy of the GNU Lesser General Public
		 * License along with this library; if not, write to the Free Software
		 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
		 *
		 * @category   PHPExcel
		 * @package    PHPExcel
		 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
		 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
		 * @version    ##VERSION##, ##DATE##
		 */

		/** Error reporting */
		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);
		date_default_timezone_set('Europe/London');

		if (PHP_SAPI == 'cli')
			die('This example should only be run from a Web Browser');

		/** Include PHPExcel */
		require_once FCPATH.'composer/vendor/autoload.php';


		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();

		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
									 ->setLastModifiedBy("Maarten Balliauw")
									 ->setTitle("Office 2007 XLSX Test Document")
									 ->setSubject("Office 2007 XLSX Test Document")
									 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
									 ->setKeywords("office 2007 openxml php")
									 ->setCategory("Test result file");


		// Add some data
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A1', 'Hello')
		            ->setCellValue('B2', 'world!')
		            ->setCellValue('C1', 'Hello')
		            ->setCellValue('D2', 'world!');

		// Miscellaneous glyphs, UTF-8
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A4', 'Miscellaneous glyphs')
		            ->setCellValue('A5', 'สิทธิพร ตรองวิเชียร');

		// Rename worksheet
		$objPHPExcel->getActiveSheet()->setTitle('Simple');


		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);


		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="01simple.xls"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;
	}
	
	public function gbprime() {
?>
		<form id="checkout-form" action="/">                     
       		<div id="gb-form" style="height: 600px;"></div>  
     	</form>                                                  
     	<script src="<?php echo base_frontend('gbprimepay-js-master/GBPrimePay.js');?>"></script>  <!-- https://github.com/GBPrimepay/gbprimepay-js --> 
     	<script>                                                 
       		new GBPrimePay({                                             
         		publicKey: 'publickey_1234abcd',                           
         		gbForm: '#gb-form',                                        
         		merchantForm: '#checkout-form',                            
         		customStyle: {                                             
           			backgroundColor: '#eaeaea'                               
         		},                                                         
         		env: 'test' // default prd | optional: test, prd           
       		});                                                          
     </script>  
<?php
	}
	
	public function shippingDhlAir() {
		/*ini_set('max_execution_time', 300);
		set_time_limit(300);
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 221
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 77
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 220
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 12
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 72
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 36
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 191
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 148
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 20
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 20
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 109
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 13
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
	
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 102
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 109
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 100
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 96
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 95
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 203
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 157
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 99
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 202
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 172
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}
		
		for($i = 10; $i <= 2000; $i += 10) {
			$data = array(
				'shipping_dhl_air_weight' => $i,
				'country_id' => 0
			);
			
			$this->db->insert('ci_shipping_dhl_air', $data);
		}*/
	}
	
	public function setShippingDhlExpress() {
		/*ini_set('max_execution_time', 300);
		set_time_limit(300);
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'A'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'B'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'C'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'D'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'E'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'F'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}
		
		for($i = 500; $i <= 20000; $i += 500) {
			$data = array(
				'shipping_dhl_express_weight' => $i,
				'zone_name' => 'G'
			);
			
			$this->db->insert('ci_shipping_dhl_express', $data);
		}*/
	}
	
	public function setShipping() {
		/*ini_set('max_execution_time', 3000);
		set_time_limit(3000);
		
		$this->db->order_by('id', 'asc');
		$this->db->where('Country_Id', 99);
		$query = $this->db->get('pocket_details');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			foreach($rows as $r) {
				$weight = str_replace(',', '', $r->Destination);
				$shipping = str_replace(',', '', $r->Pocket);
				$country_id = str_replace(',', '', $r->Country_Id);
				
				$this->db->order_by('shipping_dhl_air_id', 'asc');
				$query = $this->db->get('ci_shipping_dhl_air');
				
				$result = $query->result();
				
				if(!empty($result)) {
					foreach($result as $s) {
						if($s->shipping_dhl_air_weight == $weight and $s->country_id == $country_id) {
							$data_update = array(
								'shipping_dhl_air_price' => $shipping
							);		
							
							$where_update = array(
								'shipping_dhl_air_weight' => $weight,
								'country_id' => $country_id
							);			
							
							$this->db->update('ci_shipping_dhl_air', $data_update, $where_update);		
						}
					}
				}
			}
		}*/
	}
	
	public function getWait() {
?>
		<script src="<?php echo base_frontend('js/jquery.min.js');?>"></script>
		<link rel="stylesheet" href="<?php echo base_frontend('waitMe-31.10.17/waitMe.min.css');?>">
		<script src="<?php echo base_frontend('waitMe-31.10.17/waitMe.min.js');?>"></script>
		
		<div class="abc working" style="width: 100%; height: 100%;"><button type="button" id="demo" onclick="clickWaitMe();">Submit</button></div>
		
		<script>
		function clickWaitMe() {
			$('.abc').waitMe({
				effect : 'bounce',
				text : 'loading',
				bg : '#ddd',
				color : '#000',
				maxSize : '',
				waitTime : -1,
				textPos : 'vertical',
				fontSize : '',
				source : '',
				onClose : function() {}
			});	
			
			setTimeout(function() { 
				$('.abc').waitMe("hide"); 
			}, 3000);
		}
		</script>
<?php
	}
}