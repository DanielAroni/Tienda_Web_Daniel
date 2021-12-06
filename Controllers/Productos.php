<?php
    class Productos extends Controllers {
        public function __construct()
        {
            parent::__construct();
        }

        public function Productos()
        {
            $data['page_tag'] = "Productos";
            $data['page_title'] = "PRODUCTOS <small> Tienda </small> ";
            $data['page_name'] = "productos";
            $data['page_functions_js'] = "functions_productos.js";
            $this->views->getView($this,"productos",$data);
        }
    }
?>