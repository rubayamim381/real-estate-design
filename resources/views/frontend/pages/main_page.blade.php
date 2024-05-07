@extends('layouts.front_master')

@section('content')
    <div class="my-10 dd-collection">
        <div class="container">
            <div class="text-center mb-4">
                {{-- <h1 class="great-vibes-regular fst-italic fw-bold txt-sub-header text-capitalize">Search your dream property</h1> --}}
                <h1 class="cardo fst-italic fw-bold txt-green text-uppercase">Search your dream property</h1>
            </div>

            <form class="search-form" action="#" method="get">
                <div class="d-sm-flex justify-content-center gap-2">
                    <div class="mb-3">
                        @php
                            $divisions = [
                                'Barishal',
                                'Chattogram',
                                'Dhaka',
                                'Khulna',
                                'Mymensingh',
                                'Rajshahi',
                                'Rangpur',
                                'Sylhet',
                            ];
                        @endphp
                        <select name="division" id="division" onchange="divisionsList();" class="form-select" aria-label="Default select example">
                            <option disabled selected>Select Division</option>
                            @foreach ($divisions as $div)
                                <option value="{{ $div }}">{{ $div }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <select name="district" id="district" onchange="thanaList();" class="form-select" aria-label="Default select example" disabled>
                            <option disabled selected>Select District</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select name="sub_district" id="sub_district" class="form-select" aria-label="Default select example" disabled>
                            <option disabled selected>Select City</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>Select Category</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-secondary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <div class="my-5">
        <div class="fs-2 cardo txt-green mb-3">
            Rachell Luis
        </div>
        <div class="p-txt-color">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
            error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
        </div>
    </div>

    <div class="my-5">
        <div class="fs-2 fw-semibold cardo txt-green">
            Rachell Luis
        </div>
        <div class="fs-4 cardo txt-sub-header text-capitalize mb-3">
            division
        </div>
        <div class="p-txt-color">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
            error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
        </div>
    </div>
    <div class="my-5 p-txt-color">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
    <div class="my-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores deleniti officia minima dolores suscipit
        error quibusdam eius quos, molestiae quidem placeat exercitationem amet, mollitia nemo ullam dolore quo alias?
    </div>
@endsection

@push('custom_script')
    @include('frontend.pages.includes.division_script')
@endpush
