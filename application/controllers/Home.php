<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $data = array(
            "scripts" => array(
                "carousel.min.js",
                "theme-scripts.js"
            )
        );
        $this->template->show("home.php", $data);
    }
    public function registrar()
    {
        $this->template->show('registro.php');
    }
    public function registrar_usuario()
    {
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $usuario = array(
            "USER_LOGIN" => $this->input->post("username"),
            "PASSWORD_HASH" => $hash,
            "APELIDO" => $this->input->post("apelido"),
            "EMAIL" => $this->input->post("email"),
            "CEP" => $this->input->post("cep"),
            "CPF" => $this->input->post("cpf"),
        );
        $this->load->model("Users_model");
        $this->Users_model->registra_usuario($usuario);
        echo '<script language="javascript">';
        echo 'alert("Usuario Cadastrado com sucesso")';
        echo '</script>';
        $this->template->show("home.php");
    }


    public function anuncios()
    {
        $this->load->model("Users_model");
        $lista = $this->Users_model->mostra_anuncios();
        $dados = array("anuncios" => $lista);

        $this->template->show("anuncios.php", $dados);
    }

    public function anunciar()
    {
        $anuncios = array(
            "USER_ID" => $this->session->userdata("user_id"),
            "NOME_ANUNCIO" => $this->input->post("nome"),
            "data" => $this->input->post("data"),
            "cep" => $this->input->post("cep"),
            "hora" => $this->input->post("hora"),
            "telefone" => $this->input->post("telefone"),
            "porte" => $this->input->post("porte"),
            "preco" => $this->input->post("preco"),
            "DESCRICAO_ANUNCIO" => $this->input->post("descricao"),
        );
        $this->load->model("Users_model");
        $this->Users_model->insere_anuncio($anuncios);
        echo '<script language="javascript">';
        echo 'alert("Anuncio cadastrado com sucesso")';
        echo '</script>';
        redirect('Home/anuncios', 'refresh');
    }
    public function PI()
    {
        $this->template->show("anunciar.php");
    }



    public function anunciar_adm()
    {
        for ($i = 0; $i < 2000; $i++) {
            $preco = rand(1, 100);
            $letter1 = chr(rand(65, 90));
            $letter2 = chr(rand(65, 90));
            $letter3 = chr(rand(65, 90));
            $letter4 = chr(rand(65, 90));
            $letter5 = chr(rand(65, 90));
            $nome = ($letter1 . $letter2 . $letter3 . $letter4 . $letter5);

            $anuncios = array(
                "USER_ID" => $this->session->userdata("user_id"),
                "NOME_ANUNCIO" => $nome,
                "data" => $this->input->post("data"),
                "cep" => $this->input->post("cep"),
                "hora" => $this->input->post("hora"),
                "telefone" => $this->input->post("telefone"),
                "porte" => $this->input->post("porte"),
                "preco" => $preco,
                "DESCRICAO_ANUNCIO" => $this->input->post("descricao"),
            );



            $this->load->model("Users_model");
            $this->Users_model->insere_anuncio($anuncios);
        }
        echo '<script language="javascript">';
        echo 'alert("Anuncios cadastrados")';
        echo '</script>';
        redirect('Home/anuncios', 'refresh');
    }

    public function anuncio($id)
    {
        $this->load->model("Users_model");
        $data["lista"] = $this->Users_model->anuncio($id);

        $this->template->show("anuncio.php", $data);
    }












    // Ordenação

    public function quick_sort_nome($anuncios)
    {



        $loe = $gt = array();

        if (count($anuncios) < 2) {
            return $anuncios;
        }

        $pivot_key = key($anuncios);
        $pivot = array_shift($anuncios);

        foreach ($anuncios as $val) {
            if (strcasecmp($val['NOME_ANUNCIO'], $pivot['NOME_ANUNCIO']) < 0) {
                $loe[] = $val;
            } else {
                $gt[] = $val;
            }
        }

        return array_merge($this->quick_sort_nome($loe), array($pivot_key => $pivot), $this->quick_sort_nome($gt));
        // return array_merge($loe, array($pivot_key => $pivot), $gt);
    }


    public function quick_sort_preco($anuncios)
    {

        $loe = $gt = array();

        if (count($anuncios) < 2) {
            return $anuncios;
        }

        $pivot_key = key($anuncios);
        $pivot = array_shift($anuncios);

        foreach ($anuncios as $val) {
            if ($val['PRECO'] < $pivot['PRECO']) {
                $loe[] = $val;
            } else {
                $gt[] = $val;
            }
        }
        return array_merge($this->quick_sort_preco($loe), array($pivot_key => $pivot), $this->quick_sort_preco($gt));
    }


    public function bubble_sort_nome($anuncios)
    {
        $size = count($anuncios) - 1;


        for ($i = 0; $i < $size; $i++) {
            $trocou = 0;
            for ($j = 0; $j < $size - $i; $j++) {
                if (strcasecmp($anuncios[$j]['NOME_ANUNCIO'], $anuncios[$j + 1]['NOME_ANUNCIO']) > 0) {
                    list($anuncios[$j], $anuncios[$j + 1]) = array($anuncios[$j + 1], $anuncios[$j]);
                    $trocou = 1;
                }
            }

            if ($trocou == 0) {
                break;
            }
        }
        return $anuncios;
    }

    public function bubble_sort_preco($anuncios)
    {
        $size = count($anuncios) - 1;

        for ($i = 0; $i < $size; $i++) {
            $trocou = 0;
            for ($j = 0; $j < $size - $i; $j++) {
                if ($anuncios[$j + 1]['PRECO'] < $anuncios[$j]['PRECO']) {
                    list($anuncios[$j], $anuncios[$j + 1]) = array($anuncios[$j + 1], $anuncios[$j]);
                    $trocou = 1;
                }
            }

            if ($trocou == 0) {
                break;
            }
        }

        return $anuncios;
    }


    // Tipo: 0 para Bubble, 1 para Quick
    // Parametro: 0 para NOME, 1 para PRECO
    public function ordena($tipo, $parametro)
    {
        $this->load->model("Users_model");
        $lista = $this->Users_model->mostra_anuncios();


        if ($tipo == 0) {
            if ($parametro == 0) {
                $tempo = $this->startExec();
                $ordena = $this->bubble_sort_nome($lista);
                $tipo =  "Bubble Sort (Campo: nome do anúncio)";
                $tempo = $this->endExec();
            } else {
                $tempo = $this->startExec();
                $ordena = $this->bubble_sort_preco($lista);
                $tipo =  "Bubble Sort (Campo: Preço)";
                $tempo = $this->endExec();
            }
        }
        if ($tipo == 1) {
            if ($parametro == 0) {
                $tempo = $this->startExec();
                $ordena = $this->quick_sort_nome($lista);
                $tipo =  "Quick Sort (Campo: nome do anúncio)";
                $tempo = $this->endExec();
            } else {
                $tempo = $this->startExec();
                $ordena = $this->quick_sort_preco($lista);
                $tipo =  "Quick Sort (Campo: Preço)";
                $tempo = $this->endExec();
            }
        }


        $dados = array("anuncios" => $ordena, "tempo" => $tempo, "tipo" => $tipo);

        $this->template->show("anuncios.php", $dados);
    }

    function getTime()
    {
        return microtime(TRUE);
    }

    function startExec()
    {
        global $time;
        $time = $this->getTime();
    }


    function endExec()
    {
        global $time;
        $finalTime = $this->getTime();
        $execTime = $finalTime - $time;
        return number_format($execTime, 6) . ' s';
    }


}
