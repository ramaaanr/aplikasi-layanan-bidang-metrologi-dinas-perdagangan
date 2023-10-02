<div class="profile-container card py-6 px-8 flex ">
  <div class="profile-detail w-4/6 flex">
    <div class="profile-container__picture">
      <img class="w-60 rounded-full" src="{{ asset('images/profile.jpeg') }}" alt="">
    </div>
    <div class="profile-bio ml-3 w-full h-fit">
      <h3 class="bio-name font-bold text-5xl mb-2">
        <div class="profile-container__bio h-full flex flex-wrap flex-col justify-center">
          {{$name}}
      </h3>
      <div class="bio-detail pl-2 flex w-full">
        <div class="bio-detail__text w-full">
          <p class="bio-nip-label font-semibold text-xl ">NIP</p>
          <p class="bio-nip text-xl  text-grey">{{$nip}}</p>
          <p class="bio-jabatan-label font-semibold text-xl ">Jabatan</p>
          <p class="bio-jabatan text-xl  text-grey">{{$jabatan}}</p>
        </div>
        <div class="edit-button__container flex flex-wrap content-end">
          <button
            class="button-edit-profile text-sm h-fit w-28 border-2 border-grey text-grey fill-grey hover:border-dark-grey hover:text-dark-grey hover:fill-dark-grey rounded-md flex justify-center py-1">
            Edit Profile
            <svg class="ml-1 fill-inherit w-4" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
              width="24">
              <path
                d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z" />
            </svg></button>

        </div>
      </div>
    </div>
  </div>
  <div class="activity border-l-2 border-light-grey pl-4 ml-4 flex flex-col w-2/6">
    <div class="activity-heading flex">
      <div class="heading-text text-3xl font-bold">Aktivitas</div>
      <div class="heading-icon">
        <svg class="h-8 fill-dark-grey ml-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
          width="24">
          <path
            d="m499-287 335-335-52-52-335 335 52 52Zm-261 87q-100-5-149-42T40-349q0-65 53.5-105.5T242-503q39-3 58.5-12.5T320-542q0-26-29.5-39T193-600l7-80q103 8 151.5 41.5T400-542q0 53-38.5 83T248-423q-64 5-96 23.5T120-349q0 35 28 50.5t94 18.5l-4 80Zm280 7L353-358l382-382q20-20 47.5-20t47.5 20l70 70q20 20 20 47.5T900-575L518-193Zm-159 33q-17 4-30-9t-9-30l33-159 165 165-159 33Z" />
        </svg>
      </div>
    </div>
    <p>Total dokumen yang telah diinputkan berjumlah <span class="font-bold">{{$total_data}} dokumen</span></p>

  </div>
</div>