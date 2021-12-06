<?php
    class Home extends Controllers {
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, 
            quae assumenda temporibus numquam ullam consequatur esse optio deserunt 
            placeat nisi error at libero! Nihil placeat nostrum nobis provident veniam animi.";
            $this->views->getView($this,"home",$data);
        }

    }
?>