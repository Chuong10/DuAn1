<?php
include "Layout/header.php"; ?>

<div class="pamel panel-success">
    <div class="panel-heading">Thêm Người Dùng</div>
    <div class="panel-body">
        <form action="adduser_POST.php" method="POST">
            <div class="form-group"> 
                <label for="frmname">Họ Và Tên</label>
                <input id="frmname" name="frmname" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="frmusername">Tên Người Dùng</label>
                <input id="frmusername" name="frmusername" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="frmpass">Mật Khẩu</label>
                <input id="frmpass" name="frmpass" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="frmrole">Vai Trò</label>
                <input id="frmrole" name="frmrole" type="checkbox" text="Is Admin" value="Admin" class="btn-check">
            </div>
            <div class="form-group"> 
                <input id="frmsubmit" name="frmsubmit" type="Submit" 
                class="btn btn-primary btn-bg-success bt" value="Thêm người dùng mới">
            </div>
    </div>
</div>

<?php
include "Layout/footer.php"; ?>