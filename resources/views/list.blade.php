<x-main>
        @foreach ($monopattini as $item) 
        <div class="card" style="width: 18rem;">
            <a href="{{route('detail',['id'=>$item['id']])}}" class="p-2">
            <img src="{{ $item['image'] }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{ $item['name'] }}</p>
            </div>
            </a>
          </div>
        @endforeach
</x-main>