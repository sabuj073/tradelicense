@extends('layouts.app')
@section('title', 'Home Page')

@php
    $fields = [
        ['label' => 'মালিকের নামঃ', 'name' => 'name', 'type' => 'text'],
        ['label' => 'ইস্যু তারিখঃ', 'name' => 'issue_date', 'type' => 'date'],
        ['label' => 'পিতার নামঃ', 'name' => 'father_name', 'type' => 'text'],
        ['label' => 'ইস্যুর সময়ঃ', 'name' => 'issue_time', 'type' => 'time'],
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
        [
            'label_data' => [
                'label' => 'স্থায়ী ঠিকানাঃ',
                'label_type' => 'checkbox',
                'type' => 'checkbox',
                'name' => 'permanent_address_status',
                'check_label' => 'বর্তমান ও স্থায়ী ঠিকানা একই হলে টিক চিহ্ন দাওঃ',
            ],
            'data_array_input' => [
                ['label' => 'গ্রামঃ', 'name' => 'parmament_village', 'type' => 'text'],
                ['label' => 'পোঃ', 'name' => 'parmament_post_office', 'type' => 'text'],
                ['label' => 'থানাঃ', 'name' => 'parmament_thana', 'type' => 'text'],
                ['label' => 'জেলাঃ', 'name' => 'parmament_district', 'type' => 'text'],
            ],
        ],
        ['label' => 'এনআইডি নম্বরঃ', 'name' => 'nid_number', 'type' => 'number'],
        ['label' => 'টিন নম্বরঃ', 'name' => 'tin_number', 'type' => 'number'],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের নামঃ', 'name' => 'business_name', 'type' => 'text'],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ঠিকানাঃ', 'name' => 'business_address', 'type' => 'text'],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ধরনঃ', 'name' => 'business_type', 'type' => 'text'],
        ['label' => 'ট্রেড লাইসেন্স ধরনঃ', 'name' => 'trade_license_type', 'type' => 'text'],
        ['label' => 'ট্রেড লাইসেন্স ফিঃ', 'name' => 'trade_license_free', 'type' => 'text'],
        ['label' => 'কথায়ঃ', 'name' => 'in_words', 'type' => 'text'],
    ];
@endphp

@section('content')
    <div class="form form-container pt-5 pb-5">
        <div class="row">
            @foreach ($fields as $field)
                @if (is_array($field) && isset($field['label']) && isset($field['name']) && isset($field['type']))
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="form_group">
                            <div>
                                <label for="{{ $field['name'] }}" class="">{{ $field['label'] }}</label>
                            </div>
                            <div class="w-100">
                                <input type="{{ $field['type'] }}" id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                @elseif (isset($field['label_data']) && isset($field['data_array_input']))
                    <div class="col-12 mb-3">
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
                        <div class="col-lg-6 col-md-6 mb-3">
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
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="form-group row mt-3">
            <label for="image" class="col-md-3 col-form-label text-md-right">{{ __('Upload Picture') }}</label>
            <div class="col-md-4">
                <div class="upload-container">
                    <div class="border-container" id="drop-area">
                        <p>Drag and drop files here, or
                            <a href="#" id="file-browser">browse</a> your computer.
                        </p>
                        <input type="file" id="file-upload" class="d-none" name="image" required>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div style="width: 250px;height:168px">
                    <img id="imagePreview" class="mt-3 img-fluid" style="max-width: 100%; display: none;" />
                </div>
            </div>

        </div>

        <div class="form-group row  mb-0 mt50">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary custom_btn_primary">
                    {{ __('Click for save & print priview') }}
                </button>
            </div>
        </div>

    </div>
@endsection
