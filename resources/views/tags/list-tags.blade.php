@extends('layouts.backend')

@section('title', 'List Tags')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>List Tags</h4>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <a href="{{ route('tag.create') }}" class="btn btn-success">Add New Tag</a>
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
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @forelse ($tags as $tag)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ ucwords($tag->name) }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>
                        <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                            <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <p><strong>-- Data Tag Kosong --</strong></p>
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