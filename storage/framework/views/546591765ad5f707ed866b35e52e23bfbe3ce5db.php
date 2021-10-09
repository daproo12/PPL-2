

<?php $__env->startSection('dashboard'); ?>

<style>
  :root {
    --main-color: #4a76a8;
  }

  .bg-main-color {
    background-color: var(--main-color);
  }

  .text-main-color {
    color: var(--main-color);
  }

  .border-main-color {
    border-color: var(--main-color);
  }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="bg-gray-100">
  <div class="container mx-auto my-5 p-5">
    <div class="md:flex no-wrap md:-mx-2 ">
      <!-- Left Side -->
      <div class="w-full md:w-4/12 md:mx-2">
        <!-- Profile Card -->
        <div class="bg-white p-3 border-t-4 border-green-400">
          <div class="image overflow-hidden">
            <img
              class="object-cover w-full h-full rounded"
              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
              alt=""
              loading="lazy"
            />
          </div>
          <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Hans Burger</h1>
          
          <ul
            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
            <li class="flex items-center py-3">
              <span>Status</span>
              <span class="ml-auto">
                <span
                  class="font-medium bg-gray-50 shadow py-1 px-2 rounded text-black text-sm">
                  Belum Diverifikasi
                </span>
                
                
              </span>
            </li>
            <li class="flex items-center py-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                </svg>
                
              </div>
              <span class="ml-auto">06/10/2020</span>
            </li>
          </ul>
        </div>
        <!-- End of profile card -->
      </div>
      <!-- Right Side -->
      <div class="w-full md:w-9/12 mx-2 h-64">
        <div class="bg-white p-3 shadow-sm rounded-sm">
          <a
            class="flex items-center justify-between p-3 mb-5 text-sm font-semibold text-white bg-green-500 rounded-md shadow-md"
          >
            <div class="flex items-center">
                  <span clas="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                      <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                  </span>
                  <span class="px-3 tracking-wide">Data Lahan</span>
            </div>
          </a>
          <div class="text-gray-700">
            <div class="grid text-sm">
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Lokasi Lahan</div>
                
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Kecamatan</div>
                <div class="px-4 py-2">Trunojoyo</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Desa</div>
                <div class="px-4 py-2">Sukoharjo</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Alamat</div>
                <div class="px-4 py-2">Jl. Raden Rahmad, Dusun Mengkubuwono, RT 003/ RW 005</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Tanggal Penanaman</div>
                <div class="px-4 py-2">12/10/2020</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Luas Lahan</div>
                <div class="px-4 py-2">150 meter persegi</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Foto Lahan</div>
                <div class="px-4 grid">
                  <img
                    class="object-cover"
                    src="./assets/img/lahan-2.jpg"
                    alt=""
                    width="200"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white p-3 shadow-sm rounded-sm">
          <a
            class="flex items-center justify-between p-3 mb-5 text-sm font-semibold text-white bg-green-500 rounded-md shadow-md"
          >
            <div class="flex items-center">
                  <span clas="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                      <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                  </span>
                  <span class="px-3 tracking-wide">Pembayaran</span>
            </div>
          </a>
          <div class="text-gray-700">
            <div class="grid text-sm">
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Total Pembayaran</div>
                <div class="px-4 py-2">Rp 50.000.000</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Uang Muka</div>
                <div class="px-4 py-2">Sukoharjo</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Pelunasan</div>
                <div class="px-4 py-2">Jl. Raden Rahmad, Dusun Mengkubuwono, RT 003/ RW 005</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Status Pembayaran</div>
                <div class="px-4 py-2">150 meter persegi</div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white p-3 shadow-sm rounded-sm">
          <a
            class="flex items-center justify-between p-2 py-1 mb-5 text-sm font-semibold text-white bg-green-500 rounded-md shadow-md"
            href="/">
            <div class="flex items-center">
              <span clas="text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
              </span>
              <span class="px-3 tracking-wide">Hasil Panen</span>
            </div>
            <div>
              <button
                class="items-end px-1 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-md active:bg-green-500 hover:bg-white hover:text-green-500 focus:outline-none focus:shadow-outline-white"
              ><i class="icon-copy fa fa-plus" style="padding-left: 0.3rem; padding-right:0.5rem" aria-hidden="true"></i>
                Tambah Data
              </button>
            </div>
          </a>
          <div class="text-gray-700">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="tracking-wide text-left text-gray-700 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-2 py-2 text-medium text-sm">Panenan</th>
                      <th class="px-2 py-2 text-medium text-sm">Tanggal Pemanenan</th>
                      <th class="px-2 py-2 text-medium text-sm">Hasil(kg)</th>
                      <th class="px-2 py-2 text-medium text-sm">Tanggal Penjualan</th>
                      <th class="px-2 py-2 text-medium text-sm">Hasil Penjualan</th>
                      <th class="px-2 py-2 text-medium text-sm">Bukti Penjualan</th>
                      <th class="px-2 py-2 text-medium text-sm">Bagi Hasil</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                      <td class="px-2 py-2 text-sm">
                        -
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <?php echo $__env->make('partial.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar\project_PPL-laravel\resources\views/detail_kerjasama.blade.php ENDPATH**/ ?>