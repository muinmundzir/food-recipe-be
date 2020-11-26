@extends('layouts.backend')

@section('title', 'Add Tag')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Tag</h4>
    </div>
</div>

<div class="card">
    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input name="name" type="text" 
                       class="form-control @if($errors->has('name')) is-invalid @endif"
                       value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ url()->previous() }}" class="btn btn-warning" type="button">Back</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div>
@endsection