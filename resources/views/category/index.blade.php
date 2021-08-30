<x-app-layout>
  <x-slot name="header">
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Categories') }}
        </h2>

        <a href="{{ route('category.create') }}">
          <x-button type="button" class="py-2">Tambah Kategori</x-button>
        </a>
      </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              @if(session('success'))
                  <x-alert class="p-6 pb-0" color="green" title="Sukses" :message="session('success')"/>
              @endif
              <div class="p-6 bg-white border-b border-gray-200">
                  <x-table>
                    <!-- Header -->
                    <x-slot name="head">
                      <tr class="text-left bg-gray-100 border-b-2 border-gray-300">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Action</th>
                      </tr>
                    </x-slot>

                    <!-- Content -->
                    @forelse($categories as $category)
                      @include('category.items', ['category' => $category])
                    @empty
                      @include('category.empty')
                    @endforelse
                  </x-table>

                  {{ $categories->links() }}
              </div>
          </div>
      </div>
  </div>
</x-app-layout>