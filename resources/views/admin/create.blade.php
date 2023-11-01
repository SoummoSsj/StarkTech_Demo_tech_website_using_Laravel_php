@extends('admin.admin')

@section('content')
    <h1>Create Product</h1>

    <!-- Display form validation errors if any -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" required>
        </div>
        <!-- Add more form fields as per your requirements -->
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
