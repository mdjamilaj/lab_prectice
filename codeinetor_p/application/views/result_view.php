<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="table-responsive">
					<table class="table table-bordered table-striped">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>email</th>
			<th>Contact</th>
			<th>Gernder</th>
			<th>photo</th>
			<th colspan="2">actions</th>	
		</tr>
<?php
    foreach ($results as $row) {
?>
<tr>
		<td><?php echo $row->name?></td>
		<td><?php echo $row->address ?></td>
		<td><?php echo $row->email ?></td>
		<td><?php echo $row->contact ?></td>
		<td><?php echo $row->gender ?></td>
		<td><img src="uploads/<?php echo $row->photo ?>" style="height:50px; width:50px;"></td>
		<td><a href="<?php base_url() ?>users/delete_user?id=<?php echo $row->id ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;

		<a href="#myModal">
			<div class="containe">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#form">
					<i class="fas fa-user-edit"></i>
				</button>  
			</div>
		</a>
		</td>
		</tr>
<?php   
}
?>
</table>

</div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>