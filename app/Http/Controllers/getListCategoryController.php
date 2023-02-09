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
    public function getListCategory($parent_id=null, $id = 0, $cnt = ''){
        
        $list = $this->test->all();
        foreach($list as $item){
            if($item->parent_id == $id){
                if(!empty($parent_id) && $parent_id == $item->id){
                    $this->htmlList .= '<option selected value="'.$item->id.'">'. $cnt. $item->name. '</option>';
                }else{
                    $this->htmlList .= '<option value="'.$item->id.'">'. $cnt. $item->name. '</option>';
                }
               
                $this->getListCategory($item->id,$cnt.'-');
            }        
        }
        return $this->htmlList;
    }
    public function getCategoryList(){
        $list = $this->test->paginate(10);
        return $list;
    }
    public function addOneCategory($arr){
        $list = $this->test->create($arr);
        return $list;
    }
    public function updateOneCategory($id=null,$arr=array()){
       
        $list = $this->test->find($id)->update($arr);
        return $list;
    }
    public function getOneCategory($id){
        $list = $this->test->find($id);
        return $list;
    }
    public function deleteOneCategory($id){
        $list = $this->test->find($id)->delete();
        return $list;
    }
}
