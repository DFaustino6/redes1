<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Redes_model; 

class Redes extends Controller
{
	public function index($id=null)
	{
		if(is_numeric($id)){
			$db=Redes_model::get_content($id);
			$chapter=Redes_model::get_chapter($id);
			$chapters=Redes_model::getAll_chapter();
			$values = array(
	                'chapter' => $db,
	                'title' => $chapter,
	                'chapters'=> $chapters,
	                'id' => $id
	            ); 
			return view('index',$values);
		}
	}
}