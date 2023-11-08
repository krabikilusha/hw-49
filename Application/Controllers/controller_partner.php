<?php
    class Controller_Partner extends Controller 
    { 
        function action_index() 
        { 
            $data = (new Model_Partner())->get_data();
            $this->view->generate('partner_view.php', 'template_view.php', $data); 
        } 
    }
?>