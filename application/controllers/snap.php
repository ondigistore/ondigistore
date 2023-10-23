<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Access-Control-Allow-Origini: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-thakhict9Hpg0RLamTeJhFH1', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
		$this->load->view('checkout_snap');
		$data['users'] = $this->topup_model->get_data('users')->result();
	}
	public function tambah_beli($id)
    {
        $data['products'] = $this->topup_model->getbyidproduct($id);
        // $data['products'] = $this->topup_model->jointable($id);
        $data['pembayaran'] = $this->topup_model->ambil_id_pembayaran('1');
        $data['game'] = $this->topup_model->getbyidgame('1');
        // var_dump($data);
        $this->load->view('user/_partials/head');
        $this->load->view('user/_partials/navbar');
        $this->load->view("user/tambah_beli", $data); 
        $this->load->view('user/_partials/modal.php');
        $this->load->view('user/_partials/footer');
        $this->load->view('user/_partials/js');

    }

    public function token()
    {
		$product_id             = $this->input->post('product_id');
        $pembayaran_id          = $this->input->post('pembayaran_id');
        $full_name              = $this->session->userdata('full_name');
        $game_id                = $this->input->post('game_id');
        $name                   = $this->input->post('name');
        $price                  = $this->input->post('price');
		$tanggal                = $this->input->post('tanggal');
		
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $price, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $price,
		  'quantity' => 1,
		  'name' => $name
		);

		// Optional
		// $item2_details = array(
		//   'id' => 'a2',
		//   'price' => 20000,
		//   'quantity' => 2,
		//   'name' => "Orange"
		// );

		// Optional
		$item_details = array ($item1_details);

		// Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
		  'first_name'    => $full_name,
		  'email'         => "andri@litani.com",
		  'phone'         => "081122334455",
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day', 
            'duration'  => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

	}
	public function tambah_beli_aksi()
    {

        $product_id             = $this->input->post('product_id');
        $pembayaran_id          = $this->input->post('pembayaran_id');
        $user_id                = $this->session->userdata('user_id');
        $game_id                = $this->input->post('game_id');
        $name                   = $this->input->post('name');
        $price                  = $this->input->post('price');
        $tanggal                = $this->input->post('tanggal');

        $data = array
        (
            'product_id'        => $product_id,
            'pembayaran_id'     => $pembayaran_id,
            'user_id'           => $user_id,
            'game_id'           => $game_id,
            'name'              => $name,
            'price'             => $price,
            'tanggal'           => $tanggal,
        );

        $this->topup_model->insert_data($data, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil!, Silahkan Untuk Membayar!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"&times;</span>
            </button>
            </div>');
        redirect('user');
    }
}
