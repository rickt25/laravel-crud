@extends('layouts.app')

@section('header')
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add Products') }}
  </h2>
@endsection

@section('content')
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
              <label for="name">{{  __('Nama Produk')  }}</label>
              <input type="text" name="name" value="{{ old('name') }}" id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:ring focus:ring-opacity-50 focus:border-indigo-300 focus:ring-indigo-200 @error('name') border-red-400 @enderror" autofocus />
              @error('name')
                <small class="mt-2 text-red-500 text-xs italic">{{ $message }}</small>
              @enderror
            </div>

            <div class="mt-4">
              <label for="name">{{  __('Kategori Produk')  }}</label>
              <select name="category_id" id="category" class="w-full rounded-md shadow-sm border-gray-300 focus:ring focus:ring-opacity-50 @error('category_id') border-red-400 @enderror">
                <option value="" selected disabled>-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                @endforeach
              </select>
              @error('category_id')
                <small class="mt-2 text-red-500 text-xs italic">{{ $message }}</small>
              @enderror
            </div>

            <div class="mt-4">
              <label for="name">{{  __('Gambar Produk')  }}</label>
              <div class="w-full mt-1 p-2 rounded-md shadow-sm border border-gray-300 @error('image') border-red-400 @enderror">
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
@endsection