<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Sriracha&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Sriracha", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    <!-- สิ้นสุดการเพิ่ม font -->
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title>
</head>
<body>
    <H1>โปรเเกรม ภาษา php สร้างฟร์อมข้อมูล</H1>
    664485025 นายสถาพร ทิพย์ไปรยา <br>
    หมู่เรียน 66/96 <br>
    <?php
        $wide = $_POST["w"]; 
        $high = $_POST["h"];
        $long = $_POST["l"];
        $z = $wide*$high*$long*0.01;
        echo "ต้องใช้ปูนเท่ากับ".$z. "คิว";
    ?>
</body>
</html>