<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add Products') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <h1 class="text-2xl">Tambah produk</h1>
            </div>
            <div>
              <x-label for="name" :value="__('Nama Produk')" />
              <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" :error="$errors->first('name')" autofocus />
            </div>

            <div class="mt-4">
              <x-label for="category" :value="__('Kategori Produk')" />
              <x-select name="category_id" id="category" class="w-full" :error="$errors->first('category_id')">
                <option value="" selected disabled>-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                @endforeach
              </x-select>
            </div>

            <div class="mt-4">
              <x-label for="image" :value="__('Gambar Produk')" />
              <div class="w-full mt-1 p-2 rounded-md shadow-sm border border-gray-300">
                <input type="file" id="image" name="image" class="w-full">
              </div>
              @error('image')
                <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
              @enderror
            </div>

            <button type="submit" class="w-full mt-4 rounded px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Tambah Produk</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>