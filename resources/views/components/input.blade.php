@props([
  'disabled' => false,
  'error' => false
])

<input 
  {{ $disabled ? 'disabled' : '' }} 
  {{ $attributes->class([
    'rounded-md shadow-sm border-gray-300 focus:ring focus:ring-opacity-50',
    'focus:border-indigo-300 focus:ring-indigo-200' => !$error,
    'border-red-400 focus:border-red-500 focus:ring-red-200' => $error
  ]) }} 
/>

@if($error)
  <p class="mt-2 text-red-500 text-xs italic">{{ $error }}</p>
@endif