@extends('layouts.layout-pengelolaan-layanan')

@section('main-content')
@if (session('error'))
@include('components.alert-error', ['tera' => $tera, 'message' => session('error')])
@endif
<div class="card-content-layanan">
  @if ($tera == 'tum-bbm')
  @livewire('print-tera-tum-bbm-preview', ['tera' => $tera])
  @else
  @livewire('print-tera-preview', ['tera' => $tera])
  @endif
</div>
@endsection