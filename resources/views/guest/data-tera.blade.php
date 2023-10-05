@extends('guest.layout-layanan')

@section('main-content')
    <div class="card-content-layanan">
        @livewire('components.cards.card-table', ['tera' => $tera, 'lazy' => true])
    </div>
@endsection
