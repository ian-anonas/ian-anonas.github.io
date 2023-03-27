<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="./controller/addDeptController.php" method="POST">
        <span>Hello World</span>
        <input id="textbox" type="text" name="deptname" placeholder="Department Name" required>
        <input id="textbox" type="text" name="description" placeholder="Description" required>
        <input type="submit" name="upload" value="Add">
    </form>
    
</body>
</html>