@extends('admin.layouts.index')

@section('content')
    <h1>Categories</h1>
    <a href="/admin/category/create" class="btn btn-primary mb-2">Add Category</a>
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset($item->img) }}" height="100" width="150" alt=""></td>
                <td>{{ $item->name }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection
                
            