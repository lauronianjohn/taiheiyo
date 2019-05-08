@extends('layouts.core')
@section('content')
<div class="content"> 
    <div class="card">
        <div class="header">
            <h4 class="title">Update Data</h4><br>
        </div>
        <div class="content">
            <form action="{{ route('types.update', $types->id) }}" method="post" style="margin-top: 40px;">
                {{ csrf_field() }}
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form">
                            <label>Cause of defects Cement bags</label>
                            <input type="text" name="type" class="form-control" placeholder="defect" value="{{$types->name}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection