
<x-layout>

@include('components.extracts')

    <x-slot:title>
        {{$title}}
    </x-slot:title>

    @include('components.heading')
    @include('components.services')
    @include('components.testimonials')
    @include('components.pricing')

</x-layout>
