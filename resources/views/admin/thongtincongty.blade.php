<x-header-admin></x-header-admin>
<link href="{{ asset('css/stylethongtin.css') }}" rel="stylesheet" type="text/css">
<head>
  <meta charset="UTF-8">
  <title>Thông tin công ty</title>
  <link rel="stylesheet" href="style.css">
</head>
<form action="submit.php" method="post">
    <h1>Thông tin công ty</h1>
    <div class="form-group">
        <label for="namecty">Tên công ty</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên công ty">
    </div>
    <div class="form-group">
        <label for="position">Địa chỉ</label>
        <input type="text" class="form-control" id="Adress" name="Adress" placeholder="Nhập địa chỉ">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<x-footer-admin></x-footer-admin>
