@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a> </h2>
  @if (session()->has('success'))
  <div class="alert alert-primary" role="alert">
    <strong>{{ session()->get('success') }}</strong>
  </div>

  @endif
  <table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->title }}</td>
            <td>
                <a href="/category-edit/{{ $category->id }}" class="btn btn-info btn-sm">Edit</a>
                <a href="/category-delete/{{ $category->id }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

  {{ $categories->links() }}
</div>

@endsection
