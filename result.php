<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบคำนวณเส้นรอบรูปขนมเปียกปูน</title>
</head>
<body style="text-align: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; background-position: center;">
       <?php
        echo "<h1 style='color:orange'>ผลการคำนวณเส้นรอบรูป</h1>"; 
    ?> 
       <?php
        echo "<h1 style='color:orange'>งานที่ 2 กฤษฎากร อินทร์ดี BIT.2/4 เลขที่ 34</h1>"; 
    ?> 
    <?php
    // 1. ดึงค่าจากฟอร์มมาคำนวณทันที
    $side_length = floatval($_POST['side_length']);
    $perimeter = $side_length * 4;

    // 2. แสดงผลลัพธ์เป็นข้อความธรรมดา (ไม่เพิ่ม CSS)
    echo "ความยาวด้านของขนมเปียกปูน: " . $side_length . " หน่วย<br>";
    echo "เส้นรอบรูปของขนมเปียกปูน คือ: " . $perimeter . " หน่วย<br><br>";
    ?>

    <a href="index.php">กลับไปหน้าคำนวณ</a>

</body>
</html>