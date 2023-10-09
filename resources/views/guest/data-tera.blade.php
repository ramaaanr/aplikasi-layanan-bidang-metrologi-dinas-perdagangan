@extends('guest.layout-layanan')

@section('main-content')
<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - START -->
@if ($success)
<script type="module">
window.Swal.fire({
  icon: 'success',
  title: '{{$kodePengajuan}}',
  text: 'Tera anda sedang diajukan, simpan kode pengajuan untuk diberitahukan ke petugas',
  showConfirmButton: true,
  confirmButtonText: 'Selesai',
  allowOutsideClick: false
})
</script>
@endif
<!-- ⚠️ SweetAlert Active when Ajukan Tera Success - END -->


<div class="card-content-layanan">
  @livewire('components.cards.card-table', ['tera' => $tera, 'lazy' => true])
</div>
@endsection