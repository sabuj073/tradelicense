<?php include_once __DIR__ . '/layouts/header.php'; ?>

<?php
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

    $address1 = [['label' => 'জেলাঃ', 'name' => 'district', 'type' => 'text']];
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
        ['label' => 'ট্রেড লাইসেন্স ফিঃ', 'name' => 'trade_license_fee', 'type' => 'text'],
        ['label' => 'কথায়ঃ', 'name' => 'in_words', 'type' => 'text'],
    ];
?>

<form method="post" action="storetrade">
<div class="form form-container pt-5 pb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <?php foreach ($fields as $field): ?>
                <?php if (is_array($field) && isset($field['label']) && isset($field['name']) && isset($field['type'])): ?>
                    <div class="form_group">
                        <div>
                            <label for="<?php echo $field['name']; ?>" class=""><?php echo $field['label']; ?></label>
                        </div>
                        <div class="w-100">
                            <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" required>
                        </div>
                    </div>
                <?php elseif (isset($field['label_data']) && isset($field['data_array_input'])): ?>
                    <div class="mt-3 mb-2">
                        <h5><?php echo $field['label_data']['label']; ?></h5>
                        <?php if ($field['label_data']['label_type'] === 'checkbox'): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="<?php echo $field['label_data']['name']; ?>" name="<?php echo $field['label_data']['name']; ?>">
                                <label class="form-check-label" for="<?php echo $field['label_data']['name']; ?>">
                                    <?php echo $field['label_data']['check_label']; ?>
                                </label>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php foreach ($field['data_array_input'] as $field_input): ?>
                        <div class="form_group">
                            <div>
                                <label for="<?php echo $field_input['name']; ?>" class=""><?php echo $field_input['label']; ?></label>
                            </div>
                            <div class="w-100">
                                <input type="<?php echo $field_input['type']; ?>" id="<?php echo $field_input['name']; ?>" name="<?php echo $field_input['name']; ?>" class="form-control" required>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-6 col-md-6">
            <?php foreach ($fields_right as $field): ?>
                <?php if (is_array($field) && isset($field['label']) && isset($field['name']) && isset($field['type'])): ?>
                    <div class="form_group mb-3">
                        <div>
                            <label for="<?php echo $field['name']; ?>" class=""><?php echo $field['label']; ?></label>
                        </div>
                        <div class="w-100">
                            <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" required>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="form-group row mt-3">
                <div class="col-md-12">
                    <div class="upload-container">
                        <div class="border-container" id="drop-area" style="width: 250px;height:168px">
                            <div style="width: 250px;height:168px">
                                <img id="imagePreview" class="mg-fluid" style="width: 100%;height: 100%;object-fit: contain; display: none;" />
                            </div>
                            <input type="file" id="file-upload" class="d-none" name="image" required>
                        </div>
                    </div>
                    <button type="button" id="file-browser" class="btn btn-primary custom_btn_primary mt-3">
                        Upload Picture
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
        <div class="col-lg-6 col-md-6"></div>
        <div class="col-lg-6 col-md-6">
            <div class="d-block text-center">
                <label for="">স্থায়ী ঠিকানা</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="permanent_address_status" name="permanent_address_status">
                <label class="form-check-label" for="permanent_address_status">
                    বর্তমান ও স্থায়ী ঠিকানা একই হলে টিক চিহ্ন দাওঃ
                </label>
            </div>
            <?php foreach ($fields_2 as $field): ?>
                <div class="form_group mb-3">
                    <div>
                        <label for="<?php echo $field['name']; ?>" class=""><?php echo $field['label']; ?></label>
                    </div>
                    <div class="w-100">
                        <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" required>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-6 col-md-6"></div>
        <div class="col-lg-6 col-md-6">
            <?php foreach ($fields_3 as $field): ?>
                <div class="form_group mb-3">
                    <div>
                        <label for="<?php echo $field['name']; ?>" class=""><?php echo $field['label']; ?></label>
                    </div>
                    <div class="w-100">
                        <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" required>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <?php foreach ($fields_4 as $field): ?>
                    <div class="form_group mb-3 col-lg-6 col-md-6">
                        <div>
                            <label for="<?php echo $field['name']; ?>" class=""><?php echo $field['label']; ?></label>
                        </div>
                        <div class="w-100">
                            <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" required>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="form-group row mb-0 mt50">
        <div class="col-md-6 offset-md-4 center_btn">
            <button  class="btn btn-primary custom_btn_primary" type="submit">
                Click for save & print preview
                </button>
        </div>
    </div>
</div>
                </form>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>
