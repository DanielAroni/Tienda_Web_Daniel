<?php
    class Clientes extends Controllers {
        public function __construct()
        {
            parent::__construct();
        }

        public function Clientes()
        {
            $data['page_tag'] = "Clientes";
            $data['page_title'] = "Clientes <small> Tienda </small> ";
            $data['page_name'] = "clientes";
            $data['page_functions_js'] = "functions_clientes.js";
            $this->views->getView($this,"clientes",$data);
        }
    }
?>