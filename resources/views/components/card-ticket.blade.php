<div class="mt-4">
    @foreach ($tickets as $ticket)
    <div class="card w-100 mb-2">
        <div class="card-header d-flex justify-content-between">
            <p>{{ $ticket["name"] }}</p>
            <p>IDR {{ $ticket["price"]}}</p>
        </div>
        <div class="card-body">
          {{-- <h5 class="card-title">{{ $ticket["keberangkatan"]}} -> {{ $ticket["tujuan"]}}</h5>
          <p class="card-text">{{ $ticket["start"]}} -> {{ $ticket["end"]}}</p> --}}
          <a href="/tiket/{{$ticket['id']}}" class="btn btn-primary">Pilih Tiket</a>
        </div>
      </div>
    @endforeach
</div>