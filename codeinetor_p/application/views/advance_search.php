<form class="form-inline ml-3" method="POST" action="<?php echo base_url() ?>users/advance_search" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
  <div class="row mt-5">
    <div class="col-md-8 mb-5">
      <div class="input-group input-group-sm">
        <input list="name1" class="form-control search_text"  type="text" id="name" name="name" placeholder="Search name" aria-label="Search">
       
        <?php if (isset($search_show_name)) {  ?> 

            <datalist id="name1">

          <?php  foreach ($search_show_name as $row) {  ?>


              <option value="<?php echo $row->name?>">

          
          <?php  }?> 

              </datalist>
              
          <?php } ?>


      </div>
      </div>
      <div class="col-md-8 mb-5">
      <div class="input-group input-group-sm">
        <input class="form-control search_text"  type="text" id="address" name="address" placeholder="Search address" aria-label="Search">
      </div>
    </div>
    <div class="col-md-8 mb-5">
      <div class="input-group input-group-sm">
        <input class="form-control search_text"  type="text" id="contact" name="contact" placeholder="Search contact" aria-label="Search">
      </div>
    </div>
    <div class="col-md-8 mb-5">
      <div class="input-group input-group-sm">
        <p><input style="margin-left: 10px" type="radio" name="gender" class="gender1" value="male"> Male</p>
        <p><input style="margin-left: 10px" type="radio" name="gender" class="gender1" value="female"> Female</p>
        <p><input style="margin-left: 10px" type="radio" name="gender" class="gender1" value="other"> Other</p>
      </div>
    </div>
    <div class="col-md-8 mb-5">
      <div class="input-group input-group-sm">
        <input class="form-control btn btn-success"  type="submit" id="submit" value="Search" aria-label="Search">
      </div>
    </div>
  </div>
</form>



  <div class="table-responsive" style="width: 75% !important;">
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
if (isset($search_show_student)) {

    foreach ($search_show_student as $row) {
?>
<tr>
    <td><?php echo $row->name?></td>
    <td><?php echo $row->address ?></td>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->contact ?></td>
    <td><?php echo $row->gender ?></td>
    <td><img src="<?php echo base_url() ?><?php echo $row->photo ?>" style="height:50px; width:50px;"></td>
    <td><a href="<?php echo base_url() ?>users/delete_user?id=<?php echo $row->id ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;

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
}
?>
</table>

</div>