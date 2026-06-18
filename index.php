<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบคำนวณเส้นรอบรูปขนมเปียกปูน</title>
</head>
<body style="text-align: center; background-image: url('https://yt3.googleusercontent.com/Yh_OwS9ULso6ct27p691VXNA727Egt45wLuL_G4W7bKA_IERsmw1RSYFx7TIFnviGbAB1Qym_A=s900-c-k-c0x00ffffff-no-rj'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; background-position: center;">
       <?php
        echo "<h1 style='color:orange'>งานที่ 2 กฤษฎากร อินทร์ดี BIT.2/4 เลขที่ 34</h1>"; 
    ?> <br><br><br><br><br><br>
<form action="result.php" method="post">
    <label for="side_length">
        <span style="color: red; font-size: 40px; text-decoration: none;">ความยาวด้านของขนมเปียกปูน (หน่วย):</span>
    </label><br><br><br><br><br><br>
    
    <input type="number" id="side_length" name="side_length" min="0" step="any" style="font-size: 30px; width: 300px;" required><br><br><br><br><br><br>
    <input type="submit" style="font-size: 30px; width: 500px" value="คำนวณเส้นรอบรูป">
</form>

</body>
</html>