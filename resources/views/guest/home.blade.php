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
          APLIKASI INTANG
        </h1>
        <p class="title  text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-light font-bold text-center sm:text-left">
          Pelayanan Tera dan Tera Ulang Online lewat Aplikasi Intip Timbangan (INTANG)
        </p>

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
    <ul class="grid sm:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 gap-4 my-2">
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/tum-bbm">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M103.906 53.2808C103.906 57.1766 103.906 57.0903 103.906 64.5189C95.2188 79.2956 69.619 91.1855 69.619 91.1855C69.619 91.1855 43.9768 79.43 35.335 64.44C35.335 60.9768 35.335 57.0138 35.335 53.2808C63.222 53.2808 49.7729 53.2808 68.7611 53.2808C87.7494 53.2808 68.7611 53.2808 103.906 53.2808Z" fill="#F2BE22" />
            <path d="M39.5996 57.6714C39.5996 57.6714 39.5996 82.2476 39.5996 95.0047M100.4 57.6714C100.4 57.6714 100.4 82.2476 100.4 95.0047" stroke="#F2BE22" stroke-width="8" />
            <rect x="35.333" y="45.9331" width="69.3333" height="14.9333" fill="#F2BE22" />
            <path d="M35.333 45.9332C35.333 34.7641 43.732 25.3815 54.833 24.1496L69.9997 22.4666L85.1664 24.1496C96.2673 25.3815 104.666 34.7641 104.666 45.9332H35.333Z" fill="#F2BE22" />
            <path d="M69.8096 26.8046V26.8046C69.8096 20.2824 75.0969 14.9951 81.6191 14.9951H97.3334C107.275 14.9951 115.333 23.054 115.333 32.9951V94.9951" stroke="#F2BE22" stroke-width="8" />
            <path d="M35.333 45.9331H104.666V50.9998L35.333 51.2664V45.9331Z" fill="white" />
            <path d="M35.333 59.2664H104.666V64.6559H35.333V59.2664Z" fill="white" />
            <path d="M54.3809 91.9475H84.8571" stroke="#F2BE22" stroke-width="8" />
          </svg>
          <span class="text-primary">
            TUM BBM
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-elektronik-kelas">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="150" height="110" viewBox="0 0 150 110" fill="none">
            <path d="M116.559 31.1765H33.4412C31.5407 31.1765 30 32.7172 30 34.6177C30 36.5182 31.5407 38.0589 33.4412 38.0589H116.559C118.459 38.0589 120 36.5182 120 34.6177C120 32.7172 118.459 31.1765 116.559 31.1765Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M112 47.0588H38C33.5817 47.0588 30 50.6406 30 55.0588V70.8235C30 75.2418 33.5817 78.8235 38 78.8235H75H112C116.418 78.8235 120 75.2418 120 70.8235V55.0588C120 50.6406 116.418 47.0588 112 47.0588Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M90.8238 47.0588H59.1768C54.7585 47.0588 51.1768 50.6406 51.1768 55.0588V55.4706C51.1768 59.8889 54.7585 63.4706 59.1768 63.4706H75.0003H90.8238C95.2421 63.4706 98.8238 59.8889 98.8238 55.4706V55.0588C98.8238 50.6406 95.2421 47.0588 90.8238 47.0588Z" fill="white" stroke="#F2BE22" stroke-width="8" />
            <path d="M67.5883 70.8823C67.5883 72.6366 66.1661 74.0588 64.4118 74.0588C62.6575 74.0588 61.2354 72.6366 61.2354 70.8823C61.2354 69.128 62.6575 67.7058 64.4118 67.7058C66.1661 67.7058 67.5883 69.128 67.5883 70.8823Z" fill="white" />
            <ellipse cx="74.9997" cy="70.8823" rx="3.17647" ry="3.17647" fill="white" />
            <ellipse cx="85.5886" cy="70.8823" rx="3.17647" ry="3.17647" fill="white" />
          </svg>

          <span class="text-primary">
            Timbangan Elektronik Kelas
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-jembatan">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M53.3313 72.5434V76.2658C53.3313 77.3205 52.9746 78.2046 52.2611 78.9181C51.5477 79.6315 50.6636 79.9883 49.6089 79.9883H45.8865C44.8318 79.9883 43.9477 79.6315 43.2343 78.9181C42.5208 78.2046 42.1641 77.3205 42.1641 76.2658V46.4864L49.9812 24.1519C50.3534 23.0351 51.0203 22.1356 51.982 21.4531C52.9436 20.7707 54.0138 20.4294 55.1926 20.4294H96.1392C97.318 20.4294 98.3882 20.7707 99.3498 21.4531C100.311 22.1356 100.978 23.0351 101.351 24.1519L109.168 46.4864V76.2658C109.168 77.3205 108.811 78.2046 108.098 78.9181C107.384 79.6315 106.5 79.9883 105.445 79.9883H101.723C100.668 79.9883 99.7841 79.6315 99.0707 78.9181C98.3572 78.2046 98.0005 77.3205 98.0005 76.2658V72.5434H53.3313ZM52.5869 39.0416H98.7449L94.8364 27.8743H56.4954L52.5869 39.0416ZM58.915 61.3761C60.466 61.3761 61.7844 60.8333 62.8701 59.7476C63.9558 58.6619 64.4986 57.3435 64.4986 55.7925C64.4986 54.2415 63.9558 52.9231 62.8701 51.8374C61.7844 50.7517 60.466 50.2089 58.915 50.2089C57.364 50.2089 56.0456 50.7517 54.9599 51.8374C53.8742 52.9231 53.3313 54.2415 53.3313 55.7925C53.3313 57.3435 53.8742 58.6619 54.9599 59.7476C56.0456 60.8333 57.364 61.3761 58.915 61.3761ZM92.4168 61.3761C93.9678 61.3761 95.2862 60.8333 96.3719 59.7476C97.4576 58.6619 98.0005 57.3435 98.0005 55.7925C98.0005 54.2415 97.4576 52.9231 96.3719 51.8374C95.2862 50.7517 93.9678 50.2089 92.4168 50.2089C90.8658 50.2089 89.5474 50.7517 88.4617 51.8374C87.376 52.9231 86.8332 54.2415 86.8332 55.7925C86.8332 57.3435 87.376 58.6619 88.4617 59.7476C89.5474 60.8333 90.8658 61.3761 92.4168 61.3761Z" fill="#F2BE22" />
            <path d="M30.666 76.4457V81.5707C30.666 85.989 34.2477 89.5707 38.666 89.5707H112.666C117.084 89.5707 120.666 85.989 120.666 81.5707V76.3354" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
          </svg>
          <span class="text-primary">
            Timbangan Jembatan
          </span></a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-pegas">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="150" height="110" viewBox="0 0 150 110" fill="none">
            <g clip-path="url(#clip0_431_162)">
              <mask id="mask0_431_162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="41" width="85" height="85">
                <rect x="47.3555" y="41.991" width="60" height="60" transform="rotate(36.1128 47.3555 41.991)" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_431_162)">
                <path d="M39.2453 99.357C36.3618 97.2533 34.6617 94.4359 34.1451 90.9047C33.6286 87.3735 34.443 84.1374 36.5886 81.1965L40.6758 75.5941L44.1361 78.1185L41.5614 81.6476L40.0488 83.7209C38.6327 85.6619 38.0981 87.8179 38.445 90.1888C38.7918 92.5598 39.9168 94.4395 41.8199 95.8279C43.723 97.2163 45.8564 97.7138 48.2201 97.3203C50.5837 96.9268 52.4736 95.7596 53.8897 93.8186L57.9769 88.2162C57.2392 87.0472 56.8804 85.7827 56.9004 84.423C56.9204 83.0632 57.3381 81.8245 58.1534 80.707C58.9687 79.5894 60.0207 78.8136 61.3095 78.3794C62.5982 77.9453 63.9118 77.901 65.2503 78.2466L68.7105 80.771C69.4482 81.9401 69.807 83.2045 69.787 84.5643C69.767 85.924 69.3493 87.1627 68.534 88.2802C67.7187 89.3978 66.6613 90.181 65.3618 90.6298C64.0623 91.0787 62.7541 91.1156 61.4371 90.7406L57.3499 96.343C55.2043 99.2839 52.3714 101.047 48.8511 101.633C45.3307 102.219 42.1288 101.461 39.2453 99.357Z" fill="#F2BE22" />
              </g>
              <path d="M106.805 26.3189L106.167 25.8532C102.598 23.2492 97.5931 24.0317 94.9891 27.6011L66.2499 66.9938C63.6459 70.5631 64.4285 75.5676 67.9978 78.1716L68.6361 78.6373C72.2055 81.2413 77.21 80.4588 79.814 76.8895L108.553 37.4968C111.157 33.9274 110.375 28.9229 106.805 26.3189Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M60.4736 74.9097L74.0377 84.8054" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M115.034 28.6123L101.47 18.7166" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
              <path d="M98.0869 30.6194L70.7182 67.8566" stroke="white" stroke-width="8" stroke-linecap="round" />
              <path d="M119.856 19.2856C117.742 22.1829 113.68 22.8181 110.783 20.7043C107.885 18.5906 107.25 14.5283 109.364 11.6309C111.478 8.73359 115.54 8.09838 118.437 10.2122C121.335 12.3259 121.97 16.3882 119.856 19.2856Z" stroke="#F2BE22" stroke-width="8" />
            </g>
            <defs>
              <clipPath id="clip0_431_162">
                <rect width="150" height="110" fill="white" />
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
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M120.227 31.9229H87.5127C83.0944 31.9229 79.5127 35.5046 79.5127 39.9228V85.7688C79.5127 90.0172 82.9566 93.4611 87.205 93.4611H117.666C122.085 93.4611 125.666 89.8794 125.666 85.4611V66.0057C125.666 63.884 124.824 61.8491 123.323 60.3489L120.317 57.3429C118.817 55.8426 117.974 53.8077 117.974 51.686V50.6211C117.974 48.4994 118.817 46.4646 120.317 44.9643L124.073 41.2083C125.093 40.1882 125.666 38.8047 125.666 37.3621C125.666 34.3581 123.231 31.9229 120.227 31.9229Z" fill="#F2BE22" stroke="#FAFAFA" stroke-width="8" />
            <path d="M87.2031 24.2309V16.5386" stroke="white" stroke-width="8" stroke-linecap="square" />
            <path d="M81.765 16.5386H31.1053C28.1013 16.5386 25.666 18.9738 25.666 21.9778C25.666 23.4204 26.2391 24.8039 27.2591 25.824L31.0152 29.58C32.5154 31.0803 33.3583 33.1151 33.3583 35.2369V36.1809C33.3583 38.3738 32.4581 40.4706 30.8683 41.9809L28.156 44.5576C26.5662 46.068 25.666 48.1647 25.666 50.3576V85.4614C25.666 89.8797 29.2477 93.4614 33.666 93.4614H79.2043C83.6226 93.4614 87.2043 89.8797 87.2043 85.4614V50.6214C87.2043 48.4997 86.3614 46.4649 84.8612 44.9646L81.8552 41.9586C80.3549 40.4583 79.512 38.4235 79.512 36.3017V35.2369C79.512 33.1151 80.3549 31.0803 81.8552 29.58L85.6112 25.824C86.6312 24.8039 87.2043 23.4204 87.2043 21.9778C87.2043 18.9738 84.7691 16.5386 81.765 16.5386Z" fill="#F2BE22" stroke="#FAFAFA" stroke-width="8" />
          </svg>
          <span class="text-primary">
            Timbangan Meja
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-cepat">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <mask id="mask0_431_152" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="30" y="10" width="91" height="90">
              <rect x="30.333" y="10" width="90" height="90" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_152)">
              <path d="M37.833 92.5C37.833 85.5625 38.7549 79.6406 40.5986 74.7344C42.4424 69.8281 44.8018 65.75 47.6768 62.5C50.5518 59.25 53.7705 56.7344 57.333 54.9531C60.8955 53.1719 64.3955 51.9375 67.833 51.25V40C59.2705 38.9375 52.1299 36.2969 46.4111 32.0781C40.6924 27.8594 37.833 23 37.833 17.5H112.833C112.833 23 109.974 27.8594 104.255 32.0781C98.5361 36.2969 91.3955 38.9375 82.833 40V51.25C86.2705 51.9375 89.7705 53.1719 93.333 54.9531C96.8955 56.7344 100.114 59.25 102.989 62.5C105.864 65.75 108.224 69.8281 110.067 74.7344C111.911 79.6406 112.833 85.5625 112.833 92.5H90.333V85H104.864C103.739 75.5 100.192 68.625 94.2236 64.375C88.2549 60.125 81.958 58 75.333 58C68.708 58 62.4111 60.125 56.4424 64.375C50.4736 68.625 46.9268 75.5 45.8018 85H60.333V92.5H37.833ZM75.333 92.5C73.2705 92.5 71.5049 91.7656 70.0361 90.2969C68.5674 88.8281 67.833 87.0625 67.833 85C67.833 83.9375 68.0361 82.9688 68.4424 82.0938C68.8486 81.2187 69.3955 80.4375 70.083 79.75C71.583 78.25 74.1143 76.6719 77.6768 75.0156C81.2393 73.3594 85.458 71.6875 90.333 70C88.583 74.875 86.8955 79.0937 85.2705 82.6562C83.6455 86.2187 82.083 88.75 80.583 90.25C79.8955 90.9375 79.1143 91.4844 78.2393 91.8906C77.3643 92.2969 76.3955 92.5 75.333 92.5Z" fill="#F2BE22" />
            </g>
          </svg>

          <span class="text-primary">
            Timbangan Cepat
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-bobot-ingsut">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M99.8271 25.9387H107.771L117.833 25.9387" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M86.0576 22.2314L86.0576 27.3716L86.0576 33.8825" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M52.2647 26.071L32.833 26.071H72.023L52.2647 26.071ZM52.2647 26.071V99.42M52.2647 99.42H32.833H72.023H52.2647Z" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M52.1631 26.2034V18.5803C52.1631 14.162 55.7448 10.5803 60.1631 10.5803H100.565C104.983 10.5803 108.565 14.162 108.565 18.5803V24.6146" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
          </svg>

          <span class="text-primary">
            Timbangan Bobot Ingsut
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/timbangan-sentisimal">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="150" height="110" viewBox="0 0 150 110" fill="none">
            <path d="M102.58 49.9192H85.161C83.5576 49.9192 82.2578 48.6194 82.2578 47.016C82.2578 45.4126 83.5576 44.1128 85.161 44.1128H102.58C104.184 44.1128 105.484 45.4126 105.484 47.016C105.484 48.6194 104.184 49.9192 102.58 49.9192Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M85.1611 48.758L94.0136 25.5322L102.58 48.758" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M93.8711 24.371V12.7581" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M102.581 16.8225H120" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M51.3048 16.8225L30 16.8225H85.1613L51.3048 16.8225ZM51.3048 16.8225V97.2419M51.3048 97.2419H30H72.9677H51.3048Z" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <span class="text-primary">
            Timbangan Sensitisimal
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/pompa-ukur-bbm">

          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <mask id="mask0_431_214" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="20" y="0" width="111" height="110">
              <rect x="20.666" width="110" height="110" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_214)">
              <path d="M39 96.25V22.9167C39 20.3958 39.8976 18.2378 41.6927 16.4427C43.4878 14.6476 45.6458 13.75 48.1667 13.75H75.6667C78.1875 13.75 80.3455 14.6476 82.1406 16.4427C83.9358 18.2378 84.8333 20.3958 84.8333 22.9167V55H89.4167C91.9375 55 94.0955 55.8976 95.8906 57.6927C97.6858 59.4879 98.5833 61.6458 98.5833 64.1667V84.7917C98.5833 86.0903 99.0226 87.1788 99.901 88.0573C100.78 88.9358 101.868 89.375 103.167 89.375C104.465 89.375 105.554 88.9358 106.432 88.0573C107.311 87.1788 107.75 86.0903 107.75 84.7917V51.7917C107.062 52.1736 106.337 52.4219 105.573 52.5365C104.809 52.651 104.007 52.7083 103.167 52.7083C99.9583 52.7083 97.2465 51.6007 95.0313 49.3854C92.816 47.1701 91.7083 44.4583 91.7083 41.25C91.7083 38.8056 92.3767 36.6094 93.7135 34.6615C95.0504 32.7135 96.8264 31.3194 99.0417 30.4792L89.4167 20.8542L94.2292 16.0417L111.188 32.5417C112.333 33.6875 113.193 35.0243 113.766 36.5521C114.339 38.0799 114.625 39.6458 114.625 41.25V84.7917C114.625 88 113.517 90.7118 111.302 92.9271C109.087 95.1424 106.375 96.25 103.167 96.25C99.9583 96.25 97.2465 95.1424 95.0313 92.9271C92.816 90.7118 91.7083 88 91.7083 84.7917V61.875H84.8333V96.25H39ZM48.1667 45.8333H75.6667V22.9167H48.1667V45.8333ZM103.167 45.8333C104.465 45.8333 105.554 45.3941 106.432 44.5156C107.311 43.6372 107.75 42.5486 107.75 41.25C107.75 39.9514 107.311 38.8628 106.432 37.9844C105.554 37.1059 104.465 36.6667 103.167 36.6667C101.868 36.6667 100.78 37.1059 99.901 37.9844C99.0226 38.8628 98.5833 39.9514 98.5833 41.25C98.5833 42.5486 99.0226 43.6372 99.901 44.5156C100.78 45.3941 101.868 45.8333 103.167 45.8333Z" fill="#F2BE22" />
            </g>
          </svg>

          <span class="text-primary">
            Pompa Ukur BBM
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/dacin">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <g clip-path="url(#clip0_431_217)">
              <path d="M28.0473 45.3868H3.90444C1.93199 45.3868 0.333008 43.7878 0.333008 41.8154C0.333008 39.8429 1.93199 38.244 3.90444 38.244H28.9044C32.8493 38.244 36.0473 35.046 36.0473 31.1011V27.5297C36.0473 25.5572 37.6463 23.9583 39.6187 23.9583C41.5912 23.9583 43.1902 25.5572 43.1902 27.5297V31.1011C43.1902 35.046 46.3881 38.244 50.333 38.244H146.762C148.734 38.244 150.333 39.8429 150.333 41.8154C150.333 43.7878 148.734 45.3868 146.762 45.3868H51.1902C46.7719 45.3868 43.1902 48.9685 43.1902 53.3868V63.244C43.1902 65.2164 41.5912 66.8154 39.6187 66.8154C37.6463 66.8154 36.0473 65.2164 36.0473 63.244V53.3868C36.0473 48.9685 32.4656 45.3868 28.0473 45.3868Z" fill="#F2BE22" stroke="#F2BE22" />
              <path d="M28.9043 88.2438L39.6186 62.5295L50.3329 88.2438H28.9043Z" stroke="#F2BE22" stroke-width="8" />
              <path d="M48.9046 90.387H30.3331C28.3607 90.387 26.7617 91.9859 26.7617 93.9584C26.7617 95.9308 28.3607 97.5298 30.3331 97.5298H48.9046C50.877 97.5298 52.476 95.9308 52.476 93.9584C52.476 91.9859 50.877 90.387 48.9046 90.387Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
              <path d="M71.7614 38.2439H62.4757C60.5033 38.2439 58.9043 39.8429 58.9043 41.8153C58.9043 43.7878 60.5033 45.3868 62.4757 45.3868H71.7614C73.7339 45.3868 75.3329 43.7878 75.3329 41.8153C75.3329 39.8429 73.7339 38.2439 71.7614 38.2439Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
              <path d="M20.3327 38.2439H11.047C9.07457 38.2439 7.47559 39.8429 7.47559 41.8153C7.47559 43.7878 9.07457 45.3868 11.047 45.3868H20.3327C22.3052 45.3868 23.9042 43.7878 23.9042 41.8153C23.9042 39.8429 22.3052 38.2439 20.3327 38.2439Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
              <circle cx="39.6387" cy="21.2202" r="4.75" stroke="#F2BE22" stroke-width="8" />
            </g>
            <defs>
              <clipPath id="clip0_431_217">
                <rect width="150" height="110" fill="white" transform="translate(0.333008)" />
              </clipPath>
            </defs>
          </svg>

          <span class="text-primary">
            Dacin
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/neraca">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="150" height="110" viewBox="0 0 150 110" fill="none">
            <mask id="mask0_431_225" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="25" y="5" width="100" height="100">
              <rect x="25" y="5" width="100" height="100" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_431_225)">
              <path d="M33.333 92.4999V84.1666H70.833V37.6041C69.0275 36.9791 67.465 36.0069 66.1455 34.6874C64.8261 33.368 63.8538 31.8055 63.2288 29.9999H49.9997L62.4997 59.1666C62.4997 62.6388 61.0761 65.5902 58.2288 68.0207C55.3816 70.4513 51.9441 71.6666 47.9163 71.6666C43.8886 71.6666 40.4511 70.4513 37.6038 68.0207C34.7566 65.5902 33.333 62.6388 33.333 59.1666L45.833 29.9999H37.4997V21.6666H63.2288C64.0622 19.236 65.5552 17.2395 67.708 15.677C69.8608 14.1145 72.2913 13.3333 74.9997 13.3333C77.708 13.3333 80.1386 14.1145 82.2913 15.677C84.4441 17.2395 85.9372 19.236 86.7705 21.6666H112.5V29.9999H104.166L116.666 59.1666C116.666 62.6388 115.243 65.5902 112.396 68.0207C109.548 70.4513 106.111 71.6666 102.083 71.6666C98.0552 71.6666 94.6177 70.4513 91.7705 68.0207C88.9233 65.5902 87.4997 62.6388 87.4997 59.1666L99.9997 29.9999H86.7705C86.1455 31.8055 85.1733 33.368 83.8538 34.6874C82.5344 36.0069 80.9719 36.9791 79.1663 37.6041V84.1666H116.666V92.4999H33.333ZM94.2705 59.1666H109.896L102.083 41.0416L94.2705 59.1666ZM40.1038 59.1666H55.7288L47.9163 41.0416L40.1038 59.1666ZM74.9997 29.9999C76.1802 29.9999 77.1698 29.6006 77.9684 28.802C78.767 28.0034 79.1663 27.0138 79.1663 25.8333C79.1663 24.6527 78.767 23.6631 77.9684 22.8645C77.1698 22.0659 76.1802 21.6666 74.9997 21.6666C73.8191 21.6666 72.8295 22.0659 72.0309 22.8645C71.2323 23.6631 70.833 24.6527 70.833 25.8333C70.833 27.0138 71.2323 28.0034 72.0309 28.802C72.8295 29.6006 73.8191 29.9999 74.9997 29.9999Z" fill="#F2BE22" />
            </g>
          </svg>


          <span class="text-primary">
            Neraca
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/takaran-basah-kering">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M102.444 15.0125H41.5054C38.6942 15.0125 36.76 17.8361 37.7756 20.4575L39.7786 25.6275C39.9571 26.0883 40.0487 26.5783 40.0487 27.0725V90.9873C40.0487 93.1965 41.8396 94.9873 44.0487 94.9873H93.2033C95.4124 94.9873 97.2033 93.1965 97.2033 90.9873V29.451C97.2033 28.1129 97.8723 26.8635 98.986 26.1218L104.662 22.3416C107.956 20.1473 106.403 15.0125 102.444 15.0125Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" />
            <path d="M47.9756 45.7695H72.324" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M47.9756 58.0769H58.6889" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M47.9756 82.6907H58.6889" stroke="white" stroke-width="8" stroke-linecap="round" />
            <path d="M47.9756 70.3838H72.324" stroke="white" stroke-width="8" stroke-linecap="round" />
          </svg>

          <span class="text-primary">
            Takaran Basah Kering
          </span>
        </a>
      </li>
      <li>
        <a class="block text-center bg-light pb-2 rounded-md text-primary font-semibold hover:opacity-80" href="/layanan/data-tera/meter-kayu">
          <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="151" height="110" viewBox="0 0 151 110" fill="none">
            <path d="M117.491 31.7124C105.411 19.6301 100.036 14.2292 97.6549 11.8401C96.5166 10.6979 95.0489 10.7471 93.9078 11.8866C85.7285 20.0544 52.7702 52.9713 33.1411 72.6483C31.5827 74.2105 31.5967 76.7278 33.157 78.2882L52.05 97.1812C53.6121 98.7433 56.1448 98.7433 57.7069 97.1812L117.504 37.3836C119.067 35.8215 119.053 33.2748 117.491 31.7124Z" fill="#F2BE22" stroke="#F2BE22" stroke-width="8" stroke-linecap="round" />
            <path d="M42.6064 71.3738L54.8792 83.6465" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M58.9697 55.01L71.2425 67.2827" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M75.333 38.6465L87.6057 50.9192" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M91.6963 22.283L103.969 34.5557" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M50.7881 63.1919L58.9699 71.3737" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M67.1514 46.8284L75.3332 55.0102" stroke="white" stroke-width="4" stroke-linecap="round" />
            <path d="M83.5146 30.4646L91.6965 38.6464" stroke="white" stroke-width="4" stroke-linecap="round" />
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