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
                                    <form method="POST" class="form form-vertical" enctype="multipart/form-data">
                                        <?php
                                        foreach ($results as $data) {
                                            ?>
                                            <div class="control-group">
                                                <label>Menu Name</label>
                                                <div class="controls">
                                                    <input name="txt_menu_name" type="text" class="form-control" placeholder="Enter Name" value="<?php echo $data->name; ?>"/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>Parent</label>
                                                <div class="controls">
                                                    <select name="slct_parent" class="form-control">
                                                        <option value="<?php echo $data->pid; ?>"><?php echo $data->parent; ?></option>
                                                        <?php
                                                        foreach ($menu as $k => $v) {
                                                            ?>
                                                            <option value="<?php echo $menu[$k]['id']; ?>"><?php echo $menu[$k]['name']; ?></option>
                                                            <?php
                                                            if (isset($menu[$k]['child'])) {
                                                                foreach ($menu[$k]['child'] as $key => $value) {
                                                                    ?>
                                                                    <option value="<?php echo $menu[$k]['child'][$key]['id']; ?>">----<?php echo $menu[$k]['child'][$key]['name']; ?></option>
                                                                    <?php
                                                                    if (isset($menu[$k]['child'][$key]['child'])) {
                                                                        foreach ($menu[$k]['child'][$key]['child'] as $_k => $_v) {
                                                                            ?>
                                                                            <option value="<?php echo $menu[$k]['child'][$key]['child'][$_k]['id']; ?>">--------<?php echo $menu[$k]['child'][$key]['child'][$_k]['name']; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>Link to</label>
                                                <div class="controls">
                                                    <select name="txt_link" class="form-control">
                                                        <option value="<?php echo $data->link; ?>"><?php echo $data->link; ?></option>
                                                        <?php
                                                        foreach ($page_titles as $title) {
                                                            ?>
                                                            <option value="<?php echo $title->slug; ?>"><?php echo $title->title; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>Undeline</label>
                                                <div class="controls">
                                                    <select name="slct_undeline" class="form-control">
                                                        <option value="<?php echo $data->underline; ?>"><?php if($data->underline){ echo "on";}else{ echo "off";}; ?></option>
                                                        <option value="0">off</option>
                                                        <option value="1">on</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>widget image</label>
                                                <div class="controls">
                                                    <img src="<?php echo base_url().'assets/images/'.$data->widget_image; ?>" height="150px" alt="">
                                                    <input name="inp_img" type="file"/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>Widget Content</label>
                                                <div class="controls">
                                                    <textarea id="txt_widget_content" name="txt_widget_content" style="height: 500px;" name="txt_description" class="form-control" placeholder="Enter Description">
                                                        <?php echo $data->widget; ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label>Description</label>
                                                <div class="controls">
                                                    <textarea name="txt_description" class="form-control" placeholder="Enter Description">
                                                    <?php echo $data->description; ?>
                                                    </textarea>
                                                </div>
                                            </div> 
                                            <div class="control-group">
                                                <label>Rank</label>
                                                <div class="controls">
                                                    <input name="txt_rank" type="number" class="form-control" placeholder="Enter Rank" value="<?php echo $data->rank; ?>">
                                                </div>
                                            </div>    
                                            <div class="control-group">
                                                <label></label>
                                                <div class="controls">
                                                    <button type="submit" class="btn btn-primary">
                                                        Post
                                                    </button>
                                                </div>
                                            </div>
                                        <?php } ?>
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
                selector: "#txt_widget_content",
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