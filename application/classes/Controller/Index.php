<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {
    
    public $template = 'Index';
    public $model = 'ListOfCategories';

	public function action_index()
	{       
                $header_url = 'header/';
                $header = Request::factory($header_url)->execute();
                                
                $footer_url = 'footer/';
                $footer = Request::factory($footer_url)->execute();
                
		$content = View::factory('Index');
 
                $categoriesINFO = Model::factory($this->model)->get_first_3_categories();
                
                $this->template->content = $content;
                $this->template->header = $header;
                $this->template->footer = $footer;
                $this->template->categories = $categoriesINFO;
	}

}
