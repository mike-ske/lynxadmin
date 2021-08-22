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
                            
                            // get the page id
                            if ($id) 
                            {
                                $page =  $id;
                                echo $page;
                            }
                            else
                            {
                                $page = 1;

                            }   
                            $count = 1;
                            $row = paginator($page, 6, $conn, 'post');
                            foreach ($row as $value) 
                            {
                            
                        ?>

                        <tr class="odd">
                            <td class="text-center"><?php echo $count?></td>
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
                <div class="dataTables_info mr-2" id="dataTable_info" role="status" aria-live="polite">
                    <?php echo  $_SESSION['liveShow']?>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                    <ul class="pagination">
                                <!-- == create the pagination == -->
                        <?php                    
                            if ($page > 1) 
                            {
                                $calc = ($page-1);
                                echo "<li class='paginate_button page-item previous' id='dataTable_previous'>
                                        <a href='./?allPost=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                            <i class='fa fa-angle-double-left'></i>
                                        </a>
                                        </li>
                                        ";
                            
                            }

                            echo paginatorLink(6, './?allPost', $conn, 'post');
                            
                            $total_pages = nextPage(6, $conn, 'post');
                            for ($i=1; $i < $total_pages; $i++) 
                            { 
                                $i;
                            }
                            if ($i > $page) 
                            {
                                $calc = ($page+1);
                                echo  "<li class='paginate_button page-item previous' id='dataTable_previous'>
                                                <a href='./?allPost=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                                <i class='fa fa-angle-double-right'></i>
                                                </a>
                                        </li>";
                            }

                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <!--  ======== END PAGINATION ==========  -->
    </div>
</div>