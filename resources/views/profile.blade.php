
<x-layout>
    @include('components.extracts')

    <x-slot:title>
        {{$title}}
    </x-slot:title>

    @include('components.heading')

    @foreach ($Data as $data)
    <!-- Form Start -->
<div class="container pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase"> <span> {{$data->sn}} </span> Profile</h6>
            <h1 class="display-5 text-uppercase mb-0">Review Your Public Data(s)</h1>
        </div>
        <div class="row g-5">
        <div class="col-lg seeProfile">
                    <div class="rul">
                        <table border-collapse="collapse">
                            <tr class="ultrick1">
                                <thead class="head2">
                                    <th class="head22">Title</th>
                                    <th>Description</th>
                                </thead>
                            </tr>
                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Name</td>
                                <td class="ultrick2">{{$data->sn}}</td>
                            </tr>
                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Email</td>
                                <td class="ultrick2">{{$data->site_email}}</td>
                            </tr>
                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Phone</td>
                                <td class="ultrick2">{{$data->site_phone}}</td>
                            </tr>
                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Address</td>
                                <td class="ultrick2">{{$data->site_address}}</td>
                            </tr>
                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Description</td>
                                <td class="ultrick2">{{$data->site_description}}</td>
                            </tr>

                            <tr class="ultrick1">
                                <td class="ultrick2 trick2">Site Logo</td>
                                <td class="ultrick2">
                                    <x-image class="site-logo" >{{$data->site_logo}}</x-image>
                                </td>
                            </tr>
                        </table>

                        <div class="col-3 mt-5">
                            <a href="/eprofile" class="btn btn-primary w-100 py-3" type="submit">Edit</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

    @endforeach
<!-- Form End -->

</x-layout>