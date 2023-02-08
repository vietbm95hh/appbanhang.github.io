<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public $data = [];
    public function __construct(){
        $this -> data['title'] = 'test tiêu đề';
    }
    public function index(){
        return view('admin.Categorys.lists',$this->data);
    }
    public function create(){
        return view('admin.Categorys.create',$this->data);
    }
}
