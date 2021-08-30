<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Products') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 flex justify-between">
              <h1 class="text-2xl">Edit produk</h1>

              <img class="w-48 rounded" src="{{ asset($product->image) }}" alt="">
            </div>

            

            <div>
              <x-label for="name" :value="__('Nama Produk')" />
              <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $product->name)" :error="$errors->first('name')" required autofocus />
            </div>

            <div class="mt-4">
              <x-label for="category" :value="__('Kategori Produk')" />
              <x-select class="w-full" name="category_id" id="category" :error="$errors->first('category_id')">
                <option value="" selected disabled>-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @if($category->id == old('category_id', $product->category_id)) selected @endif>{{ $category->name }}</option>
                @endforeach
              </x-select>
            </div>

            <div class="mt-4">
              <x-label for="image" :value="__('Gambar Produk')" />
              <x-input-file id="image" name="image" :error="$errors->first('image')" />
            </div>

            <x-button type="submit" class="mt-4 mx-0 py-2 w-full">Tambah Kategori</x-button>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>