
<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Places</li>
                <li class="breadcrumb-item active">List</li>
            </ol>

<div class="container-fluid">
<div class="animated fadeIn">
    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Places
                            <div  style="float:right;">
                                <a class="btn btn-success" href="?action=create&controller=place">
                                     <i class="fa fa-plus "></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>PID</th>
                                        <th>Nom</th>
                                        <th>Address</th>
                                        <th>Start_Time</th>
                                        <th>End_Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($data as  $value) { ?>
                                    
                                <tr width="100%">
                                        <td ><?php echo $value['id'] ?></td>
                                        <td ><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['address'] ?></td>
                                        <td ><?php echo $value['start_time'] ?></td>
                                        <td ><?php echo $value['end_time'] ?></td>
                                        <td width="30%">
                                            <a class="btn btn-info" href="?action=details&controller=place&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-search-plus "></i>
                                            </a>
                                            <a class="btn btn-warning" href="?action=edit&controller=place&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="?action=delete&controller=place&id=<?php echo $value['id']; ?>">
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