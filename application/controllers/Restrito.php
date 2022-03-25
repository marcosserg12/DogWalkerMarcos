<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restrito extends CI_Controller
{

    public function __construct() {
		parent::__construct();
		$this->load->library("session");
	}


    public function index()
    {
		if($this->session->userdata("user_id")){
			$this->load->model("Users_model");
			$id = $this->session->userdata("user_id");
			$data["perfil"] = $this->Users_model->mostrar_perfil($id);
			$data["anuncios"] = $this->Users_model->mostrar_anuncio_perfil($id);


			$this->template->show("restrito.php",$data);
		}
		else{
			$data = array(
				"scripts" => array(
					"util.js",
					"login.js",
					"jquery.min.js"
				)
			);
			$this->template->show("login.php", $data);

		}

    }

	public function logoff(){
		$this->session->sess_destroy();
		header("Location: " . base_url() . "restrito");
	}

    public function ajax_login() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if (empty($username)) {
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio!";
		} else {
			$this->load->model("users_model");
			$result = $this->users_model->get_user_data($username);
			if ($result) {
				$user_id = $result->USER_ID;
				$password_hash = $result->PASSWORD_HASH;
				if (password_verify($password, $password_hash)) {
					$this->session->set_userdata("user_id", $user_id);
				} else {
					$json["status"] = 0;

				}
			} else {
				$json["status"] = 0;
			}
			if ($json["status"] == 0) {
				$json["error_list"]["#btn_login"] = "Usuário e/ou senha incorretos!";
			}
		}

		echo json_encode($json);

	}

}
