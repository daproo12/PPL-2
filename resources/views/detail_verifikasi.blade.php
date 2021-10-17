@extends('layouts.main')

@section('dashboard')

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
          {{-- <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3> --}}
          <ul
            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
            <li class="grid grid-cols-2 items-center py-3">
              <span>Status</span>
              <span class="ml-auto">
                @include('partial.verifikasi_menu')
                {{-- <span
                  class="bg-gray-50 shadow py-1 px-2 rounded text-black text-sm">
                  Belum Diverifikasi
                </span> --}}
                {{-- <span
                  class="bg-green-500 shadow py-1 px-2 rounded text-white text-sm">
                  Setujui
                </span> --}}
                {{-- <span
                  class="bg-red-600 shadow py-1 px-2 rounded text-white text-sm">
                  Tolak
                </span> --}}
              </span>
            </li>
            {{-- <li class="flex items-center py-3">
              <span>Member since</span>
              <span class="ml-auto">Nov 07, 2016</span>
            </li> --}}
          </ul>
        </div>
        <!-- End of profile card -->
      </div>
      <!-- Right Side -->
      <div class="w-full md:w-9/12 mx-2 h-64">
        <!-- Profile tab -->
        <!-- About Section -->
        <div class="bg-white p-3 shadow-sm rounded-sm">
          <a
            class="flex items-center justify-between p-3 mb-5 text-sm font-semibold text-white bg-green-500 rounded-md shadow-md"
          >
            <div class="flex items-center">
              <span clas="text-green-500">
                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </span>
              <span class="px-3 tracking-wide">Profil</span>
            </div>
          </a>
          <div class="text-gray-700">
            <div class="grid text-sm">
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">NIK</div>
                <div class="px-4 py-2">3052726375000003</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Nama</div>
                <div class="px-4 py-2">Hans Burger</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Tanggal Lahir</div>
                <div class="px-4 py-2">6/10/2020</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Alamat</div>
                <div class="grid">
                  <div class="grid grid-cols-2"
                  style="grid-template-columns: 35% auto;">
                    <div class="px-4 py-2">Dusun</div>
                    <div class="px-4 py-2">Hadipuro</div>
                  </div>
                  <div class="grid grid-cols-2"
                  style="grid-template-columns: 35% auto;">
                    <div class="px-4 py-2">Desa</div>
                    <div class="px-4 py-2">Sukoharjo</div>
                  </div>
                  <div class="grid grid-cols-2"
                  style="grid-template-columns: 35% auto;">
                    <div class="px-4 py-2">Kecamatan</div>
                    <div class="px-4 py-2">Trunojoyo</div>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">Email</div>
                <div class="px-4 py-2">burger@king.com</div>
              </div>
              <div class="grid grid-cols-2"
              style="grid-template-columns: 35% auto;">
                <div class="px-4 py-2 font-semibold">No. Telepon</div>
                <div class="px-4 py-2">+11 998001001</div>
              </div>
            </div>
          </div>
          {{-- <button
            class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show
            Full Information
          </button> --}}
        </div>
        <!-- End of about section -->
      </div>
    </div>
  </div>
</div>

@endsection