<x-layout>

@include('components.extracts')

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
@include('components.heading')

@foreach ($Data as $data)
    <!-- Form Start -->
<div class="container pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase"> <span class="text-secondary" > {{$data->sn}} >>> </span> Profile | 
                @auth 
                    <div class="indicator btn btn-primary w-60 py-2">
                        You Are Signed In
                    </div>
                @endauth
            </h6>
            <h1 class="display-5 text-uppercase mb-0">Review Your Public Data(s)</h1>
        </div>
        <div class="row g-5">
        <div class="col-lg seeProfile">
                    <div class="rul">
                        <table border-collapse="collapse">

                            <tr class="ultrick1">
                                <thead class="head2">
                                    <th class="head22">SN</th>
                                    <th>Access Key</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </thead>
                            </tr>

                            @foreach ($Gatee as $key)

                                <tr class="ultrick1">
                                    <td class="ultrick2 trick2">{{$key['id']}}</td>
                                    <td class="ultrick2">{{$key['key']}}</td>
                                    <td class="ultrick2">{{$key['created_at']}}</td>
                                    <td class="ultrick2">
                                        <a href="/desKey/{{$key['id']}}"> <button class="btn btn-danger py-1">Delete</button> </a>
                                    </td>
                                </tr>

                            @endforeach
                        </table>

                        <div class="col-4 mt-5">
                            <a href="/Create" class="btn btn-primary w-100 py-3" type="submit">Generate New Keys</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

    @endforeach
<!-- Form End -->

</x-layout>