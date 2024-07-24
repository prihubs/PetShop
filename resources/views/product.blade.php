<x-layout>
@include('components.extracts')

    <x-slot:title>
        {{$title}}
    </x-slot:title>
    
    @include('components.heading')

    @include('components.products')
    @include('components.offers')
    @include('components.pricing')

</x-layout>