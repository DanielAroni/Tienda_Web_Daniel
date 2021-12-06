<?php
    class Roles extends Controllers {
        public function __construct()
        {
            parent::__construct();
        }

        public function Roles()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Roles Usuario";
            $data['page_name'] = "rol_usuario";
            $data['page_title'] = "Roles Usuario <small> Tienda</small>";
            $data['page_functions_js'] = "functions_roles.js";
            $this->views->getView($this,"roles",$data);
        }

    }
?>