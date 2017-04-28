@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
            @endif

            <div class="panel panel-default">

                <div class="panel-heading">Add a New flavour</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('type.post') }}">
                        {{ csrf_field() }}                      
                        <div class="form-group">
                        <label for="flavour">Name:</label>
                        <input type="text" name="flavour" class="form-control">
                        @if ($errors->has('flavour'))
                            <span class="help-block">
                                <strong>{{ $errors->first('flavour') }}</strong><br><br>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong><br><br>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                       <select name="types">
                            <option disabled selected>Choose Category for Flavour</option>
                        @foreach($types as $types)
                            <option value="{{ $types->id }}" class="form-control">{{ $types->type_name }}</option>
                        @endforeach
                        </select>
                        @if ($errors->has('types'))
                            <span class="help-block">
                                <strong>{{ $errors->first('types') }}</strong><br><br>
                            </span>
                        @endif
                      </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection