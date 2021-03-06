    <div
      x-show="isModalMOUOpen"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-30 flex items-center sm:items-center sm:justify-center"
      style="--bg-opacity: 0.5; background-color: rgba(0,0,0,var(--bg-opacity));"
    >
      <!-- Modal -->
      <div
        x-show="isModalMOUOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModalMOU"
        @keydown.escape="closeModalMOU"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        id="modalMOU"
      >
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex items-start justify-between p-2 border-b border-solid border-gray-200 rounded-t">
          <h4 class="font-semibold">
            Template Dokumen MOU
          </h4>
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close"
            @click="closeModalMOU"
          >
            <svg
              class="w-4 h-4"
              fill="currentColor"
              viewBox="0 0 20 20"
              role="img"
              aria-hidden="true"
            >
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
          <!-- Modal title -->
          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">pilih file dokumen</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </form>
        </div>
        <footer
          class="flex items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800"
        >
          <button
            @click="closeModalMOU"
            class="px-5 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
          >
            Kembali
          </button>
          <a href="/kerjasama">
            <button
              class="px-5 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-500 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
              type="button" onclick="return confirm('Upload File Template MOU?');"
            >
              Simpan
            </button>
          </a>
        </footer>
      </div>
    </div>

    <div
      x-show="isModalPrediksiOpen"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-30 flex items-center sm:items-center sm:justify-center"
      style="--bg-opacity: 0.5; background-color: rgba(0,0,0,var(--bg-opacity));"
    >
      <!-- Modal -->
      <div
        x-show="isModalPrediksiOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModalPrediksi"
        @keydown.escape="closeModalPrediksi"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        id="modalPrediksi"
      >
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex items-start justify-between p-2 border-b border-solid border-gray-200 rounded-t">
          <h4 class="font-semibold">
            Hasil Perhitungan Prediksi
          </h4>
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close"
            @click="closeModalPrediksi"
          >
            <svg
              class="w-4 h-4"
              fill="currentColor"
              viewBox="0 0 20 20"
              role="img"
              aria-hidden="true"
            >
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
          <!-- Modal title -->
          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Sek gak ero isine opoan Rek</label>
            </div>
          </form>
        </div>
        <footer
          class="flex items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800"
        >
          <button
            @click="closeModalPrediksi"
            class="px-5 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-500 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
          >
            Ok
          </button>
        </footer>
      </div>
    </div><?php /**PATH D:\belajar\project_PPL-laravel\resources\views/partial/modal.blade.php ENDPATH**/ ?>