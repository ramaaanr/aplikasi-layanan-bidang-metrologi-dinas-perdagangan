@extends('layouts.master')

@section('content')
<main class="flex">
  <aside class="fixed top-0 left-0 z-40">
    @include('components.sidebar', ['page' => 'halaman-utama'])
  </aside>

  <section class="user__page bg-light-grey w-screen p-4 pt-44 flex flex-col gap-y-4 ml-72">
    <div class="card-header fixed top-8 left-76 right-4 z-40">
      @livewire('components.cards.card-header', [
      'title' => 'halaman-utama',
      'name' => 'johny anjae',
      'page' => 'halaman-utama',
      ])
    </div>
    <div class="card-profile">
      @include('components.cards.card-profile', [
      'name' => 'Joni Dosa',
      'nip' => '908654686575875617',
      'jabatan' => 'Staff Admin',
      'total_data' => 300,
      ])
    </div>
    <div class="card-table">
      @livewire('components.cards.card-table')
    </div>
    <div class="card-documentation w-full flex">
      <button class="card button-doc hover:bg-light-2 w-fit flex px-3 py-2 gap-x-2">
        Dokumentasi 
        <svg class="fill-dark-grey" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M450.001-290.001h59.998V-520h-59.998v229.999ZM480-588.461q13.731 0 23.019-9.288 9.288-9.288 9.288-23.019 0-13.73-9.288-23.019-9.288-9.288-23.019-9.288-13.731 0-23.019 9.288-9.288 9.289-9.288 23.019 0 13.731 9.288 23.019 9.288 9.288 23.019 9.288Zm.067 488.46q-78.836 0-148.204-29.92-69.369-29.92-120.682-81.21-51.314-51.291-81.247-120.629-29.933-69.337-29.933-148.173t29.92-148.204q29.92-69.369 81.21-120.682 51.291-51.314 120.629-81.247 69.337-29.933 148.173-29.933t148.204 29.92q69.369 29.92 120.682 81.21 51.314 51.291 81.247 120.629 29.933 69.337 29.933 148.173t-29.92 148.204q-29.92 69.369-81.21 120.682-51.291 51.314-120.629 81.247-69.337 29.933-148.173 29.933ZM480-160q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
        </svg>
      </button>
    </div>
  </section>

</main>
@endsection