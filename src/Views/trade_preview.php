<?php include_once __DIR__ . '/layouts/header.php'; ?>

<div class="trade_preview">
    <div class="row align-items-center ">
        <div class="col-lg-4">
            <p>ইস্যু তারিখঃ <?php echo htmlspecialchars($owner['issue_date']); ?></p>
            <p>ইস্যু সময়ঃ <?php echo htmlspecialchars($owner['issue_time']); ?></p>
        </div>
        <div class="col-lg-6">
            <p>ট্রেড লাইসেন্স নং- <?php echo htmlspecialchars($owner['license_no']); ?></p>
        </div>
        <div class="col-lg-2">
            <div class="profile qr_code">
                <?php if ($owner['image_path']): ?>
                    <img class="d-block w-100" src="<?php echo htmlspecialchars('/uploads/' . $owner['image_path']); ?>" alt="Owner Image">
                <?php else: ?>
                    <img class="d-block w-100" src="assets/img/profile.jpg" alt="Profile Image">
                <?php endif; ?>
            </div>
            <div class="qr_code">
                <img class="d-block w-100" src="assets/img/qr.png" alt="QR Code">
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center  ">
        <div class="col-lg-5">
            <p><?php echo htmlspecialchars($owner['name']); ?></p>
            <p> মৃতঃ <?php echo htmlspecialchars($owner['father_name']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['mother_name']); ?> </p>
        </div>
    </div>

    <div class="row align-items-center justify-content-center  ">
        <div class="col-lg-6 text-start ">
            <p> <?php echo htmlspecialchars($owner['village']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['post_office']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['thana']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['district']); ?> </p>
            <!-- <p> ০১৭১৩১৩৫৩৮৮৬৫ </p> -->
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-end ">
            <div>
                <p> <?php echo htmlspecialchars($owner['permanent_village']); ?> </p>
                <p> <?php echo htmlspecialchars($owner['permanent_post_office']); ?> </p>
                <p> <?php echo htmlspecialchars($owner['permanent_thana']); ?> </p>
                <p> <?php echo htmlspecialchars($owner['permanent_district']); ?> </p>
                <!-- <p> ০১৭১৩১৩৫৩৮৮৬৫ </p> -->
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center  ">
        <div class="col-lg-5">
            <p><?php echo htmlspecialchars($owner['nid_number']); ?></p>
            <p> <?php echo htmlspecialchars($owner['business_name']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['business_address']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['business_type']); ?> </p>
            <p> <?php echo htmlspecialchars($owner['trade_license_type']); ?> </p>
        </div>
    </div>
    <div class="row align-items-center justify-content-center  ">
        <div class="col-lg-5 ">
            <div class="ps-5">
                <p><?php echo htmlspecialchars($owner['trade_license_fee']); ?>/=</p>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center  ">
        <div class="col-lg-5 ">
            <div class="ps-5 ">
                <br />
                <br />
                <br />
                <p><?php echo htmlspecialchars($owner['trade_license_fee']); ?>/=</p>
                <p><?php echo htmlspecialchars($owner['in_words']); ?></p>
            </div>
        </div>

        <div class="form-group row  mb-0 mt50 mb-5 ">
            <div class="col-md-4 offset-md-2">
                <button type="button" class="btn btn-primary custom_btn_primary" onclick="window.print();">
                    Save & Print
                </button>
            </div>
            <div class="col-md-4 offset-md-2">
                <a type="button" class="btn btn-primary custom_btn_primary" href="editTrade?id=<?=$owner['id'];?>">
                    <- Modify
                </a>
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>
