<div class="flex flex-wrap justify-center content-center h-full w-full">
  <form wire:submit.prevent="doLogin" class="p-4 flex flex-col fex-wrap">
    <h2 class="text-3xl text-white font-bold text-center">Selamat Datang</h2>
    <p class="text-base text-center text-grey mb-4">Silahkan Login terlebih dahulu</p>

    <div class="input__container mb-2 flex flex-wrap flex-col w-80">
      <input type="text" id="username" class="w-full shadow-md border-2 border-grey hover:ring-2 hover:ring-light-grey focus:ring-primary outline-none rounded-md px-4 py-2
                @error('username')
                ring-2
                ring-secondary
                @enderror
                " placeholder="username" wire:model.live='username'>
      <label for="username" class="text-secondary text-sm pt-1 pl-2">
        @error('username')
        {{ $message }}
        @enderror
      </label>

    </div>

    <div class="input__container relative mb-2 flex flex-wrap flex-col w-80" x-data="{ show: false }">
      <input type="password" x-bind:type="show ? 'text' : 'password'" class="w-full shadow-md  border-2 border-grey hover:ring-2 hover:ring-light-grey focus:ring-primary outline-none rounded-md px-4 py-2
                @error('password')
                ring-2
                ring-secondary
                @enderror
                
                " placeholder="password" wire:model.live='password'>
      <button class="absolute right-4 top-2" x-on:click.prevent="show = !show">
        <svg :class="{ 'hidden': !show, 'block': show }" class="fill-grey" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
        </svg>

        <svg :class="{ 'hidden': show, 'block': !show }" class="fill-grey" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M792-56 624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM480-320q11 0 20.5-1t20.5-4L305-541q-3 11-4 20.5t-1 20.5q0 75 52.5 127.5T480-320Zm292 18L645-428q7-17 11-34.5t4-37.5q0-75-52.5-127.5T480-680q-20 0-37.5 4T408-664L306-766q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302ZM587-486 467-606q28-5 51.5 4.5T559-574q17 18 24.5 41.5T587-486Z" />
        </svg>
      </button>
      <label for="password" class="text-secondary text-sm pt-1 pl-2">
        @error('password')
        {{ $message }}
        @enderror
      </label>
    </div>

    <button class="mt-4 w-80 button-primary" type="submit">Login</button>
  </form>
  @include('sweetalert::alert')
</div>