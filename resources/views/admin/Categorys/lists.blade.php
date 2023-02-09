@extends('layouts.admin.adminLayoutHome')
@section('css')
    <style>
        .btn-success{
            margin-bottom: 15px;
        }
    </style>
@endsection
@section('content')
    <x-button-add name="Thêm mới 1 danh mục" link="{{ route('danh_muc.create') }}" class="btn-success" />
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">Số thứ tự</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Thời gian tạo</th>
                <th scope="col" class="text-center">Thời gian chỉnh sửa</th>
                <th scope="col" colspan="2" class="text-center" style="width:10%">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $item)
                <tr>
                    <th scope="row" class="text-center">{{$key}}</th>
                    <td class="text-center">{{$item->name}}</td>
                    <td class="text-center">{{$item->created_at}}</td>
                    <td class="text-center">{{$item->updated_at}}</td>
                    <td class="text-center">
                        <a href="{{route('danh_muc.edit',[ 'id' => $item->id ])}}" class="btn btn-warning">Sửa</a>
                    </td>
                    <td class="text-center">
                        <a href="{{route('danh_muc.delete',[ 'id' => $item->id ])}}" class="btn btn-danger">Xoá</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $list->links() !!}
@endsection
