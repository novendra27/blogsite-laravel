@props(['active' => false, 'mobile' => false])
<a {{ $attributes }}
    class="rounded-md px-3 py-2 font-medium
    {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
    {{ $mobile ? 'block text-base' : 'text-sm' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
