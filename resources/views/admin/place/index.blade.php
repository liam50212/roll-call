@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<style>
    tbody tr td {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp:2;
        -webkit-box-orient:vertical;
        max-width: 500px;  
    }

    table tr td,table tr th {
        text-align: center;
    }
</style>
@endsection

@section('main')
    <div class="container">
        <a href="/admin/place/create"><button>新增教育單位</button></a>
        <hr>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>單位名稱</th>
                    <th width="100">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)  
                <tr>
                    <td>{{$place->name}}</td>
                    <td>
                        <a href="/admin/place/edit/{{$place->id}}" class="btn btn-success btn-sm">編輯</a>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$place->id}}">刪除</button>
                        <form id="delete_{{$place->id}}" action="/admin/place/delete/{{$place->id}}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </td>
                    {{-- <a href="/admin/place/delete/{{$place->id}}" class="btn btn-danger btn-sm">刪除</a> --}}
                    {{-- <td>
                        <a class="btn" href="/admin/place/delete/{{$place->id}}">
                            <button>刪除</button>
                        </a>
                    </td> --}}
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );

    document.querySelectorAll('.delete-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var id = this.getAttribute('data-id');
            if(confirm('是否刪除?')){
                document.querySelector(id).submit();
            }
        });
    })
</script>
@endsection