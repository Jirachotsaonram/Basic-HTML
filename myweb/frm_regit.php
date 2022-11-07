<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<h1 class="container-fluid my-4" style="text-align:center" >สมัครสมาชิก</h1>
    
    <form action="save_regit.php" method="post">
        <div class="container-fluid my-4">
            <label for="code" class="fw-bold">รหัสนักศึกษา</label>
            <input type="text" name="code" class="form-control" id="code" >
            <label for="name" class="fw-bold" >ชื่อสกุล </label>
            <input type="text" name="name" class="form-control" id="name">
            <label for="password" class="fw-bold">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        

        <div class="container-fluid my-4">
            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            <button type="reset" class="btn btn-primary" >ล้างข้อมูล</button>
        </div>
        
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>