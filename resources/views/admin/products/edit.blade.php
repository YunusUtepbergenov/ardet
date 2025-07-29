<div class="container mt-5">
    <h2>Редактировать продукт</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Название (Русский)</label>
            <input type="text" name="title[ru]" value="{{ old('title.ru', $product->title['ru']) }}" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <label>Название (Oʻzbek)</label>
            <input type="text" name="title[uz]" value="{{ old('title.uz', $product->title['uz']) }}" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <label>Описание (Русский)</label>
            <textarea name="short_desc[ru]" class="form-control">{{ old('short_desc.ru', $product->short_desc['ru'] ?? '') }}</textarea>
        </div>
        <br>
        <div class="mb-3">
            <label>Описание (Oʻzbek)</label>
            <textarea name="short_desc[uz]" class="form-control">{{ old('short_desc.uz', $product->short_desc['uz'] ?? '') }}</textarea>
        </div>
        <br>
        <div class="mb-3">
            <label>Категория (необязательно)</label>
            <input type="text" name="category" value="{{ old('category', $product->category) }}" class="form-control">
        </div>
        <br>
        <div class="mb-3">
            <label>Текущее изображение:</label><br>
            <img src="{{ asset($product->image) }}" alt="Product Image" width="150" class="mb-2">
        </div>
        <div class="mb-3">
            <label>Новое изображение (если хотите заменить)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Обновить</button>
    </form>
</div>
