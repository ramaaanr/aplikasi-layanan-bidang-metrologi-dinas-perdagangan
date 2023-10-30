@extends('layouts.layout-pengelolaan-layanan')

@section('main-content')
@if (session('error'))
@include('components.alert-error', ['tera' => $tera, 'message' => session('error')])
@endif
<div class="card-content-layanan">
  @livewire('print-tera-preview', ['tera' => $tera])
</div>
@endsection