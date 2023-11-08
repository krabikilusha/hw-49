<?php
    class Controller_Phpinfo extends Controller 
    { 
        function action_index() 
        { 
            $this->view->generate('phpinfo.php', 'template_view.php'); 
        } 
    }
?>