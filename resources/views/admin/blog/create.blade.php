<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Thêm bài blog</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST">

                <label for="">Tên bài blog</label><br>
                <input value="" type="text" name="name" id="" class="form-control">
                <label for="">Tình trạng</label><br>
                <input value="" type="text" name="status" class="form-control">
                <label for="formFileLg" class="form-label">Upload photo</label>
                <input required class="form-control form-control-lg" id="photo"name="photo" type="file">
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
