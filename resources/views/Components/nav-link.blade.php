@props(['aktif' => false])


<a class="{{ $aktif ? 'text-red-700': 'hover:text-red-500'}} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $aktif ? 'page': 'false' }}" {{$attributes }}>{{ $slot }}</a>

    
