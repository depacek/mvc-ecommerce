
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>category/create">List</a></li>
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
                <a href="" class="btn btn-primary">List Product</a> /
                <a href="<?php echo base_url() ?>product/create" class="btn btn-primary">Create product</a>
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
                <?php $i=1; foreach ($this->productdata as $pd) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $pd->role; ?></td>
                  <td><?php echo $pd->name; ?></td>
                  <td><?php echo $pd->slug; ?></td>
                  <td><?php echo $pd->rank; ?></td>
                  <td><?php if ($pd->status==1) {?>
                    <span class="label label-success">Active</span>
                  <?php }else{ ?>
                  <span class="label label-danger">De-Active</span>
                <?php }?>
                  <td>
                    <a href="<?php echo base_url() ?>category/delete/<?php echo $pd->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" ><i class="fa fa-trash"></i></a>

                    <a href="<?php echo base_url() ?>category/edit/<?php echo $pd->id; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
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

  