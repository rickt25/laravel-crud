@props([
  'disabled' => false,
  'error'
])

<select 
  {{ $disabled ? 'disabled' : '' }} 
  {{ $attributes->class([
    'rounded-md shadow-sm border-gray-300 focus:ring focus:ring-opacity-50',
    'focus:border-indigo-300 focus:ring-indigo-200' => !$error,
    'border-red-400 focus:border-red-500 focus:ring-red-200' => $error
  ]) }} >
  {{ $slot }}
</select>

@isset($error)
  <p class="mt-2 text-red-500 text-xs italic">{{ $error }}</p>
@endisset