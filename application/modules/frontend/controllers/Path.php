<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Path extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		if($this->session->userdata('lang') == '') {
			$sess_lang = array(
				'lang' => 'en'
			);
			
			$this->session->set_userdata($sess_lang);
		} else {
			if($this->input->get('lang') == 'en') {
				$sess_lang = array(
					'lang' => 'en'
				);
				
				$this->session->set_userdata($sess_lang);
			} elseif($this->input->get('lang') == 'ar') {
				$sess_lang = array(
					'lang' => 'ar'
				);
				
				$this->session->set_userdata($sess_lang);
			}
		}
		
		// Redirect https://saudi.lasectabeauty.com/
		// saudi arabia
		// รายชื่อ IP http://www.nirsoft.net/countryip/sa.html
		$web_redirect = 'https://saudi.lasectabeauty.com/';

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "2.88.0.0-2.91.255.255") == true) {
			redirect($web_redirect);
		}
		
		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.41.0.0-5.41.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.42.224.0-5.42.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.82.0.0-5.82.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.108.0.0-5.111.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.132.192.0-5.132.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.156.0.0-5.156.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.163.0.0-5.163.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "5.244.0.0-5.247.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "31.166.0.0-31.167.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.16.32.0-37.16.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.16.128.0-37.16.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.25.0.0-37.25.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.42.0.0-37.43.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.56.0.0-37.56.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.76.224.0-37.76.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.99.128.0-37.99.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.104.0.0-37.107.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.121.0.0-37.121.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.124.0.0-37.127.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.141.0.0-37.141.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.216.0.0-37.217.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.224.0.0-37.224.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.240.0.0-37.243.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.38.64.0-46.38.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.44.64.0-46.44.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.52.0.0-46.52.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.143.128.0-46.143.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.149.0.0-46.149.15.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.152.0.0-46.153.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.184.0.0-46.184.127.255	") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.230.0.0-46.230.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.240.0.0-46.240.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.251.128.0-46.251.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "50.60.0.0-50.61.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "50.119.0.0-50.119.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.39.0.0-51.39.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.211.0.0-51.211.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.218.0.0-51.218.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.223.0.0-51.223.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.235.0.0-51.235.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "51.252.0.0-51.253.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.3.0.0-62.3.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.3.32.0-62.3.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.120.0.0-62.120.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.149.64.0-62.149.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "64.16.192.0-64.16.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "64.65.64.0-64.65.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "64.137.192.0-64.137.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "66.118.128.0-66.118.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "66.212.96.0-66.212.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.30.0.0-77.31.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.64.0.0-77.64.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.90.192.0-77.90.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.221.96.0-77.221.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.232.96.0-77.232.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.236.128.0-77.236.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.240.80.0-77.240.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.240.128.0-77.240.143.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.247.32.0-77.247.47.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "77.247.48.0-77.247.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.93.0.0-78.93.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.95.0.0-78.95.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.110.0.0-78.110.15.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.138.192.0-78.138.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "79.172.128.0-79.172.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "80.240.64.0-80.240.79.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "81.21.48.0-81.21.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "81.22.112.0-81.22.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "82.118.160.0-82.118.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "82.147.192.0-82.147.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "82.167.0.0-82.167.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "83.101.128.0-83.101.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "84.22.224.0-84.22.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "84.23.96.0-84.23.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "84.235.0.0-84.235.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.129.128.0-85.129.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.194.64.0-85.194.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.195.128.0-85.195.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.196.0.0-85.196.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.237.128.0-85.237.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "86.51.0.0-86.51.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "86.60.0.0-86.60.127.255") == true) {
			redirect($web_redirect);
		}
		
		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.76.64.0-87.76.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.76.96.0-87.76.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.101.128.0-87.101.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.109.0.0-87.109.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.121.176.0-87.121.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "87.230.128.0-87.230.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "88.84.96.0-88.85.224.0") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "88.209.128.0-88.209.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "88.213.0.0-88.213.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "88.213.64.0-88.213.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.4.0.0-89.5.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.108.0.0-89.108.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.144.64.0-89.144.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.147.0.0-89.147.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.189.224.0-89.189.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.237.128.0-89.237.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "90.148.0.0-90.148.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "91.147.128.0-91.147.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "91.147.160.0-91.147.175.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "91.147.176.0-91.147.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "91.151.160.0-91.151.175.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "92.48.0.0-92.48.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "93.98.0.0-93.98.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "93.112.0.0-93.112.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "93.168.0.0-93.169.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "93.178.0.0-93.178.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.48.0.0-94.49.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.77.192.0-94.77.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.96.0.0-94.99.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.158.64.0-94.158.79.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.177.128.0-95.177.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.184.0.0-95.187.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.218.0.0-95.219.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "104.233.64.0-104.233.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "109.82.0.0-109.83.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "109.166.0.0-109.166.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "109.166.96.0-109.166.111.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "109.171.128.0-109.206.64.0") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "128.127.192.0-128.127.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "128.204.240.0-128.204.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "128.234.0.0-128.234.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "129.208.0.0-129.208.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "130.164.128.0-130.164.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "134.239.0.0-134.239.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "139.64.0.0-139.64.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "141.164.128.0-141.164.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "141.179.0.0-141.179.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "142.154.0.0-142.154.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "142.247.0.0-142.247.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "143.92.128.0-143.92.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "144.86.0.0-144.86.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "145.82.0.0-145.82.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "146.251.0.0-146.251.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "147.82.0.0-147.82.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "148.111.0.0-148.111.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "149.109.0.0-149.109.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "151.173.0.0-151.173.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "151.173.128.0-151.173.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "151.254.0.0-151.255.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "153.94.64.0-153.94.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "155.138.64.0-155.138.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "159.0.0.0-159.0.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "161.70.0.0-161.70.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "161.251.0.0-161.251.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "162.142.128.0-162.142.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "166.87.0.0-166.87.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "167.86.128.0-167.86.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "167.100.128.0-167.100.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "167.111.0.0-167.111.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "168.149.0.0-168.149.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "169.148.0.0-169.148.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "170.101.128.0-170.101.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "170.133.64.0-170.133.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "174.140.0.0-174.140.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "175.110.128.0-175.110.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.16.0.0-176.19.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.32.208.0-176.32.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.44.0.0-176.45.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.47.0.0-176.47.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.99.16.0-176.99.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "176.224.0.0-176.225.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.73.64.0-178.73.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.80.0.0-178.81.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.86.0.0-178.86.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.87.0.0-178.87.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.130.192.0-178.130.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "180.234.0.0-180.234.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.48.0.0-188.55.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.117.64.0-188.117.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.132.0.0-188.132.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.224.128.0-188.224.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.248.0.0-188.249.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "195.122.64.0-195.122.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "196.15.32.0-196.15.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "207.150.160.0-207.150.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "207.178.64.0-207.178.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.2.128.0-212.2.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.11.160.0-212.11.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.12.160.0-212.12.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.24.224.0-212.24.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.26.0.0-212.26.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.26.32.0-212.26.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.26.64.0-212.26.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.33.160.0-212.33.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.46.32.0-212.46.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.57.192.0-212.57.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.62.96.0-212.62.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.70.32.0-212.70.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.71.32.0-212.71.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.76.64.0-212.76.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.93.160.0-212.93.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.93.192.0-212.93.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.100.192.0-212.100.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.102.0.0-212.102.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.107.96.0-212.107.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.116.192.0-212.116.223.255") == true) {
			redirect($web_redirect);
		}
		
		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.118.96.0-212.118.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.118.128.0-212.118.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.119.64.0-212.119.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.138.0.0-212.138.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.215.128.0-212.215.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.136.192.0-213.136.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.166.128.0-213.166.159.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.181.160.0-213.181.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.184.160.0-213.184.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.210.192.0-213.210.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.230.0.0-213.230.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.236.32.0-213.236.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.12.224.0-217.12.239.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.145.240.0-217.145.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.170.32.0-217.170.47.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.170.48.0-217.170.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.173.80.0-217.173.95.255") == true) {
			redirect($web_redirect);
		}

		// kuwait
		// รายชื่อ IP http://www.nirsoft.net/countryip/sa.html

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "31.203.0.0-31.203.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "31.214.0.0-31.214.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.34.128.0-37.34.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.36.0.0-37.39.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "37.231.0.0-37.231.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "46.186.128.0-46.186.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.150.0.0-62.150.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "62.215.0.0-62.215.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.89.0.0-78.89.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.154.192.0-78.154.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.154.224.0-78.154.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "78.159.160.0-78.159.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "80.184.0.0-80.184.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "83.68.160.0-83.68.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "83.96.0.0-83.96.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "85.239.0.0-85.239.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.203.0.0-89.203.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "89.251.80.0-89.251.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "91.140.128.0-91.140.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.29.128.0-94.29.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.128.0.0-94.129.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "94.187.128.0-94.187.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.66.0.0-95.66.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.141.240.0-95.141.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "95.175.64.0-95.175.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "139.141.0.0-139.141.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "149.147.0.0-149.147.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "168.187.0.0-168.187.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.53.0.0-178.53.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.61.0.0-178.61.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "178.161.0.0-178.161.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.70.0.0-188.71.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.231.0.0-188.231.127.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "188.236.0.0-188.236.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "193.188.48.0-193.188.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "193.188.160.0-193.188.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "194.54.192.0-194.54.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "194.54.224.0-194.54.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "194.126.32.0-194.126.63.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "195.39.128.0-195.39.191.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "195.226.224.0-195.226.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "212.43.0.0-212.43.31.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.34.192.0-213.34.223.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.132.224.0-213.132.255.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "213.189.64.0-213.189.95.255") == true) {
			redirect($web_redirect);
		}

		if(ip_in_range($_SERVER['REMOTE_ADDR'], "217.69.176.0-217.69.191.255") == true) {
			redirect($web_redirect);
		}

		$this->load->library('cart');
		
		//pre($this->session->all_userdata());
		
		//$this->cart->destroy();
		
		//echo $this->uri->uri_string();
		
		$this->load->model('frontend/model_frontend');
	}
	
	public function index() {
		$data['category1'] = $this->model_frontend->getCategoryRecord(1);
		$data['category2'] = $this->model_frontend->getCategoryRecord(2);
		$data['category3'] = $this->model_frontend->getCategoryRecord(3);
		$data['category4'] = $this->model_frontend->getCategoryRecord(4);

		$data['banner1Left'] = $this->model_frontend->getBanner1Result('Left');
		$data['banner1Right'] = $this->model_frontend->getBanner1Result('Right');

		$data['banner2'] = $this->model_frontend->getBanner2Result();

		$data['banner2_1'] = $this->model_frontend->getBanner2Single();

		$data['instagram'] = $this->model_frontend->getInstagramSingle();
		
		$data['bestSellerCtrl'] = $this->model_frontend->getBestSellerRecord();
		
		if(!empty($data['bestSellerCtrl'])) {
			$data['product1Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id1);

			$data['product2Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id2);

			$data['product3Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id3);

			$data['product4Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id4);

			$data['product5Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id5);

			$data['product6Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id6);

			$data['product7Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id7);

			$data['product8Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id8);

			$data['product9Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id9);

			$data['product10Ctrl'] = $this->model_frontend->getProductBestSeller($data['bestSellerCtrl']->product_id10);
		}

		$data['instagramCtrl'] = $this->model_frontend->getInstagramRecord();
		
		$data['textCtrl'] = $this->model_frontend->getTextRecord();
		
		$this->load->view('frontend/frontend/index', $data);
	} 
	
	public function ajaxWishlist() {
		if($this->session->userdata('member_id') != '') {
			$this->db->where('product_id', $this->input->post('product_id'));
			$this->db->where('member_id', $this->session->userdata('member_id'));
			
			$query = $this->db->get('ci_wishlist');
			
			$row = $query->row();
			
			if(empty($row)) {
				$data = array(
					'member_id' => $this->session->userdata('member_id'),
					'product_id' => $this->input->post('product_id'),
					'wishlist_datetime_create' => date('Y-m-d H:i:s'),
					'wishlist_ip_create' => $_SERVER['REMOTE_ADDR'] 
				);
				
				$this->db->insert('ci_wishlist', $data);
			}
			
			echo true;
		} else {
			echo false;
		}
	}
	
	public function about() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/about', $data);
	} 
	
	public function cart() {
		if(empty($this->cart->contents())) {
			redirect(site_url());
		}
		$data['countryCtrl'] = $this->model_frontend->getCountryResult();
		
		$data['address'] = $this->model_frontend->getAddessBillingShipping();
		
		$this->load->view('frontend/frontend/cart', $data);
	} 
	
	public function cart_summary($order_detail_id) {
		$data['orderDetailCtrl'] = $this->model_frontend->getOrderDetailResult($order_detail_id);
		
		$this->load->view('frontend/frontend/cart_summary', $data);
	} 
	
	public function contact() {
		if($this->input->post('submit') != '') {
			$data_insert = array(
				'contact_full_name' => $this->input->post('contact_full_name'),
				'contact_phone_number' => $this->input->post('contact_phone_number'),
				'contact_email' => $this->input->post('contact_email'),
				'contact_subject' => $this->input->post('contact_subject'),
				'contact_message' => $this->input->post('contact_message'),
				'contact_datetime_create' => date('Y-m-d H:i:s'),
				'contact_ip_create' => $_SERVER['REMOTE_ADDR']
			);
			
			$this->db->insert('ci_contact', $data_insert);

			$this->load->helper('phpmailer');

			$sender = array('info@lasectabeauty.com');
			$subject = "Contact Lasecta Beauty";

			$message = "
				<table width='400'>
					<tr>
						<th align='left' width='150'>Full Name</th><td>".$this->input->post('contact_full_name')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>Phone Number</th><td>".$this->input->post('contact_phone_number')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>Email</th><td>".$this->input->post('contact_email')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>Subject</th><td>".$this->input->post('contact_subject')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>Message</th><td>".$this->input->post('contact_message')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>Datetime Create</th><td>".date('Y-m-d H:i:s')."</td>
					</tr>
					<tr>
						<th align='left' width='150'>IP Creates</th><td>".$_SERVER['REMOTE_ADDR']."</td>
					</tr>
				</table>
			";

			$from_email = "contact.lasectabeauty@gmail.com";

			$from_name = "NoReply";

			send_email($sender, $subject, $message, $from_email, $from_name);
			
			//echo '<script>alert("Send Data Success");window.location.href="'.site_url().'";</script>';
		}
		
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/contact', $data);
	} 
	
	public function faqs() {
		$data['rows'] = $this->model_frontend->getFaqsResult();
		
		$this->load->view('frontend/frontend/faqs', $data);
	} 
	
	public function howtoorder() {
		$data['row'] = $this->model_frontend->getHowToOrderRecord();
		
		$this->load->view('frontend/frontend/howtoorder', $data);
	} 
	
	public function login_register() {
		$this->load->helper('cookie');
		
		//pre(get_cookie('remember_login'));
		
		if(get_cookie('remember_login')) {
			$data_sess = array(
				'member_id' => get_cookie('remember_login')
			);
			
			$this->session->set_userdata($data_sess);
		}
		//pre($this->session->all_userdata());
		if($this->session->userdata('member_id') != '') {
			redirect('frontend/path/member_account');
		}
		
		if($this->input->post('register_submit') != '') {
			$data_register = array(
				'member_first_name' => $this->input->post('member_first_name'),
				'member_last_name' => $this->input->post('member_last_name'),
				'member_phone_number' => $this->input->post('member_phone_number'),
				'member_email' => $this->input->post('member_email'),
				'member_password' => $this->input->post('member_password'),
				'member_datetime_create' => date('Y-m-d H:i:s'),
				'member_ip_create' => $_SERVER['REMOTE_ADDR'],
				'member_datetime_update' => date('Y-m-d H:i:s'),
				'member_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$this->db->insert('ci_member', $data_register);
			
			echo '<script>alert("'.get2Lang($this->session->userdata("lang"), "Register Success", "Register Success(Ar)").'");window.location.href="'.site_url('frontend/path/login_register').'";</script>';
		} elseif($this->input->post('login_member') != '') {
			$this->db->where('member_email', $this->input->post('member_email'));
			$this->db->where('member_password', $this->input->post('member_password'));
			
			$query = $this->db->get('ci_member');
			
			$row = $query->row();
			
			if(!empty($row)) {
				$data_sess = array(
					'member_id' => $row->member_id
				);
				
				$this->session->set_userdata($data_sess);
				
				if($this->input->post('remember') != '') {
					set_cookie('remember_login', $row->member_id, 60 * 60 * 24 * 365);
				}
				
				redirect('frontend/path/member_account');
			} else {
				echo '<script>alert("Incorrect Email Address Or Password");</script>';
			}
		}
		
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/login_register', $data);
	} 
	
	public function logout() {
		$data_sess = array(
			'member_id'
		);
		
		$this->session->unset_userdata($data_sess);
		
		$this->load->helper('cookie');
		
		delete_cookie('remember_login');
		
		redirect(site_url());
	}
	
	public function member_account() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$this->load->view('frontend/frontend/member_account', $data);
	} 
	
	public function member_account_info() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		if($this->input->post('submit') != '') {
			$data_update = array(
				'member_first_name' => $this->input->post('member_first_name'),
				'member_last_name' => $this->input->post('member_last_name'),
				'member_phone_number' => $this->input->post('member_phone_number'),
				'member_email' => $this->input->post('member_email'),
				'member_password' => $this->input->post('member_password'),
				'member_gender' => $this->input->post('member_gender'),
				'member_datetime_update' => date('Y-m-d H:i:s'),
				'member_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$where_update = array(
				'member_id' => $this->session->userdata('member_id')
			);
			
			$this->db->update('ci_member', $data_update, $where_update);
			
			redirect('frontend/path/member_account');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$this->load->view('frontend/frontend/member_account_info', $data);
	} 
	
	public function member_add_address($type, $member_address_id = '') {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		if($this->input->post('submit') != '') {
			if($type == 'shipping') {
				if(!empty($member_address_id)) {
					// update
					$data_update = array(
						'member_shipping_address_first_name' => $this->input->post('member_address_first_name'),
						'member_shipping_address_last_name' => $this->input->post('member_address_last_name'),
						'member_shipping_address_mobile' => $this->input->post('member_address_mobile'),
						'member_shipping_address_email' => $this->input->post('member_address_email'),
						'member_shipping_address_address' => $this->input->post('member_address_address'),
						'member_shipping_address_province' => $this->input->post('member_address_province'),
						'member_shipping_address_district' => $this->input->post('member_address_district'),
						//'member_shipping_address_sub_district' => $this->input->post('member_address_sub_district'),
						'member_shipping_address_country' => $this->input->post('member_address_country'),
						'member_shipping_postal_code' => $this->input->post('member_postal_code'),
						'member_shipping_datetime_update' =>  date('Y-m-d H:i:s'),
						'member_shipping_ip_update' => $_SERVER['REMOTE_ADDR']
					);
					
					$where_update = array(
						'member_id' => $this->session->userdata('member_id'), 
						'member_shipping_address_id' => $member_address_id
					);
					
					$this->db->update('ci_member_shipping_address', $data_update, $where_update);
				} else {
					// insert
					$data_insert = array(
						'member_id' => $this->session->userdata('member_id'),
						'member_shipping_address_first_name' => $this->input->post('member_address_first_name'),
						'member_shipping_address_last_name' => $this->input->post('member_address_last_name'),
						'member_shipping_address_mobile' => $this->input->post('member_address_mobile'),
						'member_shipping_address_email' => $this->input->post('member_address_email'),
						'member_shipping_address_address' => $this->input->post('member_address_address'),
						'member_shipping_address_province' => $this->input->post('member_address_province'),
						'member_shipping_address_district' => $this->input->post('member_address_district'),
						//'member_shipping_address_sub_district' => $this->input->post('member_address_sub_district'),
						'member_shipping_address_country' => $this->input->post('member_address_country'),
						'member_shipping_postal_code' => $this->input->post('member_postal_code'),
						'member_shipping_datetime_create' => date('Y-m-d H:i:s'),
						'member_shipping_ip_create' => $_SERVER['REMOTE_ADDR'],
						'member_shipping_datetime_update' =>  date('Y-m-d H:i:s'),
						'member_shipping_ip_update' => $_SERVER['REMOTE_ADDR']
					);
					
					$this->db->insert('ci_member_shipping_address', $data_insert);
				}
			} elseif($type == 'billing') {
				if(!empty($member_address_id)) {
					// update
					$data_update = array(
						'member_billing_address_first_name' => $this->input->post('member_address_first_name'),
						'member_billing_address_last_name' => $this->input->post('member_address_last_name'),
						'member_billing_address_mobile' => $this->input->post('member_address_mobile'),
						'member_billing_address_email' => $this->input->post('member_address_email'),
						'member_billing_address_address' => $this->input->post('member_address_address'),
						'member_billing_address_province' => $this->input->post('member_address_province'),
						'member_billing_address_district' => $this->input->post('member_address_district'),
						//'member_billing_address_sub_district' => $this->input->post('member_address_sub_district'),
						'member_billing_address_country' => $this->input->post('member_address_country'),
						'member_billing_postal_code' => $this->input->post('member_postal_code'),
						'member_billing_datetime_update' =>  date('Y-m-d H:i:s'),
						'member_billing_ip_update' => $_SERVER['REMOTE_ADDR']
					);
					
					$where_update = array(
						'member_id' => $this->session->userdata('member_id'), 
						'member_billing_address_id' => $member_address_id
					);
					
					$this->db->update('ci_member_billing_address', $data_update, $where_update);
				} else {
					// insert
					$data_insert = array(
						'member_id' => $this->session->userdata('member_id'),
						'member_billing_address_first_name' => $this->input->post('member_address_first_name'),
						'member_billing_address_last_name' => $this->input->post('member_address_last_name'),
						'member_billing_address_mobile' => $this->input->post('member_address_mobile'),
						'member_billing_address_email' => $this->input->post('member_address_email'),
						'member_billing_address_address' => $this->input->post('member_address_address'),
						'member_billing_address_province' => $this->input->post('member_address_province'),
						'member_billing_address_district' => $this->input->post('member_address_district'),
						//'member_billing_address_sub_district' => $this->input->post('member_address_sub_district'),
						'member_billing_address_country' => $this->input->post('member_address_country'),
						'member_billing_postal_code' => $this->input->post('member_postal_code'),
						'member_billing_datetime_create' => date('Y-m-d H:i:s'),
						'member_billing_ip_create' => $_SERVER['REMOTE_ADDR'],
						'member_billing_datetime_update' =>  date('Y-m-d H:i:s'),
						'member_billing_ip_update' => $_SERVER['REMOTE_ADDR']
					);
					
					$this->db->insert('ci_member_billing_address', $data_insert);
				}
			}
			
			echo '<script>alert("Save Data Success");window.location.href="'.site_url("frontend/path/member_address").'";</script>';	
		}
		
		$data['type'] = $type;
		
		$data['member_address_id'] = $member_address_id;
		
		$data['provinceCtrl'] = $this->model_frontend->getProvinceResult();
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		if(!empty($member_address_id)) {
			if($type == 'shipping') {
				$data['shipping'] = $this->model_frontend->getAddressShipping($member_address_id);	
				//$data['amphur'] = $this->model_frontend->getAmphur($data['shipping']->member_shipping_address_province_id);
				//$data['district'] = $this->model_frontend->getDistrict($data['shipping']->member_shipping_address_district_id);	
			} elseif($type == 'billing') {
				$data['billing'] = $this->model_frontend->getAddressBilling($member_address_id);	
				//$data['amphur'] = $this->model_frontend->getAmphur($data['billing']->member_billing_address_province_id);
				//$data['district'] = $this->model_frontend->getDistrict($data['billing']->member_billing_address_district_id);	
			}
		}
		
		$data['country'] = $this->model_frontend->getCountryResult();
		
		$this->load->view('frontend/frontend/member_add_address', $data);
	} 
	
	public function member_address() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$data['addressShipping'] = $this->model_frontend->getMemberAddressShippingResult();
		
		$data['addressBilling'] = $this->model_frontend->getMemberAddressBillingResult();
		
		$this->load->view('frontend/frontend/member_address', $data);
	} 
	
	public function member_mobile() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$this->load->view('frontend/frontend/member_mobile', $data);
	} 
	
	public function member_order() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$data['orderDetail'] = $this->model_frontend->getOrderDetailMember();
		
		$this->load->view('frontend/frontend/member_order', $data);
	} 
	
	public function member_order_history($order_detail_id) {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$data['orderDetail'] = $this->model_frontend->getOrderDetailMemberRecord($order_detail_id);
		
		$data['order'] = $this->model_frontend->getOrderResult($order_detail_id);
		
		$this->load->view('frontend/frontend/member_order_history', $data);
	} 
	
	public function member_password() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		if($this->input->post('submit') != '') {
			$this->db->where('member_password', $this->input->post('member_password'));
			$this->db->where('member_id', $this->session->userdata('member_id'));
			$query = $this->db->get('ci_member');
			
			$row = $query->row();
			
			if(!empty($row)) {
				if($this->input->post('member_password_new') != $this->input->post('member_password_confirm')) {
					echo '<script>alert("Incorrect Confirm Password");</script>';	
				} else {
					$data_update = array(
						'member_password' => $this->input->post('member_password_new'),
						'member_datetime_update' => date('Y-m-d H:i:s'),
						'member_ip_update' => $_SERVER['REMOTE_ADDR']
					);
					
					$where_update = array(
						'member_id' => $this->session->userdata('member_id')
					);
					
					$this->db->update('ci_member', $data_update, $where_update);
					
					echo '<script>alert("Change Password success");window.location.href="'.site_url('frontend/path/member_account').'";</script>';	
				}
			} else {
				echo '<script>alert("Incorrect Current Password");</script>';
			}
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$this->load->view('frontend/frontend/member_password', $data);
	} 
	
	public function member_wishlist() {
		if($this->session->userdata('member_id') == '') {
			redirect('frontend/path/login_register');
		}
		
		$data['row'] = $this->model_frontend->getMemberRecord();
		
		$data['wishlistCtrl'] = $this->model_frontend->getWishlistResult();
		
		$this->load->view('frontend/frontend/member_wishlist', $data);
	} 
	
	public function new_arrivals() {
		$this->load->library('pagination');
		
		// pagination
		$perpage = 9;
		
		$config['base_url'] = site_url('frontend/path/new_arrivals/');
		$config['total_rows'] = count($this->model_frontend->countProductBySubCategoryNewArrivals());
		
		$config['per_page'] = 9;
		
		$config['page_query_string'] = TRUE;
		
		// config
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		
		$config['cur_tag_open'] = '<li class=current>';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['first_link'] = ' << ';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		
		$config['prev_link'] = ' < ';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$config['next_link'] = ' > ';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['last_link'] = ' >> ';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		// end config
		if($this->input->get('per_page') != '') {
			$limit = $perpage;
			$offset = $this->input->get('per_page');
		} else {
			$limit = $perpage;
			$offset = 0;
		}

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();
		
		$data['productCtrl'] = $this->model_frontend->getProductBySubCategoryNewArrivals($limit, $offset);
		
		
		$this->load->view('frontend/frontend/new_arrivals', $data);
	} 
	
	public function news_tips() {
		$data['newsCtrl'] = $this->model_frontend->getNewsTipsResult();
		
		$this->load->view('frontend/frontend/news_tips', $data);
	} 
	
	public function newstips_inside($news_tips_data_id) {
		$data['row'] = $this->model_frontend->getNewsTipsRecord($news_tips_data_id);
		
		$this->load->view('frontend/frontend/newstips_inside', $data);
	} 
	
	public function privacy() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/privacy', $data);
	} 
	
	public function product_index($category_id, $sub_category = '') {
		$data['category_id'] = $category_id;
		
		$counter = $this->model_frontend->insertCounter($category_id);
		
		$this->load->library('pagination');
		
		// pagination
		$perpage = 9;
		
		$config['base_url'] = site_url('frontend/path/product_index/'.$category_id.'/'.$sub_category);
		$config['total_rows'] = count($this->model_frontend->countProductBySubCategory($category_id));
		
		$config['per_page'] = $perpage;
		
		$config['page_query_string'] = TRUE;
		
		// config
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		
		$config['cur_tag_open'] = '<li class=current>';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['first_link'] = ' << ';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		
		$config['prev_link'] = ' < ';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$config['next_link'] = ' > ';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['last_link'] = ' >> ';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		// end config
		if($this->input->get('per_page') != '') {
			$limit = $perpage;
			$offset = $this->input->get('per_page');
		} else {
			$limit = $perpage;
			$offset = 0;
		}

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();
		
		$data['productCtrl'] = $this->model_frontend->getProductBySubCategory($category_id, $limit, $offset);
		
		$this->load->view('frontend/frontend/product_index', $data);
	} 
	
	public function product_search($search = '') {
		$data['search'] = urldecode($search);
		
		$data['productCtrl'] = $this->model_frontend->getProductSearch(urldecode($search));
		
		$this->load->view('frontend/frontend/product_search', $data);
	}
	
	public function product_index_accessories() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/product_index_accessories', $data);
	} 
	
	public function product_index_haircare() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/product_index_haircare', $data);
	} 
	
	public function product_index_makeup() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/product_index_makeup', $data);
	} 
	
	public function product_index_skincare() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/product_index_skincare', $data);
	} 
	
	public function product_inside($product_id) {
		$data['product_id'] = $product_id;
		
		$data['row'] = $this->model_frontend->getProductRecord($product_id);
		
		$data['colorCtrl'] = $this->model_frontend->getColorResult($product_id);

		$data['wishlistCtrl'] = $this->model_frontend->getWishlistRecord($product_id);
		
		if(!empty($data['row'])) {
			$data['youMayAlsoLikeCtrl'] = $this->model_frontend->getYouMayAlsoLike($data['row']->category_id, $data['row']->product_id);	
		}
		
		$this->load->view('frontend/frontend/product_inside', $data);
	} 
	
	public function reset_password() {
		if($this->input->post('submit_forgot_password') != '') {
			$this->db->where('member_email', $this->input->post('member_email'));
			$query = $this->db->get('ci_member');
			
			$row = $query->row();
			
			if(!empty($row)) {
				$this->load->helper('phpmailer');
				
				$to = $row->member_email;
				
				$subject = 'La secta Beauty :: Forgot Password';
				
				$message = 'Password: '.$row->member_password;
				
				$from_email = 'contact.lasectabeauty@gmail.com';
				
				$from_name = 'No Reply';
				
				//send_email($sender, $subject, $message, $from_email, $from_name);
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <contact.lasectabeauty@gmail.com>' . "\r\n";
				//$headers .= 'Cc: myboss@example.com' . "\r\n";

				// Mail it
				mail($to, $subject, $message, $headers);

				echo '<script>alert("Send Password Success");window.location.href="'.site_url().'";</script>';
			} else {
				echo '<script>alert("Not Email in System");</script>';
			}
		}
		
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/reset_password', $data);
	} 
	
	public function shipping() {
		$data['row'] = $this->model_frontend->getShippingRecord();
		
		$this->load->view('frontend/frontend/shipping', $data);
	} 
	
	public function terms() {
		$data['test'] = 'Test';
		
		$this->load->view('frontend/frontend/terms', $data);
	}  
	
	public function ajaxChangeProvince() {
		$this->db->order_by('AMPHUR_ID', 'asc');
		$this->db->where('PROVINCE_ID', $this->input->post('member_address_province_id'));
		$query = $this->db->get('amphures');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
?>
			<option value="">Please Select</option>
<?php
			foreach($rows as $r) {
?>
				<option value="<?php echo $r->AMPHUR_ID;?>"><?php echo $r->AMPHUR_NAME_ENG;?></option>
<?php
			}
		}
	}
	
	public function ajaxChangeAmphur() {
		$this->db->order_by('DISTRICT_ID', 'asc');
		$this->db->where('AMPHUR_ID', $this->input->post('member_address_district_id'));
		$query = $this->db->get('districts');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
?>
			<option value="">Please Select</option>
<?php
			foreach($rows as $r) {
?>
				<option value="<?php echo $r->DISTRICT_ID;?>"><?php echo $r->DISTRICT_NAME_ENG;?></option>
<?php
			}
		}
	}
	
	public function ajaxDefaultShippingAddress() {
		$data = array(
			'member_shipping_address_id' => $this->input->post('member_shipping_address_id')
		);
		
		$where = array(
			'member_id' => $this->session->userdata('member_id')
		);
		
		$this->db->update('ci_member', $data, $where);
	}
	
	public function ajaxDefaultBillingAddress() {
		$data = array(
			'member_billing_address_id' => $this->input->post('member_billing_address_id')
		);
		
		$where = array(
			'member_id' => $this->session->userdata('member_id')
		);
		
		$this->db->update('ci_member', $data, $where);
	}
	
	public function member_delete_address($type, $member_address_id) {
		if($type == 'shipping') {
			$where = array(
				'member_shipping_address_id' => $member_address_id
			);
			
			$this->db->delete('ci_member_shipping_address', $where);
		} elseif($type == 'billing') {
			$where = array(
				'member_billing_address_id' => $member_address_id
			);
			
			$this->db->delete('ci_member_billing_address', $where);
		}
		
		redirect('frontend/path/member_address');
	}
	
	public function ajaxRemoveWishlist() {
		$where = array(
			'wishlist_id' => $this->input->post('wishlist_id')
		);
		
		$this->db->delete('ci_wishlist', $where);
	}
	
	public function ajaxInsertCart() {
		$data = array(
	        'id'      => $this->input->post('product_id'),
	        'qty'     => $this->input->post('qty'),
	        'price'   => $this->input->post('price'),
	        'name'    => $this->input->post('name'),
	        'options' => array(
	        	'color' => $this->input->post('color'),
	        	'image' => $this->input->post('image'),
	        	'category' => $this->input->post('category')
	        )
		);

		$this->cart->insert($data);
		
		$this->ajaxCart();
	}
	
	public function ajaxDeleteCart() {
		$data = array(
	        'rowid' => $this->input->post('rowid'),
	        'qty'   => 0
		);

		$this->cart->update($data);
		
		$this->ajaxCart();
	}
	
	public function ajaxUpdateCart() {
		$data = array(
	        'rowid' => $this->input->post('rowid'),
	        'qty'   => $this->input->post('qty')
		);

		$this->cart->update($data);
		
		$this->ajaxCart();
	}
	
	public function ajaxCart() {
		// [0] จำนวนสินค้า id="inc_cart_amount", id="inc_cart_amount_mobile"
		
		$i = 0;
		$sub_total = 0;
		foreach($this->cart->contents() as $items) {
			$price = $items['qty'] * $items['price'];
			
			$sub_total += $price;
			
			$i++;
		}
		
		echo $i;
		
		echo '!@#$%^&*()';
		
		// [1] Menu Side Bar id="menu_side_bar"
		$sub_total = 0;
		foreach($this->cart->contents() as $items) {
			$price = $items['price'] * $items['qty'];
			$sub_total += $price;
?>
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="bag_produt">
                                    <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-6 col-md-5 col-lg-6" style="padding-left:0px;">
                                <div class="new_item">
                                    <h5><?php echo $items['options']['category'];?></h5>
                                    <h2 class="mt-1"><?php echo $items['name'];?></h2>
                                    <li class="smtxt">Color : <?php echo $items['options']['color'];?></li>
                                </div>
                                <br>
                                <select class="custom-select arrow_down" id="qty_<?php echo $items['rowid'];?>" onchange="updateCart('<?php echo $items['rowid'];?>');">
<?php
			for($qty = 1; $qty <= 100; $qty++) {
?>
									<option value="<?php echo $qty;?>" <?php if($items['qty'] == $qty) echo 'selected';?>><?php echo $qty;?></option>
<?php
			}
?>
                                </select>

                                <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none mt-2">
                                    <p><?php echo number_format($items['price'], 2, '.', ',');?> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></p>
                                    <a href="javascript:deleteCart('<?php echo $items["rowid"];?>');" class="removeitem" onclick="return confirm('Confirm Delete');">Remove</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 text-lg-right d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                <p><?php echo number_format($items['price'], 2, '.', ',');?> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></p>
                                <a href="javascript:deleteCart('<?php echo $items["rowid"];?>');" class="removeitem" onclick="return confirm('Confirm Delete');">Remove</a>
                            </div>
                        </div>
                        <hr>
<?php
		}
?>
						<div class="bot_bag">
                            <div class="row">
                                <div class="col-md-3">
                                    Total Price
                                </div>

                                <div class="col-md-9 text-right">
                                    <span id="total_price"><?php echo number_format($sub_total, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6" style="padding-right:0px;">
                                    <a href="<?php echo site_url();?>" class="btn btn-warning"><?php echo get2Lang($this->session->userdata('lang'), 'Continue Shopping', 'متابعة التسوق');?> </a>
                                </div>
                                <div class="col-md-6" style="padding-left:0px;">
                                    <a href="<?php echo site_frontend('cart.php');?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'Checkout', 'الدفع');?></a>
                                </div>
                            </div>
                        </div>
<?php	
		echo '!@#$%^&*()';
		
		// [2] หน้า Cart id="inc_cart"
		
		foreach($this->cart->contents() as $items) {
?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6 shoppic pr-0"> <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid"> </div>
                                                    <div class="col-lg-12 col-xl-6 pr-0">
                                                        <div class="new_item">
                                                            <h5><?php echo $items['options']['category'];?></h5>
                                                            <h2 class="mt-1"><?php echo $items['name'];?></h2>
                                                            <li class="smtxt">Color : <?php echo $items['options']['color'];?></li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><?php echo $items['qty'];?></td>
                                            <td class="text-right"><?php echo number_format($items['price'], 2, '.', ',');?>
                                                <div class="btinrela">
                                                    <div class="bin"><a href="javascript:deleteCart('<?php echo $items["rowid"];?>');"><img src="<?php echo base_frontend('images/bin.svg');?>"></a></div>
                                                </div>

                                            </td>
                                        </tr>
<?php
		}
		
		echo '!@#$%^&*()';
		
		// [3] id="cart_mobile"
		
		foreach($this->cart->contents() as $items) {
?>                                
                                <div class="row">
                                    <div class="col">

                                       <div class="row cartmobile-detail">
                                        <div class="col-4">
                                            <div class="pichisres"> <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid"> </div>
                                        </div>
                                        <div class="col-4" style="padding:0px;">
                                            <div class="new_item">
                                                <h5><?php echo $items['options']['category'];?></h5>
                                                <h3 class="mt-1"><?php echo $items['name'];?></h3>

                                                <li class="smtxt">Color : <span class="lightgray"><?php echo $items['options']['color'];?></span></li>
                                                <li class="smtxt">Qty : <span class="lightgray"><?php echo $items['qty'];?></span></li>
                                            </div>


                                        </div>
                                        <div class="col-4 text-right">
                                            <b>
                                                <span class="actual-price"><?php echo number_format($items['price'] * $items['qty'], 2, '.', ',');?></span>
                                               

                                            </b>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>
<?php
		}
		
		echo '!@#$%^&*()';
		
		// [4] id="cart_sub_total"
		
		echo number_format($sub_total, 2, '.', ',');
		
		echo '!@#$%^&*()';
		
		// [5] id="cart_discount"
		if($this->session->userdata('member_id') != '') {
			$discount = $sub_total * 5 / 100;
			if($this->session->userdata('influencer_type') == 'US') {
				$result = $discount + $this->session->userdata('influencer_price');
				
				$discount = $result;
			} elseif($this->session->userdata('influencer_type') == '%') {
				$result = (($sub_total - $discount) * $this->session->userdata('influencer_price') / 100) + $discount;
				
				$discount = $result;
			}	
		} else {
			$discount = 0;
			if($this->session->userdata('influencer_type') == 'US') {
				$result = $discount + $this->session->userdata('influencer_price');
				
				$discount = $result;
			} elseif($this->session->userdata('influencer_type') == '%') {
				$result = (($sub_total - $discount) * $this->session->userdata('influencer_price') / 100) + $discount;
				
				$discount = $result;
			}	
		}
		
		$data_discount = array(
			'order_detail_discount' => $discount
		);
		
		$this->session->set_userdata($data_discount);
		
		echo number_format($discount, 2, '.', ',');
		
		echo '!@#$%^&*()';
		
		// [6] id="cart_shipping"
		
		$order_detail_shipping_country = $this->input->post('order_detail_shipping_country');
		
		if(!empty($order_detail_shipping_country)) {
			// gross weight
			$weight1 = 0;
			// weight dimention
			$weight2 = 0;
			// หาน้ำหนัก
			foreach($this->cart->contents() as $items) {
				$this->db->where('product_id', $items['id']);
				$query = $this->db->get('ci_product');
				
				$row = $query->row();
				
				if(!empty($row)) {
					$weight1 += $row->product_gross_weight * $items['qty'];	
					$weight2 += ($row->product_dimension_width * $row->product_dimension_height * $row->product_dimension_depth / 5000) * $items['qty'];
				}	
			}

			if($weight1 > $weight2) {
				$weight = $weight1;
			} else {
				$weight = $weight2;
			}
			
			//echo $weight;
			if($order_detail_shipping_country == 'Thailand') {
				$this->db->order_by('ems_weight', 'asc');
				$this->db->where('ems_weight >=', $weight);
				$this->db->limit(1);
				$query = $this->db->get('ci_rate_thai_shipping_ems');
				
				$row = $query->row();
				
				/*if($sub_total >= 100) {
					$shipping = number_format(0, 2, '.', ',');
				} else {*/
					if(!empty($row)) {
						$shipping = number_format($row->ems_price, 2, '.', ',');
					}
				//}
			} else {
				// หาค่าขนส่ง DHL Express
				$this->db->order_by('ci_shipping_dhl_express.shipping_dhl_express_weight', 'asc');
				$this->db->where('ci_shipping_dhl_express.shipping_dhl_express_weight >=', $weight);
				$this->db->where('country.country_name', $order_detail_shipping_country);
				$this->db->limit(1);
				$this->db->join('country', 'ci_shipping_dhl_express.zone_name = country.zone_name', 'inner');
				$query = $this->db->get('ci_shipping_dhl_express');
				
				$row = $query->row();
				
				/*if($sub_total >= 100) {
					$shipping = number_format(0, 2, '.', ',');
				} else {*/
					if(!empty($row)) {
						$shipping = $row->shipping_dhl_express_price / 30;
					}
				//}
			}
			
			$shipping_express = $shipping;
			
			// [6] ค่าขนส่ง Normal
			// หาค่าขนส่ง DHL Air
			if($order_detail_shipping_country == 'Thailand') {
				$this->db->order_by('thai_shipping_weight', 'asc');
				$this->db->where('thai_shipping_weight >=', $weight);
				$this->db->limit(1);
				$query = $this->db->get('ci_rate_thai_shipping');
				
				$row = $query->row();
				
				if($sub_total >= 100) {
					$shipping = number_format(0, 2, '.', ',');
				} else {
					if(!empty($row)) {
						$shipping = number_format($row->thai_shipping_price, 2, '.', ',');
					}
				}
			} else {
				$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_weight', 'asc');
				$this->db->where('ci_shipping_dhl_air.shipping_dhl_air_weight >=', $weight);
				$this->db->limit(1);
				$this->db->where('country.country_name', $order_detail_shipping_country);
				$this->db->join('country', 'ci_shipping_dhl_air.country_id = country.country_id', 'inner');
				
				$query = $this->db->get('ci_shipping_dhl_air');
				
				$row = $query->row();
				
				if($sub_total >= 50) {
					$shipping = number_format(0, 2, '.', ',');
				} else {
					if(!empty($row)) {
						$shipping = number_format($row->shipping_dhl_air_price / 30, 2, '.', ',');
					} elseif(empty($row)) {
						// ถ้าหาไม่เจอ country_id = 0
						$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_weight', 'asc');
						$this->db->where('ci_shipping_dhl_air.shipping_dhl_air_weight >=', $weight);
						$this->db->where('ci_shipping_dhl_air.country_id', 0);
						$this->db->limit(1);
						$query = $this->db->get('ci_shipping_dhl_air');
						
						$row = $query->row();
						
						if(!empty($row)) {
							$shipping = $row->shipping_dhl_air_price / 30;	
						}
					}
				}
			}
			
			/*if(!empty($shipping)) {
				$data_sess = array(
					'shipping_normal' => $shipping
				);
				
				$this->session->set_userdata($data_sess);
			}*/
			
			
			$shipping_normal = $shipping;
			
			if($this->input->post('type') == 'express') {
				if($sub_total >= 100) {
					$shipping = number_format(0, 2, '.', '');
				} else {
					$shipping = number_format($shipping_express, 2, '.', '');
				}
			} elseif($this->input->post('type') == 'normal') {
				if($sub_total >= 50) {
					$shipping = number_format(0, 2, '.', '');
				} else {
					$shipping = number_format($shipping_normal, 2, '.', '');
				}
			} 
			
			
			if($this->input->post('type') == 'express') {
				if($sub_total >= 100) {
					//echo 'abc';
					//echo number_format($shipping_express, 2, '.', ',');
					echo number_format(0, 2, '.', ',');
					
					$data_shipping = array(
						'order_detail_shipping' => number_format(0, 2, '.', '')
					);
					
					$this->session->set_userdata($data_shipping);
				} else {
					//echo 'abc';
					//echo number_format($shipping_express, 2, '.', ',');
					echo number_format($shipping_express, 2, '.', ',');
					
					$data_shipping = array(
						'order_detail_shipping' => number_format($shipping_express, 2, '.', '')
					);
					
					$this->session->set_userdata($data_shipping);
				}
			} elseif($this->input->post('type') == 'normal') {
				//echo 'def';
				//echo number_format($shipping_normal, 2, '.', ',');
				if($sub_total >= 50) {
					echo number_format(0, 2, '.', ',');
					
					$data_shipping = array(
						'order_detail_shipping' => number_format(0, 2, '.', '')
					);
					
					$this->session->set_userdata($data_shipping);
				} else {
					echo number_format($shipping_normal, 2, '.', ',');
					
					$data_shipping = array(
						'order_detail_shipping' => number_format($shipping_normal, 2, '.', '')
					);
					
					$this->session->set_userdata($data_shipping);
				}
			}	
		}
		
		echo '!@#$%^&*()';
		
		// [7] id="cart_total"
		
		if(!empty($shipping)) {
			$shipping = str_replace(',', '', $shipping);
			
			echo number_format($sub_total + $shipping - $discount, 2, '.', ',');	
			$total = $sub_total + $shipping - $discount;
		} else {
			echo number_format($sub_total - $discount, 2, '.', ',');
			$total = $sub_total - $discount;
		}
		
		$data_total = array(
			'total' => $total
		);

		$this->session->set_userdata($data_total);
		
		echo '!@#$%^&*()';
		
		// [8] เช็คว่า Code Influencer มีค่ารึเปล่า
		if($this->session->userdata('influencer_code') != '') {
			echo 'true';
		}
		
		echo '!@#$%^&*()';
		
		// [9] ค่าขนส่ง
		// express/ems
		$order_detail_shipping_country = $this->input->post('order_detail_shipping_country');
		
		if(!empty($order_detail_shipping_country)) {
			// gross weight
			$weight1 = 0;
			// weight dimention
			$weight2 = 0;
			// หาน้ำหนัก
			foreach($this->cart->contents() as $items) {
				$this->db->where('product_id', $items['id']);
				$query = $this->db->get('ci_product');
				
				$row = $query->row();
				
				if(!empty($row)) {
					$weight1 += $row->product_gross_weight * $items['qty'];	
					$weight2 += ($row->product_dimension_width * $row->product_dimension_height * $row->product_dimension_depth / 5000) * $items['qty'];
				}	
			}
			
			if($weight1 > $weight2) {
				$weight = $weight1;
			} else {
				$weight = $weight2;
			}

			//echo $weight;
			if($order_detail_shipping_country == 'Thailand') {
				$this->db->order_by('ems_weight', 'asc');
				$this->db->where('ems_weight >', $weight);
				$this->db->limit(1);
				$query = $this->db->get('ci_rate_thai_shipping_ems');
				
				$row = $query->row();
				
				if($sub_total >= 100) {
					echo '<h5 class="styethis"> Free Shipping Express Delivery </h5><p>1-3 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
				} else {
					if(!empty($row)) {
						echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Express Shipping', 'الشحن السريع').' '.$row->ems_price.'</span> '.get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي').'</h5><p>1-3 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
						//echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Express Shipping', 'الشحن السريع').'</span></h5><p>1-3 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
					}
				}
			} else {
				// หาค่าขนส่ง DHL Express
				$this->db->order_by('ci_shipping_dhl_express.shipping_dhl_express_weight', 'asc');
				$this->db->where('ci_shipping_dhl_express.shipping_dhl_express_weight >=', $weight);
				$this->db->where('country.country_name', $order_detail_shipping_country);
				$this->db->limit(1);
				$this->db->join('country', 'ci_shipping_dhl_express.zone_name = country.zone_name', 'inner');
				$query = $this->db->get('ci_shipping_dhl_express');
				
				$row = $query->row();
			
				if(!empty($row)) {
					//pre($row);
					if($row->zone_name == 'A') {
						$day = '3';
					} elseif($row->zone_name == 'B') {
						$day = '3-5';
					} elseif($row->zone_name == 'C') {
						$day = '3-4';
					} elseif($row->zone_name == 'D') {
						$day = '3-5';
					} elseif($row->zone_name == 'E') {
						$day = '4';
					} elseif($row->zone_name == 'F') {
						$day = '4-5';
					} elseif($row->zone_name == 'G') {
						$day = '7';
					}
					
					$shipping_ = $row->shipping_dhl_express_price / 30;
					
					if($sub_total >= 100) {
						echo '<h5 class="styethis"> Free Shipping Express Delivery </h5><p>'.$day.' '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
					} else {
						echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Express Delivery Shipping', 'الشحن السريع ').' '.number_format($shipping_, 2, '.', ',').' '.get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي').' </h5><p>'.$day.' '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
						//echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
					}
				}
			}
		} else {
			echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Express', 'سريع').' </h5>';
		}		
			
		echo '!@#$%^&*()';
		// end express/ems
		
		if(!empty($order_detail_shipping_country)) {
			// [10] ค่าขนส่ง Normal
			// หาค่าขนส่ง DHL Air
			if($order_detail_shipping_country == 'Thailand') {
				$this->db->order_by('thai_shipping_weight', 'asc');
				$this->db->where('thai_shipping_weight >', $weight);
				$this->db->limit(1);
				$query = $this->db->get('ci_rate_thai_shipping');
				
				$row = $query->row();
				
				if($sub_total >= 50) {
					echo '<h5 class="styethis"> Free Shipping Delivery </h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
				} else {
					if(!empty($row)) {
						$shipping_ = number_format($row->thai_shipping_price, 2, '.', ',');
						
						echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').' '.$shipping_.' USD </h5><p>3-5 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';

						//echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').'</h5><p>3-5 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
					}
				}
			} else {
				$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_weight', 'asc');
				$this->db->where('ci_shipping_dhl_air.shipping_dhl_air_weight >=', $weight);
				$this->db->limit(1);
				$this->db->where('country.country_name', $order_detail_shipping_country);
				$this->db->join('country', 'ci_shipping_dhl_air.country_id = country.country_id', 'inner');
				
				$query = $this->db->get('ci_shipping_dhl_air');
				
				$row = $query->row();
				
				if($sub_total >= 50) {
					echo '<h5 class="styethis"> Free Shipping Delivery </h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
				} else {
					if(!empty($row)) {

						$shipping_ = number_format($row->shipping_dhl_air_price, 2, '.', ',');
						echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').' '.number_format($shipping_ / 30, 2, '.', ',').' USD </h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
						//echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').'</h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';
					} elseif(empty($row)) {
						// ถ้าหาไม่เจอ country_id = 0
						$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_weight', 'asc');
						$this->db->where('ci_shipping_dhl_air.shipping_dhl_air_weight >=', $weight);
						$this->db->where('ci_shipping_dhl_air.country_id', 0);
						$this->db->limit(1);
						$query = $this->db->get('ci_shipping_dhl_air');
						
						$row = $query->row();
						
						if(!empty($row)) {
							$shipping_ = $row->shipping_dhl_air_price / 30;
							echo '<h5 class="styethis"> <h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').' '.number_format($shipping_, 2, '.', ',').' USD </h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';

							//echo '<h5 class="styethis"> <h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery Shipping', 'شحن التوصيل').'</h5><p>7-21 '.get2Lang($this->session->userdata('lang'), 'business days after order shipped', 'أيام العمل بعد شحن الطلب').' </p>';	
						}
					}
				}
			}	
		} else {
			echo '<h5 class="styethis"> '.get2Lang($this->session->userdata('lang'), 'Delivery', 'التوصيل').' </h5>';
		}
		
		//pre($this->session->all_userdata());
	}
	
	public function ajaxFilterProduct() {
		$per_page = 9;
		
		$check = false;
		
		if($this->input->post('category_id1') == 'true' or $this->input->post('mobile_category_id1') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '1');
			
			$check = true;
		}
		
		if($this->input->post('category_id2') == 'true' or $this->input->post('mobile_category_id2') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '2');
			
			$check = true;
		}
		
		if($this->input->post('category_id3') == 'true' or $this->input->post('mobile_category_id3') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '3');
			
			$check = true;
		}
		
		if($this->input->post('category_id4') == 'true' or $this->input->post('mobile_category_id4') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '4');
			
			$check = true;
		}
		
		if($this->input->post('price_1_500') == 'true' or $this->input->post('mobile_price_1_500') == 'true') {
			$this->db->or_where('(ci_product.product_price >= 1 and ci_product.product_price <= 500)');
			
			$check = true;
		}
		
		if($this->input->post('price_500_100') == 'true' or $this->input->post('mobile_price_500_1000') == 'true') {
			$this->db->or_where('(ci_product.product_price >= 500 and ci_product.product_price <= 1000)');
			
			$check = true;
		}
		
		if($this->input->post('price_1000') == 'true' or $this->input->post('price_1000') == 'true') {
			$this->db->or_where('ci_product.product_price >=', '1000');
			
			$check = true;
		}
		
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->limit($per_page, $this->input->post('offset'));
		
		if($this->input->post('order_by') == 'alphabet_a_z') {
			$this->db->order_by('ci_product.product_name', 'asc');
		} elseif($this->input->post('order_by') == 'alphabet_z_a') {
			$this->db->order_by('ci_product.product_name', 'desc');
		} elseif($this->input->post('order_by') == 'price_a_z') {
			$this->db->order_by('ci_product.product_price', 'asc');
		} elseif($this->input->post('order_by') == 'price_z_a') {
			$this->db->order_by('ci_product.product_price', 'desc');
		} else {
			$this->db->order_by('ci_product.product_sort', 'asc');
		}
		
		if($check == false) {
			$this->db->where('ci_sub_category.category_id', $this->input->post('category_id'));
		}
		
		$query = $this->db->get('ci_product');
		
		$productCtrl = $query->result();
		
		if(!empty($productCtrl)) {
			foreach($productCtrl as $r) {
		
?>
                        <div class="col-6 col-lg-4">
                            <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                    </div>
                                    <div class="product_details_box">
                                        <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                            <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
                                            <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color:<?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
<?php
			}
		}
		
		echo '!@#$%^&*()';
		
		$check = false;
		if($this->input->post('category_id1') == 'true' or $this->input->post('mobile_category_id1') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '1');
			
			$check = true;
		}
		
		if($this->input->post('category_id2') == 'true' or $this->input->post('mobile_category_id2') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '2');
			
			$check = true;
		}
		
		if($this->input->post('category_id3') == 'true' or $this->input->post('mobile_category_id3') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '3');
			
			$check = true;
		}
		
		if($this->input->post('category_id4') == 'true' or $this->input->post('mobile_category_id4') == 'true') {
			$this->db->or_where('ci_sub_category.category_id', '4');
			
			$check = true;
		}
		
		if($this->input->post('price_1_500') == 'true' or $this->input->post('mobile_price_1_500') == 'true') {
			$this->db->or_where('(ci_product.product_price >= 1 and ci_product.product_price <= 500)');
			
			$check = true;
		}
		
		if($this->input->post('price_500_100') == 'true' or $this->input->post('mobile_price_500_1000') == 'true') {
			$this->db->or_where('(ci_product.product_price >= 500 and ci_product.product_price <= 1000)');
			
			$check = true;
		}
		
		if($this->input->post('price_1000') == 'true' or $this->input->post('price_1000') == 'true') {
			$this->db->or_where('ci_product.product_price >=', '1000');
			
			$check = true;
		}
		
		if($check == false) {
			$this->db->where('ci_sub_category.category_id', $this->input->post('category_id'));
		}
		
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		
		$query = $this->db->get('ci_product');
		
		$count = count($query->result());
			
