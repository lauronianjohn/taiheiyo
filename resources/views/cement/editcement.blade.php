@extends('layouts.core')
@section('content')
<div class="content"> 
    <div class="card">
        <div class="header">
            <h4 class="title">Update Data</h4><br>
        </div>
        <div class="content">
            <form action="{{ route('cement.update', $cements->id) }}" method="post" style="margin-top: 40px;">
                {{ csrf_field() }}	
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <label>Cause of defects Cement bags</label>
                            <input type="text" name="cause" class="form-control" placeholder="defect" value="{{$cements->cause}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label>Total # of Cement bags loaded to vessel</label>
                            <input type="number" name ="total_loaded" class="form-control" placeholder="defect" value="{{$cements->total_no_bags}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <label>Types of Cement bags</label>
                            <select class="form-control" name="types">
                                    <option value="" disabled selected>-- Choose Types --</option>
                                    <option value="Small bag">Small bag</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Tanner">Tanner</option>
                                <!-- @foreach($type as $types)
                                    <option value="{{$types->id}}">{{$types->name}}</option>
                                @endforeach -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label>Total # of good Cement bags</label>
                            <input type="number" name="good" class="form-control" placeholder="defect" value="{{$cements->total_good}}">
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