@extends('layouts.master')

@section('content')
<main class="w-screen h-screen bg-cover bg-center" style="background-image: url('images/hero.jpg')">
  <div class="hero-gradient__container  bg-gradient-to-t from-primary h-full  ">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="400" viewBox="0 0 1440 400" fill="none">
      <g clip-path="url(#clip0_502_127)">
        <g filter="url(#filter0_d_502_127)">
          <path d="M806 176.5H838C839.105 176.5 840 177.395 840 178.5C840 179.605 839.105 180.5 838 180.5H806C804.895 180.5 804 179.605 804 178.5C804 177.395 804.895 176.5 806 176.5Z" stroke="white" stroke-width="8" />
          <path d="M806 159.5H838C839.105 159.5 840 160.395 840 161.5C840 162.605 839.105 163.5 838 163.5H806C804.895 163.5 804 162.605 804 161.5C804 160.395 804.895 159.5 806 159.5Z" stroke="white" stroke-width="8" />
          <path d="M806 193.5H838C839.105 193.5 840 194.395 840 195.5C840 196.605 839.105 197.5 838 197.5H806C804.895 197.5 804 196.605 804 195.5C804 194.395 804.895 193.5 806 193.5Z" stroke="white" stroke-width="8" />
          <path d="M806 210.5H838C839.105 210.5 840 211.395 840 212.5C840 213.605 839.105 214.5 838 214.5H806C804.895 214.5 804 213.605 804 212.5C804 211.395 804.895 210.5 806 210.5Z" stroke="white" stroke-width="8" />
          <path d="M806 226.5H838C839.105 226.5 840 227.395 840 228.5C840 229.605 839.105 230.5 838 230.5H806C804.895 230.5 804 229.605 804 228.5C804 227.395 804.895 226.5 806 226.5Z" stroke="white" stroke-width="8" />
          <path d="M675 187.5H657C652.582 187.5 649 191.082 649 195.5V196.5C649 200.918 652.582 204.5 657 204.5H675" stroke="white" stroke-width="8" />
          <path d="M548 180.5H500C495.582 180.5 492 184.082 492 188.5V205.5C492 209.918 495.582 213.5 500 213.5H548" stroke="white" stroke-width="8" />
          <path d="M892 212.5L940 212.5C944.418 212.5 948 208.918 948 204.5L948 187.5C948 183.082 944.418 179.5 940 179.5L892 179.5" stroke="white" stroke-width="8" />
          <path d="M675 154.5H715C718.866 154.5 722 157.634 722 161.5V161.5C722 165.366 718.866 168.5 715 168.5H675.534" stroke="white" stroke-width="8" />
          <path d="M675 224.5H715C718.866 224.5 722 227.634 722 231.5V231.5C722 235.366 718.866 238.5 715 238.5H675.534" stroke="white" stroke-width="8" />
          <path d="M603 128.5H667C671.418 128.5 675 132.082 675 136.5V255.5C675 259.918 671.418 263.5 667 263.5H603" stroke="white" stroke-width="8" />
          <path d="M786 128.5H850C854.418 128.5 858 132.082 858 136.5V255.5C858 259.918 854.418 263.5 850 263.5H786" stroke="white" stroke-width="8" />
          <path d="M582 154.5H556C551.582 154.5 548 158.082 548 162.5V229.5C548 233.918 551.582 237.5 556 237.5H582" stroke="white" stroke-width="8" />
          <path d="M858 236.5L884 236.5C888.418 236.5 892 232.918 892 228.5L892 161.5C892 157.082 888.418 153.5 884 153.5L858 153.5" stroke="white" stroke-width="8" />
          <path d="M590 122.5H595C599.418 122.5 603 126.082 603 130.5V261.5C603 265.918 599.418 269.5 595 269.5H592.5H590C585.582 269.5 582 265.918 582 261.5V130.5C582 126.082 585.582 122.5 590 122.5Z" stroke="white" stroke-width="8" />
          <path d="M773 122.5H778C782.418 122.5 786 126.082 786 130.5V261.5C786 265.918 782.418 269.5 778 269.5H775.5H773C768.582 269.5 765 265.918 765 261.5V130.5C765 126.082 768.582 122.5 773 122.5Z" stroke="white" stroke-width="8" />
          <path d="M565 221.25V169.75C565 169.06 565.56 168.5 566.25 168.5C566.94 168.5 567.5 169.06 567.5 169.75V221.25C567.5 221.94 566.94 222.5 566.25 222.5C565.56 222.5 565 221.94 565 221.25Z" stroke="white" stroke-width="8" />
          <path d="M873.5 221.25V169.75C873.5 169.06 874.06 168.5 874.75 168.5C875.44 168.5 876 169.06 876 169.75V221.25C876 221.94 875.44 222.5 874.75 222.5C874.06 222.5 873.5 221.94 873.5 221.25Z" stroke="white" stroke-width="8" />
          <path d="M720 84V41C720 40.1716 720.672 39.5 721.5 39.5C722.328 39.5 723 40.1716 723 41V84C723 84.8284 722.328 85.5 721.5 85.5C720.672 85.5 720 84.8284 720 84Z" stroke="white" stroke-width="8" />
          <path d="M724 316L724 359C724 359.828 723.328 360.5 722.5 360.5C721.672 360.5 721 359.828 721 359L721 316C721 315.172 721.672 314.5 722.5 314.5C723.328 314.5 724 315.172 724 316Z" stroke="white" stroke-width="8" />
          <path d="M678.818 101.088L648.412 70.682C647.826 70.0962 647.826 69.1464 648.412 68.5607C648.998 67.9749 649.948 67.9749 650.533 68.5607L680.939 98.9663C681.525 99.552 681.525 100.502 680.939 101.088C680.353 101.673 679.403 101.673 678.818 101.088Z" stroke="white" stroke-width="8" />
          <path d="M765.182 298.912L795.588 329.318C796.174 329.904 796.174 330.854 795.588 331.439C795.002 332.025 794.052 332.025 793.467 331.439L763.061 301.034C762.475 300.448 762.475 299.498 763.061 298.912C763.647 298.327 764.597 298.327 765.182 298.912Z" stroke="white" stroke-width="8" />
          <path d="M760.412 100.966L790.818 70.5607C791.404 69.9749 792.354 69.9749 792.939 70.5607C793.525 71.1465 793.525 72.0962 792.939 72.682L762.534 103.088C761.948 103.673 760.998 103.673 760.412 103.088C759.827 102.502 759.827 101.552 760.412 100.966Z" stroke="white" stroke-width="8" />
          <path d="M683.588 299.034L653.182 329.44C652.596 330.025 651.646 330.025 651.061 329.44C650.475 328.854 650.475 327.904 651.061 327.318L681.466 296.913C682.052 296.327 683.002 296.327 683.588 296.913C684.173 297.498 684.173 298.448 683.588 299.034Z" stroke="white" stroke-width="8" />
          <path d="M947 184.5C965.203 180.826 978.514 182.738 997 184.5C1037.99 188.407 1055 211.916 1096.15 213.359C1149.15 215.219 1173.77 158.091 1225.28 170.864C1285.28 185.744 1284.22 252.732 1323.37 296.327C1359 336 1397.26 343.238 1451 354" stroke="white" stroke-width="8" />
          <path d="M947.5 206C965.691 202.369 977.032 203.6 995.5 205.342C1036.45 209.204 1054.89 235.415 1096 236.842C1148.95 238.68 1184.61 173.156 1225.5 194C1276.5 220 1266.09 273.657 1311 316C1346 349 1396.22 370.507 1450.5 375.842" stroke="white" stroke-width="8" />
          <path d="M492 186.5C492 186.5 404.087 189.966 363 224C330.886 250.601 343.36 299.227 304 313C255.237 330.063 205.5 296 188.5 248.5C168.218 191.831 231.253 154.163 214 96.5C183.297 -6.11562 -41 -4.49996 -41 -4.49996" stroke="white" stroke-width="8" />
          <path d="M494.5 209C494.5 209 424.587 203.466 383.5 237.5C351.386 264.101 348.568 316.644 310 332.5C248.5 357.783 166.627 302.5 160.5 240C154.627 180.098 210.257 146.129 178.5 95C128.5 14.4998 -38.5 21.4998 -38.5 21.4998" stroke="white" stroke-width="8" />
        </g>
      </g>
      <defs>
        <filter id="filter0_d_502_127" x="-49.0254" y="-8.50146" width="1508.81" height="404.324" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
          <feOffset dy="8" />
          <feGaussianBlur stdDeviation="4" />
          <feComposite in2="hardAlpha" operator="out" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_502_127" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_502_127" result="shape" />
        </filter>
        <clipPath id="clip0_502_127">
          <rect width="1440" height="400" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <h1 class="mx-auto w-fit font-black text-9xl lg:text-[180px] text-white">404</h1>
    <p class="mx-auto w-fit font-bold text-xl md:text-3xl text-white">Halaman Tidak Ditemukan</p>
    <a class="flex mx-auto  w-fit bg-dark-grey hover:bg-dark-secondary py-1 px-4 mt-2 font-bold rounded-md text-white " href="/">Kembali Ke
      Halaman
      Utama</a>
  </div>
</main>
@endsection