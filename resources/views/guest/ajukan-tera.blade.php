@extends('layouts.layout-layanan')

@section('main-content')
<div class="card-content-layanan">
  @if ($tera == 'tum-bbm')
  @livewire('components.cards.card-form-tum-bbm', ['tera' => $tera, 'isOnUpdate' => false])
  @else
  @livewire('components.cards.card-form', ['tera' => $tera, 'isOnUpdate' => false])
  @endif
</div>
@endsection