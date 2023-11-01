@extends('admin.admin')

@section('content')
    <h1>Edit Product</h1>

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

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required>
        </div>
        <!-- Add more form fields as per your requirements -->
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
