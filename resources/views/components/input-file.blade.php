@props([
    'error'
])

<div class="w-full mt-1 p-2 rounded-md shadow-sm border border-gray-300">
    <input type="file" class="w-full" {{ $attributes }} />
</div>

@isset($error)
  <p class="mt-2 text-red-500 text-xs italic">{{ $error }}</p>
@endisset