?>
		<ul>
<?php
		if($this->input->post('offset') != '') {
			$page = ($this->input->post('offset') / $per_page) + 1;
		} else {
			$page = 1;	
		}
		
		$no = ceil($count / $per_page);
		if(!empty($no)) {
			for($c = 1; $c <= $no; $c++) {
				$offset = ($c * $per_page) - $per_page;
?>
            <li <?php if($c == $page) echo 'class="current"';?>><a href="javascript:filterProduct('<?php echo $offset;?>');"><?php echo $c;?></a></li>
<?php

			}
		}
?>
        </ul> 
<?php
	}
	
	public function ajaxFilterProductNewArrivals() {
		$per_page = 9;
		
		$check = false;
		$where = '';
		if($this->input->post('category_id1') == 'true' or $this->input->post('mobile_category_id1') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '1');
			$where .= 'ci_sub_category.category_id = 1 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id2') == 'true' or $this->input->post('mobile_category_id2') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '2');
			$where .= 'ci_sub_category.category_id = 2 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id3') == 'true' or $this->input->post('mobile_category_id3') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '3');
			$where .= 'ci_sub_category.category_id = 3 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id4') == 'true' or $this->input->post('mobile_category_id4') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '4');
			$where .= 'ci_sub_category.category_id = 4 or ';
			
			$check = true;
		}
		
		if($this->input->post('price_1_500') == 'true' or $this->input->post('mobile_price_1_500') == 'true') {
			//$this->db->or_where('(ci_product.product_price >= 1 and ci_product.product_price <= 500)');
			$where .= '(ci_product.product_price >= 1 and ci_product.product_price <= 500) or ';
			
			$check = true;
		}
		
		if($this->input->post('price_500_100') == 'true' or $this->input->post('mobile_price_500_1000') == 'true') {
			//$this->db->or_where('(ci_product.product_price >= 500 and ci_product.product_price <= 1000)');
			$where .= '(ci_product.product_price >= 500 and ci_product.product_price <= 1000) or ';
			
			$check = true;
		}
		
		if($this->input->post('price_1000') == 'true' or $this->input->post('price_1000') == 'true') {
			//$this->db->or_where('ci_product.product_price >=', '1000');
			$where .= '(ci_product.product_price >= 1000) or ';
			
			$check = true;
		}
		
		if($check == false) {
			$this->db->where('ci_sub_category.category_id', $this->input->post('category_id'));
		}
		
		if($where != '') {
			$where = substr($where, 0, -3);
			
			$this->db->where('('.$where.')');
		}
		
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->limit($per_page, $this->input->post('offset'));
		
		if($this->input->post('order_by') == 'alphabet_a_z') {
			$this->db->order_by('ci_product.product_name', 'asc');
		} elseif($this->input->post('order_by') == 'alphabet_z_a') {
			$this->db->order_by('ci_product.product_name', 'desc');
		} elseif($this->input->post('order_by') == 'price_a_z') {
			$this->db->order_by('ci_product.product_price', 'asc');
		} elseif($this->input->post('order_by') == 'price_z_a') {
			$this->db->order_by('ci_product.product_price', 'desc');
		} else {
			$this->db->order_by('ci_product.product_id', 'desc');
		}
		
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$query = $this->db->get('ci_product');
		
		$productCtrl = $query->result();
		
		if(!empty($productCtrl)) {
			foreach($productCtrl as $r) {
		
?>
                        <div class="col-6 col-lg-4">
                            <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                    </div>
                                    <div class="product_details_box">
                                        <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                            <h4><?php echo $r->product_name;?></h4>
                                            <h3>$<?php echo number_format($r->product_price, 2, '.', ',');?></h3>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
<?php
			}
		}
		
		echo '!@#$%^&*()';
		
		$where = '';
		
		if($this->input->post('category_id1') == 'true' or $this->input->post('mobile_category_id1') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '1');
			$where .= 'ci_sub_category.category_id = 1 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id2') == 'true' or $this->input->post('mobile_category_id2') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '2');
			$where .= 'ci_sub_category.category_id = 2 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id3') == 'true' or $this->input->post('mobile_category_id3') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '3');
			$where .= 'ci_sub_category.category_id = 3 or ';
			
			$check = true;
		}
		
		if($this->input->post('category_id4') == 'true' or $this->input->post('mobile_category_id4') == 'true') {
			//$this->db->or_where('ci_sub_category.category_id', '4');
			$where .= 'ci_sub_category.category_id = 4 or ';
			
			$check = true;
		}
		
		if($this->input->post('price_1_500') == 'true' or $this->input->post('mobile_price_1_500') == 'true') {
			//$this->db->or_where('(ci_product.product_price >= 1 and ci_product.product_price <= 500)');
			$where .= '(ci_product.product_price >= 1 and ci_product.product_price <= 500) or ';
			
			$check = true;
		}
		
		if($this->input->post('price_500_100') == 'true' or $this->input->post('mobile_price_500_1000') == 'true') {
			//$this->db->or_where('(ci_product.product_price >= 500 and ci_product.product_price <= 1000)');
			$where .= '(ci_product.product_price >= 500 and ci_product.product_price <= 1000) or ';
			
			$check = true;
		}
		
		if($this->input->post('price_1000') == 'true' or $this->input->post('price_1000') == 'true') {
			//$this->db->or_where('ci_product.product_price >=', '1000');
			$where .= '(ci_product.product_price >= 1000) or ';
			
			$check = true;
		}
		
		if($check == false) {
			$this->db->where('ci_sub_category.category_id', $this->input->post('category_id'));
		}
		
		if($where != '') {
			$where = substr($where, 0, -3);
			
			$this->db->where('('.$where.')');
		}
		
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$query = $this->db->get('ci_product');
		
		$count = count($query->result());
			
