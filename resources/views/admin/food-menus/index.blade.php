@extends('layouts.admin')

@section('title', 'Food Menus')

@section('content')
<style>

    .h2-tag{
        font-size: 30px;
        color: green;
        
    }
    /* Page wrapper */
    .food-page {
        max-width: 900px;
        margin-left: 3rem;
    }

    /* Cards */
    .food-card {
        border-radius: 10px;
        border: 1px solid #e5e5e5;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
    }

    .card-header{
        margin-left: 0rem;
        margin-bottom: 1rem;
        font-weight:700;
        color: rgb(0, 0, 0);
        background-color: #198754;
    }

    .food-card {
        
        color: #000000;
        font-weight: 600;
        font-size: 1rem;
        
    }

    /* Form */
    .form-label {
        font-weight: 600;
    }

    .form-control {
        border-radius: 6px;
    }

    /* Remove number arrows */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .btn-save {
        background: #198754;
        border: none;
        padding: 8px 25px;
        border-radius: 6px;
    }

    .btn-save:hover {
        background: #157347;
    }

    /* Table */
    .food-table thead {
        background: #f8f9fa;
    }

    .food-table th {
        font-weight: 600;
    }
</style>

<div class="container py-4 food-page">

    <h2 class="h2-tag mb-4">Food Menus</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add Food Item -->
    <div class="card food-card mb-4">
        <div class="card-header">Add New Food Item</div>
        <div class="card-body">

            <form action="{{ route('admin.food-menus.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Food Name</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name') }}" placeholder="e.g. Rice & Curry" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="2"
                              class="form-control"
                              placeholder="Short description">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price (LKR)</label>
                    <input type="number" name="price" step="0.01" min="0"
                           class="form-control"
                           placeholder="e.g. 450.00" required>
                </div>

                <button class="btn btn-save text-white">Save</button>
            </form>

        </div>
    </div>

    <!-- Existing Food Items -->
    <div class="card food-card">
        <div class="card-header bg-light text-dark">Existing Food Items</div>
        <div class="card-body p-0">

            <table class="table table-striped food-table mb-0">
                <thead>
                    <tr>
                        <th width="60">#</th>
                        <th width="200">Name</th>
                        <th>Description</th>
                        <th width="120" class="text-end">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->description }}</td>
                        <td class="text-end">{{ number_format($menu->price, 2) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-3">
                            No food items added yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
