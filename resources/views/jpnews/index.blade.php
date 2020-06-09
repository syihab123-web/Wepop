@extends('layouts.app')

@section('content')
    <h3 class="page-title">Japan news Dashboard</h3>

    <p>
        <a href="{{ route('jpnews.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($jpnews) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>sumber</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($jpnews) > 0)
                        @foreach ($jpnews as $jpnew)
                            <tr data-entry-id="{{ $jpnew->id }}">
                                <td></td>
                                <td>{{ $jpnew->judul }}</td>
                                <td>{{ $jpnew->tanggal }}</td>
                                <td>{{ $jpnew->sumber }}</td>
                                <td>
                                    <a href="{{ route('jpnews.show',[$jpnew->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('jpnews.edit',[$jpnew->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['jpnews.destroy', $jpnew->id])) !!}
                                    {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('users.mass_destroy') }}';
    </script>
@endsection