<!--BODY-START-->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fresco.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fresco.css" />

<script src="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />

<style type="text/css">
/*Gallery css Start*/

.demonstrations { float: left; clear: both; width: 100%; margin-bottom: 18px; }
.demonstrations a {
  float: left;
 /* width: 100px;
  height: 100px;
  margin: 0 10px 10px 0;*/
  cursor: pointer;
}
.demonstrations a img { float: left; }
.demonstrations .rightmost { margin-right: 0; }

</style>


<div class="body">
    <div class="body-inner">
        <div class="body-left">
            <div class="body-middle" style="border-bottom:none;">
                <div class="body-top-left">
                    <div class="demonstrations">
                            <!--<tr>-->
                            <?php
                        foreach ($result as $data) {
                            ?>
                                <div style="width:22%; margin:10px 7px; padding:0px; float:left;">
                                    <!-- <a href="<?php echo base_url().  index_page() ?>/gallery/<?php echo $data->id; ?>">
                                        <img style="height:150px;width: auto;" src="<?php echo base_url(); ?>assets/images/folder-icon.png"/>
                                        <p><?php echo $data->name; ?></p>
                                    </a> -->
									<a href="<?php echo base_url(); ?>assets/images/gallery/<?php echo $data->image_name; ?>" class="fresco" data-fresco-group="example">
                                        <img style="height:150px;width: 100%;" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $data->image_name; ?>"/>
                                    </a>
                                </div>
                                <?php
                        }
                        ?>
                            <!--</tr>-->
                            
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
       	<div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
</div>	
<!--BODY-END-->
<script type="text/javascript">
    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight: "SpryAssets/SpryMenuBarRightHover.gif"});
</script>
