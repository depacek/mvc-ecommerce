
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
                <a href="" class="btn btn-primary">Create Product</a> /
                <a href="<?php echo base_url() ?>product/index" class="btn btn-primary">List Product</a>
              </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php if (isset($this->error['sucess_messsage'])) {?>
                    <div class="alert alert-success"><?php echo $this->error['sucess_messsage']; ?></div>
                  <?php }else if (isset($this->error['error_messsage'])) {?>
                    <div class="alert alert-danger"><?php echo $this->error['error_messsage'];?></div>

                 <?php } ?>
                 <!--  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="category">Category</option>
                      <option value="subcategory">Sub-Category</option>
                    </select>
                  </div> -->
                  <div class="form-group" >
                    <label for="category_id">Parent Category</label>
                    <select name="category_id" class="form-control" id="category_id">
                      <option value="">select Category</option>
                      <?php foreach ($this->parentcategory as $pc) { ?>
                        <option value="<?php echo $pc->id; ?>"><?php echo $pc->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subcategory_id">child Category</label>
                    <select name="subcategory_id" class="form-control" id="subcategory_id">
                      <option value="">select Category</option>
                      <?php foreach ($this->childcategory as $pc) { ?>
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
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                    <?php if (isset($this->error['price'])) {?>
                     <span class="label label-danger"><?php echo $this->error['price'];?></span>
                    <?php } ?>
                  </div>                 
                  
                  <div class="form-group">
                    <label for="discount">discount</label>
                    <input type="number" class="form-control" name="discount" id="discount" placeholder="Enter discount">
                  </div>
                  <div class="form-group">
                    <label for="quantity">quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity">
                    <?php if (isset($this->error['quantity'])) {?>
                     <span class="label label-danger"><?php echo $this->error['quantity'];?></span>
                    <?php } ?>
                  </div>
                  <!-- <div class="form-group">
                    <label for="stock">stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" placeholder="Enter stock">
                    <?php if (isset($this->error['stock'])) {?>
                     <span class="label label-danger"><?php echo $this->error['stock'];?></span>
                    <?php } ?>
                  </div> -->
                  <div class="form-group">
                    <label for="short_description">short_description</label>
                    <textarea class="form-control" name="short_description" id="short_description" placeholder="Enter short_description"></textarea>
                    <?php if (isset($this->error['short_description'])) {?>
                     <span class="label label-danger"><?php echo $this->error['short_description'];?></span>
                    <?php } ?>
                  </div>
                   <div class="form-group">
                    <label for="description">description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
                    <?php if (isset($this->error['description'])) {?>
                     <span class="label label-danger"><?php echo $this->error['description'];?></span>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="image1">image1</label>
                    <input type="file" class="form-control" name="image1" id="image1" placeholder="Enter image1">
                    <?php if (isset($this->error['image1'])) {?>
                     <span class="label label-danger"><?php echo $this->error['image1'];?></span>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="image2">image2</label>
                    <input type="file" class="form-control" name="image2" id="image2" placeholder="Enter image2">
                    <?php if (isset($this->error['image2'])) {?>
                     <span class="label label-danger"><?php echo $this->error['image2'];?></span>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="image3">image3</label>
                    <input type="file" class="form-control" name="image3" id="image3" placeholder="Enter image3">
                    <?php if (isset($this->error['image3'])) {?>
                     <span class="label label-danger"><?php echo $this->error['image3'];?></span>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="image4">image4</label>
                    <input type="file" class="form-control" name="image4" id="image4" placeholder="Enter image4">
                    <?php if (isset($this->error['image4'])) {?>
                     <span class="label label-danger"><?php echo $this->error['image4'];?></span>
                    <?php } ?>
                  </div>
                   <div class="form-group">
                    <label for="size">size</label>
                    <input type="text" class="form-control" id="size" name="size" placeholder="Enter size">
                    <?php if (isset($this->error['size'])) {?>
                     <span class="label label-danger"><?php echo $this->error['size'];?></span>
                    <?php } ?>
                  </div> 
                   <div class="form-group">
                    <label for="color">color</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Enter color">
                    <?php if (isset($this->error['color'])) {?>
                     <span class="label label-danger"><?php echo $this->error['color'];?></span>
                    <?php } ?>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="radio" value="1" name="status" >Active
                    <input type="radio" value="0" name="status" checked="" >Deactive
                  </div>
                  <div class="form-group">
                    <label>Feature key</label>
                    <input type="radio" value="1" name="feature_key" >Active
                    <input type="radio" value="0" name="feature_key" checked="" >Deactive
                  </div>
                  <div class="form-group">
                    <label >Discount key</label>
                    <input type="radio" value="1" name="discount_key" >Active
                    <input type="radio" value="0" name="discount_key" checked="" >Deactive
                  </div>
                <div class="form-group">
                    <label >slider key</label>
                    <input type="radio" value="1" name="slider_key" >Active
                    <input type="radio" value="0" name="slider_key" checked="" >Deactive
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
      $('#category_id').change(function(){
        var category_id=$(this).val();
        var path="<?php echo base_url(); ?>"+'category/getsubcategory';
        $.ajax({
          url:path,
          data:{'category_id':category_id},
          method:'post',
          success:function(resp){
            // console.log(resp);
            $('#subcategory_id').empty();
            $('#subcategory_id').append(resp);
          }
        });
      });
    
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

  