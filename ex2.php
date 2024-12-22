<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body{
  font-family: "Krub", sans-serif;
  font-weight: 700;
  font-style: italic;
}
    </style>
    <!-- สิ้นสุดการเพิ่ม font -->
    


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1></H1>โปรเเกรม ภาษา html </H1>
    664485025 นายสถาพร ทิพย์ไปรยา <br>
    หมู่เรียน 66/96 <br>
    <?php
        // ทดสอบ comment ภาษา php
        echo "<h2>สวัสดีปีใหม่</h2>";
        echo "<br>ขอให้ทุกคนประสบแต่ความสุข";
        // สร้างตัวแปร
        $name="สถาพร";
        $surname="ทิพย์ไปรยา";
        echo "<br>ชื่อของคุณคือ".$name." ".$surname;
        // ทดสอบตัวแปร ตัวเลข
        $x=15;
        $y=7;
        $z=$x+$y;
        echo "<br>ค่าผลบวกเท่ากับ".$z;
        $z=$x*$y;
        echo"<br>ค่าผลคูณเท่ากับ".$z;

    ?>

</body>
</html>