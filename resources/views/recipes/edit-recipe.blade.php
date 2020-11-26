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
        <h4>Edit Recipe</h4>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>Edit Your Post</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('recipe.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Recipe Name</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" 
                           name="name"
                           value="{{ $recipe->name }}">
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
                    <textarea class="form-control @if($errors->has('description')) is-invalid @endif" rows="3" name="description">{{ $recipe->description }}</textarea>
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
                                <option value="food" {{ $recipe->category == 'food' ? 'selected' : '' }}>Food</option>
                                <option value="drink"{{ $recipe->category == 'drink' ? 'selected' : '' }}>Drink</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                <div class="col-sm-12 col-md-7">
                    <input type="file" name="image" id="image-upload" 
                           class="form-control @if($errors->has('image')) is-invalid @endif"
                           value="{{ $recipe->image }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Steps</label>
                <div class="col-sm-12 col-md-7">
                    <textarea id="steps" class="form-control @if($errors->has('image')) is-invalid @endif" 
                              rows="10" name="steps">{{ $recipe->steps }}</textarea>
                    <div class="invalid-feedback">
                        {{ $errors->first('steps') }}
                    </div>
                </div>
            </div>
           {{-- TAGS --}}
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                    <div class="selectric-wrapper selectric-form-control selectric-selectric">
                        <div class="selectric-hide-select">
                            <select class="form-control selectric" tabindex="-1" name="status">
                                <option value="publish" {{ $recipe->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                <option value="draft" {{ $recipe->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary" type="submit">Update Post</button>
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