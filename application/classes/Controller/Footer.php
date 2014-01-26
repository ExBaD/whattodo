<?php defined('SYSPATH') or die('No direct script access.');

if(Request::initial() === Request::current())
    Request::initial()->redirect(URL::base());

class Controller_Footer extends Controller_Common{
       
        public $template = 'footer';
        
        public function action_index()
        {
            $content = View::factory('footer');
            
            $this->template->content = $content;
        }
}
?>
