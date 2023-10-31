@extends('layouts.layout-pengelolaan-layanan')

@section('main-content')
<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - START -->

<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - END -->


<div class="card-content-layanan">
  @if ($tera == 'tum-bbm')
  @livewire('components.cards.card-form-tum-bbm', ['isOnUpdate' => true])
  @else
  @livewire('components.cards.card-form', ['tera' => $tera, 'isOnUpdate' => true])
  @endif
</div>
@endsection