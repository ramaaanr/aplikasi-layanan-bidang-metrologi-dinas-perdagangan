@extends('layouts.master')

@section('content')
<main>
  <section class="hero h-screen bg-cover bg-center" style="background-image: url('images/hero.jpg')">
    <div class="login-container absolute right-0 top-0 pr-6 pt-8">
      <a href="/login" class="button-light-grey">Admin Login</a>
    </div>
    <div class="hero-gradient__container bg-gradient-to-t from-primary h-full py-8 px-2 sm:px-8 md:px-16 lg:px-44 md:pb-24 flex flex-col justify-between md:justify-end ">
      <h2 class="subtitle sm:text-lg md:text-xl text-light border-l-2 md:border-l-4 border-primary mb-2 font-medium pl-2">
        Dinas Perdagangan
        Kota Banjarbaru</h2>
      <div class="title__container">
        <h1 class="title  text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-light font-bold text-center sm:text-left">
          Pelayanan Tera dan Tera Ulang Online
        </h1>
        <div class="hint__container lg:hidden h-12 flex items-center justify-center gap-x-3 mt-4">
          <p class="hint-text text-light">Scroll untuk memilih layanan</p>
          <svg class="hint-icon self-start animate-wiggle fill-light" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M245-400q-51-64-78-141t-27-159q0-27 3-54t9-54l-70 70-42-42 140-140 140 140-42 42-65-64q-7 25-10 50.5t-3 51.5q0 70 22.5 135.5T288-443l-43 43Zm413 273q-23 8-46.5 7.5T566-131L304-253l18-40q10-20 28-32.5t40-14.5l68-5-112-307q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l148 407-100 7 131 61q7 3 15 3.5t15-1.5l157-57q31-11 45-41.5t3-61.5l-55-150q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l55 150q23 63-4.5 122.5T815-184l-157 57Zm-90-265-54-151q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l55 150-76 28Zm113-41-41-113q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l41 112-75 28Zm8 78Z" />
          </svg>
        </div>
      </div>
    </div>
  </section>
  <section class="layanan px-8 sm:px-8 md:px-16 lg:px-44 pb-8 bg-primary">
    <h3 class=" font-semibold text-light text-center md:text-lg">Layanan tera dan tera ulang</h3>
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 my-2">
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/tum-bbm">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M133.906 68.2808C133.906 72.17 .66 133.906 72.0903 133.906 79.5189C125.219 94.2956 99.619 106.186 99.619 106.186C99.619 106.186 73.9768 94.43 65.335 79.44C65.335 75.9768 65.335 72.0138 65.335 68.2808C93.222 68.2808 79.7729 68.2808 98.7611 68.2808C117.749 68.2808 98.7611 68.2808 133.906 68.2808Z" fill="#F2BE22" />
            <path d="M69.5996 72.6714C69.5996 72.6714 69.5996 97.2476 69.5996 110.005M130.4 72.6714C130.4 72.6714 130.4 97.2476 130.4 110.005" stroke="#F2BE22" stroke-width="8" />
            <rect x="65.333" y="60.9331" width="69.3333" height="14.9333" fill="#F2BE22" />
            <path d="M65.333 60.9332C65.333 49.7641 73.732 40.3815 84.833 39.1496L99.9997 37.4666L115.166 39.1496C126.267 40.3815 134.666 49.7641 134.666 60.9332H65.333Z" fill="#F2BE22" />
            <path d="M99.8096 41.8046V41.8046C99.8096 35.2824 105.097 29.9951 111.619 29.9951H127.333C137.275 29.9951 145.333 38.054 145.333 47.9951V109.995" stroke="#F2BE22" stroke-width="8" />
            <path d="M65.333 60.9331H134.666V65.9998L65.333 66.2664V60.9331Z" fill="white" />
            <path d="M65.333 74.2664H134.666V79.6559H65.333V74.2664Z" fill="white" />
            <path d="M84.3809 106.948H114.857" stroke="#F2BE22" stroke-width="8" />
          </svg>
          <span class="text-primary">
            TUM BBM
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-elektronik-kelas">
          <svg class="mx-auto" width="210" height="140" viewBox="0 0 210 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M146.559 46.1765H63.4412C61.5407 46.1765 60 47.7172 60 49.6177C60 51.5182 61.5407 53.0589 63.4412 53.0589H146.559C148.459 53.0589 150 51.5182 150 49.6177C150 47.7172 148.459 46.1765 146.559 46.1765Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M142 62.0588H68C63.5817 62.0588 60 65.6406 60 70.0588V85.8235C60 90.2418 63.5817 93.8235 68 93.8235H105H142C146.418 93.8235 150 90.2418 150 85.8235V70.0588C150 65.6406 146.418 62.0588 142 62.0588Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M120.824 62.0588H89.1768C84.7585 62.0588 81.1768 65.6406 81.1768 70.0588V70.4706C81.1768 74.8889 84.7585 78.4706 89.1768 78.4706H105H120.824C125.242 78.4706 128.824 74.8889 128.824 70.4706V70.0588C128.824 65.6406 125.242 62.0588 120.824 62.0588Z" fill="white" stroke="#F2BE22" stroke-width="8" />
            <path d="M97.5883 85.8823C97.5883 87.6366 96.1661 89.0588 94.4118 89.0588C92.6575 89.0588 91.2354 87.6366 91.2354 85.8823C91.2354 84.128 92.6575 82.7058 94.4118 82.7058C96.1661 82.7058 97.5883 84.128 97.5883 85.8823Z" fill="white" />
            <ellipse cx="105" cy="85.8823" rx="3.17647" ry="3.17647" fill="white" />
            <ellipse cx="115.589" cy="85.8823" rx="3.17647" ry="3.17647" fill="white" />
          </svg>

          <span class="text-primary">
            Timbangan Elektronik Kelas
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-jembatan">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M83.3313 87.5434V91.2658C83.3313 92.3205 82.9746 93.2046 82.2611 93.9181C81.5477 94.6315 80.6636 94.9883 79.6089 94.9883H75.8865C74.8318 94.9883 73.9477 94.6315 73.2343 93.9181C72.5208 93.2046 72.1641 92.3205 72.1641 91.2658V61.4864L79.9812 39.1519C80.3534 38.0351 81.0203 37.1356 81.982 36.4531C82.9436 35.7707 84.0138 35.4294 85.1926 35.4294H126.139C127.318 35.4294 128.388 35.7707 129.35 36.4531C130.311 37.1356 130.978 38.0351 131.351 39.1519L139.168 61.4864V91.2658C139.168 92.3205 138.811 93.2046 138.098 93.9181C137.384 94.6315 136.5 94.9883 135.445 94.9883H131.723C130.668 94.9883 129.784 94.6315 129.071 93.9181C128.357 93.2046 128 92.3205 128 91.2658V87.5434H83.3313ZM82.5869 54.0416H128.745L124.836 42.8743H86.4954L82.5869 54.0416ZM88.915 76.3761C90.466 76.3761 91.7844 75.8333 92.8701 74.7476C93.9558 73.6619 94.4986 72.3435 94.4986 70.7925C94.4986 69.2415 93.9558 67.9231 92.8701 66.8374C91.7844 65.7517 90.466 65.2089 88.915 65.2089C87.364 65.2089 86.0456 65.7517 84.9599 66.8374C83.8742 67.9231 83.3313 69.2415 83.3313 70.7925C83.3313 72.3435 83.8742 73.6619 84.9599 74.7476C86.0456 75.8333 87.364 76.3761 88.915 76.3761ZM122.417 76.3761C123.968 76.3761 125.286 75.8333 126.372 74.7476C127.458 73.6619 128 72.3435 128 70.7925C128 69.2415 127.458 67.9231 126.372 66.8374C125.286 65.7517 123.968 65.2089 122.417 65.2089C120.866 65.2089 119.547 65.7517 118.462 66.8374C117.376 67.9231 116.833 69.2415 116.833 70.7925C116.833 72.3435 117.376 73.6619 118.462 74.7476C119.547 75.8333 120.866 76.3761 122.417 76.3761Z" fill="#F2BE22" />
            <path d="M60.666 91.4457V96.5707C60.666 100.989 64.2477 104.571 68.666 104.571H142.666C147.084 104.571 150.666 100.989 150.666 96.5707V91.3354" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
          </svg>
          <span class="text-primary">
            Timbangan Jembatan
          </span></a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-pegas">
          <svg class="mx-auto" width="210" height="140" viewBox="0 0 210 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_431_162)">
              <mask id="mask0_431_162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="41" y="56" width="85" height="85">
                <rect x="77.3555" y="56.991" width="60" height="60" transform="rotate(36.1128 77.3555 56.991)" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_431_162)">
                <path d="M69.2453 114.357C66.3618 112.253 64.6617 109.436 64.1451 105.905C63.6286 102.373 64.443 99.1374 66.5886 96.1965L70.6758 90.5941L74.1361 93.1185L71.5614 96.6476L70.0488 98.7209C68.6327 100.662 68.0981 102.818 68.445 105.189C68.7918 107.56 69.9168 109.439 71.8199 110.828C73.723 112.216 75.8564 112.714 78.2201 112.32C80.5837 111.927 82.4736 110.76 83.8897 108.819L87.9769 103.216C87.2392 102.047 86.8804 100.783 86.9004 99.423C86.9204 98.0632 87.3381 96.8245 88.1534 95.707C88.9687 94.5894 90.0207 93.8136 91.3095 93.3794C92.5982 92.9453 93.9118 92.901 95.2503 93.2466L98.7105 95.771C99.4482 96.9401 99.807 98.2045 99.787 99.5643C99.767 100.924 99.3493 102.163 98.534 103.28C97.7187 104.398 96.6613 105.181 95.3618 105.63C94.0623 106.079 92.7541 106.116 91.4371 105.741L87.3499 111.343C85.2043 114.284 82.3714 116.047 78.8511 116.633C75.3307 117.219 72.1288 116.461 69.2453 114.357Z" fill="#F2BE22" />
              </g>
              <path d="M136.805 41.3189L136.167 40.8532C132.598 38.2492 127.593 39.0317 124.989 42.6011L96.2499 81.9938C93.6459 85.5631 94.4285 90.5676 97.9978 93.1716L98.6361 93.6373C102.205 96.2413 107.21 95.4588 109.814 91.8895L138.553 52.4968C141.157 48.9274 140.375 43.9229 136.805 41.3189Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M90.4736 89.9097L104.038 99.8054" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M145.034 43.6123L131.47 33.7166" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M128.087 45.6194L100.718 82.8566" stroke="white" stroke-width="8" stroke-linecap="round" />
              <path d="M149.856 34.2856C147.742 37.1829 143.68 37.8181 140.783 35.7043C137.885 33.5906 137.25 29.5283 139.364 26.6309C141.478 23.7336 145.54 23.0984 148.437 25.2122C151.335 27.3259 151.97 31.3882 149.856 34.2856Z" stroke="#F2BE22" stroke-width="8" />
            </g>
            <defs>
              <clipPath id="clip0_431_162">
                <rect width="210" height="140" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <span class="text-primary">
            Timbangan Pegas
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-meja">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M150.227 46.9229H117.513C113.094 46.9229 109.513 50.5046 109.513 54.9228V100.769C109.513 105.017 112.957 108.461 117.205 108.461H147.666C152.085 108.461 155.666 104.879 155.666 100.461V81.0057C155.666 78.884 154.824 76.8491 153.323 75.3489L150.317 72.3429C148.817 70.8426 147.974 68.8077 147.974 66.686V65.6211C147.974 63.4994 148.817 61.4646 150.317 59.9643L154.073 56.2083C155.093 55.1882 155.666 53.8047 155.666 52.3621C155.666 49.3581 153.231 46.9229 150.227 46.9229Z" fill="#F2BE22" stroke="#FFFFDD" stroke-width="8" />
            <path d="M117.203 39.2309V31.5386" stroke="white" stroke-width="8" stroke-linecap="square" />
            <path d="M111.765 31.5386H61.1053C58.1013 31.5386 55.666 33.9738 55.666 36.9778C55.666 38.4204 56.2391 39.8039 57.2591 40.824L61.0152 44.58C62.5154 46.0803 63.3583 48.1151 63.3583 50.2369V51.1809C63.3583 53.3738 62.4581 55.4706 60.8683 56.9809L58.156 59.5576C56.5662 61.068 55.666 63.1647 55.666 65.3576V100.461C55.666 104.88 59.2477 108.461 63.666 108.461H109.204C113.623 108.461 117.204 104.88 117.204 100.461V65.6214C117.204 63.4997 116.361 61.4649 114.861 59.9646L111.855 56.9586C110.355 55.4583 109.512 53.4235 109.512 51.3017V50.2369C109.512 48.1151 110.355 46.0803 111.855 44.58L115.611 40.824C116.631 39.8039 117.204 38.4204 117.204 36.9778C117.204 33.9738 114.769 31.5386 111.765 31.5386Z" fill="#F2BE22" stroke="#FFFFDD" stroke-width="8" />
          </svg>

          <span class="text-primary">
            Timbangan Meja
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-cepat">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_431_152" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="60" y="25" width="91" height="90">
              <rect x="60.333" y="25" width="90" height="90" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_152)">
              <path d="M67.833 107.5C67.833 100.562 68.7549 94.6406 70.5986 89.7344C72.4424 84.8281 74.8018 80.75 77.6768 77.5C80.5518 74.25 83.7705 71.7344 87.333 69.9531C90.8955 68.1719 94.3955 66.9375 97.833 66.25V55C89.2705 53.9375 82.1299 51.2969 76.4111 47.0781C70.6924 42.8594 67.833 38 67.833 32.5H142.833C142.833 38 139.974 42.8594 134.255 47.0781C128.536 51.2969 121.396 53.9375 112.833 55V66.25C116.271 66.9375 119.771 68.1719 123.333 69.9531C126.896 71.7344 130.114 74.25 132.989 77.5C135.864 80.75 138.224 84.8281 140.067 89.7344C141.911 94.6406 142.833 100.562 142.833 107.5H120.333V100H134.864C133.739 90.5 130.192 83.625 124.224 79.375C118.255 75.125 111.958 73 105.333 73C98.708 73 92.4111 75.125 86.4424 79.375C80.4736 83.625 76.9268 90.5 75.8018 100H90.333V107.5H67.833ZM105.333 107.5C103.271 107.5 101.505 106.766 100.036 105.297C98.5674 103.828 97.833 102.062 97.833 100C97.833 98.9375 98.0361 97.9688 98.4424 97.0938C98.8486 96.2187 99.3955 95.4375 100.083 94.75C101.583 93.25 104.114 91.6719 107.677 90.0156C111.239 88.3594 115.458 86.6875 120.333 85C118.583 89.875 116.896 94.0937 115.271 97.6562C113.646 101.219 112.083 103.75 110.583 105.25C109.896 105.937 109.114 106.484 108.239 106.891C107.364 107.297 106.396 107.5 105.333 107.5Z" fill="#F2BE22" />
            </g>
          </svg>

          <span class="text-primary">
            Timbangan Cepat
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-bobot-ingsut">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M129.827 40.9387H137.771L147.833 40.9387" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M116.058 37.2314L116.058 42.3716L116.058 48.8825" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M82.2647 41.071L62.833 41.071H102.023L82.2647 41.071ZM82.2647 41.071V114.42M82.2647 114.42H62.833H102.023H82.2647Z" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M82.1631 41.2034V33.5803C82.1631 29.162 85.7448 25.5803 90.1631 25.5803H130.565C134.983 25.5803 138.565 29.162 138.565 33.5803V39.6146" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
          </svg>

          <span class="text-primary">
            Timbangan Bobot Ingsut
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-sentisimal">
          <svg class="mx-auto" width="210" height="140" viewBox="0 0 210 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M132.58 64.9192H115.161C113.558 64.9192 112.258 63.6194 112.258 62.016C112.258 60.4126 113.558 59.1128 115.161 59.1128H132.58C134.184 59.1128 135.484 60.4126 135.484 62.016C135.484 63.6194 134.184 64.9192 132.58 64.9192Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M115.161 63.758L124.014 40.5322L132.58 63.758" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M123.871 39.371V27.7581" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M132.581 31.8225H150" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M81.3048 31.8225L60 31.8225H115.161L81.3048 31.8225ZM81.3048 31.8225V112.242M81.3048 112.242H60H102.968H81.3048Z" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <span class="text-primary">
            Timbangan Sensitisimal
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/pompa-ukur-bbm">

          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_431_214" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="50" y="15" width="111" height="110">
              <rect x="50.666" y="15" width="110" height="110" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_214)">
              <path d="M69 111.25V37.9167C69 35.3958 69.8976 33.2378 71.6927 31.4427C73.4878 29.6476 75.6458 28.75 78.1667 28.75H105.667C108.188 28.75 110.345 29.6476 112.141 31.4427C113.936 33.2378 114.833 35.3958 114.833 37.9167V70H119.417C121.938 70 124.095 70.8976 125.891 72.6927C127.686 74.4879 128.583 76.6458 128.583 79.1667V99.7917C128.583 101.09 129.023 102.179 129.901 103.057C130.78 103.936 131.868 104.375 133.167 104.375C134.465 104.375 135.554 103.936 136.432 103.057C137.311 102.179 137.75 101.09 137.75 99.7917V66.7917C137.062 67.1736 136.337 67.4219 135.573 67.5365C134.809 67.651 134.007 67.7083 133.167 67.7083C129.958 67.7083 127.247 66.6007 125.031 64.3854C122.816 62.1701 121.708 59.4583 121.708 56.25C121.708 53.8056 122.377 51.6094 123.714 49.6615C125.05 47.7135 126.826 46.3194 129.042 45.4792L119.417 35.8542L124.229 31.0417L141.188 47.5417C142.333 48.6875 143.193 50.0243 143.766 51.5521C144.339 53.0799 144.625 54.6458 144.625 56.25V99.7917C144.625 103 143.517 105.712 141.302 107.927C139.087 110.142 136.375 111.25 133.167 111.25C129.958 111.25 127.247 110.142 125.031 107.927C122.816 105.712 121.708 103 121.708 99.7917V76.875H114.833V111.25H69ZM78.1667 60.8333H105.667V37.9167H78.1667V60.8333ZM133.167 60.8333C134.465 60.8333 135.554 60.3941 136.432 59.5156C137.311 58.6372 137.75 57.5486 137.75 56.25C137.75 54.9514 137.311 53.8628 136.432 52.9844C135.554 52.1059 134.465 51.6667 133.167 51.6667C131.868 51.6667 130.78 52.1059 129.901 52.9844C129.023 53.8628 128.583 54.9514 128.583 56.25C128.583 57.5486 129.023 58.6372 129.901 59.5156C130.78 60.3941 131.868 60.8333 133.167 60.8333Z" fill="#F2BE22" />
            </g>
          </svg>

          <span class="text-primary">
            Pompa Ukur BBM
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/dacin">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M58.0473 60.3868H33.9044C31.932 60.3868 30.333 58.7878 30.333 56.8154C30.333 54.8429 31.932 53.244 33.9044 53.244H58.9044C62.8493 53.244 66.0473 50.046 66.0473 46.1011V42.5297C66.0473 40.5572 67.6463 38.9583 69.6187 38.9583C71.5912 38.9583 73.1902 40.5572 73.1902 42.5297V46.1011C73.1902 50.046 76.3881 53.244 80.333 53.244H176.762C178.734 53.244 180.333 54.8429 180.333 56.8154C180.333 58.7878 178.734 60.3868 176.762 60.3868H81.1902C76.7719 60.3868 73.1902 63.9685 73.1902 68.3868V78.244C73.1902 80.2164 71.5912 81.8154 69.6187 81.8154C67.6463 81.8154 66.0473 80.2164 66.0473 78.244V68.3868C66.0473 63.9685 62.4656 60.3868 58.0473 60.3868Z" fill="#F2BE22" stroke="#F2BE22" />
            <path d="M58.9043 103.244L69.6186 77.5295L80.3329 103.244H58.9043Z" stroke="#F2BE22" stroke-width="8" />
            <path d="M78.9046 105.387H60.3331C58.3607 105.387 56.7617 106.986 56.7617 108.958C56.7617 110.931 58.3607 112.53 60.3331 112.53H78.9046C80.877 112.53 82.476 110.931 82.476 108.958C82.476 106.986 80.877 105.387 78.9046 105.387Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M101.761 53.2439H92.4757C90.5033 53.2439 88.9043 54.8429 88.9043 56.8153C88.9043 58.7878 90.5033 60.3868 92.4757 60.3868H101.761C103.734 60.3868 105.333 58.7878 105.333 56.8153C105.333 54.8429 103.734 53.2439 101.761 53.2439Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M50.3327 53.2439H41.047C39.0746 53.2439 37.4756 54.8429 37.4756 56.8153C37.4756 58.7878 39.0746 60.3868 41.047 60.3868H50.3327C52.3052 60.3868 53.9042 58.7878 53.9042 56.8153C53.9042 54.8429 52.3052 53.2439 50.3327 53.2439Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <circle cx="69.6387" cy="36.2202" r="4.75" stroke="#F2BE22" stroke-width="8" />
          </svg>

          <span class="text-primary">
            Dacin
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/neraca">
          <svg class="mx-auto" width="210" height="140" viewBox="0 0 210 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_431_225" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="55" y="20" width="100" height="100">
              <rect x="55" y="20" width="100" height="100" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_225)">
              <path d="M63.333 107.5V99.1666H100.833V52.6041C99.0275 51.9791 97.465 51.0069 96.1455 49.6874C94.8261 48.368 93.8538 46.8055 93.2288 44.9999H79.9997L92.4997 74.1666C92.4997 77.6388 91.0761 80.5902 88.2288 83.0207C85.3816 85.4513 81.9441 86.6666 77.9163 86.6666C73.8886 86.6666 70.4511 85.4513 67.6038 83.0207C64.7566 80.5902 63.333 77.6388 63.333 74.1666L75.833 44.9999H67.4997V36.6666H93.2288C94.0622 34.236 95.5552 32.2395 97.708 30.677C99.8608 29.1145 102.291 28.3333 105 28.3333C107.708 28.3333 110.139 29.1145 112.291 30.677C114.444 32.2395 115.937 34.236 116.771 36.6666H142.5V44.9999H134.166L146.666 74.1666C146.666 77.6388 145.243 80.5902 142.396 83.0207C139.548 85.4513 136.111 86.6666 132.083 86.6666C128.055 86.6666 124.618 85.4513 121.771 83.0207C118.923 80.5902 117.5 77.6388 117.5 74.1666L130 44.9999H116.771C116.146 46.8055 115.173 48.368 113.854 49.6874C112.534 51.0069 110.972 51.9791 109.166 52.6041V99.1666H146.666V107.5H63.333ZM124.271 74.1666H139.896L132.083 56.0416L124.271 74.1666ZM70.1038 74.1666H85.7288L77.9163 56.0416L70.1038 74.1666ZM105 44.9999C106.18 44.9999 107.17 44.6006 107.968 43.802C108.767 43.0034 109.166 42.0138 109.166 40.8333C109.166 39.6527 108.767 38.6631 107.968 37.8645C107.17 37.0659 106.18 36.6666 105 36.6666C103.819 36.6666 102.83 37.0659 102.031 37.8645C101.232 38.6631 100.833 39.6527 100.833 40.8333C100.833 42.0138 101.232 43.0034 102.031 43.802C102.83 44.6006 103.819 44.9999 105 44.9999Z" fill="#F2BE22" />
            </g>
          </svg>


          <span class="text-primary">
            Neraca
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/takaran-basah-kering">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M132.444 30.0125H71.5054C68.6942 30.0125 66.76 32.8361 67.7756 35.4575L69.7786 40.6275C69.9571 41.0883 70.0487 41.5783 70.0487 42.0725V105.987C70.0487 108.196 71.8396 109.987 74.0487 109.987H123.203C125.412 109.987 127.203 108.196 127.203 105.987V44.451C127.203 43.1129 127.872 41.8635 128.986 41.1218L134.662 37.3416C137.956 35.1473 136.403 30.0125 132.444 30.0125Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M77.9756 60.7695H102.324" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M77.9756 73.0769H88.6889" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M77.9756 97.6907H88.6889" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M77.9756 85.3838H102.324" stroke="white" stroke-width="8" stroke-linecap="round" />
          </svg>


          <span class="text-primary">
            Takaran Basah Kering
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/meter-kayu">
          <svg class="mx-auto" width="211" height="140" viewBox="0 0 211 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M147.491 46.7124C135.411 34.6301 130.036 29.2292 127.655 26.8401C126.517 25.6979 125.049 25.7471 123.908 26.8866C115.729 35.0544 82.7702 67.9713 63.1411 87.6483C61.5827 89.2105 61.5967 91.7278 63.157 93.2882L82.05 112.181C83.6121 113.743 86.1448 113.743 87.7069 112.181L147.504 52.3836C149.067 50.8215 149.053 48.2748 147.491 46.7124Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M72.6064 86.3738L84.8792 98.6465" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M88.9697 70.01L101.242 82.2827" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M105.333 53.6465L117.606 65.9192" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M121.696 37.283L133.969 49.5557" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M80.7881 78.1919L88.9699 86.3737" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M97.1514 61.8284L105.333 70.0102" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M113.515 45.4646L121.696 53.6464" stroke="white" stroke-width="4" stroke-linecap="round" />
          </svg>

          <span class="text-primary">
            Meter Kayu
          </span>
        </a>
      </li>
    </ul>
  </section>
  <footer class="bg-dark px-11 flex py-1 justify-between md:justify-center gap-x-2">
    <p class="text-xs">
      © 2023 Dinas Perdagangan Kota Banjarbaru
    </p>
    <img src="{{ asset('/images/logo-dinas.png') }}" class="h-4" alt="">

  </footer>
</main>
@endsection