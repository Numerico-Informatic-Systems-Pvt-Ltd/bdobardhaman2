<!--BODY-START-->
<script src="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<div class="body">
    <div class="body-inner">
        <div class="body-left">
            <div class="body-middle">
                <div class="body-top-left">
                    <table>
                        <?php
                        foreach ($result as $data) {
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url().  index_page() ?>/gallery/<?php echo $data->id; ?>">
                                        <img style="height:150px;width: auto;" src="<?php echo base_url(); ?>assets/images/folder-icon.png"/>
                                        <p><?php echo $data->name; ?></p>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
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
