  @extends('layouts.layout-pengelolaan-layanan')

  @section('main-content')
  @if (session('error'))
  @include('components.alert-error', ['tera' => $tera, 'message' => session('error')])
  @endif
  <div class="card-content-layanan">
    @livewire('components.cards.card-form-kendaraan', ['isOnUpdate' => $isOnUpdate])
  </div>
  @endsection