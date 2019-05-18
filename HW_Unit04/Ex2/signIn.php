<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
        <form action="list.php" method="POST" role="form">
            <legend>Thông tin học viên</legend>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>

            <div class="form-group">
                <label for="">Mã Sinh viên</label>
                <input type="number" class="form-control" id="" placeholder="Nhập MSV" name="msv">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Email" name="mail">
            </div>

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập số điện thoại" name="sdt">
            </div>

            <div style="display: inline-block !important;" class="form-group">
                <label for="" style="margin-right: 10px !important;">Giới tính</label>
                <div style="display: inline-block !important;  margin-right: 10px !important;" class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gt" id="inlineRadio1" value="Nam" checked>
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                </div>
                <div style="display: inline-block !important;  margin-right: 10px !important;" class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gt" id="inlineRadio2" value="Nữ">
                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                </div>      
            </div>  

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address">
            </div>           
            
            <button type="submit" id="submit" class="btn btn-primary">Login</button>

        </form>
    </div>

</body>
</html>