<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        .tab{
    margin-top: 40px;
}

.table{
     border: #ffc6c7 solid 1px; 
}

.thead1{
    background: #594a4e;
    color: #fffffe;
}

.tbod{
    background: #fffffe;
}

.btnt{
    padding: 5px 30px;
    background: #ff8ba7;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    text-decoration: none;
    color: #33272a;
}

.tabhe{
    text-align: center;
    font-size: 45px;
    font-weight: 700;
    color: #33272a;
}
    </style>
    <title>Document</title>
</head>
<body>
    <h1 class="tabhe">DETAILS</h1>
    <div class="container tab">
        <table class="table table-bordered">
            <thead class="thead1">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="tbod">
              <tr>
                <th scope="row">1</th>
                <td>Anish</td>
                <td>Aadvik</td>
                <td>anishmahi946@gmail.com</td>
                <td>***********</td>
                <td><input type="button" value="Edit" class="btnt"></td>
                <td><input type="button" value="Delete" class="btnt"></td>
              </tr>
            </tbody>
          </table>
    </div>
</body>
</html>