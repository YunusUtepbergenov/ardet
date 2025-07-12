<div>
    <div class="row gy-4 isotope-container">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $product->category }}">
                <img src="{{ asset($product->image) }}" class="img-fluid" alt="Образцы строительных материалов от Ardet">
                <div class="portfolio-info">
                    <h4>{{ $product->getTranslated('title') }}</h4>
                    <p>{{ $product->getTranslated('short_desc') }}</p>
                    <a href="{{ asset($product->image) }}" data-gallery="portfolio-gallery-{{ $product->category }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
            </div>
        @endforeach        
    </div>

    @if($products->count() < $totalCount)
        {{-- ✅ Put inside a row so it behaves properly in grid --}}
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button wire:click="loadMore" wire:loading.attr="disabled" class="btn btn-primary">
                    Загрузить еще
                </button>
            </div>
        </div>
    @endif
</div>
