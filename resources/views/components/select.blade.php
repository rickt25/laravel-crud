@props([
  'disabled' => false,
  'error'
])

<select {{ $disabled ? 'disabled' : '' }} {{ $attributes->class(['block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50','bg-red' => $error]) }} >
  {{ $slot }}
</select>

@isset($error)
  <p class="mt-2 text-red-500 text-xs italic">{{ $error }}</p>
@endisset