@extends('layouts.admin.adminLayoutHome')
@section('css')
    <style>
        .btnSubmit{
            margin-top: 15px;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-6">
        <div class="formCreateCategory">
            <form action="{{route('danh_muc.uploadEdit')}}" method="post">
                @csrf
                <div class="title_control">
                    <label for="" class="">Tiêu đề danh mục:</label>
                    <input type="text" class="form-control" placeholder="Nhập tên danh mục" name='title_category' value="{{$edit->name}}">
                </div>
                @error('title_category')
                    <p> {{ $message }} </p>
                @enderror
                <div class="title_control">
                    <label for="" class="">Danh mục cha:</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="0">Chọn danh mục cha</option>
                       {!! $test1 !!}
                    </select>
                </div>
                <div class="btnSubmit">
                    <button type="submit" class="btn btn-primary"> Sửa </button>
                    <a href="{{route('danh_muc.home')}}" class="btn btn-warning"> Quay lại </a>
                </div>
                
                    
                
            </form>
        </div>
    </div>
@endsection
