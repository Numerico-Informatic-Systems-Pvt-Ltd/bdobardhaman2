<?php //eco "hi";print_r($result);exit; ?>
<!--BODY-START-->
<script src="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<div class="body">
    <div class="body-inner">
        <div class="body-left">
            <div class="body-middle">
                <div class="body-top-left">
                    <?php
                    //echo "<pre>";print_r($result);exit;
                    //foreach ($result as $data) {
                        echo $result->content;
                    //}
                    ?>
                </div>
                <?php if ($result->video_content_id) { ?>
                    <div class="body-left-box">
                        <iframe width="280" height="155" src="<?php echo $video->link; ?>" frameborder="0" allowfullscreen></iframe>
                        <?php echo $video->content; ?>
                    </div>
                    <div class="body-left-box2">
                        <img src="<?php echo base_url(); ?>assets/images/<?php echo $bulletin->image; ?>" width="280" height="155" alt="image" />
                        <?php echo $bulletin->content; ?>
                    </div>
                <?php } ?>
                <div style="clear:both"></div>
            </div>
            <?php if ($result->news_content_id) { ?>
                <div id="TabbedPanels1" class="TabbedPanels">
                    <ul class="TabbedPanelsTabGroup">
                        <?php foreach ($news as $value) { ?>
                            <li class="TabbedPanelsTab" tabindex="0"><?php echo $value->tab_name; ?></li>                      
                        <?php } ?>
                    </ul>
                    <div class="TabbedPanelsContentGroup">
                        <?php foreach ($news as $value) { ?>
                            <div class="TabbedPanelsContent">
                                <p><?php echo $value->tab_content ?></p>
                            </div>                    
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
       	<div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
    <?php if ($result->notification_content_id && $result->staffdirectory_content_id && $result->contactus_content_id) { ?>
        <div class="body-buttom">
            <div class="body-buttom-left">
                <?php echo ($notification->content) ? $notification->content :''; ?>
            </div>
            <div class="body-buttom-left">
                <?php echo $staffdirectory->content; ?>
            </div>
            <div class="body-buttom-right">
                <?php echo $contactus[0]->content; ?>
            </div>
        </div>
        <div style="clear:both"></div>
    <?php } ?>
</div>	
<!--BODY-END-->
<script type="text/javascript">
    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight: "SpryAssets/SpryMenuBarRightHover.gif"});
</script>
