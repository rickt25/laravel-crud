<x-app-layout>
  <x-slot name="header">
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products') }}
        </h2>

        <a href="{{ route('product.create') }}">
          <x-button type="button" class="py-2">Tambah Produk</x-button>
        </a>
      </div>
  </x-slot>

  @php
    echo session('success')
  @endphp

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              @if(session('success'))
                <div class="p-6 pb-0">
                  <x-alert color="red" title="Sukses" :message="session('success')"/>
                </div>
              @endif
              <div class="p-6 bg-white border-b border-gray-200">
                  <x-table>
                    <!-- Header -->
                    <x-slot name="head">
                      <tr class="text-left border-b-2 border-gray-300 text-white">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Action</th>
                      </tr>
                    </x-slot>

                    <!-- Content -->
                    @forelse($products as $product)
                      @include('product.items', ['product' => $product])
                    @empty
                      @include('product.empty')
                    @endforelse
                  </x-table>

                  {{ $products->links() }}
              </div>
          </div>
      </div>
  </div>
</x-app-layout>