<?php
class Model_frontend extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        
        $this->load->database();	
	}
	
	public function getCategoryRecord($category_id) {
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('ci_category');

		return $query->row();
	}

	public function getBanner1Result($side) {
		//$this->db->limit(2, 0);
		$this->db->where('banner_side', $side);
		$this->db->order_by('banner_id', 'desc');
		$query = $this->db->get('ci_banner');

		return $query->result();
	}

	public function getBanner2Result() {
		$this->db->limit(2, 2);
		$this->db->order_by('banner_id', 'desc');
		$query = $this->db->get('ci_banner');

		return $query->result();
	}

	public function getBanner2Single() {
		$this->db->where('banner_2_id', 1);
		$query = $this->db->get('ci_banner_2');

		return $query->row();
	}

	public function getInstagramSingle() {
		$this->db->where('instagram_id', 1);
		$query = $this->db->get('ci_instagram');

		return $query->row();
	}
	
	public function getHowToOrderRecord() {
		$this->db->where('how_to_order_id', 1);
		$query = $this->db->get('ci_how_to_order');
		
		return $query->row();
	}
	
	public function getShippingRecord() {
		$this->db->where('shipping_id', 1);
		$query = $this->db->get('ci_shipping');
		
		return $query->row();
	}
	
	public function getFaqsResult() {
		$this->db->order_by('faqs_id', 'asc');
		$query = $this->db->get('ci_faqs');
		
		return $query->result();
	}
	
	public function getNewsTipsResult() {
		$this->db->order_by('news_tips_data_id', 'asc');
		$query = $this->db->get('ci_news_tips_data');
		
		return $query->result();
	}
	
	public function getNewsTipsRecord($news_tips_data_id) {
		$this->db->where('news_tips_data_id', $news_tips_data_id);
		$query = $this->db->get('ci_news_tips_data');
		
		return $query->row();
	}
	
	/*public function getProductBestSeller() {
		$this->db->order_by('product_id_', 'desc');
		$this->db->select('*, (select sum(ci_order.order_qty) from ci_order where ci_product.product_id = ci_order.product_id) as product_id_');
		$this->db->limit(9);
		$query = $this->db->get('ci_product');
		
		return $query->result();
	}*/
	
	public function getMemberRecord() {
		$this->db->where('member_id', $this->session->userdata('member_id'));
		$query = $this->db->get('ci_member');
		
		return $query->row();
	}
	
	public function getMemberAddressShippingResult() {
		$this->db->order_by('member_shipping_address_id', 'asc');
		$this->db->where('member_id', $this->session->userdata('member_id'));
		
		$query = $this->db->get('ci_member_shipping_address');
		
		return $query->result();
	}
	
	public function getMemberAddressBillingResult() {
		$this->db->order_by('member_billing_address_id', 'asc');
		$this->db->where('member_id', $this->session->userdata('member_id'));
		
		$query = $this->db->get('ci_member_billing_address');
		
		return $query->result();
	}
	
	public function getProvinceResult() {
		$this->db->order_by('PROVINCE_ID', 'asc');
		$query = $this->db->get('provinces');
		
		return $query->result();
	}
	
	public function getAddressShipping($member_shipping_address_id) {
		$this->db->where('member_shipping_address_id', $member_shipping_address_id);
		$query = $this->db->get('ci_member_shipping_address');
		
		return $query->row();
	}
	
	public function getAddressBilling($member_billing_address_id) {
		$this->db->where('member_billing_address_id', $member_billing_address_id);
		$query = $this->db->get('ci_member_billing_address');
		
		return $query->row();
	}
	
	public function getAmphur($province_id) {
		$this->db->order_by('AMPHUR_ID', 'asc');
		$this->db->where('PROVINCE_ID', $province_id);
		$query = $this->db->get('amphures');
		
		return $query->result();
	}
	
	public function getDistrict($amphur_id) {
		$this->db->order_by('DISTRICT_ID', 'asc');
		$this->db->where('AMPHUR_ID', $amphur_id);
		$query = $this->db->get('districts');
		
		return $query->result();
	}
	
	public function getWishlistResult() {
		$this->db->order_by('ci_wishlist.wishlist_id', 'asc');
		$this->db->where('ci_wishlist.member_id', $this->session->userdata('member_id'));
		$this->db->join('ci_product', 'ci_wishlist.product_id = ci_product.product_id', 'inner');
		$query = $this->db->get('ci_wishlist');
		
		return $query->result();
	}
	
	public function getProductRecord($product_id) {
		$this->db->where('ci_product.product_id', $product_id);
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->join('ci_category', 'ci_sub_category.category_id = ci_category.category_id', 'inner');
		$query = $this->db->get('ci_product');
		
		return $query->row();
	}
	
	public function getColorResult($product_id) {
		$this->db->where('ci_stock.product_id', $product_id);
		$this->db->order_by('ci_stock.stock_sort', 'asc');
		$this->db->join('ci_stock', 'ci_color.color_id = ci_stock.color_id', 'inner');
		$query = $this->db->get('ci_color');
		
		return $query->result();
	}
	
	public function getGalleryResult($product_id, $color_id) {
		$this->db->where('ci_stock.product_id', $product_id);
		$this->db->where('ci_stock.color_id', $color_id);
		$this->db->order_by('ci_product_gallery.product_gallery_id', 'asc');
		$this->db->join('ci_stock', 'ci_product_gallery.stock_id = ci_stock.stock_id', 'inner');
		$query = $this->db->get('ci_product_gallery');
		
		return $query->result();
	}
	
	public function getYouMayAlsoLike($category_id, $product_id) {
		$this->db->where('ci_category.category_id', $category_id);
		$this->db->where('ci_product.product_id !=', $product_id);
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->join('ci_category', 'ci_sub_category.category_id = ci_category.category_id', 'inner');
		$query = $this->db->get('ci_product');
		
		return $query->result();
	}
	
	public function getCategoryResult() {
		$this->db->order_by('category_id', 'asc');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	
	public function getSubCategoryResult($category_id) {
		$this->db->order_by('sub_category_id', 'asc');
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('ci_sub_category');
		
		return $query->result();
	}
	
	public function getCategoryNameUpperLower($category_id) {
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('ci_category');
		
		return get2Lang($this->session->userdata('lang'), ucfirst(strtolower($query->row()->category_name)), ucfirst(strtolower($query->row()->category_name_ar)));
	}
	
	public function sumProductByCategory($category_id) {
		$this->db->where('ci_category.category_id', $category_id);
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return count($query->result());
	}
	
	public function sumProductByCategoryNewsArrivals($category_id) {
		$this->db->where('ci_category.category_id', $category_id);
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return count($query->result());
	}
	
	public function getProductBySubCategory($category_id, $limit = '', $offset = '') {
		$this->db->limit($limit, $offset);
		
		$this->db->order_by('ci_product.product_sort', 'asc');
		
		$this->db->where('ci_sub_category.category_id', $category_id);
		
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	
	public function sumProductByCategoryNewArrivals($category_id) {
		$this->db->where('ci_category.category_id', $category_id);
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$query = $this->db->get('ci_category');
		
		return count($query->result());
	}
	
	public function sumProductByPriceNewArrivals($price) {
		$price = explode('-', $price);
		
		if(!empty($price[1])) {
			// จำนวน ถึง จำนวน	
			$this->db->where('ci_product.product_price >=', $price[0]);
			$this->db->where('ci_product.product_price <=', $price[1]);
		} else {
			// จำนวน มากกว่า
			$this->db->where('ci_product.product_price >', $price[0]);
		}
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$query = $this->db->get('ci_product');
		
		return count($query->result());
	}
	
	public function sumProductByPrice($price) {
		$price = explode('-', $price);
		
		if(!empty($price[1])) {
			// จำนวน ถึง จำนวน	
			$this->db->where('ci_product.product_price >=', $price[0]);
			$this->db->where('ci_product.product_price <=', $price[1]);
		} else {
			// จำนวน มากกว่า
			$this->db->where('ci_product.product_price >', $price[0]);
		}
		$query = $this->db->get('ci_product');
		
		return count($query->result());
	}
	
	public function countProductBySubCategory($category_id) {
		$this->db->where('ci_sub_category.category_id', $category_id);
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	
	public function getCountryResult() {
		$this->db->order_by('country_name', 'asc');
		$this->db->where('country_id !=', 0);
		$query = $this->db->get('country');
		
		return $query->result();
	}
	
	public function getAddessBillingShipping() {
		$this->db->where('ci_member.member_id', $this->session->userdata('member_id'));
		$this->db->join('ci_member_shipping_address', 'ci_member.member_shipping_address_id = ci_member_shipping_address.member_shipping_address_id', 'inner');
		$this->db->join('ci_member_billing_address', 'ci_member.member_billing_address_id = ci_member_billing_address.member_billing_address_id', 'inner');
		$query = $this->db->get('ci_member');
		
		return $query->row();
	}
	
	public function genOrderNo() {
		$year = substr(date('Y'), 2, 2);
		$month = date('m');
		
		$this->db->like('order_no', $year.$month, 'after');
		$this->db->order_by('order_detail_id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('ci_order_detail');
		
		$row = $query->row();
		
		if(!empty($row)) {
			$find_auto_number = substr($row->order_no, 4, 3);
			
			$find_auto_number++;
			
			if(strlen($find_auto_number) == 3) {
				return $year.$month.$find_auto_number;
			} elseif(strlen($find_auto_number) == 2) {
				return $year.$month.'0'.$find_auto_number;
			} elseif(strlen($find_auto_number) == 1) {
				return $year.$month.'00'.$find_auto_number;
			}
		} else {
			return $year.$month.'001';
		}
		
	}
	
	public function getOrderDetailResult($order_detail_id) {
		$this->db->where('order_detail_id', $order_detail_id);
		$query = $this->db->get('ci_order_detail');
		
		return $query->row();
	}
	
	public function getOrderDetailMember() {
		$this->db->order_by('order_detail_id', 'asc');
		$this->db->where('member_id', $this->session->userdata('member_id'));
		$query = $this->db->get('ci_order_detail');
		
		return $query->result();
	}
	
	public function getOrderDetailMemberRecord($order_detail_id) {
		$this->db->where('order_detail_id', $order_detail_id);
		$query = $this->db->get('ci_order_detail');
		
		return $query->row();
	}
	
	public function getOrderResult($order_detail_id) {
		$this->db->order_by('order_id', 'asc');
		$this->db->where('order_detail_id', $order_detail_id);
		$query = $this->db->get('ci_order');
		
		return $query->result();
	}
	
	public function getProductSearch($search) {
		$this->db->order_by('ci_product.product_sort', 'asc');
		
		if($this->session->userdata('lang') == 'en') {
			$this->db->like('ci_product.product_name', $search, 'match');
			$this->db->or_like('ci_category.category_name', $search, 'match');
		} elseif($this->session->userdata('lang') == 'ar') {
			$this->db->like('ci_product.product_name_ar', $search, 'match');
			$this->db->or_like('ci_category.category_name_ar', $search, 'match');
		}
		
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->join('ci_category', 'ci_sub_category.category_id = ci_category.category_id', 'inner');
		$query = $this->db->get('ci_product');
		
		return $query->result();
	}

	public function getBestSellerRecord() {
		$this->db->where('best_seller_id', 1);
		$query = $this->db->get('ci_best_seller');

		return $query->row();
	}

	public function getProductBestSeller($product_id) {
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('ci_product');

		return $query->row();
	}

	public function getInstagramRecord() {
		$this->db->where('instagram_id', 1);
		$query = $this->db->get('ci_instagram');

		return $query->row();
	}
	
	public function getTextRecord() {
		$this->db->where('text_id', 1);
		$query = $this->db->get('ci_text');
		
		return $query->row();
	}
	
	public function countProductBySubCategoryNewArrivals() {
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	
	public function getProductBySubCategoryNewArrivals($limit = '', $offset = '') {
		$this->db->limit($limit, $offset);
		$this->db->where('ci_product.product_new_arrivals', 'Yes');
		$this->db->join('ci_sub_category', 'ci_category.category_id = ci_sub_category.category_id', 'inner');
		$this->db->join('ci_product', 'ci_sub_category.sub_category_id = ci_product.sub_category_id', 'inner');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	
	public function getOrderDetailRecord($order_detail_id) {
		$this->db->where('order_detail_id', $order_detail_id);
		$query = $this->db->get('ci_order_detail');
		
		return $query->row();
	}
	
	public function getOrderByResult($order_detail_id) {
		$this->db->where('order_detail_id', $order_detail_id);
		$this->db->order_by('order_id', 'asc');
		$query = $this->db->get('ci_order');
		
		return $query->result();
	}
	
	public function insertCounter($category_id) {
		if($category_id == 1) {
			$data = array(
				'counter_make_up_datetime' => date('Y-m-d H:i:s')
			);	
		} elseif($category_id == 2) {
			$data = array(
				'counter_skin_care_datetime' => date('Y-m-d H:i:s')
			);
		} elseif($category_id == 3) {
			$data = array(
				'counter_hair_care_datetime' => date('Y-m-d H:i:s')
			);
		} elseif($category_id == 4) {
			$data = array(
				'counter_accessory_datetime' => date('Y-m-d H:i:s')
			);
		}
		
		$this->db->insert('ci_counter', $data);
	}

	public function getWishlistRecord($product_id) {
		$this->db->where('product_id', $product_id);
		$this->db->where('member_id', $this->session->userdata('member_id'));
		$query = $this->db->get('ci_wishlist');

		$row = $query->row();

		if(!empty($row)) {
			return true;
		} else {
			return false;
		}
	}
}