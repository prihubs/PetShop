

    @foreach($Data as $data)

    <x-slot:sn> 
        {{ $data->sn }}
    </x-slot:sn>

    <x-slot:site_email> 
        {{ $data->site_email }}
    </x-slot:site_email>

    <x-slot:site_phone> 
        {{ $data->site_phone }}
    </x-slot:site_phone>

    <x-slot:site_address> 
        {{ $data->site_address }}
    </x-slot:site_address>

    <x-slot:site_description> 
        {{ $data->site_description }}
    </x-slot:site_description>

    <x-slot:site_logo> 
        {{ $data->site_logo }}
    </x-slot:site_logo>

    @endforeach