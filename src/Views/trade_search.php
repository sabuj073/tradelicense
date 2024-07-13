<?php include_once __DIR__ . '/layouts/header.php'; ?>
    <div class="search_trade mt-lg-5 mt-md-3 ">
        <?php include_once __DIR__ . '/layouts/inc/Logo.php'; ?>
        <form method="POST" action="search_form">
            <div class="row mt-lg-5 mt-md-3  mt-2">
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="form_group">
                        <div>
                            <label for="nid_number" class="">এনআইডি নম্বর দিন *</label>
                        </div>
                        <div class="w-100">
                            <input type="text" id="nid_number" name="nid" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="form_group">
                        <div>
                            <label for="trade_license_number" class="">ট্রেড লাইসেন্স নম্বর দিন *</label>
                        </div>
                        <div class="w-100">
                            <input type="text" id="trade_license_number" name="license_no"
                                class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row  mb-0">
                <div class="col-md-12 text-center ">
                    <button type="submit" class="btn btn-primary custom_btn_primary">
                        খোজ করুন
                    </button>
                </div>
            </div>
        </form>
    </div>
<?php include_once __DIR__ . '/layouts/footer.php'; ?>
