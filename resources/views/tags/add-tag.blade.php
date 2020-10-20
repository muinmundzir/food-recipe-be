@extends('layouts.backend')

@section('title', 'Add Tag')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Tags</h4>
    </div>
</div>

<div class="card">
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input name="name" type="text" 
                       class="form-control @if($errors->any()) is-invalid @endif"
                       value="{{ old('name') }}">
                @foreach ($errors->all() as $error)
                    <div class="invalid-feedback">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ url()->previous() }}" class="btn btn-warning" type="button">Back</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div>
@endsection