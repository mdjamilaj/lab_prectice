<style type="text/css">
    /* style 4 */
*,
*:after,
*:before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.box {
    background-color: #dfc8ca;
    text-align: center;
    padding: 0.25rem 1.25rem;
}

.box + .box {
    margin-top: 2.5rem;
}

.inputfile-4 + label {
    color: #d3394c;
}

.inputfile-4:focus + label,
.inputfile-4.has-focus + label,
.inputfile-4 + label:hover {
    color: #722040;
}

.inputfile-4 + label figure {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #d3394c;
    display: block;
    padding: 20px;
    margin: 0 auto 10px;
}

.inputfile-4:focus + label figure,
.inputfile-4.has-focus + label figure,
.inputfile-4 + label:hover figure {
    background-color: #722040;
}

.inputfile-4 + label svg {
    width: 100%;
    height: 100%;
    fill: #f1e5e6;
}
.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
.inputfile + label {
    max-width: 80%;
    font-size: 1.25rem;
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
}

</style>

<div class="container d-flex justify-content-center">
    <div class="col-md-6 col-sm-offset-2 ml-5 pl-5"><br>
        <h2 class="text-center mb-2">User registration</h2>
        <form method="POST" action="<?php echo base_url() ?>users/data_insert" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <input type="text" id="name" placeholder="Name" name="name" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" id="address" placeholder="Address" name="address" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" id="email" placeholder="Email" name="email" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" id="contact" placeholder="Contact" name="contact" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" id="gender" placeholder="Gender" name="gender" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" id="allow_rasponse_img" placeholder="Gender" name="image" required="" class="form-control">
            </div>
            <div class="box">
                    <!-- <input type="file" name=""> -->
                    <input type="file" name="photo" id="photo" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                    <label for="photo"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
            </div>
            <br />
            <div class="form-group">
                <input type="submit" value="Add Users" class="btn btn-success btn-block btn-lg">
            </div>
        </form>
    </div>
</div><br>


<div id="ajaxuplodedimage"></div>


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