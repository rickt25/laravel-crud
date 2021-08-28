@props(['color' => 'blue'])

<button 
    {{ $attributes->merge([
        'type' => 'submit', 
        'class' => 'rounded ml-1 px-4 py-1 bg-'.$color.'-500 text-white transition-colors hover:bg-'.$color.'-600'
        ]) }}>

    {{ $slot }}
</button>
