@extends('layouts.backend')

@section('title', 'Add Recipe')

@section('css')
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Recipe</h4>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>Write Your Post</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('recipe.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Recipe Name</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" 
                           name="name"
                           value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Recipe Description</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control @if($errors->has('description')) is-invalid @endif" rows="3" name="description">{{ old('description') }}</textarea>
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                    <div class="selectric-wrapper selectric-form-control selectric-selectric">
                        <div class="selectric-hide-select">
                            <select class="form-control selectric" tabindex="-1" name="category">
                                <option value="food">Food</option>
                                <option value="drink">Drink</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                <div class="col-sm-12 col-md-7">
                    <input type="file" name="image" id="image-upload" class="form-control @if($errors->has('image')) is-invalid @endif">
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Steps</label>
                <div class="col-sm-12 col-md-7">
                    <textarea id="steps" class="form-control @if($errors->has('image')) is-invalid @endif" rows="10" name="steps"></textarea>
                    <div class="invalid-feedback">
                        {{ $errors->first('steps') }}
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                <div class="col-sm-12 col-md-7">
                    @foreach ($tags as $tag)
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}">
                            <label class="form-check-label" for="tags">
                                {{ $tag->name }}
                            </label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                    <div class="selectric-wrapper selectric-form-control selectric-selectric">
                        <div class="selectric-hide-select">
                            <select class="form-control selectric" tabindex="-1" name="category">
                                @foreach ($categories as $category)     
                                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                    <div class="selectric-wrapper selectric-form-control selectric-selectric">
                        <div class="selectric-hide-select">
                            <select class="form-control selectric" tabindex="-1" name="status">
                                <option value="publish">Publish</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary" type="submit">Create Post</button>
                </div>
            </div>
       </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#steps' ) )
    .then( steps => {
        console.log( steps );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection