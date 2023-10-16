@extends('layouts.layout-layanan')

@section('main-content')
<div class="card-content-layanan">
  @livewire('components.cards.card-form', ['tera' => $tera])
</div>
@endsection