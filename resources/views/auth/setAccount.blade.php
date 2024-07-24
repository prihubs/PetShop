<x-layout>

    <x-slot:title>
        {{$title}}
    </x-slot:title>

@include('components.extracts')
@include('components.heading')


 <!-- Register Start -->
 <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Create Account</h6>
                <h1 class="display-5 text-uppercase mb-0">Create your Account</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form method="post" action="/profile">
                        @csrf
                        <div class="row g-3">

                            <div class="col-6">
                                <input type="text" name="name" class="form-control bg-light border-0 px-4" placeholder="Enter your username" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Enter your email" style="height: 55px;">
                            </div>

                            <div class="col-6">
                                <input type="password" name="password" class="form-control bg-light border-0 px-4" placeholder="Enter your password" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="password" name="password_confirmation" class="form-control bg-light border-0 px-4" placeholder="Confirm your password" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <input type="text" name="accesskey" class="form-control bg-light border-0 px-4" placeholder="Access Key" style="height: 55px;">
                            </div>

                            <div class="col-6">
                                <button class="btn btn-primary w-100 py-3" type="submit">Signup</button>
                            </div>

                            
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="form-control bg-danger border-0 px-4 col-6 colorm">
                                    {{$error}}
                                </div>
                                @endforeach
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->
            
</x-layout>