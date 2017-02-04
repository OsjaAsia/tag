@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['url' => 'tags', 'class'=>'form-horizontal']) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group  pull-right">
                            <a href="{{ URL::to('/tags') }}" class="btn btn-sm btn-default">
                                <i class="fa fa-list-ul" aria-hidden="true"></i> List
                            </a>
                            <button type="submit" class="btn btn-sm btn-info">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                            </button>
                        </div>
                        <h4 class="font-thin">
                            Crate tag
                        </h4>
                    </div>

                    <div class="panel-body">



                        {{--<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<label for="name" class="col-sm-3 control-label">Name</label>--}}
                        {{--<div class="col-sm-9">--}}
                        {{--{!! Form::text('name', old('name'),['class'=>'form-control input-sm', 'placeholder'=>'Name']) !!}--}}
                        {{--@if ($errors->has('name'))--}}
                        {{--<span class="help-block">--}}
                        {{--<p>{{ $errors->first('name') }}</p>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="form-group">--}}
                        {{--<label for="is_active" class="col-sm-3 control-label">Is Active</label>--}}
                        {{--<div class="col-sm-9">--}}
                        {{--<input type="hidden" name="is_active" value="0">--}}
                        {{--<input type="checkbox" value="1" @if(old('is_active')) checked @endif name="is_active" id="is_active">--}}
                        {{--</div>--}}
                        {{--</div>--}}


                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
