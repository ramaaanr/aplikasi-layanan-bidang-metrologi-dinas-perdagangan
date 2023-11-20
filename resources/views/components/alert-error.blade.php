<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
  class="fixed bg-dark-grey bg-opacity-60 top-0 left-0 right-0 z-50  w-full flex justify-center  content-center flex-wrap p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full">
  <div class="relative w-full max-w-2xl max-h-full ">
    <!-- Modal content -->
    <div class="relative bg-light rounded-lg shadow ">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-dark-grey">
          {{$message['title']}}
        </h3>

      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">

        <p class="text-base  text-gray-500">
          {{$message['header_content']}}
        </p>
        <p>{{$message['body_content']}}</p>
      </div>
      <!-- Modal footer -->
      <div class="flex justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <a href="/layanan/data-tera/{{$tera}}"
          class="text-white bg-secondary hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-light-grey font-medium rounded-lg text-base px-5 py-2.5 text-center ">Kembali
          Ke Halaman Data Tera</a>
      </div>
    </div>
  </div>
</div>