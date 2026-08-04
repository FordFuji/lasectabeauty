<?php
if( ! function_exists('form_editor')){
	function textarea_ckeditor($id) {
		$ckeditor = '
			<script src="'.base_url('asset/ckeditor/ckeditor.js').'"></script>
			<script type="text/javascript">
				CKEDITOR.replace("'.$id.'",{
					filebrowserBrowseUrl : "'.base_url("asset/ckfinder/ckfinder.html").'",
					filebrowserImageBrowseUrl : "'.base_url("asset/ckfinder/ckfinder.html?Type=Images").'",
					filebrowserFlashBrowseUrl : "'.base_url("asset/ckfinder/ckfinder.html?Type=Flash").'",
					filebrowserUploadUrl : "'.base_url("asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files").'",
					filebrowserImageUploadUrl : "'.base_url("asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images").'",
					filebrowserFlashUploadUrl : "'.base_url("asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash").'"
				} );
			</script>';
		
		return $ckeditor;
	}
}

function pre($print_r) {
	echo '<pre>';
	print_r($print_r);
	echo '</pre>';
}

function date2TextEn($date) {
	if(!empty($date)) {
		$exp = explode('-', $date);
		
		$year = $exp[0];
		$month = $exp[1];
		$day = $exp[2];
		
		$year_ = $year;
		if($month == '01') {
			$month_ = 'Jan';
		} elseif($month == '02') {
			$month_ = 'Feb';
		} elseif($month == '03') {
			$month_ = 'Mar';
		} elseif($month == '04') {
			$month_ = 'Apr';
		} elseif($month == '05') {
			$month_ = 'May';
		} elseif($month == '06') {
			$month_ = 'Jun';
		} elseif($month == '07') {
			$month_ = 'Jul';
		} elseif($month == '08') {
			$month_ = 'Aug';
		} elseif($month == '09') {
			$month_ = 'Sep';
		} elseif($month == '10') {
			$month_ = 'Oct';
		} elseif($month == '11') {
			$month_ = 'Nov';
		} elseif($month == '12') {
			$month_ = 'Dec';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $month_.' '.$day_.', '.$year_;
	}
}

function date2TextEnFull($date) {
	if(!empty($date)) {
		$exp = explode('-', $date);
		
		$year = $exp[0];
		$month = $exp[1];
		$day = $exp[2];
		
		$year_ = $year;
		if($month == '01') {
			$month_ = 'January';
		} elseif($month == '02') {
			$month_ = 'Febuary';
		} elseif($month == '03') {
			$month_ = 'March';
		} elseif($month == '04') {
			$month_ = 'April';
		} elseif($month == '05') {
			$month_ = 'May';
		} elseif($month == '06') {
			$month_ = 'June';
		} elseif($month == '07') {
			$month_ = 'July';
		} elseif($month == '08') {
			$month_ = 'August';
		} elseif($month == '09') {
			$month_ = 'September';
		} elseif($month == '10') {
			$month_ = 'October';
		} elseif($month == '11') {
			$month_ = 'November';
		} elseif($month == '12') {
			$month_ = 'December';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $day_.' '.$month_.' '.$year_;
	}
}

function date2TextTh($date) {
	if(!empty($date)) {
		$exp = explode('-', $date);
		
		$year = $exp[0] + 543;
		$month = $exp[1];
		$day = $exp[2];
		
		$year_ = $year;
		if($month == '01') {
			$month_ = 'มกราคม';
		} elseif($month == '02') {
			$month_ = 'กุมภาพันธ์';
		} elseif($month == '03') {
			$month_ = 'มีนาคม';
		} elseif($month == '04') {
			$month_ = 'เมษายน';
		} elseif($month == '05') {
			$month_ = 'พฤษภาคม';
		} elseif($month == '06') {
			$month_ = 'มิถุนายน';
		} elseif($month == '07') {
			$month_ = 'กรกฎาคม';
		} elseif($month == '08') {
			$month_ = 'สิงหาคม';
		} elseif($month == '09') {
			$month_ = 'กันยายน';
		} elseif($month == '10') {
			$month_ = 'ตุลาคม';
		} elseif($month == '11') {
			$month_ = 'พฤศจิกายน';
		} elseif($month == '12') {
			$month_ = 'ธันวาคม';
		} else {
			$month_ = '';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $day_.' '.$month_.' '.$year_;
	}
}

function dateTime2TextTh($date) {
	if(!empty($date)) {
		$exp = explode(' ', $date);
		
		$date = explode('-', $exp[0]);
		
		$year = $date[0] + 543;
		$month = $date[1];
		$day = $date[2];
		
		$year_ = $year;
		if($month == '01') {
			$month_ = 'มกราคม';
		} elseif($month == '02') {
			$month_ = 'กุมภาพันธ์';
		} elseif($month == '03') {
			$month_ = 'มีนาคม';
		} elseif($month == '04') {
			$month_ = 'เมษายน';
		} elseif($month == '05') {
			$month_ = 'พฤษภาคม';
		} elseif($month == '06') {
			$month_ = 'มิถุนายน';
		} elseif($month == '07') {
			$month_ = 'กรกฎาคม';
		} elseif($month == '08') {
			$month_ = 'สิงหาคม';
		} elseif($month == '09') {
			$month_ = 'กันยายน';
		} elseif($month == '10') {
			$month_ = 'ตุลาคม';
		} elseif($month == '11') {
			$month_ = 'พฤศจิกายน';
		} elseif($month == '12') {
			$month_ = 'ธันวาคม';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $day_.' '.$month_.' '.$year_;
	}
}

function date2TextThRe($date) {
	if(!empty($date) && $date != '0000-00-00') {
		$date = explode('-', $date);
		
		$year = $date[0] + 543;
		$month = $date[1];
		$day = $date[2];
		
		$year_ = $year;
		if($month == '00') {
			$month_ = 'ไม่ได้ใส่ข้อมูล Update';
		} elseif($month == '01') {
			$month_ = 'ม.ค.';
		} elseif($month == '02') {
			$month_ = 'ก.พ.';
		} elseif($month == '03') {
			$month_ = 'มี.ค.';
		} elseif($month == '04') {
			$month_ = 'เม.ย.';
		} elseif($month == '05') {
			$month_ = 'พ.ค.';
		} elseif($month == '06') {
			$month_ = 'มิ.ย.';
		} elseif($month == '07') {
			$month_ = 'ก.ค.';
		} elseif($month == '08') {
			$month_ = 'ส.ค.';
		} elseif($month == '09') {
			$month_ = 'ก.ย.';
		} elseif($month == '10') {
			$month_ = 'ต.ค.';
		} elseif($month == '11') {
			$month_ = 'พ.ย.';
		} elseif($month == '12') {
			$month_ = 'ธ.ค.';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $day_.' '.$month_.' '.$year_;
	} else {
		return '-';
	}
}

function findDate($type) {
	if($type == 'day') {
		return date('Y-m-d');	
	}
	
	if($type == 'week') {
		$number_week = date('w', strtotime(date('Y-m-d')));
		if($number_week == 0) {
			$begin_date = date('Y-m-d');
			$end_date = date('Y-m-d', strtotime('+6 day'));
		} elseif($number_week == 1) {
			$begin_date = date('Y-m-d', strtotime('-1 day'));
			$end_date = date('Y-m-d', strtotime('+5 day'));
		} elseif($number_week == 2) {
			$begin_date = date('Y-m-d', strtotime('-2 day'));
			$end_date = date('Y-m-d', strtotime('+4 day'));
		} elseif($number_week == 3) {
			$begin_date = date('Y-m-d', strtotime('-3 day'));
			$end_date = date('Y-m-d', strtotime('+3 day'));
		} elseif($number_week == 4) {
			$begin_date = date('Y-m-d', strtotime('-4 day'));
			$end_date = date('Y-m-d', strtotime('+2 day'));
		} elseif($number_week == 5) {
			$begin_date = date('Y-m-d', strtotime('-5 day'));
			$end_date = date('Y-m-d', strtotime('+1 day'));
		} elseif($number_week == 6) {
			$begin_date = date('Y-m-d', strtotime('-6 day'));
			$end_date = date('Y-m-d');
		}
		return $begin_date.' - '.$end_date;
	}
	
	if($type == 'month') {
		return date('Y-m-01').' - '.date('Y-m-t', strtotime(date('Y-m-d')));	
	}
}

function get2Lang($lang, $name_en, $name_ar) {
	if($lang == 'en') {
		return $name_en;
	} elseif($lang == 'ar') {
		return $name_ar;
	}
}

function date2NewsAurumsol($date) {
	if(!empty($date) && $date != '0000-00-00') {
		$date = explode('-', $date);
		
		$year = $date[0];
		$month = $date[1];
		$day = $date[2];
		
		return $day.'.'.$month.'.'.$year;
	} else {
		return '-';
	}
}

function getExtension($file) {
	if(!empty($file)) {
		$file_exp = explode('.', $file);
		
		$file_count = count($file_exp);
		
		--$file_count;
		
		return $file_exp[$file_count];
	}
}

function getFolderId($folder_id, $folder_id1 = '', $folder_id2 = '', $folder_id3 = '', $folder_id4 = '', $folder_id5 = '') {
	if(!empty($folder_id5)) {
		$folder = $folder_id5;
	} elseif(!empty($folder_id4)) {
		$folder = $folder_id4;
	} elseif(!empty($folder_id3)) {
		$folder = $folder_id3;
	} elseif(!empty($folder_id2)) {
		$folder = $folder_id2;
	} elseif(!empty($folder_id1)) {
		$folder = $folder_id1;
	} else {
		$folder = $folder_id;
	}
	
	return $folder;
}

function base_frontend($path_file) {
	return base_url('asset/frontend/'.$path_file);
}

function site_frontend($path_file) {
	$file = substr($path_file, 0, -4);
	
	$file = str_replace('-', '_', $file);
	
	return site_url('frontend/path/'.$file);
}

function getItemCode($brand_name_en, $i, $size_id, $color_id) {
	$brand = strtoupper($brand_name_en[0].$brand_name_en[1]);
	
	if(strlen($size_id) == 1) {
		$size = '0'.$size_id;
	} else {
		$size = $size_id;
	}
	
	if(strlen($color_id) == 1) {
		$color = '0'.$color_id;
	} else {
		$color = $color_id;
	}
	
	if(strlen($i) == 1) {
		$i_ = '0'.$i;
	} else {
		$i_ = $i;
	}
		
	return $brand.$i_.$size.$color;
}

function date2TextEn_($date) {
	if(!empty($date)) {
		$date = explode(' ', $date);
		$exp = explode('-', $date[0]);
		
		$year = $exp[0];
		$month = $exp[1];
		$day = $exp[2];
		
		$year_ = $year;
		if($month == '01') {
			$month_ = 'Jan';
		} elseif($month == '02') {
			$month_ = 'Feb';
		} elseif($month == '03') {
			$month_ = 'Mar';
		} elseif($month == '04') {
			$month_ = 'Apr';
		} elseif($month == '05') {
			$month_ = 'May';
		} elseif($month == '06') {
			$month_ = 'Jun';
		} elseif($month == '07') {
			$month_ = 'Jul';
		} elseif($month == '08') {
			$month_ = 'Aug';
		} elseif($month == '09') {
			$month_ = 'Sep';
		} elseif($month == '10') {
			$month_ = 'Oct';
		} elseif($month == '11') {
			$month_ = 'Nov';
		} elseif($month == '12') {
			$month_ = 'Dec';
		}
		
		if($day[0] == '0') {
			$day_ = $day[1];
		} else {
			$day_ = $day;
		}
		
		return $month_.' '.$day_.', '.$year_;
	}
}

function getBrandRoute($brand_name) {
	
	$brand_name = str_replace(' ', '-', $brand_name);
	$brand_name = str_replace('"', '-', $brand_name);
	$brand_name = str_replace('.', '-', $brand_name);
	$brand_name = str_replace(',', '-', $brand_name);
	$brand_name = str_replace('&', '-', $brand_name);
	
	return $brand_name;
}

function formatDate($datetime) {
	$exp = explode(' ', $datetime);
	
	$time = $exp[1];
	
	$exp1 = explode(':', $time);
	if($exp1[0] >= 12) {
		$exp2 = $exp1[0] - 12;
		
		return $exp[0].' '.$exp2.':'.$exp1[1].' PM'; 
	} else {
		return $exp[0].' '.$exp1[0].':'.$exp1[1].' AM';
	}
}

function ip_in_range($ip, $range) {
	if (strpos($range, '/') !== false) {
	  	// $range is in IP/NETMASK format
	  	list($range, $netmask) = explode('/', $range, 2);
	  	if (strpos($netmask, '.') !== false) {
			// $netmask is a 255.255.0.0 format
			$netmask = str_replace('*', '0', $netmask);
			$netmask_dec = ip2long($netmask);
			return ( (ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec) );
	  	} else {
			// $netmask is a CIDR size block
			// fix the range argument
			$x = explode('.', $range);
			while(count($x)<4) $x[] = '0';
				list($a,$b,$c,$d) = $x;
				$range = sprintf("%u.%u.%u.%u", empty($a)?'0':$a, empty($b)?'0':$b,empty($c)?'0':$c,empty($d)?'0':$d);
				$range_dec = ip2long($range);
				$ip_dec = ip2long($ip);
  
				# Strategy 1 - Create the netmask with 'netmask' 1s and then fill it to 32 with 0s
				#$netmask_dec = bindec(str_pad('', $netmask, '1') . str_pad('', 32-$netmask, '0'));
  
				# Strategy 2 - Use math to create it
				$wildcard_dec = pow(2, (32-$netmask)) - 1;
				$netmask_dec = ~ $wildcard_dec;
		
				return (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
	  		}
		} else {
	  	// range might be 255.255.*.* or 1.2.3.0-1.2.3.255
	  		if (strpos($range, '*') !==false) { // a.b.*.* format
			// Just convert to A-B format by setting * to 0 for A and 255 for B
			$lower = str_replace('*', '0', $range);
			$upper = str_replace('*', '255', $range);
			$range = "$lower-$upper";
	  		}
  
	  	if (strpos($range, '-')!==false) { // A-B format
			list($lower, $upper) = explode('-', $range, 2);
			$lower_dec = (float)sprintf("%u",ip2long($lower));
			$upper_dec = (float)sprintf("%u",ip2long($upper));
			$ip_dec = (float)sprintf("%u",ip2long($ip));
			return ( ($ip_dec>=$lower_dec) && ($ip_dec<=$upper_dec) );
	  	}
  
	  	echo 'Range argument is not in 1.2.3.4/24 or 1.2.3.4/255.255.255.0 format';
	  	return false;
	}
}
?>