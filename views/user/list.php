
<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">List</li>
            </ol>

<div class="container-fluid">
<div class="animated fadeIn">
    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Users DataTables
                            <div  style="float:right;">
                                <a class="btn btn-success" href="?action=create&controller=user">
                                     <i class="fa fa-plus "></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>UID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($data as  $value) { ?>
                                    
                                <tr>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['firstname'] ?></td>
                                        <td><?php echo $value['lastname'] ?></td>
                                        <td>(<?php echo $value['phonePrefixNumber'] ?>) <?php echo $value['phoneNumber'] ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td>
                                            <a class="btn btn-info" href="?action=details&controller=user&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-search-plus "></i>
                                            </a>
                                            <a class="btn btn-warning" href="?action=edit&controller=user&id=<?php echo $value['id']; ?>">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="?action=delete&controller=user&id=<?php echo $value['id']; ?>">
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