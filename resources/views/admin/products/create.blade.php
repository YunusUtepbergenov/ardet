{{-- @extends('layouts.app')  --}}

{{-- @section('content') --}}
<div class="container mt-5">
    <h2>Добавить продукт</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Название (Русский)</label>
            <input type="text" name="title[ru]" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <label>Название (Oʻzbek)</label>
            <input type="text" name="title[uz]" class="form-control" required>
        </div>
<br>
        <div class="mb-3">
            <label>Описание (Русский)</label>
            <textarea name="short_desc[ru]" class="form-control"></textarea>
        </div>
<br>
        <div class="mb-3">
            <label>Описание (Oʻzbek)</label>
            <textarea name="short_desc[uz]" class="form-control"></textarea>
        </div>
<br>
        <div class="mb-3">
            <label>Категория (необязательно)</label>
            <input type="text" name="category" class="form-control">
        </div>
<br>
        <div class="mb-3">
            <label>Изображение</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
<br>
        <button class="btn btn-primary" type="submit">Добавить</button>
    </form>
</div>
{{-- @endsection --}}
