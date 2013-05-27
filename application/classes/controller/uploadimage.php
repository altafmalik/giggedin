<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Uploadimage extends Controller {
        private $list_tags = array();
	
	public function action_index()
	{
		$view = new View("uploadimage/index");
		$this->response->body($view);
	}
	
	public function action_show()
	{
		$view = new View("uploadimage/upload");
		$error_message = NULL;
		$filename = "altaf.jpg";
		$view->uploaded_file = $filename;
		$view->error_message = $error_message;
		$view->tags_styles = $this->action_gettags('styles');
		$view->tags_map = $this->action_gettags('map');
		$view->tags_list = $this->action_gettags('list');
		
                $this->response->body($view);
	}
	
	public function action_deltag($id="")
	{
		$tagid=$this->request->param('id');
		$tag = ORM::factory('tags')->find($tagid);
		$tag->delete();
                $this->request->redirect('uploadimage/show');
	}
	
	public function action_addtag()
	{
		if($this->request->post())
		{
		
		$tag = ORM::factory('tags');
		$tag->title = $this->request->post('comment');
		$tag->x1 = $this->request->post('x1');
		$tag->y1 = $this->request->post('y1');
		$tag->x2= 0;
		$tag->y2 = 0;
		$tag->width = $this->request->post('w');
		$tag->height = $this->request->post('h');	
		$tag->save();
		}
		$this->request->redirect('uploadimage/show');
	}
	
	private function _deletealltags()
	{
		
		
		$alltags = ORM::factory('tags');
		$tags = $alltags->find_all();
		foreach ($tags as $tag){
                 $tag->delete();
		}
		
	}
	
	
         public function action_upload()
    {
        $view = View::factory('uploadimage/upload');
        $error_message = NULL;
        $filename = NULL;
 
        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']))
            {
                $filename = $this->_save_image($_FILES['avatar']);
            }
        }
 
        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }
 
        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
	$view->tags_styles = NULL;
	$view->tags_map = NULL;
	$view->tags_list = NULL;
	
        $this->request->redirect('uploadimage/show');
	
    }
 
    protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'images/';
	
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = 'altaf.jpg';
	    
            Image::factory($file)
                ->resize(800, 450, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
            // delete all previous records from database.
	    $this->_deletealltags();
            return $filename;
        }
 
        return FALSE;
    }
    
    
    private function action_results()
	{
		$this->list_tags = array();
		 $imagetags = ORM::factory('tags');
		$tags = $imagetags->find_all();
		foreach ($tags as $tag){
                $name = str_replace(' ', '-', $tag->title);
		$this->list_tags[] = array('id' => $tag->id, 'title' => $tag->title, 'name' => $name, 'x1' => $tag->x1, 'y1' => $tag->y1, 'width' => $tag->width, 'height' => $tag->height);
		}
		
	}
	public function action_getresults()
	{
		$this->action_results();
		$tagarray = array();
		$tagarray = $this->list_tags;
		return $tagarray;
	}
        public function action_gettags($return_type = '') {
		$output = '';
	
		//get results from DB
		$tags = $this->action_getresults();
		
		//Do we have a return type and is $tags an array like expected
		if ($return_type != '' && is_array($tags) && $tags != '') {
	      
		  if ($return_type == 'styles') {
		    $output .= '<style type="text/css">';

			$tag_counter = 1;
       
		       //Build output
		       foreach ($tags as $tag) {
			 $output .= '.map a.tag_'.$tag_counter.' { ';
			 //$output .= 'border:1px solid #000;';
			 $output .= 'background:url(images/tag_hotspot_62x62.png) no-repeat;';
			 $output .= 'top:'.$tag['y1'].'px;';
			 $output .= 'left:'.$tag['x1'].'px;';
			 //$output .= 'width:'.$tag['width'].'px;';
			 //$output .= 'height:'.$tag['height'].'px;';
			 $output .= 'width:62px;';
			 $output .= 'height:62px;';
			 $output .= '}';
			 $tag_counter++;
		       }

			$output .= '</style>';
		      } else if ($return_type == 'map') {
		  
			$tag_counter = 1;
		  
			foreach ($tags as $tag) {
			  $output .= '<li><a class="tag_'.$tag_counter.'" title="'.$tag['title'].'"><span><b>'.$tag['title'].'</b></span></a></li>';
			  $tag_counter++;
			}
		  
		      } else if ($return_type == 'list') {
		  
			$title_counter = 1;
		  
			foreach ($tags as $tag) {
			  $output .= '<li><a href="#" class="title" id="tag_'.$title_counter.'">'.$tag['title'].'</a> (<a href="deltag/'.$tag['id'].'">Delete</a>)</li>';
			  $title_counter++;
			}
		      }
			  }
		  
			  return $output;
		    $output = '';
}

} // End Welcome
