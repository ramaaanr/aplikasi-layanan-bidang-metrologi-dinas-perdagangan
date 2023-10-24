@extends('layouts.layout-pengelolaan-layanan')

@section('main-content')
<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - START -->

<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - END -->


<div class="card-content-layanan">
  @livewire('components.cards.card-form', ['tera' => $tera, 'isOnUpdate' => true])
</div>
@endsection