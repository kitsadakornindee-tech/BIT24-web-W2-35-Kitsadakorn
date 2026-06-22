<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบคำนวณเส้นรอบรูปขนมเปียกปูน</title>
</head>
<body style="text-align: center; 
             background-image: url('https://yt3.googleusercontent.com/Yh_OwS9ULso6ct27p691VXNA727Egt45wLuL_G4W7bKA_IERsmw1RSYFx7TIFnviGbAB1Qym_A=s900-c-k-c0x00ffffff-no-rj'); 
             background-size: cover; 
             background-repeat: no-repeat; 
             background-attachment: fixed; 
             min-height: 100vh; 
             background-position: center; 
             font-family: sans-serif; 
             display: flex; 
             flex-direction: column; 
             align-items: center; 
             justify-content: center; 
             margin: 0; 
             padding: 20px; 
             box-sizing: border-box;">
    
    <main style="padding: 15px; 
                 border-radius: 38px; 
                 background: linear-gradient(135deg, rgba(255,165,0,0.2), rgba(255,215,0,0.2)); 
                 box-shadow: 0 0 80px orange, inset 0 0 20px white; 
                 backdrop-filter: blur(5px);
                 -webkit-backdrop-filter: blur(5px);
                 max-width: 580px; 
                 width: 100%; 
                 box-sizing: border-box;">

        <form style="background-color: rgba(255, 255, 255, 0.88); 
                     backdrop-filter: blur(15px); 
                     -webkit-backdrop-filter: blur(15px); 
                     padding: 50px 45px; 
                     border-radius: 24px; 
                     border: 3px solid transparent;
                     background-image: linear-gradient(rgba(255, 255, 255, 0.88), rgba(255, 255, 255, 0.88)), linear-gradient(135deg, orange, gold);
                     background-origin: border-box;
                     background-clip: padding-box, border-box;
                     box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
                     width: 100%; 
                     box-sizing: border-box;
                     margin: 0;">

            <?php
                // เปลี่ยนข้อความหัวข้อเป็นสี orange
                echo "<h1 style='color: orange; font-size: 28px; margin-top: 0; margin-bottom: 5px; font-weight: bold;'>ผลการคำนวณเส้นรอบรูป</h1>"; 
                echo "<h2 style='color: orange; font-size: 20px; margin-top: 5px; margin-bottom: 25px; font-weight: normal; line-height: 1.4;'>งานที่ 2 กฤษฎากร อินทร์ดี<br>BIT.2/4 เลขที่ 34</h2>"; 
            ?> 
            
            <hr style="border: 0; height: 2px; background: linear-gradient(to right, transparent, orange, transparent); margin-bottom: 35px;">

            <?php
            $side_length = floatval($_POST['side_length']);
            $perimeter = $side_length * 4;

            // เปลี่ยนจากรหัสสีเป็นชื่อสีที่อ่านง่ายและสวยงาม (green และ red)
            echo "<p style='color: green; font-weight: bold; font-size: 24px; margin: 15px 0;'>ความยาวด้านของขนมเปียกปูน: " . $side_length . " หน่วย</p>";
            echo "<p style='color: red; font-weight: bold; font-size: 26px; margin: 15px 0 35px 0;'>เส้นรอบรูปของขนมเปียกปูน คือ: " . $perimeter . " หน่วย</p>";
            ?>

            <a href="index.php" 
               style="color: white; 
                      background: linear-gradient(135deg, orange, darkorange); 
                      padding: 14px 40px; 
                      text-decoration: none; 
                      border-radius: 50px; 
                      font-weight: bold; 
                      font-size: 20px; 
                      box-shadow: 0 6px 20px rgba(255, 165, 0, 0.4);
                      display: inline-block;
                      text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">กลับไปหน้าคำนวณ</a>

        </form>

    </main>

</body>
</html>