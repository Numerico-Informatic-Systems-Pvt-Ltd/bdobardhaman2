<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('includes/admin-header.php'); ?>
    <body>
        <?php $this->load->view('includes/admin-top.php'); ?>
        <!-- Main -->
        <div class="container">
            <!-- upper section -->
            <div class="row">
                <div class="col-md-3">
                    <!-- left -->
                    <a href="#"><strong><i class="glyphicon glyphicon-briefcase"></i> Toolbox</strong></a>
                    <hr>
                    <?php $this->load->view('includes/admin-navigation.php'); ?>
                    <hr>
                </div><!-- /span-3 -->
                <div class="col-md-9">
                    <!-- column 2 -->	
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i>Navigation Menu</strong></a>  
                    <hr>
                    <div class="row">
                        <!-- center left-->	
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="glyphicon glyphicon-wrench pull-right"></i>
                                        <h4>Submit Request</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="control-group">
                                            <label>Select folder</label>
                                            <div class="controls">
                                                <select  class="form-control"  name="slct_gallery">
                                                    <?php foreach ($gallary_name as $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>      
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Upload Image</label>
                                            <div class="controls">
                                                <input name="files_upload" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label></label>
                                            <div class="controls">
                                                <button name="submit" type="submit" value="1" class="btn btn-primary">
                                                    Post
                                                </button>
                                            </div>
                                        </div>   
                                    </form>
                                </div><!--/panel content-->
                            </div><!--/panel-->
                        </div><!--/col-->
                    </div><!--/row-->
                </div><!--/col-span-9-->
            </div><!--/row-->
            <!-- /upper section -->
            <!-- lower section -->
        </div><!--/container-->
        <!-- /Main -->
        <?php $this->load->view('includes/modal/modal-success.php'); ?>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
<?php if ($update_success) { ?>
                $('#addWidgetModal').modal('show');
<?php } ?>
        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea",
                theme: "modern",
                height: 600,
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor "
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================
                toolbar1: "insertfile undo redo | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote | link unlink anchor | image media cleanup help code | hr removeformat visualaid | insertdate inserttime | print preview tablecontrols | sub sup | charmap emotions iespell advhr | ltr rtl | fullscreen  | cut copy paste pastetext | ",
                toolbar3: " styleselect formatselect fontselect fontsizeselect  ",
                image_advtab: true,
                theme_advanced_resizing: true,
            });
        </script>
    </body>
</html>