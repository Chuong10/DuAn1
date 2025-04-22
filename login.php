<?php
include "Layout/header.php"; ?>
<div class="pamel panel-success">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
        <form action="login_POST.php" method="POST">
            <div class="form-group"> 
                <label for="frmUsername">Ten nguoi dung </label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="frmPass">Mat khau </label>
                <input id="frmPass" name="frmPass" type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <input id="frmsubmit" name="frmsubmit" type="Submit" 
                class="btn btn-primary btn-bg-success bt" value="Them nguoi dung moi">
            </div>
    </div>
</div>
