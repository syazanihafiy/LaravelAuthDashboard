@extends('app')

@section('content')
    <div class="background-img container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="row text-center text-white mb-4">
            <div class="col">
                <h1 style="font-family:'Courier New'; letter-spacing: 5px;">PRODUCT DASHBOARD</h1>
            </div>
        </div>

        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-body">
                <h5 class="text-center mb-4">Login to view products</h5>

                <!-- Display errors if any -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>

                <p class="text-center mt-4 fs-6">
                    <a href="https://github.com/syazanihafiy" target="_blank" class="text-dark">Syazani Hafiy</a>
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

@push('css')
@endpush
