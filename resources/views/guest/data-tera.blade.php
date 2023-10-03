@extends('guest.layout-layanan')

@section('main-content')
<div class="card-content-layanan">
  @include('components.cards.card-table', ['page' => $layanan])
</div>
@endsection