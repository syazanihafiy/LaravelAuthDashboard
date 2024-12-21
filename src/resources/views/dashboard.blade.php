@extends('app')

@section('content')
    <!-- Navbar with Username on the left and Signout Button on the right -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Username on the left -->
            <span class="navbar-text text-white">
                Welcome, {{ $user['firstName'] }} {{ $user['lastName'] }}
            </span>

            <!-- Signout Button on the right -->
            <div class="d-flex">
                <a href="/logout" class="btn btn-outline-light">Log Out</a>
            </div>
        </div>
    </nav>


    <h2 class="text-center my-4">Product List</h2>
    <div class="mx-5">
        <table id="products" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['title'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>{{ $product['description'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#products').DataTable({
                "pageLength": 10
            });
        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush
