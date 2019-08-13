
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/dashboard">Home</a></li>
              <li class="breadcrumb-item active">List Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                <a href="" class="btn btn-primary">List Category</a> /
                <a href="<?php echo base_url() ?>category/create" class="btn btn-primary">Create Category</a>
              </h3>
              </div>
              <!-- /.card-header -->
             <table class="table table-bordered" id="category_table">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Rank</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($this->categorydata as $cd) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $cd->role; ?></td>
                  <td><?php echo $cd->name; ?></td>
                  <td><?php echo $cd->slug; ?></td>
                  <td><?php echo $cd->rank; ?></td>
                  <td><?php if ($cd->status==1) {?>
                    <span class="label label-success">Active</span>
                  <?php }else{ ?>
                  <span class="label label-danger">De-Active</span>
                <?php }?>
                  <td>
                    <a href="<?php echo base_url() ?>category/delete/<?php echo $cd->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" ><i class="fa fa-trash"></i></a>

                    <a href="<?php echo base_url() ?>category/edit/<?php echo $cd->id; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
               
             </table>
            </div>
          </div>
                


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#category_table').DataTable();
    } );
  </script>

  