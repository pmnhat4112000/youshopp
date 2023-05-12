<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
 <div class="main-content position-relative bg-gray-100  h-100">
    <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary">Add category</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" style="color:#333">Danh mục sản phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                     <th  style="color: #333;width: 150px;text-align:center;">   ảnh </th>
                    <th  style="color: #333">   Name </th>
                   
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                     <td style="text-align:center"><?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;">
                        <?php endif; ?></td>
                    <td style="color: #333"><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                    <?php 
                        $categoriesSub = $this->modelCategoriesSub($rows->id);
                     ?>
                     <?php foreach($categoriesSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left:20px;"><?php echo $rowsSub->name; ?></td>
                            <td style="text-align:center;">
                                <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>">Edit</a>&nbsp;
                                <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                     <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
</div>