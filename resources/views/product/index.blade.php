@extends('layouts.app')

@section('header')
  <div class="flex justify-between items-center">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Products') }}
    </h2>

    <a href="{{ route('product.create') }}">
      <button type="button" class="py-2 rounded ml-1 px-4 py-1 bg-blue-500 text-white transition-colors hover:bg-blue-600">Tambah Produk</button>
    </a>
  </div>
@endsection

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          @if(session('success'))
              <div  class="p-6 pb-0" id="alert-message">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold">Sukses</strong>
                  <span class="block sm:inline">{{ session('success') }}</span>
                  <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="$('#alert-message').remove();">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                  </span>
                </div>
              </div>
          @endif
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="w-full rounded mx-auto m-2 bg-grey-200">
                  <!-- Header -->
                  <thead>
                    <tr class="text-left bg-gray-100 border-b-2 border-gray-300">
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Name</th>
                      <th class="px-4 py-3">Category</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>

                  <!-- Content -->
                  <tbody>
                    @forelse($products as $product)
                      <tr class="bg-white border-b border-gray-200">
                        <td class="px-4 py-3">{{ $loop->iteration + $products->firstItem() - 1 }}</td>
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3">{{ $product->category ? $product->category->name : '' }}</td>
                        <td class="px-4 py-3 w-px whitespace-nowrap">
                          <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                              <a href="{{ route('product.edit', $product->id) }}">
                                <button type="button" class="py-2 rounded ml-1 px-4 py-1 bg-green-500 text-white transition-colors hover:bg-green-600">Edit</button>
                              </a>
                              <button type="submit" class="py-2 rounded ml-1 px-4 py-1 bg-red-500 text-white transition-colors hover:bg-red-600">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <td colspan="4" class="text-center py-2 bg-white border-bborder-gray-200">No data</td>
                    @endforelse
                  </tbody>
                </table>

                {{ $products->links() }}
            </div>
        </div>
    </div>
  </div>
@endsection