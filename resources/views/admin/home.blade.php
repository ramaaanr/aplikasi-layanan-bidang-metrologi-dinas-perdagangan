@extends('layouts.layout-pengelolaan-layanan')

@section('main-content')
<div class="card-content-layanan">
  @livewire('components.cards.card-overdate-tera', ['lazy' => true])
</div>
@endsection