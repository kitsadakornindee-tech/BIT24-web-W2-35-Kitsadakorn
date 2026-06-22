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

        <form action="result.php" method="post" 
              style="background-color: rgba(255, 255, 255, 0.88); 
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
                // เปลี่ยนตัวอักษรหัวข้อเป็นสี orange
                echo "<h1 style='color: orange; font-size: 26px; margin-top: 0; margin-bottom: 25px; text-shadow: 1px 1px 2px rgba(0,0,0,0.1); line-height: 1.4;'>งานที่ 2 กฤษฎากร อินทร์ดี<br>BIT.2/4 เลขที่ 34</h1>"; 
            ?> 
            
            <hr style="border: 0; height: 2px; background: linear-gradient(to right, transparent, orange, transparent); margin-bottom: 35px;">

            <label for="side_length">
                <span style="color: black; font-size: 24px; font-weight: bold; display: block; margin-bottom: 15px;">ความยาวด้านของขนมเปียกปูน</span>
            </label>
            
            <input type="number" id="side_length" name="side_length" min="0" step="any" placeholder="ระบุจำนวนหน่วยที่นี่..." 
                   style="font-size: 22px; 
                          width: 100%; 
                          padding: 14px 20px; 
                          border: 2px solid orange; 
                          border-radius: 12px; 
                          text-align: center; 
                          box-shadow: inset 0 2px 4px rgba(0,0,0,0.05); 
                          outline: none;
                          box-sizing: border-box;
                          margin-bottom: 5px;
                          transition: all 0.3s;" 
                   required>
            
            <span style="color: gray; font-size: 16px; display: block; margin-bottom: 35px; font-weight: bold;">( หน่วย : เซนติเมตร / เมตร / นิ้ว )</span>
            
            <input type="submit" 
                   style="font-size: 22px; 
                          width: 100%; 
                          padding: 16px; 
                          background: linear-gradient(orange, darkorange); 
                          color: white; 
                          border: none; 
                          border-radius: 50px; 
                          font-weight: bold; 
                          cursor: pointer; 
                          box-shadow: 0 6px 20px rgba(255, 165, 0, 0.4);
                          box-sizing: border-box;
                          text-shadow: 1px 1px 2px rgba(0,0,0,0.2);" 
                   value="คำนวณเส้นรอบรูป">
        </form>

    </main>

</body>
</html>