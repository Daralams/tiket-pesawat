<div class="mt-4">
    @foreach ($tickets as $ticket)
    <div class="card w-100 mb-2">
        <div class="card-header d-flex justify-content-between">
            <p>{{ $ticket->name }}</p>
            <p>IDR {{ $ticket->price_ekonomi}}</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $ticket->airport->take_off}} -> {{ $ticket->airport->landing}}</h5>
          <h5 class="card-title">{{ $ticket->airport->take_off_time}} -> {{ $ticket->airport->landing_time}}</h5>
          <a href="/tiket/{{$ticket['id']}}" class="btn btn-primary">Pilih Tiket</a>
        </div>
      </div>
    @endforeach
</div>