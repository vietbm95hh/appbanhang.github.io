<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\getListCategoryController;

class categoryController extends Controller
{
    public $data;
    public $category;
    public function __construct(){
        $this -> data['title'] = 'test tiêu đề';
        $this->category = new getListCategoryController();
    }
    public function index(){
        return view('admin.Categorys.lists',$this->data);
    }
    // đệ quy danh mục
    
    public function create(){
        $this->data['test1'] =  $this->category->getListCategory();      
        return view('admin.Categorys.create',$this->data);
    }
}
