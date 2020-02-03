<p>ldsabhvll adfig auidsf aiudg</p>

<button class="show">Click To Show</button>

<div class="div1"> This issus change and show document in codinetor </div>



<div class="container d-flex justify-content-center">
    <div class="col-md-6 col-sm-offset-2 ml-5 pl-5"><br>
        <h2 class="text-center mb-2">User registration</h2>
        <form method="POST" action="<?php echo base_url() ?>users/data_insert" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <input type="file" id="file-5" name="photo" class="form-control" class="inputfile inputfile-4">
            </div>
            <br />
            <div class="form-group">
                <input type="submit" value="Add Users" class="btn btn-success btn-block btn-lg">
            </div>
        </form>
    </div>
</div><br>


<div class="ajaxuplodedimage"></div>


<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload & Crop Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                          <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br/>
                          
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-success crop_image">Crop & Upload Image</button>
            </div>
        </div>
    </div>
</div>