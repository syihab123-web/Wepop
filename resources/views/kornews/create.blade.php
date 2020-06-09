@extends('layouts.app')

@section('content')
    <h3 class="page-title">Japan News</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['kornews.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('judul', 'Judul*', ['class' => 'control-label']) !!}
                    {!! Form::text('judul', old('judul'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('judul'))
                        <p class="help-block">
                            {{ $errors->first('judul') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tanggal', 'Tanggal*', ['class' => 'control-label']) !!}
                    {!! Form::date('tanggal', old('tanggal'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tanggal'))
                        <p class="help-block">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('isi', 'Isi', ['class' => 'control-label']) !!}
                    {!! Form::textarea('isi', old('isi'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('isi'))
                        <p class="help-block">
                            {{ $errors->first('isi') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sumber', 'Sumber*', ['class' => 'control-label']) !!}
                    {!! Form::text('sumber', old('sumber'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sumber'))
                        <p class="help-block">
                            {{ $errors->first('sumber') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('image', 'image*', ['class' => 'control-label']) !!}
                    {!! Form::file('image', old('image'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('video', 'Video*', ['class' => 'control-label']) !!}
                    {!! Form::file('video', old('video'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('video'))
                        <p class="help-block">
                            {{ $errors->first('video') }}
                        </p>
                    @endif
                </div>
            </div>
            
            
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

