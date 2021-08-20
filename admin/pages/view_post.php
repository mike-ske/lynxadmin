<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Post</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="col-sm-12 col-md-6">
                <div id="dataTable_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th style="text-align:center;">Id</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Date Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $count = 1;
                            $row = getAllPost($conn, 20);
                            foreach ($row as $value) 
                            {
                            
                        ?>

                        <tr class="odd">
                            <td class="sorting_1 text-center"><?php echo $count?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['author'] ?></td>
                            <td><?php echo getAllCategoryById($conn, $value['category_id']) ?></td>
                            <td><?php echo convertDate($value['created_date']) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="./?editPost=<?php echo $value['id'] ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#deletePost" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
        </div>
        <!--  ======== START PAGINATION ==========  -->
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                    Showing 1 to 10 of 57 entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                    <ul class="pagination">
                            <!-- paginations -->
                    </ul>
                </div>
            </div>
        </div>

        <!--  ======== END PAGINATION ==========  -->
    </div>
</div>