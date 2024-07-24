
<x-layout>
@include('components.extracts')

    <x-slot:title>
        {{$title}}
    </x-slot:title>

    @include('components.heading')

    <!-- Form Start -->
    @foreach ($Data as $data)

    <div class="container pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase"> Edit <span> {{$data->sn}} </span> Profile</h6>
            <h1 class="display-5 text-uppercase mb-0">Kindly fill in with your informations</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" name="sn" class="form-control bg-light border-0 px-4" value="{{$data->sn}}" style="height: 55px;" value="">
                        </div>
                        <div class="col-6">
                            <input type="email" name="site_email" class="form-control bg-light border-0 px-4" value="{{$data->site_email}}" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="tel" name="site_phone" class="form-control bg-light border-0 px-4" value="{{$data->site_phone}}" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="tel" name="site_phone2" class="form-control bg-light border-0 px-4" value="{{$data->site_phone2}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="site_description" class="form-control bg-light border-0 px-4 py-3" rows="3" >{{$data->site_description}}</textarea>
                        </div>
                        <div class="col-12">
                            <textarea name="site_address" class="form-control bg-light border-0 px-4 py-3" rows="3" >{{$data->site_address}}</textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-control bg-light border-0 px-5 py-5">
                                <input type="file" name="site_logo" alt="Upload Logo">
                                <x-image class="site-logo">{{$data->site_logo}}</x-image>
                            </div>
                        </div>
                        <div class="col-3">
                            <button name="" class="btn btn-secondary w-100 py-3" type="submit">Update</button>
                        </div>
                        <div class="col-3">
                            <a href="/profile" class="btn btn-primary w-100 py-3" type="submit"> Profile</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Form End -->

</x-layout>