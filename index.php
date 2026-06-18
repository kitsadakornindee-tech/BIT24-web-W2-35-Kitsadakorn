<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบคำนวณเส้นรอบรูปขนมเปียกปูน</title>
</head>
<body>
    <h1>งานที่ 2 กฤษฎากร อินทร์ดี BIT.2/4</h1>
    
    <form action="result.php" method="post">
        <label for="side_length">ความยาวด้านของขนมเปียกปูน (หน่วย):</label><br>
        <input type="number" id="side_length" name="side_length" min="0" step="any" required><br><br>
        
        <input type="submit" value="คำนวณเส้นรอบรูป">
    </form>

</body>
</html>