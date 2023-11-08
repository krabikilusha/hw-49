<?php
    class Controller_Portfolio extends Controller 
    { 
        function action_index() 
        { 
            $data = (new Model_Portfolio())->get_data();
            $this->view->generate('view_portfolio.php', 'template_view.php', $data); 
        } 
    }
?>