
<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/dashboard">Home</a></li>
              <li class="breadcrumb-item active">CreateCategory</li>
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
                <a href="" class="btn btn-primary">Create Category</a> /
                <a href="<?php echo base_url() ?>category/index" class="btn btn-primary">List Category</a>
              </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">
                  <?php if (isset($this->error['sucess_messsage'])) {?>
                    <div class="alert alert-success"><?php echo $this->error['sucess_messsage']; ?></div>
                  <?php }else if (isset($this->error['error_messsage'])) {?>
                    <div class="alert alert-danger"><?php echo $this->error['error_messsage'];?></div>

                 <?php } ?>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="category">Category</option>
                      <option value="subcategory">Sub-Category</option>
                    </select>
                  </div>
                  <div class="form-group" id="parent_id">
                    <label for="Parent">Parent Category</label>
                    <select name="parent_id" class="form-control">
                      <option value="">select Category</option>
                      <?php foreach ($this->parentcategory as $pc) { ?>
                        <option value="<?php echo $pc->id; ?>"><?php echo $pc->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    <?php if (isset($this->error['name'])) {?>
                     <span class="label label-danger"><?php echo $this->error['name'];?></span>
                    <?php } ?>
                  </div>                 
                  
                  <div class="form-group">
                    <label for="slug">slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rank</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="rank" placeholder="Enter Rank">
                    <?php if (isset($this->error['rank'])) {?>
                     <span class="label label-danger"><?php echo $this->error['rank'];?></span>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="radio" value="1" name="status" >Active
                    <input type="radio" value="0" name="status" checked="" >Deactive
                  </div>
                
                  
                </div>
                <!-- /.card-body -->
             <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnCreate">Create</button>
                </div>
              </form>
            </div>
          </div>
                


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#parent_id').hide();

      $('#role').change(function(){
        var a=$(this).val();
        if (a=='subcategory') {
          $('#parent_id').show();
        }else{
          $('#parent_id').hide();
        }
      });
    });

    $("#name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        var regExp = /\s+/g;
        Text = Text.replace(regExp,'-');
        $("#slug").val(Text);        
});
  </script>

  