<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Background Image</title>
    <style>
        @page {
            size: A4; /* Ensure A4 size in print */
            margin: 0; /* Remove default margins */
        }
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .container {
            position: relative;
            width: 210mm; /* A4 width */
            height: 297mm; /* A4 height */
            background-image: url('assets/img/bangla.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
        }
        .form_group {
            position: absolute;
        }
        .name {
            top: 170px;
            left: 200px;
            width: 300px;
        }
        .father_name {
            top: 210px;
            left: 200px;
            width: 300px;
        }
        .mother_name {
            top: 250px;
            left: 200px;
            width: 300px;
        }
        .issue_data{
            padding-top: 258px;
            padding-left: 135px;
        }
        .village {
            top: 360px;
            left: 200px;
            width: 200px;
        }
        .post_office {
            top: 360px;
            left: 550px;
            width: 200px;
        }
        .thana {
            top: 400px;
            left: 200px;
            width: 200px;
        }
        .district {
            top: 400px;
            left: 550px;
            width: 200px;
        }

        .issue_time {
            top: 540px;
            left: 550px;
            width: 200px;
        }
        .permanent_village {
            top: 660px;
            left: 200px;
            width: 200px;
        }
        .permanent_post_office {
            top: 660px;
            left: 550px;
            width: 200px;
        }
        .permanent_thana {
            top: 700px;
            left: 200px;
            width: 200px;
        }
        .permanent_district {
            top: 700px;
            left: 550px;
            width: 200px;
        }
        .nid_number {
            top: 840px;
            left: 200px;
            width: 200px;
        }
        .tin_number {
            top: 880px;
            left: 200px;
            width: 200px;
        }
        .business_name {
            top: 920px;
            left: 200px;
            width: 200px;
        }
        .business_address {
            top: 960px;
            left: 200px;
            width: 200px;
        }

        .trade_license_type {
            top: 1040px;
            left: 200px;
            width: 200px;
        }
        .trade_license_fee {
            top: 1080px;
            left: 200px;
            width: 200px;
        }
        .in_words {
            top: 1120px;
            left: 200px;
            width: 200px;
        }
        .submit_button {
            top: 1200px;
            left: 50%;
            transform: translateX(-50%);
        }
        .issue_date{
            padding-top: 276px;
            padding-left: 151px;
            font-size: 14px;
        }
        .trade_license_number{
                position: absolute;
                top: 314px;
                left: 415px;
                font-size:14px;
        }
        .trade_license_type{
                position: absolute;
    top: 292px;
    left: 172px;
    font-size:14px
        }
        .owner_name{
            position: absolute;
            top: 400px;
            left: 289px;
            font-size:14px;
        }
        .father_name{
            position: absolute;
            top: 420px;
            left: 289px;
            font-size:14px;
        }
        .mother_name{
            position: absolute;
            top: 440px;
            left: 289px;
            font-size:14px;
        }
        .vilage{
            position: absolute;
            top: 508px;
            left: 369px;
            font-size: 13px;
        }
         .post_office{
            position: absolute;
            top: 528px;
            left: 369px;
            font-size: 13px;
        }
         .thana{
            position: absolute;
            top: 548px;
            left: 369px;
            font-size: 13px;
        }
        .district{
            position: absolute;
            top: 568px;
            font-size: 13px;
            left: 369px;
        }
        .permanent_vilage{
            position: absolute;
            top: 508px;
            left: 600px;
            font-size: 13px;
        }
         .permanent_post_office{
            position: absolute;
            top: 528px;
            left: 600px;
            font-size: 13px;
        }
         .permanent_thana{
            position: absolute;
            top: 548px;
            left: 600px;
            font-size: 13px;
        }
        .permanent_district{
            position: absolute;
            top: 568px;
            font-size: 13px;
            left: 600px;
        }
        .nid_number{
                position: absolute;
                top: 603px;
                left: 288px;
                font-size:14px;
        }
        .business_name{
            position: absolute;
                top: 642px;
                left: 288px;
                font-size:14px;
        }
        .business_address{
            position: absolute;
            top: 660px;
            left: 288px;
            font-size:14px;
        }
        .business_type{
            position: absolute;
            top: 701px;
            left: 288px;
            font-size: 14px;
            width: 100%;
        }
        .tin_number{
            position: absolute;
            top: 621px;
            left: 288px;
            font-size: 14px;
        }
        .trade_license_fee{
            position: absolute;
            top: 725px;
            left: 288px;
            font-size: 14px;
        }
        .trade_license_fee_second{
            position: absolute;
            top: 777px;
            left: 502px;
            font-size: 14px;
        }
        .in_word{
            position: absolute;
    top: 926px;
    left: 404px;
    font-size: 14px;
        }


        @media print {
            body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .container {
            position: relative;
            width: 100%;
            height: 100%; /* A4 height */
            background-image: url('assets/img/bangla.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
        }
        .form_group {
            position: absolute;
        }
        .name {
            top: 170px;
            left: 200px;
        }
        .father_name {
            top: 210px;
            left: 200px;
        }
        .mother_name {
            top: 250px;
            left: 200px;
        }
        .issue_data{
            position: absolute;
           top: 220px;
           left: 200px;
        }
        .village {
            top: 360px;
            left: 200px;
        }
        .post_office {
            top: 360px;
            left: 550px;
        }
        .thana {
            top: 400px;
            left: 200px;
        }
        .district {
            top: 400px;
            left: 550px;
        }

        .issue_time {
            top: 540px;
            left: 550px;
        }
        .permanent_village {
            top: 660px;
            left: 200px;
        }
        .permanent_post_office {
            top: 660px;
            left: 550px;

        }
        .permanent_thana {
            top: 700px;
            left: 200px;
        }
        .permanent_district {
            top: 700px;
            left: 550px;

        }
        .nid_number {
            top: 840px;
            left: 200px;
        }
        .tin_number {
            top: 880px;
            left: 200px;
        }
        .business_name {
            top: 920px;
            left: 200px;

        }
        .business_address {
            top: 960px;
            left: 200px;
        }

        .trade_license_type {
            top: 1040px;
            left: 200px;
        }
        .trade_license_fee {
            top: 1080px;
            left: 200px;
        }
        .in_words {
            top: 1120px;
            left: 200px;
        }
        .submit_button {
            top: 1200px;
            left: 50%;
            transform: translateX(-50%);
        }
        .issue_date{
            padding-top: 373px;
            padding-left: 205px;
            font-size:14px;
        }
        .trade_license_number{
                position: absolute;
                top: 430px;
                left: 565px;
                font-size:14px;
        }
        .trade_license_type{
                position: absolute;
                top: 397px;
                left: 234px;
        }
        .owner_name{
            position: absolute;
            top: 550px;
            left: 400px;
            font-size:14px;
        }
        .father_name{
            position: absolute;
            top: 580px;
            left: 400px;
            font-size:14px;
        }
        .mother_name{
            position: absolute;
            top: 610px;
            left: 400px;
            font-size:14px;
        }
        .vilage{
            position: absolute;
            top: 697px;
            left: 510px;
            font-size: 13px;
        }
         .post_office{
            position: absolute;
            top: 725px;
            left: 510px;
            font-size: 13px;
        }
         .thana{
            position: absolute;
            top: 750px;
            left: 510px;
            font-size: 13px;
        }
        .district{
            position: absolute;
            top: 780px;
            font-size: 13px;
            left: 510px;
        }
        .permanent_vilage{
            position: absolute;
            top: 697px;
            left: 810px;
            font-size: 13px;
        }
         .permanent_post_office{
            position: absolute;
            top: 725px;
            left: 810px;
            font-size: 13px;
        }
         .permanent_thana{
            position: absolute;
            top: 750px;
            left: 810px;
            font-size: 13px;
        }
        .permanent_district{
            position: absolute;
            top: 780px;
            font-size: 13px;
            left: 810px;
        }
        .nid_number{
                position: absolute;
                top: 823px;
                left: 400px;
                font-size:14px;
        }
        .business_name{
            position: absolute;
                top: 875px;
                left: 400px;
                font-size:14px;
        }
        .business_address{
            position: absolute;
            top: 905px;
            left: 400px;
            font-size:14px;
        }
        .business_type{
            position: absolute;
            top: 960px;
            left: 288px;
            font-size: 14px;
            width: 100%;
        }
        .tin_number{
            position: absolute;
            top: 850px;
            left: 400px;
            font-size: 14px;
        }
        .trade_license_fee{
            position: absolute;
            top: 990px;
            left: 400px;
            font-size: 14px;
        }
        .trade_license_fee_second{
            position: absolute;
            top: 1060px;
            left: 700px;
            font-size: 14px;
        }
        .in_word{
            position: absolute;
    top: 1267px;
    left: 550px;
    font-size: 14px;
        }
        }

    </style>
</head>
<body>
    <div class="trade_preview container">
    <div class="row align-items-center ">
        <div class="col-lg-4 issue_date">
            <?php echo htmlspecialchars($owner['issue_date']); ?>
        </div>
        <div class="col-lg-6 trade_license_number">
            <?php echo htmlspecialchars($owner['license_no']); ?>
        </div>
        <div class="trade_license_type"> <?php echo htmlspecialchars($owner['trade_license_type']); ?> </div>
         <div class="owner_name"><?php echo htmlspecialchars($owner['name']); ?></div>
         <div class="father_name"> মৃতঃ <?php echo htmlspecialchars($owner['father_name']); ?> </div>
         <div class="mother_name"> <?php echo htmlspecialchars($owner['mother_name']); ?> </div>
         <div class="vilage"> <?php echo htmlspecialchars($owner['village']); ?> </div>
         <div class="post_office"> <?php echo htmlspecialchars($owner['post_office']); ?> </div>
         <div class="thana"> <?php echo htmlspecialchars($owner['thana']); ?> </div>
         <div class="district"> <?php echo htmlspecialchars($owner['district']); ?> </div>

         <div class="permanent_vilage"> <?php echo htmlspecialchars($owner['permanent_village']); ?> </div>
         <div class="permanent_post_office"> <?php echo htmlspecialchars($owner['permanent_post_office']); ?> </div>
         <div class="permanent_thana"> <?php echo htmlspecialchars($owner['permanent_thana']); ?> </div>
         <div class="permanent_district"> <?php echo htmlspecialchars($owner['permanent_district']); ?> </div>

         <div class="nid_number"><?php echo htmlspecialchars($owner['nid_number']); ?></div>
         <div class="business_name"> <?php echo htmlspecialchars($owner['business_name']); ?> </div>
         <div class="business_address"> <?php echo htmlspecialchars($owner['business_address']); ?> </div>
         <div class="business_type"> <?php echo htmlspecialchars($owner['business_type']); ?> </div>
        <div class="tin_number"> <?php echo htmlspecialchars($owner['tin_number']); ?> </div> 

        <div class="trade_license_fee"><?php echo htmlspecialchars($owner['trade_license_fee']); ?>/=</div>
        <div class="trade_license_fee_second"><?php echo htmlspecialchars($owner['trade_license_fee']); ?>/=</div>
        <div class="in_word"><?php echo htmlspecialchars($owner['in_words']); ?></div>
         


    </div>


</div>
</body>
</html>