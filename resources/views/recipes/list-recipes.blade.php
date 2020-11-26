@extends('layouts.backend')

@section('title', 'List Recipes')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>List Recipes</h4>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <a href="{{ route('recipe.create') }}" class="btn btn-success">Add New Recipe</a>
    </div>
    <div class="card-body p-2">
      <div class="table-responsive">
        <table class="table table-striped table-md">
            <tbody>
                @php
                    $i = 1;
                @endphp
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Created at</th>
                    <th>Status</th>
                </tr>
                @forelse ($recipes as $recipe)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            {{ $recipe->name }}
                            <div class="table-links input-group">
                                <a href="{{ route('recipe.show', $recipe->id) }}">View</a>
                                <div class="bullet"></div>
                                <a href="{{ route('recipe.edit', $recipe->id) }}" class="text-warning">Edit</a>
                            </div>
                        </td>
                        <td>{{ $recipe->description }}</td>
                        <td>{{ ucwords($recipe->category->name) }}</td>
                        <td>
                            {{ $recipe->created_at->format('Y-m-d') }}
                        </td>
                        <td>
                            <div class="badge badge-{{ $recipe->status == 'published' ? 'primary' : 'warning' }}">{{ ucwords($recipe->status) }}</div>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <p><strong>-- Data Resep Kosong --</strong></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer text-right">
      
    </div>
</div>
@endsection