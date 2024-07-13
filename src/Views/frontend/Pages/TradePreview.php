@extends('layouts.app')

@section('title', 'Trade Preview')

@section('content')

    <div class="trade_preview">
        <div class="row align-items-center ">
            <div class="col-lg-4">
                <p>ইস্যু তারিখঃ ২৬/১০/২০২৩</p>
                <p>ইস্যু সময়ঃ ২৬/১০/২০২৩</p>
            </div>
            <div class="col-lg-6">
                <p>ট্রেড লাইসেন্স নং- চিইপি০২৪১১৫৬৮</p>
            </div>
            <div class="col-lg-2">
                <div class="profile qr_code">
                    <img class="d-block w-100" src="assets/img/profile.jpg') }}" alt="First slide">
                </div>
                <div class="qr_code">
                    <img class="d-block w-100" src="assets/img/qr.png') }}" alt="First slide">
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-5">
                <p>মোঃআবু সাইদ</p>
                <p> মৃতঃ ইব্রাহীম </p>
                <p> জামেলা </p>
            </div>
        </div>

        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-6 text-start ">
                <p> ঘোড়াদিয়া </p>
                <p> নরসিংদী-১৬০২ </p>
                <p> নরসিংদী সদর </p>
                <p> নরসিংদী </p>
                <p> ০১৭১৩১৩৫৩৮৮৬৫ </p>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end ">
                <div>
                    <p> ঘোড়াদিয়া </p>
                    <p> নরসিংদী-১৬০২ </p>
                    <p> নরসিংদী সদর </p>
                    <p> নরসিংদী </p>
                    <p> ০১৭১৩১৩৫৩৮৮৬৫ </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-5">
                <p>৬৫০১৭১৩১৩৫৩৮৮৬৫</p>
                <p> মেসার্স মাহিদ এন্টারপ্রাইজ </p>
                <p> ঘোড়াদিয়া,নরসিংদী </p>
                <p> পেপার কোন প্রস্ততকারী ও সরবরাহকারী </p>
                <p> নতুন </p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-5 ">
                <div class="ps-5">

                    <p>২০০০/=</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-5 ">
                <div class="ps-5 ">
                    <br />
                    <br />
                    <br />
                    <p>২০০০/=</p>
                    <p>দুই হাজার টাকা মাত্র </p>
                </div>
            </div>

            <div class="form-group row  mb-0 mt50 mb-5 ">
                <div class="col-md-6 offset-md-4">
                    <button type="button" class="btn btn-primary custom_btn_primary">
                        {{ __('Print') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
