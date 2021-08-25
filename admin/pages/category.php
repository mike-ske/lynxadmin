<div class="card card-info">
    <div class="card-header row">
        <a href="#" class="card-title col-md-6" data-toggle="modal" data-target="#modal-lg">Add Categories</a>
        
        <div class="card-tools col-md-6 text-right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0 scroll">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $count = 1;
                    $row = getAllCategory($conn);
                    foreach ($row as $value) 
                    {
                        
                ?>

                <tr>
                    <td><?php  echo $count?></td>
                    <td><?php  echo $value['cat_name']?></td>
                    <td class="text-left py-0 align-middle">
                        <div class="btn-group btn-group-sm ">
                            <a href="inc/delete_cat.php?id=<?php  echo $value['id']?>" class="btn btn-danger ">Remove <i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>

                <?php 
                    $count++;    
                    };
                ?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>