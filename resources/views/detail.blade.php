<x-main>
    <div class="card" style="width: 18rem;">
        <img src="{{ $monopattini['image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">"{{ $monopattini['name']}}"</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">"{{ $monopattini['tag']}}"</li>
        </ul>
      </div>
    
</x-main>