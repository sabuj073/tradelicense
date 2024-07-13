<?php include_once __DIR__ . '/layouts/header.php'; ?>

<?php
    $fields = [
        ['label' => 'মালিকের নামঃ', 'name' => 'name', 'type' => 'text', 'value' => $owner['name']],
        ['label' => 'পিতার নামঃ', 'name' => 'father_name', 'type' => 'text', 'value' => $owner['father_name']],
        ['label' => 'মাতার নামঃ', 'name' => 'mother_name', 'type' => 'text', 'value' => $owner['mother_name']],
        [
            'label_data' => [
                'label' => 'বর্তমান ঠিকানাঃ',
                'label_type' => '',
            ],
            'data_array_input' => [
                ['label' => 'গ্রামঃ', 'name' => 'village', 'type' => 'text', 'value' => $owner['village']],
                ['label' => 'পোঃ', 'name' => 'post_office', 'type' => 'text', 'value' => $owner['post_office']],
                ['label' => 'থানাঃ', 'name' => 'thana', 'type' => 'text', 'value' => $owner['thana']],
                ['label' => 'জেলাঃ', 'name' => 'district', 'type' => 'text', 'value' => $owner['district']],
            ],
        ],
    ];

    $fields_right = [
        ['label' => 'ইস্যু তারিখঃ', 'name' => 'issue_date', 'type' => 'date', 'value' => $owner['issue_date']],
        ['label' => 'ইস্যুর সময়ঃ', 'name' => 'issue_time', 'type' => 'time', 'value' => $owner['issue_time']],
    ];

    $fields_2 = [
        ['label' => 'গ্রামঃ', 'name' => 'permanent_village', 'type' => 'text', 'value' => $owner['permanent_village']],
        ['label' => 'পোঃ', 'name' => 'permanent_post_office', 'type' => 'text', 'value' => $owner['permanent_post_office']],
        ['label' => 'থানাঃ', 'name' => 'permanent_thana', 'type' => 'text', 'value' => $owner['permanent_thana']],
        ['label' => 'জেলাঃ', 'name' => 'permanent_district', 'type' => 'text', 'value' => $owner['permanent_district']],
    ];

    $fields_3 = [
        ['label' => 'এনআইডি নম্বরঃ', 'name' => 'nid_number', 'type' => 'number', 'value' => $owner['nid_number']],
        ['label' => 'টিন নম্বরঃ', 'name' => 'tin_number', 'type' => 'number', 'value' => $owner['tin_number']],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের নামঃ', 'name' => 'business_name', 'type' => 'text', 'value' => $owner['business_name']],
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ঠিকানাঃ', 'name' => 'business_address', 'type' => 'text', 'value' => $owner['business_address']],
    ];

    $fields_4 = [
        ['label' => 'ব্যবসা প্রতিষ্ঠানের ধরনঃ', 'name' => 'business_type', 'type' => 'text', 'value' => $owner['business_type']],
        ['label' => 'ট্রেড লাইসেন্স ধরনঃ', 'name' => 'trade_license_type', 'type' => 'text', 'value' => $owner['trade_license_type']],
        ['label' => 'ট্রেড লাইসেন্স ফিঃ', 'name' => 'trade_license_fee', 'type' => 'text', 'value' => $owner['trade_license_fee']],
        ['label' => 'কথায়ঃ', 'name' => 'in_words', 'type' => 'text', 'value' => $owner['in_words']],
    ];
?>

<form method="post" action="storetrade" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($owner['id']); ?>">
    <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($owner['image_path']); ?>">
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
                                <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>" required>
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
                                    <input type="<?php echo $field_input['type']; ?>" id="<?php echo $field_input['name']; ?>" name="<?php echo $field_input['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field_input['value']); ?>" required>
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
                                <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>" required>
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
                                <input type="file" id="file-upload" class="d-none" name="image">
                            </div>
                        </div>
                        <button type="button" id="file-browser" class="btn btn-primary custom_btn_primary mt-3">
                            Upload Picture
                        </button>
                        <?php if ($owner['image_path']): ?>
                            <img src="<?php echo htmlspecialchars('/uploads/' . $owner['image_path']); ?>" alt="Current Image" width="100">
                        <?php endif; ?>
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
                            <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>" required>
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
                            <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>" required>
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
                                <input type="<?php echo $field['type']; ?>" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>" required>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0 mt50">
            <div class="col-md-6 offset-md-4 center_btn">
                <button class="btn btn-primary custom_btn_primary" type="submit">
                    Click for save & print preview
                </button>
            </div>
        </div>
    </div>
</form>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>
