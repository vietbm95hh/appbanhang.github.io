<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
class getListCategoryController extends Controller
{
    public $htmlList ="";
    public $test;
    public function __construct(){
        $this->test = new categoryModel();
    }
    public function getListCategory($id = 0, $cnt = ''){
        
        $list = $this->test->all();
        foreach($list as $item){
            if($item->parent_id == $id){
                $this->htmlList .= '<option>'. $cnt. $item->name. '</option>';
                $this->getListCategory($item->id,$cnt.'-');
            }        
        }
        return $this->htmlList;
    }
}
