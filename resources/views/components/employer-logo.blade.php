{{-- <img class="rounded-xl" src="https://placehold.it/90/90/" alt="Laracast" /> --}}
@props(['width' => 100]) 
<img class="rounded-xl" src="https://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}/" alt="Laracast" />