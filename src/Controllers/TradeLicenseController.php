<?php

namespace App\Controllers;

class TradeLicenseController
{
    public function showsearchform()
    {
        require_once __DIR__ . '/../Views/trade_search.php';
    }

    public function save()
    {
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $village = $_POST['village'];
        $post_office = $_POST['post_office'];
        $thana = $_POST['thana'];
        $district = $_POST['district'];
        $permanent_village = $_POST['permanent_village'];
        $permanent_post_office = $_POST['permanent_post_office'];
        $permanent_thana = $_POST['permanent_thana'];
        $permanent_district = $_POST['permanent_district'];
        $nid_number = $_POST['nid_number'];
        $tin_number = $_POST['tin_number'];
        $business_name = $_POST['business_name'];
        $business_address = $_POST['business_address'];
        $business_type = $_POST['business_type'];
        $trade_license_type = $_POST['trade_license_type'];
        $trade_license_fee = $_POST['trade_license_fee'];
        $in_words = $_POST['in_words'];
        $issue_date = $_POST['issue_date'];
        $issue_time = $_POST['issue_time'];

        // Ensure the uploads directory exists
        $uploadDir = __DIR__ . '/../../../public/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $image_path = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image_path = 'uploads/' . basename($_FILES['image']['name']);
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . basename($_FILES['image']['name']))) {
                echo "Failed to upload image.";
                return;
            }
        }

        $pdo = require_once __DIR__ . '/../../config/database.php';

        // Generate unique license number
        $stmt = $pdo->query('SELECT COUNT(*) AS total FROM owners');
        $result = $stmt->fetch();
        $total = $result['total'] + 1;
        $license_no = 'CUP' . str_pad($total, 4, '0', STR_PAD_LEFT);

        $stmt = $pdo->prepare('INSERT INTO owners 
            (name, father_name, mother_name, village, post_office, thana, district, 
            permanent_village, permanent_post_office, permanent_thana, permanent_district, 
            nid_number, tin_number, business_name, business_address, business_type, 
            trade_license_type, trade_license_fee, in_words, issue_date, issue_time, image_path, license_no) 
            VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $name, $father_name, $mother_name, $village, $post_office, $thana, $district, 
            $permanent_village, $permanent_post_office, $permanent_thana, $permanent_district, 
            $nid_number, $tin_number, $business_name, $business_address, $business_type, 
            $trade_license_type, $trade_license_fee, $in_words, $issue_date, $issue_time, $image_path, $license_no
        ]);

        // Redirect to the trade_preview page with the last inserted ID
        header('Location: trade_preview?id=' . $pdo->lastInsertId());
        exit;
    }

    public function showEditForm()
    {
        if (!isset($_GET['id'])) {
            echo "ID not provided.";
            return;
        }

        $id = $_GET['id'];

        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('SELECT * FROM owners WHERE id = ?');
        $stmt->execute([$id]);
        $owner = $stmt->fetch();

        if (!$owner) {
            echo "Owner not found.";
            return;
        }

        require_once __DIR__ . '/../Views/editTrade.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $village = $_POST['village'];
        $post_office = $_POST['post_office'];
        $thana = $_POST['thana'];
        $district = $_POST['district'];
        $permanent_village = $_POST['permanent_village'];
        $permanent_post_office = $_POST['permanent_post_office'];
        $permanent_thana = $_POST['permanent_thana'];
        $permanent_district = $_POST['permanent_district'];
        $nid_number = $_POST['nid_number'];
        $tin_number = $_POST['tin_number'];
        $business_name = $_POST['business_name'];
        $business_address = $_POST['business_address'];
        $business_type = $_POST['business_type'];
        $trade_license_type = $_POST['trade_license_type'];
        $trade_license_fee = $_POST['trade_license_fee'];
        $in_words = $_POST['in_words'];
        $issue_date = $_POST['issue_date'];
        $issue_time = $_POST['issue_time'];

        $uploadDir = __DIR__ . '/../../../public/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $image_path = $_POST['existing_image'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image_path = 'uploads/' . basename($_FILES['image']['name']);
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . basename($_FILES['image']['name']))) {
                echo "Failed to upload image.";
                return;
            }
        }

        $pdo = require_once __DIR__ . '/../../config/database.php';


        $stmt = $pdo->prepare('UPDATE owners SET 
            name = ?, father_name = ?, mother_name = ?, village = ?, post_office = ?, thana = ?, district = ?, 
            permanent_village = ?, permanent_post_office = ?, permanent_thana = ?, permanent_district = ?, 
            nid_number = ?, tin_number = ?, business_name = ?, business_address = ?, business_type = ?, 
            trade_license_type = ?, trade_license_fee = ?, in_words = ?, issue_date = ?, issue_time = ?, image_path = ?
            WHERE id = ?');
        $stmt->execute([
            $name, $father_name, $mother_name, $village, $post_office, $thana, $district, 
            $permanent_village, $permanent_post_office, $permanent_thana, $permanent_district, 
            $nid_number, $tin_number, $business_name, $business_address, $business_type, 
            $trade_license_type, $trade_license_fee, $in_words, $issue_date, $issue_time, $image_path, $id
        ]);

        // Redirect to the trade_preview page with the updated ID
        header('Location: trade_preview?id=' . $id);
        exit;
    }

    public function search_form()
    {
        if (!isset($_POST['nid']) && !isset($_POST['license_no'])) {
            echo "ID not provided.";
            return;
        }

        $nid = $_POST['nid'];
        $license = $_POST['license_no'];


        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('SELECT * FROM owners WHERE nid_number = ? and license_no=?');
        $stmt->execute([$nid,$license]);
        $owner = $stmt->fetch();

        if (!$owner) {
            echo "Owner not found.";
            return;
        }

        require_once __DIR__ . '/../../src/Views/trade_preview.php';
    }


    public function showPreview()
    {
        if (!isset($_GET['id'])) {
            echo "ID not provided.";
            return;
        }

        $id = $_GET['id'];

        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('SELECT * FROM owners WHERE id = ?');
        $stmt->execute([$id]);
        $owner = $stmt->fetch();

        if (!$owner) {
            echo "Owner not found.";
            return;
        }

        require_once __DIR__ . '/../../src/Views/trade_preview.php';
    }

    public function show_print_preview()
    {
        if (!isset($_GET['id'])) {
            echo "ID not provided.";
            return;
        }

        $id = $_GET['id'];

        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('SELECT * FROM owners WHERE id = ?');
        $stmt->execute([$id]);
        $owner = $stmt->fetch();

        if (!$owner) {
            echo "Owner not found.";
            return;
        }

        require_once __DIR__ . '/../../src/Views/trade_print.php';
    }


}
?>
