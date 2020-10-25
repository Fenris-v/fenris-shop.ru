@foreach($goods ?? collect() as $good)
    <div class="col-md-3">
        <div>
            <div class="mb-1">
                <img src="{{ $good->images->first()->url }}"
                     alt="{{ $good->images->first()->alt }}"
                     title="{{ $good->images->first()->title }}">
            </div>
            <a class="text-uppercase text-body px-1 d-flex"
               href="{{ route('goodShow', $good->slug) }}">{{ $good->name }}</a>
            <div class="text-primary px-1">
                ${{ $good->price / 100 }}
            </div>
        </div>
    </div>
@endforeach
