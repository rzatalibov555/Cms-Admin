<?php

class ItemController extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item";
//        $this->subViewFolder = "add";

        $this->load->model("item_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();
        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){
        $title      = $_POST['title'];
        $descr      = $_POST['descr'];
        $date       = $_POST['date'];
        $category   = $_POST['category'];
        $status     = $_POST['status'];

        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){

            $data = [
                'n_tittle'      => $title,
                'description'   => $descr,
                'n_category'    => $category,
                'n_date'        => $date,
                'n_status'      => $status,
                'creater'       => $_SESSION['admin_id'],
                'creater_crate_date' => date("Y-m-d H:i:s"),

            ];

            print_r('<pre>');
            print_r($data);



        }else{
            $this->session->set_flashdata('err', 'Diqqət! Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);

        }






    }




}