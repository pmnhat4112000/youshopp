<?php 
    //load file Layout.php vào đây
    $this->fileLayout = "Layout.php";
 ?>

 <div class="main-content position-relative bg-gray-100  h-100">
    
       
       
        <div style="color:#000"> ADD User</div>
        <div>
            <?php if(isset($_GET["notify"]) && $_GET["notify"] == "email-exists"): ?>
             <div style>Email da ton taji</div> 
        <?php endif; ?>
        <form method="post" action="<?php echo $action; ?>">
<!-- rows -->
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> <span style="color: black;">Name</span></div>
    <div class="col-md-10">
        <input style="background: #fff;" type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name" class="form-control" required>
    </div>
</div>
<!-- end rows -->
<!-- rows -->
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> <span style="color: black;">Email</span></div>
    <div class="col-md-10">
        <input style="background: #fff;" type="email" value="<?php echo isset($record->email) ? $record->email : ""; ?>" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> name="email" class="form-control" required>
    </div>
</div>
<!-- end rows -->
<!-- rows -->
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"><span style="color: black;">Password</span></div>
    <div class="col-md-10">
        <input style="background: #fff;" type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control">
    </div>
</div>
<!-- end rows -->
<!-- rows -->
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <input type="submit" value="Thêm" class="btn btn-primary" style="padding:15px 50px;margin-top:10px">
    </div>
</div>
<!-- end rows -->
</form>

        </div>
    

 </div>