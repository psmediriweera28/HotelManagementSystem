@extends('layouts.admin')

@section('title', 'Food Menus')

@section('content')
<style>

   body{
    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* Page Title */
.h2-tag{
    font-size: 30px;
    color: #22c55e;
    font-family: 'Playfair Display', serif;
    font-weight: bold;
    margin-top: -20px;
}

/* Page Wrapper */
.food-page{
    max-width: 1200px;

    padding: 30px;
}

/* Cards */
.food-card{
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    border-radius: 10px;
    border: none;
    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
    overflow: hidden;
    padding: 20px;
}

/* Card Header */
.card-header{
    background: rgba(34,197,94,0.2) !important;
    color: #22c55e !important;
    font-weight: bold;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

/* Labels */
.form-label{
    color: white;
    font-weight: 600;
}

/* Inputs */
.form-control{
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.15);
    color: white;
    border-radius: 12px;
}

.form-control:focus{
    background: rgba(255,255,255,0.15);
    color: white;
    border-color: #22c55e;
    box-shadow: 0 0 10px rgba(34,197,94,0.5);
}

.form-control::placeholder{
    color: rgba(255,255,255,0.5);
}

/* Save Button */
.btn-save{
    background: #22c55e;
    border: none;
    padding: 10px 25px;
    border-radius: 12px;
    font-weight: bold;
}

.btn-save:hover{
    background: #16a34a;
    transform: translateY(-2px);
}

/* Table */
.food-table{
    color: white;
    margin-bottom: 0;

    
}

.food-table thead{
    background: rgba(34,197,94,0.15);
}

.food-table th{
    color: #22c55e;
    border-color: rgba(255,255,255,0.1);
}

.food-table td{
    border-color: rgba(255,255,255,0.08);
    vertical-align: middle;
}

.food-table tbody tr:hover{
    background: rgba(255,255,255,0.05);
}

/* Images */
.food-preview{
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 10px;
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

            <form action="{{ route('admin.food-menus.store') }}" method="POST"
            enctype="multipart/form-data">
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

                <div class="mb-3">
                <label class="form-label">
                    Food Image
                </label>

                <input
                    type="file"
                    name="image"
                    class="form-control"
                    accept="image/*">
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
                        <th width="100">Name</th>
                        <th width="180">Description</th>
                        <th>Image</th>
                        <th class="text-end" width="140">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                   <tr>
    <td>{{ $menu->id }}</td>

    <td>
        @if($menu->image)
            <img src="{{ asset('storage/'.$menu->image) }}"
                 class="food-preview">
        @else
            No Image
        @endif
    </td>

    <td>{{ $menu->name }}</td>

    <td>{{ $menu->description }}</td>

    <td class="text-end">
        LKR {{ number_format($menu->price,2) }}
    </td>
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
