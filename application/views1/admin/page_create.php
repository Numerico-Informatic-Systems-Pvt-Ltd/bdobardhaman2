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
                                    <form method="POST" class="form form-vertical">
                                        <div class="control-group">
                                            <label>Page Title</label>
                                            <div class="controls">
                                                <input name="txt_page_title" type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page slug</label>
                                            <div class="controls">
                                                <input name="txt_page_slug" type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page video Content</label>
                                            <div class="controls">
                                                <select name="slct_page_video_content" class="form-control">
                                                    <option value="0">--select video content</option>
                                                    <option value="0">--Turn off video content</option>
                                                    <?php foreach ($videos as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Bulletin Content</label>
                                            <div class="controls">
                                                <select name="slct_page_bulletin_content" class="form-control">
                                                    <option value="0">--select Bulletin content</option>
                                                    <option value="0">--Turn off Bulletin content</option>
                                                    <?php foreach ($bulletins as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page News Content</label>
                                            <div class="controls">
                                                <select name="slct_page_news_content" class="form-control">
                                                    <option value="0">--select News content</option>
                                                    <option value="0">--Turn off News content</option>
                                                    <?php foreach ($news as $value) { ?>
                                                        <option value="<?php echo $value->news_id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Notification Content</label>
                                            <div class="controls">
                                                <select name="slct_page_notification_content" class="form-control">
                                                    <option value="0">--select Notification content</option>
                                                    <option value="0">--Turn off Notification content</option>
                                                    <?php foreach ($notification as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Staff Directory Content</label>
                                            <div class="controls">
                                                <select name="slct_page_notification_content" class="form-control">
                                                    <option value="0">--select Staff Directory content</option>
                                                    <option value="0">--Turn off Staff Directory content</option>
                                                    <?php foreach ($staffdirectoris as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Contact Us Content</label>
                                            <div class="controls">
                                                <select name="slct_page_notification_content" class="form-control">
                                                    <option value="0">--select Contact Us content</option>
                                                    <option value="0">--Turn off Contact Us content</option>
                                                    <?php foreach ($contactus as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->header; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Default</label>
                                            <div class="controls">
                                                <select name="slct_page_default" class="form-control">
                                                    <option value="0">off</option>
                                                    <option value="1">on</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Page Content</label>
                                            <div class="controls">
                                                <textarea name="txt_page_content" style="height: 500px;" name="txt_description" class="form-control" placeholder="Enter Description"></textarea>
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
                                    </form>
                                </div><!--/panel content-->
                            </div><!--/panel-->
                        </div><!--/col-->
                    </div><!--/row-->
                </div><!--/col-span-9-->
            </div><!--/row-->
            <!-- /upper section -->
            <!-- lower section -->
            <div class="row">
                <div class="col-md-12">
                    <a href="#"><strong><i class="glyphicon glyphicon-list-alt"></i> Menu's</strong></a>  
                    <hr>    
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr><th>ID</th><th>Page Title</th><th></th><th></th></tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($results as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $data->id; ?></td>
                                    <td><?php echo $data->title; ?></td>
                                    <td><a role="button" class="btn btn-primary btn-xs" href="<?php echo base_url() . index_page(); ?>/admin/page/edit/<?php echo $data->id; ?>">Edit</a></td>
                                    <td><a role="button" class="btn btn-danger btn-xs" href="<?php echo base_url() . index_page(); ?>/admin/page/delete/<?php echo $data->id; ?>">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div><!--/row-->
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
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste jbimages"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                image_advtab: true,
                theme_advanced_resizing: true,
            });
        </script>
    </body>
</html>