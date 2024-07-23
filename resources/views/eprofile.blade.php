
<x-layout>

    <x-slot:title>
        {{$title}}
    </x-slot:title>

    @include('components.heading')

    <!-- Form Start -->
    <div class="container pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase"> Edit <span> Pet Shop </span> Profile</h6>
            <h1 class="display-5 text-uppercase mb-0">Kindly fill in with your informations</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" name="sn" class="form-control bg-light border-0 px-4" placeholder="Site Name" style="height: 55px;" value="">
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Site Email" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="tel" name="tel" class="form-control bg-light border-0 px-4" placeholder="Phone" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="tel" name="tel2" class="form-control bg-light border-0 px-4" placeholder="Phone 2" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="sdescription" class="form-control bg-light border-0 px-4 py-3" rows="3" placeholder="Site Description"></textarea>
                        </div>
                        <div class="col-12">
                            <textarea name="address" class="form-control bg-light border-0 px-4 py-3" rows="3" placeholder="Address"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="file" name="logo" class="form-control" alt="Upload Logo" style="height: 55px; padding: 4%;">
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
<!-- Form End -->

</x-layout>