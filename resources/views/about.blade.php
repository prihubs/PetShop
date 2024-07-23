

<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
    @include('components.heading')

    @include('components.about')
    @include('components.offers')
    @include('components.team')

</x-layout>