<?php

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_data($user_login)
    {

        $this->db
            ->select("USER_ID,USER_LOGIN,PASSWORD_HASH,APELIDO,EMAIL,CEP")
            ->from("usuarios")
            ->where("USER_LOGIN", $user_login);

        $retorna = $this->db->get();

        //Para saber se há usuários
        if ($retorna->num_rows() > 0) {
            return $retorna->row();
        } else {
            return NULL;
        }
    }

    public function registra_usuario($usuario){
        $this->db->insert("usuarios",$usuario);
    }
    public function anuncio($id){
        return $this->db->get_where("anuncios",array(
            "ID_ANUNCIOS"=>$id
        ))->row_array();
    }


    public function insere_anuncio($anuncios){
        $this->db->insert("anuncios",$anuncios);
    }

    public function deleta_anuncio($id)
    {

        $this->db->where("ID_ANUNCIOS", $id);
        $this->db->delete("anuncios");
    }


    public function mostra_anuncios()
    {
        // $this->db->from("anuncios");
		return $this->db->get("anuncios")->result_array();
    }
    public function mostrar_perfil($id){
        return $this->db->get_where("usuarios",array(
            "USER_ID"=>$id
        ))->row_array();
    }
    public function mostrar_anuncio_perfil($id){
        return $this->db->get_where("anuncios",array(
            "USER_ID"=>$id
        ))->result_array();
    }





}
