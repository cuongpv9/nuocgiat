	<!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <h3 class="pull-right">
	            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-category">Thêm Mới</button>
	          </h3>
            </div>
        	<!-- model content add more category -->
	          	<div class="modal fade" id="modal-add-category">
		          <div class="modal-dialog">
		            <div class="modal-content">
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span></button>
		                <h4 class="modal-title">Thêm mới danh mục</h4>
		              </div>
		              <div class="modal-body">
		                <form action="categories_process" method="POST" enctype="multipart/form-data">
			              <div class="box-body">
			                <div class="form-group">
			                  <label>Tên danh mục</label>
			                  <input name="category_title" class="form-control" autocomplete="off">
			                </div>
			                <div class="form-group">
			                  <label>Miêu tả</label>
			                  <input name="category_describe" class="form-control" autocomplete="off">
			                </div>
			                <div class="form-group">
			                  <label >Ảnh đại diện</label>
			                  <input type="file" name="category_avatar" class="form-control" autocomplete="off">
			                </div>
			                <div class="form-group">
			                  <label>Sắp xếp</label>
			                  <input name="category_sort" type="number" class="form-control" autocomplete="off">
			                </div>
			                <div class="form-group">
			                  <label class="text text-danger">
			                  	<input type="checkbox" name="category_deactive">
			                  	Không Kích hoạt danh mục này!
			              	  </label>
			                </div>
			              </div>
			              <!-- /.box-body -->
			              <div class="modal-footer">
			                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
			                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm Mới</button>
			              </div>
			            </form>
		              </div>
		              
		            </div>
	          	  </div>
        		</div>
        	<!-- /.modal-content -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tên Danh Mục</th>
                  <th>Miêu Tả</th>
                  <th>Ảnh Đại Diện</th>
                  <th>Sắp Xếp</th>
                  <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category):?>
                <tr>
                  <td><?php echo $category['category_title'];?></td>
                  <td><?php echo $category['category_describe'];?></td>
                  <td><a href="public/uploads/<?php echo $category['category_avatar'];?>">Hình Ảnh</a></td>
                  <td><?php echo $category['category_sort'];?></td>
                  <td>
                  	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Cập Nhật</button>
                  	<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Vô Hiệu</button>
                  	<button type="submit" class="btn btn-danger"><i class="fa fa-plus"></i> Xóa</button>
                  </td>
                </tr>
            	<?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Tên Danh Mục</th>
                  <th>Miêu Tả</th>
                  <th>Ảnh Đại Diện</th>
                  <th>Sắp Xếp</th>
                  <th>Hành Động</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>