<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<body>
<table class="table">
  <thead>
    <tr class="table-primary">
      
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">#</th>
    </tr>
  </thead>
    <tbody>
        <?php
        require_once("database.php");
        $sql = "select * from studen";
        $r = mysqli_query($conn,$sql);
        
    
        while($row = mysqli_fetch_row($r)){
        ?>
        <tr class="table-info">
            <div >
                <td><?php echo $row[0]."<br>";?></td>
                <td><?php echo $row[1]."<br>";?></td>
                <td><?php echo $row[2]."<br>";?></td>
                <td>
                    <button type="button" class="btn btn-success" href="">แก้ไข</button>
                    <button type="button" class="btn btn-danger">ลบ</button>
                </td>

            </div>

        </tr>
        <?php
        }
        ?>
        
    </tbody>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>