?>
		<ul>
<?php
		if($this->input->post('offset') != '') {
			$page = ($this->input->post('offset') / $per_page) + 1;
		} else {
			$page = 1;	
		}
		
		$no = ceil($count / $per_page);
		if(!empty($no)) {
			for($c = 1; $c <= $no; $c++) {
				$offset = ($c * $per_page) - $per_page;
?>
            <li <?php if($c == $page) echo 'class="current"';?>><a href="javascript:filterProduct('<?php echo $offset;?>');"><?php echo $c;?></a></li>
<?php

			}
		}
?>
        </ul> 
<?php
	}
	
	public function ajaxInfluencer() {
		$this->db->where('influencer_code', $this->input->post('influencer_code'));
		$this->db->where('influencer_start_date <=', date('Y-m-d H:i:s'));
		$this->db->where('influencer_end_date >=', date('Y-m-d H:i:s'));
		$query = $this->db->get('ci_influencer');
		
		$row = $query->row();
		
		if(!empty($row)) {
			$data = array(
				'influencer_code' => $row->influencer_code,
				'influencer_type' => $row->influencer_type,
				'influencer_price' => $row->influencer_price
			);
			
			$this->session->set_userdata($data);
			
			$this->ajaxCart();
		} else {
			$data = array(
				'influencer_code',
				'influencer_type',
				'influencer_price'
			);
			
			$this->session->unset_userdata($data);
			
			$this->ajaxCart();
		}
	}
	
	public function ajaxShipping() {
		$this->ajaxCart();
	}
	
	public function ajaxShippingExpressOrNormal() {
		/*if($this->input->post('type') == 'express') {
			$data = array(
				'shipping_default' => $this->session->userdata("shipping_express")
			);
			
			$this->session->set_userdata($data);
		} elseif($this->input->post('type') == 'normal') {
			$data = array(
				'shipping_default' => $this->session->userdata("shipping_normal")
			);
			
			$this->session->set_userdata($data);
		}*/
		
		$this->ajaxCart();
	}
	
	public function ajaxCheckout() {	
		$order_no = $this->model_frontend->genOrderNo();
		
		$sub_total = 0;
		foreach($this->cart->contents() as $items) {
			$price = $items['qty'] * $items['price'];
			$sub_total += $price;
		}
		
		$data_order_detail = array(
			'order_no' => $order_no,
			'order_detail_sub_total' => $sub_total,
			'order_detail_shipping' => $this->session->userdata('order_detail_shipping'),
			'order_detail_total' => $sub_total + $this->session->userdata('order_detail_shipping') - $this->session->userdata('order_detail_discount'),
			'order_detail_payment_method' => $this->input->post('order_detail_payment_method'),
			'order_detail_shipping_method' => $this->input->post('order_detail_shipping_method'),
			'order_detail_shipping_first_name_last_name' => $this->input->post('order_detail_shipping_first_name_last_name'),
			'order_detail_shipping_phone_number' => $this->input->post('order_detail_shipping_phone_number'),
			'order_detail_shipping_address' => $this->input->post('order_detail_shipping_address'),
			'order_detail_shipping_district' => $this->input->post('order_detail_shipping_district'),
			'order_detail_shipping_province' => $this->input->post('order_detail_shipping_province'),
			'order_detail_shipping_postal_code' => $this->input->post('order_detail_shipping_postal_code'),
			'order_detail_shipping_country' => $this->input->post('order_detail_shipping_country'),
			'order_detail_shipping_email' => $this->input->post('order_detail_shipping_email'),
			'order_detail_note' => $this->input->post('order_detail_note'),
			'order_detail_datetime_create' => date('Y-m-d H:i:s'),
			'order_detail_ip_create' => $_SERVER['REMOTE_ADDR'],
			'order_detail_datetime_update' => date('Y-m-d H:i:s'),
			'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
		);	
		
		if($this->session->userdata('order_detail_discount') != '') {
			$data_order_detail['order_detail_discount'] = $this->session->userdata('order_detail_discount');
		}
		
		if($this->session->userdata('influencer_code') != '') {
			$data_order_detail['influencer_code'] = $this->session->userdata('influencer_code');
		}
		
		$data_order_detail['order_detail_status'] = 'Waiting';
		
		if($this->session->userdata('member_id') != '') {
			$data_order_detail['member_id'] = $this->session->userdata('member_id');
		}
		
		if($this->input->post('same') == 'false') {
			$data_order_detail['order_detail_billing_first_name_last_name'] = $this->input->post('order_detail_shipping_first_name_last_name');
			$data_order_detail['order_detail_billing_phone_number'] = $this->input->post('order_detail_shipping_phone_number');
			$data_order_detail['order_detail_billing_address'] = $this->input->post('order_detail_shipping_address');
			$data_order_detail['order_detail_billing_district'] = $this->input->post('order_detail_shipping_district');
			$data_order_detail['order_detail_billing_province'] = $this->input->post('order_detail_shipping_province');
			$data_order_detail['order_detail_billing_postal_code'] = $this->input->post('order_detail_shipping_postal_code');
			$data_order_detail['order_detail_billing_country'] = $this->input->post('order_detail_shipping_country');
			$data_order_detail['order_detail_billing_email'] = $this->input->post('order_detail_shipping_email');
		} else {
			$data_order_detail['order_detail_billing_first_name_last_name'] = $this->input->post('order_detail_billing_first_name_last_name');
			$data_order_detail['order_detail_billing_phone_number'] = $this->input->post('order_detail_billing_phone_number');
			$data_order_detail['order_detail_billing_address'] = $this->input->post('order_detail_billing_address');
			$data_order_detail['order_detail_billing_district'] = $this->input->post('order_detail_billing_district');
			$data_order_detail['order_detail_billing_province'] = $this->input->post('order_detail_billing_province');
			$data_order_detail['order_detail_billing_postal_code'] = $this->input->post('order_detail_billing_postal_code');
			$data_order_detail['order_detail_billing_country'] = $this->input->post('order_detail_billing_country');
			$data_order_detail['order_detail_billing_email'] = $this->input->post('order_detail_billing_email');
		}
		
		$this->db->insert('ci_order_detail', $data_order_detail);
		
		$this->db->order_by('order_detail_id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('ci_order_detail');
		
		$row = $query->row();
		
		foreach($this->cart->contents() as $items) {
			$data_order = array(
				'order_detail_id' => $row->order_detail_id,
				'product_id' => $items['id'],
				'order_qty' => $items['qty'],
				'order_price' => $items['price'],
				'order_name' => $items['name'],
				'order_image' => $items['options']['image'],
				'order_category' => $items['options']['category'],
				'order_datetime_create' => date('Y-m-d H:i:s'),
				'order_ip_create' => $_SERVER['REMOTE_ADDR']
			);	
			
			if($items['options']['color'] != '') {
				$data_order['order_color'] = $items['options']['color'];	
			}
			
			$this->db->insert('ci_order', $data_order);
		}
		
		// clear Session
		$this->cart->destroy();
		
		$data_unsess = array(
			'order_detail_discount',
			'influencer_code'
		);
		
		$this->session->unset_userdata($data_unsess);
		// end clear session
		
		// ส่งเมล์
		$order_detail = $this->model_frontend->getOrderDetailRecord($row->order_detail_id);
		
		if(!empty($order_detail)) {
			$message = '
				<table width="100%">
					<tr>
						<th align="left" width="200">Order No</th>
						<td>'.$order_detail->order_no.'</td>
					</tr>
					<tr>
						<th align="left">Payment Method</th>
						<td>'.$order_detail->order_detail_payment_method.'</td>
					</tr>
					<tr>
						<th align="left">Shipping Method</th>
						<td>'.$order_detail->order_detail_shipping_method.'</td>
					</tr>
					<tr>
						<th align="left">First Name - Last Name(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_first_name_last_name.'</td>
					</tr>
					<tr>
						<th align="left">Phone Number(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_phone_number.'</td>
					</tr>
					<tr>
						<th align="left">Address(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_address.'</td>
					</tr>
					<tr>
						<th align="left">Province(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_province.'</td>
					</tr>
					<tr>
						<th align="left">District(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_district.'</td>
					</tr>
					<tr>
						<th align="left">Postal Code(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_postal_code.'</td>
					</tr>
					<tr>
						<th align="left">Country(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_country.'</td>
					</tr>
					<tr>
						<th align="left">Email(Shipping)</th>
						<td>'.$order_detail->order_detail_shipping_email.'</td>
					</tr>
					<tr>
						<th align="left">First Name - Last Name(Billing)</th>
						<td>'.$order_detail->order_detail_billing_first_name_last_name.'</td>
					</tr>
					<tr>
						<th align="left">Phone Number(Billing)</th>
						<td>'.$order_detail->order_detail_billing_phone_number.'</td>
					</tr>
					<tr>
						<th align="left">Address(Billing)</th>
						<td>'.$order_detail->order_detail_billing_address.'</td>
					</tr>
					<tr>
						<th align="left">Province(Billing)</th>
						<td>'.$order_detail->order_detail_billing_province.'</td>
					</tr>
					<tr>
						<th align="left">District(Billing)</th>
						<td>'.$order_detail->order_detail_billing_district.'</td>
					</tr>
					<tr>
						<th align="left">Postal Code(Billing)</th>
						<td>'.$order_detail->order_detail_billing_postal_code.'</td>
					</tr>
					<tr>
						<th align="left">Country(Billing)</th>
						<td>'.$order_detail->order_detail_billing_country.'</td>
					</tr>
					<tr>
						<th align="left">Email(Billing)</th>
						<td>'.$order_detail->order_detail_billing_email.'</td>
					</tr>
					<tr>
						<th align="left">Note</th>
						<td>'.$order_detail->order_detail_note.'</td>
					</tr>
					<tr>
						<th align="left">Datetime Create</th>
						<td>'.$order_detail->order_detail_datetime_create.'</td>
					</tr>
					<tr>
						<th align="left">IP Create</th>
						<td>'.$order_detail->order_detail_ip_create.'</td>
					</tr>
				</table>
				<table width="100%">
					<tr>
						<th>Image</th>
						<th>Category</th>
						<th>Name</th>
						<th>Color</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Sub Total</th>
					</tr>';
			$order = $this->model_frontend->getOrderResult($order_detail->order_detail_id);
			if(!empty($order)) {
				foreach($order as $r) {
					$message .= '
					<tr>
						<td><img src="'.base_url('uploads/product/'.$r->order_image).'" width="150"></td>
						<td>'.$r->order_category.'</td>
						<td>'.$r->order_name.'</td>
						<td>'.$r->order_color.'</td>
						<td>'.$r->order_qty.'</td>
						<td>'.number_format($r->order_price, 2, '.', ',').'</td>
						<td>'.number_format($r->order_qty * $r->order_price, 2, '.', ',').'</td>
					</tr>';
				}
			}
			
			$message .= '
					<tr>
						<th colspan="6">Sub Total</th>
						<td>'.number_format($order_detail->order_detail_sub_total, 2, '.', ',').'</td>
					</tr>
					<tr>
						<th colspan="6">Shipping</th>
						<td>'.number_format($order_detail->order_detail_shipping, 2, '.', ',').'</td>
					</tr>
					<tr>
						<th colspan="6">Discount</th>
						<td>'.number_format($order_detail->order_detail_discount, 2, '.', ',').'</td>
					</tr>
					<tr>
						<th colspan="6">Total</th>
						<td>'.number_format($order_detail->order_detail_total, 2, '.', ',').'</td>
					</tr>
					';
			$message .= '
				</table>
			';
			
			
			//$this->load->helper('phpmailer');
			
			//$sender = array($this->input->post('order_detail_shipping_email'));
			//$sender[] = 'info@lasectabeauty.com';
			$to = $this->input->post('order_detail_shipping_email').', info@lasectabeauty.com';

			$subject = 'La Secta Beauty : Order No '.$order_detail->order_no;
			//$from_email = 'contact.lasectabeauty@gmail.com';
			//$from_name = 'NoReply';
			
			//send_email($sender, $subject, $message, $from_email, $from_name);	

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <contact.lasectabeauty@gmail.com>' . "\r\n";
			//$headers .= 'Cc: myboss@example.com' . "\r\n";

			// Mail it
			mail($to, $subject, $message, $headers);
		}
		// end ส่งเมล์
		
		// หา order_detail_id ล่าสุด
		echo $order_detail->order_detail_id;
	}
	
	public function payment_success($type, $order_detail_id, $paypal_type) {
		if($type == 'credit_card') {
			// ค่า Response
			if(!empty($_POST['resultCode']) and $_POST['resultCode'] == '00') {
				$data_payment = array(
					'order_detail_status' => 'Shipping',
					'order_detail_datetime_update' => date('Y-m-d H:i:s'),
					'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
				);
				
				$where_payment = array(
					'order_detail_id' => $order_detail_id
				);
				
				$this->db->update('ci_order_detail', $data_payment, $where_payment);
				
				$order_detail = $this->model_frontend->getOrderDetailRecord($order_detail_id);
		
				if(!empty($order_detail)) {
					$message = '
						<table width="100%">
							<tr>
								<th align="left" width="200">Order No</th>
								<td>'.$order_detail->order_no.'</td>
							</tr>
							<tr>
								<th align="left">Payment Method</th>
								<td>'.$order_detail->order_detail_payment_method.'</td>
							</tr>
							<tr>
								<th align="left">Shipping Method</th>
								<td>'.$order_detail->order_detail_shipping_method.'</td>
							</tr>
							<tr>
								<th align="left">First Name - Last Name(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_first_name_last_name.'</td>
							</tr>
							<tr>
								<th align="left">Phone Number(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_phone_number.'</td>
							</tr>
							<tr>
								<th align="left">Address(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_address.'</td>
							</tr>
							<tr>
								<th align="left">Province(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_province.'</td>
							</tr>
							<tr>
								<th align="left">District(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_district.'</td>
							</tr>
							<tr>
								<th align="left">Postal Code(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_postal_code.'</td>
							</tr>
							<tr>
								<th align="left">Country(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_country.'</td>
							</tr>
							<tr>
								<th align="left">Email(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_email.'</td>
							</tr>
							<tr>
								<th align="left">First Name - Last Name(Billing)</th>
								<td>'.$order_detail->order_detail_billing_first_name_last_name.'</td>
							</tr>
							<tr>
								<th align="left">Phone Number(Billing)</th>
								<td>'.$order_detail->order_detail_billing_phone_number.'</td>
							</tr>
							<tr>
								<th align="left">Address(Billing)</th>
								<td>'.$order_detail->order_detail_billing_address.'</td>
							</tr>
							<tr>
								<th align="left">Province(Billing)</th>
								<td>'.$order_detail->order_detail_billing_province.'</td>
							</tr>
							<tr>
								<th align="left">District(Billing)</th>
								<td>'.$order_detail->order_detail_billing_district.'</td>
							</tr>
							<tr>
								<th align="left">Postal Code(Billing)</th>
								<td>'.$order_detail->order_detail_billing_postal_code.'</td>
							</tr>
							<tr>
								<th align="left">Country(Billing)</th>
								<td>'.$order_detail->order_detail_billing_country.'</td>
							</tr>
							<tr>
								<th align="left">Email(Billing)</th>
								<td>'.$order_detail->order_detail_billing_email.'</td>
							</tr>
							<tr>
								<th align="left">Note</th>
								<td>'.$order_detail->order_detail_note.'</td>
							</tr>
							<tr>
								<th align="left">Datetime Create</th>
								<td>'.$order_detail->order_detail_datetime_create.'</td>
							</tr>
							<tr>
								<th align="left">IP Create</th>
								<td>'.$order_detail->order_detail_ip_create.'</td>
							</tr>
						</table>
						<table width="100%">
							<tr>
								<th>Image</th>
								<th>Category</th>
								<th>Name</th>
								<th>Color</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Sub Total</th>
							</tr>';
					$order = $this->model_frontend->getOrderResult($order_detail->order_detail_id);
					if(!empty($order)) {
						foreach($order as $r) {
							$message .= '
							<tr>
								<td><img src="'.base_url('uploads/product/'.$r->order_image).'" width="150"></td>
								<td>'.$r->order_category.'</td>
								<td>'.$r->order_name.'</td>
								<td>'.$r->order_color.'</td>
								<td>'.$r->order_qty.'</td>
								<td>'.number_format($r->order_price, 2, '.', ',').'</td>
								<td>'.number_format($r->order_qty * $r->order_price, 2, '.', ',').'</td>
							</tr>';
						}
					}
					
					$message .= '
							<tr>
								<th colspan="6">Sub Total</th>
								<td>'.number_format($order_detail->order_detail_sub_total, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Shipping</th>
								<td>'.number_format($order_detail->order_detail_shipping, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Discount</th>
								<td>'.number_format($order_detail->order_detail_discount, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Total</th>
								<td>'.number_format($order_detail->order_detail_total, 2, '.', ',').'</td>
							</tr>
							';
					$message .= '
						</table>
					';
					
					
					//$this->load->helper('phpmailer');
					
					$to = $this->input->post('order_detail_shipping_email').', info@lasectabeauty.com';
					//$sender[] = 'info@lasectabeauty.com';
					$subject = 'La Secta Beauty : Order No '.$order_detail->order_no;
					//$from_email = 'contact.lasectabeauty@gmail.com';
					//$from_name = 'NoReply';

					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					$headers .= 'From: <contact.lasectabeauty@gmail.com>' . "\r\n";
					//$headers .= 'Cc: myboss@example.com' . "\r\n";

					// Mail it
					mail($to, $subject, $message, $headers);
					
					//send_email($sender, $subject, $message, $from_email, $from_name);	
				}
			} else {
				$data_payment = array(
					'order_detail_status' => 'Cancel',
					'order_detail_datetime_update' => date('Y-m-d H:i:s'),
					'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
				);
				
				$where_payment = array(
					'order_detail_id' => $order_detail_id
				);
				
				$this->db->update('ci_order_detail', $data_payment, $where_payment);
				
			}
			//
		} elseif($type == 'paypal') {
			// ค่า Response
			/*$data = [
				'item_name' => $_POST['item_name'],
				'item_number' => $_POST['item_number'],
				'payment_status' => $_POST['payment_status'],
				'payment_amount' => $_POST['mc_gross'],
				'payment_currency' => $_POST['mc_currency'],
				'txn_id' => $_POST['txn_id'],
				'receiver_email' => $_POST['receiver_email'],
				'payer_email' => $_POST['payer_email'],
				'custom' => $_POST['custom'],
			];
			*/
				if($paypal_type == 'return') {
					$data = json_encode($_POST);

					$data_update1 = array(
						'order_detail_return_paypal' => $data
					);

					$where_update1 = array(
						'order_detail_id' => $order_detail_id 
					);

					$this->db->update('ci_order_detail', $data_update1, $where_update1);
				} elseif($paypal_type == 'notify') {
					$data = json_encode($_POST);

					$data_update1 = array(
						'order_detail_notify_paypal' => $data
					);

					$where_update1 = array(
						'order_detail_id' => $order_detail_id 
					);

					$this->db->update('ci_order_detail', $data_update1, $where_update1);
				}

				$data_payment = array(
					'order_detail_status' => 'Shipping',
					'order_detail_datetime_update' => date('Y-m-d H:i:s'),
					'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
				);
				
				$where_payment = array(
					'order_detail_id' => $order_detail_id
				);
				
				$this->db->update('ci_order_detail', $data_payment, $where_payment);
				
				$order_detail = $this->model_frontend->getOrderDetailRecord($order_detail_id);
		
				if(!empty($order_detail)) {
					$message = '
						<table width="100%">
							<tr>
								<th align="left" width="200">Order No</th>
								<td>'.$order_detail->order_no.'</td>
							</tr>
							<tr>
								<th align="left">Payment Method</th>
								<td>'.$order_detail->order_detail_payment_method.'</td>
							</tr>
							<tr>
								<th align="left">Shipping Method</th>
								<td>'.$order_detail->order_detail_shipping_method.'</td>
							</tr>
							<tr>
								<th align="left">First Name - Last Name(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_first_name_last_name.'</td>
							</tr>
							<tr>
								<th align="left">Phone Number(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_phone_number.'</td>
							</tr>
							<tr>
								<th align="left">Address(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_address.'</td>
							</tr>
							<tr>
								<th align="left">Province(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_province.'</td>
							</tr>
							<tr>
								<th align="left">District(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_district.'</td>
							</tr>
							<tr>
								<th align="left">Postal Code(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_postal_code.'</td>
							</tr>
							<tr>
								<th align="left">Country(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_country.'</td>
							</tr>
							<tr>
								<th align="left">Email(Shipping)</th>
								<td>'.$order_detail->order_detail_shipping_email.'</td>
							</tr>
							<tr>
								<th align="left">First Name - Last Name(Billing)</th>
								<td>'.$order_detail->order_detail_billing_first_name_last_name.'</td>
							</tr>
							<tr>
								<th align="left">Phone Number(Billing)</th>
								<td>'.$order_detail->order_detail_billing_phone_number.'</td>
							</tr>
							<tr>
								<th align="left">Address(Billing)</th>
								<td>'.$order_detail->order_detail_billing_address.'</td>
							</tr>
							<tr>
								<th align="left">Province(Billing)</th>
								<td>'.$order_detail->order_detail_billing_province.'</td>
							</tr>
							<tr>
								<th align="left">District(Billing)</th>
								<td>'.$order_detail->order_detail_billing_district.'</td>
							</tr>
							<tr>
								<th align="left">Postal Code(Billing)</th>
								<td>'.$order_detail->order_detail_billing_postal_code.'</td>
							</tr>
							<tr>
								<th align="left">Country(Billing)</th>
								<td>'.$order_detail->order_detail_billing_country.'</td>
							</tr>
							<tr>
								<th align="left">Email(Billing)</th>
								<td>'.$order_detail->order_detail_billing_email.'</td>
							</tr>
							<tr>
								<th align="left">Note</th>
								<td>'.$order_detail->order_detail_note.'</td>
							</tr>
							<tr>
								<th align="left">Datetime Create</th>
								<td>'.$order_detail->order_detail_datetime_create.'</td>
							</tr>
							<tr>
								<th align="left">IP Create</th>
								<td>'.$order_detail->order_detail_ip_create.'</td>
							</tr>
						</table>
						<table width="100%">
							<tr>
								<th>Image</th>
								<th>Category</th>
								<th>Name</th>
								<th>Color</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Sub Total</th>
							</tr>';
					$order = $this->model_frontend->getOrderResult($order_detail->order_detail_id);
					if(!empty($order)) {
						foreach($order as $r) {
							$message .= '
							<tr>
								<td><img src="'.base_url('uploads/product/'.$r->order_image).'" width="150"></td>
								<td>'.$r->order_category.'</td>
								<td>'.$r->order_name.'</td>
								<td>'.$r->order_color.'</td>
								<td>'.$r->order_qty.'</td>
								<td>'.number_format($r->order_price, 2, '.', ',').'</td>
								<td>'.number_format($r->order_qty * $r->order_price, 2, '.', ',').'</td>
							</tr>';
						}
					}
					
					$message .= '
							<tr>
								<th colspan="6">Sub Total</th>
								<td>'.number_format($order_detail->order_detail_sub_total, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Shipping</th>
								<td>'.number_format($order_detail->order_detail_shipping, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Discount</th>
								<td>'.number_format($order_detail->order_detail_discount, 2, '.', ',').'</td>
							</tr>
							<tr>
								<th colspan="6">Total</th>
								<td>'.number_format($order_detail->order_detail_total, 2, '.', ',').'</td>
							</tr>
							';
							
					$message .= '
						</table>
					';
					
					
					$this->load->helper('phpmailer');
					
					//echo $this->input->post('order_detail_shipping_email');

					$to = $this->input->post('order_detail_shipping_email').', info@lasectabeauty.com';
					//$sender[] = 'info@lasectabeauty.com';
					$subject = 'La Secta Beauty : Order No '.$order_detail->order_no;
					//$from_email = 'contact.lasectabeauty@gmail.com';
					//$from_name = 'NoReply';

					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					$headers .= 'From: <contact.lasectabeauty@gmail.com>' . "\r\n";
					//$headers .= 'Cc: myboss@example.com' . "\r\n";

					// Mail it
					mail($to, $subject, $message, $headers);
					
					//send_email($sender, $subject, $message, $from_email, $from_name);	
				}
			//
		}
		
		redirect('frontend/path/cart_summary/'.$order_detail_id);
	}

	public function ajaxImageColor() {
		$this->db->where('ci_stock.product_id', $this->input->post('product_id'));
		$this->db->where('ci_stock.color_id', $this->input->post('color_id'));
		$this->db->join('ci_stock', 'ci_product_gallery.stock_id = ci_stock.stock_id', 'inner');
		$query = $this->db->get('ci_product_gallery');

		$rows = $query->result();

		if(!empty($rows)) {
			foreach($rows as $r) {
?>
									<li>
                                        <a href="<?php echo base_url('uploads/product/'.$r->product_gallery_image);?>" data-fancybox="images">
                                            <img src="<?php echo base_url('uploads/product/'.$r->product_gallery_image);?>" alt="" />

                                        </a>
                                    </li>
<?php
			}
		}
	}

	public function ajaxColorName() {
		$this->db->where('ci_stock.product_id', $this->input->post('product_id'));
		$this->db->order_by('ci_stock.stock_sort', 'asc');
		$this->db->limit(1, $this->input->post('offset'));
		$this->db->join('ci_color', 'ci_stock.color_id = ci_color.color_id', 'inner');
		$query = $this->db->get('ci_stock');

		echo $query->row()->color_name;
	}

	public function payment_confirm() {
		if($this->input->post('submit') != '') {
			$data_payment = array(
				'order_no' => $this->input->post('order_no'),
				'payment_confirm_amount' => $this->input->post('payment_confirm_amount'),
				'payment_confirm_datetime' => $this->input->post('payment_confirm_date').' '.$this->input->post('payment_confirm_hour').':'.$this->input->post('payment_confirm_minute').':00',
				'payment_confirm_datetime_create' => date('Y-m-d H:i:s'),
				'payment_confirm_ip_create' => $_SERVER['REMOTE_ADDR']
			);

			if(!empty($_FILES['payment_confirm_slip'])) {
				$config['upload_path']          = FCPATH.'uploads/slip/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('payment_confirm_slip')) {
                    $data_image = $this->upload->data();
                    
                    /*$config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/ford/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/ford/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 1920;
					$config_resize['height'] = 520;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();*/
					
					$data_payment['payment_confirm_slip'] = $data_image['file_name'];

					$query = $this->db->insert('ci_payment_confirm', $data_payment);

					if(!empty($query)) {
						echo '<script>alert("Save Success");</script>';
					}
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}
		}

		$data['test'] = 'Test';

		$this->load->view('frontend/frontend/payment_confirm', $data);
	}

	public function ajaxLoginFacebook() {
		$this->db->where('member_email', $this->input->post('email'));
		$query = $this->db->get('ci_member');

		$row = $query->row();

		if(!empty($row)) {
			$data = array(
				'member_id' => $row->member_id
			);

			$this->session->set_userdata($data);
		} else {
			$data = array(
				'member_email' => $this->input->post('email'),
				'member_first_name' => $this->input->post('name'),
				'member_datetime_create' => date('Y-m-d H:i:s'),
				'member_ip_create' => $_SERVER['REMOTE_ADDR'],
				'member_datetime_update' => date('Y-m-d H:i:s'),
				'member_ip_update' => $_SERVER['REMOTE_ADDR']
			);

			$this->db->insert('ci_member', $data);

			$this->db->where('member_email', $this->input->post('email'));
			$query = $this->db->get('ci_member');

			$row = $query->row();

			if(!empty($row)) {
				$data = array(
					'member_id' => $row->member_id
				);

				$this->session->set_userdata($data);
			}
		}
	}

	public function ajaxPreOrder() {
		//echo $this->input->post('product_id').' '.$this->input->post('color_name');
		$this->db->where('ci_stock.product_id', $this->input->post('product_id'));
		$this->db->where('ci_color.color_name', $this->input->post('color_name'));
		$this->db->join('ci_stock', 'ci_color.color_id = ci_stock.color_id', 'inner');
		$query = $this->db->get('ci_color');

		$row = $query->row();

		if(!empty($row)) {
			if(!empty($row) and ($row->stock_date_pre_order != '' or $row->stock_date_pre_order != null or $row->stock_date_pre_order != '0000-00-00')) { 
				$date_diff = ceil((strtotime($row->stock_date_pre_order) - strtotime(date('Y-m-d'))) /  (60 * 60 * 24));
			} else {
				$date_diff = 0;	
			}
		} else {
			$date_diff = 0;
		}

		if(!empty($row)) {
			if($row->stock_amount == 0 and $date_diff == 0) {
				$date_diff = -99999;
			}
		}

		echo $date_diff;
	}
}
?>
