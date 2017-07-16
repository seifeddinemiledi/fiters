
<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">List</li>
            </ol>

<div class="container-fluid">
<div class="animated fadeIn">
    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Bookings DataTables
                            <div  style="float:right;">
                                <a class="btn btn-success" href="?action=create&controller=booking">
                                     <i class="fa fa-plus "></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>BID</th>
                                        <th>User</th>
                                        <th>Coache</th>
                                        
                                        <th>Start,End</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($data as  $value) { ?>
                                    
                                <tr widh="100%">
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['user_f']." ".$value['user_l'] ?></td>
                                        <td><?php echo $value['coache_f']." ".$value['coache_l'] ?></td>
                                        <td>(<?php echo $value['start_time'] ?>) <?php echo $value['end_time'] ?></td>
                                        <td><?php echo $value['address'] ?></td>
                                        <td width="15%">
                                            <a class="btn btn-info" href="?action=details&controller=booking&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-search-plus "></i>
                                            </a>
                                           
                                            <a class="btn btn-danger" href="?action=delete&controller=booking&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>
</div>