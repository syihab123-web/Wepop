@extends('layouts.app')

@section('content')
    <h3 class="page-title">Japan News</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>Judul</th>
                    <td>{{ $jpnew->judul }}</td></tr>
                    <tr><th>Tanggal</th>
                    <td>{{ $jpnew->tanggal }}</td></tr>
                    <tr><th>isi</th>
                    <td>{{ $jpnew->isi }}</td></tr>
                    <tr><th>Sumber</th>
                    <td>{{ $jpnew->sumber }}</td></tr>
                    <tr><th>Image</th>
                    <td>{{ $jpnew->image }}</td></tr>
                    <tr><th>Video</th>
                    <td>{{ $jpnew->video }}</td></tr>            
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('jpnews.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop