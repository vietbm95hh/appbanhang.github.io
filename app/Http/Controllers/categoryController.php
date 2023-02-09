<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\getListCategoryController;
use App\Http\Requests\chekFormAddCategory;

class categoryController extends Controller
{
    public $data;
    public $category;
    public function __construct(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this -> data['title'] = 'Danh sách danh mục';
        $this->category = new getListCategoryController();
    }
    public function index(){
        $this->data['list'] = $this->category->getCategoryList();
        return view('admin.Categorys.lists',$this->data);
    }
    // đệ quy danh mục
    
    public function create(){
        $this->data['test1'] =  $this->category->getListCategory();   
        return view('admin.Categorys.create',$this->data);
    }
    // insert one category in database
    public function add(chekFormAddCategory $req){
        if(isset($req)){
            $arr = [
                'name' => $req->title_category,
                'parent_id' => $req->parent_id
            ];
            
            $this->data['kq'] = $this->category->addOneCategory($arr);
           
            return redirect()->route('danh_muc.home');
            
        }
    }
    public function edit($id, Request $req){
        $this -> data['title'] = 'sửa danh mục';
        $req->session()->put('sCategory', $id);
        $this->data['edit'] = $this->category->getOneCategory($id);
        $this->data['test1'] =  $this->category->getListCategory($this->data['edit']->parent_id); 
        return view('admin.Categorys.edit', $this->data);
    }
    public function uploadEdit(chekFormAddCategory $req){
        
        if(isset($req)){
            $sCategory = $req->session()->get('sCategory');
            $arr = [
                'name' => $req->title_category,
                'parent_id' => $req->parent_id,
                'updated_at' => date('d-m-Y H:i:s',time()),
            ];
            
            $this->data['kq'] = $this->category->updateOneCategory($sCategory, $arr);
            if( $this->data['kq'] == true) {
                return redirect()->route('danh_muc.home');
            }         
        }
    }
    public function delete($id){
        $this->data['kq'] = $this->category->deleteOneCategory($id);
        if($this->data['kq'] == true){
            return redirect()->route('danh_muc.home');
        }
    }
}
