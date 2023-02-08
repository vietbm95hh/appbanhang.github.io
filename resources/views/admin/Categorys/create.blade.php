@extends('layouts.admin.adminLayoutHome')
@section('content')
    <div class="col-md-6">
        <div class="formCreateCategory">
            <form action="" method="post">
                <div class="title_control">
                    <label for="" class="">Tiêu đề danh mục:</label>
                    <input type="text" class="form-control" placeholder="Nhập tên danh mục">
                </div>
                <div class="title_control">
                    <label for="" class="">Danh mục cha:</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="0">Chọn danh mục cha</option>
                        {!! $test1 !!}
                    </select>
                </div>
                <div class="btnSubmit">
                    <button type="submit" class="btn btn-primary"> Thêm </button>
                </div>
            </form>
        </div>
    </div>
@endsection
