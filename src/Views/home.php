<?php include_once __DIR__ . '/layouts/header.php'; ?>
<?php include_once __DIR__ . '/frontend/banner.php'; ?>

<div class="trade_container mt-5">
    <?php include_once __DIR__ . '/layouts/inc/Logo.php'; ?>
    <div class="row">
        <div class="col-lg-12 mt-3 mb-3">
            <div class="trade_wrap">
                <a href="create_trade" class="trade_btn">নতুন ট্রেড লাইসেন্স </a>
                <a href="create_trade" class="trade_btn">নতুন ট্রেড নবায়ন </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="trade_wrap">
                <a href="trade_search" class="trade_btn">নতুন ট্রেড সংশোধন </a>
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>
