@extends('layouts.app')

@section('css')
    
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">教育單位 - 新增</div>

                <div class="card-body">
                    <form method="POST" action="/admin/classroom/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="place_id" class="col-sm-2 col-form-label">教育單位</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="place_id" id="place_id">
                                    @foreach ($places as $place)
                                        <option value="{{$place->id}}">{{$place->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">班級名稱</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection