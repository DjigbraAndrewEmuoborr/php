@extends('layouts.app')

@section('title')
  @yield('title_ext') - Dashboard
@endsection

@section('content')
<!-- Page title-->
<!-- Page Content-->
<!-- Dashboard header-->
<div class="page-title-overlap bg-accent" style="padding-top: 6rem">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="media media-ie-fix align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="{{ Auth::user()->merchant ? Storage::url(Auth::user()->merchant->biz_avatar) : asset("zillatheme/img/marketplace/account/avatar-sm.png") }}" alt="{{ Auth::user()->merchant ? Auth::user()->merchant->biz_name : Auth::user()->name }}"></div>
            <div class="media-body pl-3">
                <h3 class="text-light font-size-lg mb-0">{{ Auth::user()->merchant ? Auth::user()->merchant->biz_name : Auth::user()->name }}</h3><span class="d-block text-light font-size-ms opacity-60 py-1">Member since {{ Auth::user()->created_at->isoFormat('LLLL') }}</span>
            </div>
        </div>
        @role('merchant')
        <div class="d-flex">
            <div class="text-sm-right mr-5">
                <div class="text-light font-size-base">Total sales</div>
                <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-right">
                <div class="text-light font-size-base">Seller rating</div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
                <div class="text-light opacity-60 font-size-xs">Based on 98 reviews</div>
            </div>
        </div>
        @endrole
    </div>
</div>
<div class="container mb-5 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
            {{-- @include('layouts.includes.app.sidebar') --}}
            
            <section class="col-lg-12 p-4 m-3">
                <div class="pr-xl-4">
                    @yield('contents')
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
