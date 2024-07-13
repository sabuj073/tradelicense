@extends('layouts.app')
@section('title', 'Home Page')

@php
    $fields = [
        ['label' => 'মালিকের নামঃ', 'name' => 'name', 'type' => 'text'],
        ['label' => 'পিতার নামঃ', 'name' => 'father_name', 'type' => 'text'],
        ['label' => 'মাতার নামঃ', 'name' => 'mother_name', 'type' => 'text'],
        [
            'label_data' => [
                'label' => 'বর্তমান ঠিকানাঃ',
                'label_type' => '',
            ],
            'data_array_input' => [
                ['label' => 'গ্রামঃ', 'name' => 'village', 'type' => 'text'],
                ['label' => 'পোঃ', 'name' => 'post_office', 'type' => 'text'],
                ['label' => 'থানাঃ', 'name' => 'thana', 'type' => 'text'],
                ['label' => 'জেলাঃ', 'name' => 'district', 'type' => 'text'],
            ],
        ],
    ];
    $fields_right = [
        ['label' => 'ইস্যু তারিখঃ', 'name' => 'issue_date', 'type' => 'date'],
        ['label' => 'ইস্যুর সময়ঃ', 'name' => 'issue_time', 'type' => 'time'],
    ];

    $addres1 = [['label' => 'জেলাঃ', 'name' => 'district', 'type' => 'text']];
    $fields_2 = [
        ['label' => 'গ্রামঃ', 'name' => 'permanent_village', 'type' => 'text'],
        ['label' => 'পোঃ', 'name' => 'permanent_post_office', 'type' => 'text'],
        ['label' => 'থানাঃ', 'name' => 'permanent_thana', 'type' => 'text'],
        ['label' => 'জেলাঃ', 'name' => 'permanent_district', 'type' => 'text'],
    ];
    $fields_3 = [
        ['label' => 'এনআইডি নম্বরঃ', 'name' => 'nid_number', 'type' => 'number'],
        ['label' => 'টিন নম্বরঃ', 'name' => 'tin_number', 'type' => 'number'],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের নামঃ', 'name' => 'business_name', 'type' => 'text'],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ঠিকানাঃ', 'name' => 'business_address', 'type' => 'text'],
    ];
    $fields_4 = [
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ধরনঃ', 'name' => 'business_type', 'type' => 'text'],
        ['label' => 'ট্রেড লাইসেন্স ধরনঃ', 'name' => 'trade_license_type', 'type' => 'text'],
        ['label' => 'ট্রেড লাইসেন্স ফিঃ', 'name' => 'trade_license_free', 'type' => 'text'],
        ['label' => 'কথায়ঃ', 'name' => 'in_words', 'type' => 'text'],
    ];
@endphp

@section('content')
    <div class="form form-container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-6 col-md-6  ">
                @foreach ($fields as $field)
                    @if (is_array($field) && isset($field['label']) && isset($field['name']) && isset($field['type']))
                        <div class="form_group">
                            <div>
                                <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                            </div>
                            <div class="w-100">
                                <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                    class="form-control">
                            </div>
                        </div>
                    @elseif (isset($field['label_data']) && isset($field['data_array_input']))
                        <div class="mt-3 mb-2">
                            <h5>{{ $field['label_data']['label'] }}</h5>
                            @if ($field['label_data']['label_type'] === 'checkbox')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $field['label_data']['name'] }}"
                                        name="{{ $field['label_data']['name'] }}">
                                    <label class="form-check-label" for="{{ $field['label_data']['name'] }}">
                                        {{ $field['label_data']['check_label'] }}
                                    </label>
                                </div>
                            @endif
                        </div>
                        @foreach ($field['data_array_input'] as $field_input)
                            <div class="form_group">
                                <div>
                                    <label for="{{ $field_input['name'] }}"
                                        class="">{{ $field_input['label'] }}</label>
                                </div>
                                <div class="w-100">
                                    <input type="{{ $field_input['type'] }}" id="{{ $field_input['name'] }}"
                                        name="{{ $field_input['name'] }}" class="form-control">
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
            <div class="col-lg-6 col-md-6 ">
                @foreach ($fields_right as $field)
                    @if (is_array($field) && isset($field['label']) && isset($field['name']) && isset($field['type']))
                        <div class="form_group mb-3">
                            <div>
                                <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                            </div>
                            <div class="w-100">
                                <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                    class="form-control">
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="form-group row mt-3">

                    <div class="col-md-12">
                        <div class="upload-container">
                            <div class="border-container" id="drop-area" style="width: 250px;height:168px">
                                <div style="width: 250px;height:168px">
                                    <img id="imagePreview" class=" mg-fluid"
                                        style="width: 100%;height: 100%;object-fit: contain; display: none;" />
                                </div>
                                <input type="file" id="file-upload" class="d-none" name="image" required>
                            </div>
                        </div>
                        <button type="button" id="file-browser" class="btn btn-primary custom_btn_primary mt-3 ">
                            {{ __('Upload Picture') }}
                        </button>
                    </div>



                </div>
            </div>
            <div class="col-lg-6 col-md-6  ">

            </div>
            <div class="col-lg-6 col-md-6  "></div>
            <div class="col-lg-6 col-md-6  ">
                <div class="d-block text-center">
                    <label for="">
                        স্থায়ী ঠিকানা
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="permanent_address_status"
                        name="permanent_address_status">
                    <label class="form-check-label" for="permanent_address_status">
                        বর্তমান ও স্থায়ী ঠিকানা একই হলে টিক চিহ্ন দাওঃ
                    </label>
                </div>

                @foreach ($fields_2 as $field)
                    <div class="form_group mb-3  ">
                        <div>
                            <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                        </div>
                        <div class="w-100">
                            <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                class="form-control">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6 col-md-6  "></div>
            <div class="col-lg-6 col-md-6  ">
                @foreach ($fields_3 as $field)
                    <div class="form_group mb-3">
                        <div>
                            <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                        </div>
                        <div class="w-100">
                            <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                class="form-control">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-lg-12 col-md-12  ">
                <div class="row">


                    @foreach ($fields_4 as $field)
                        <div class="form_group mb-3 col-lg-6 col-md-6">
                            <div>
                                <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                            </div>
                            <div class="w-100">
                                <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                    class="form-control">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>



        <div class="form-group row  mb-0 mt50">
            <div class="col-md-6 offset-md-4 center_btn ">
                <a href="/trade_preview" class="btn btn-primary custom_btn_primary">
                    {{ __('Click for save & print priview') }}
                </a>
            </div>
        </div>

    </div>
@endsection
