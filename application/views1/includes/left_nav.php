<div class="body-right">
    <ul id="MenuBar1" class="MenuBarVertical">
        <?php
        foreach ($sidemenu as $k => $v) {
            ?>
            <p class="body-nav-text"><?php echo $sidemenu[$k]['name']; ?></p>
            <?php
            if (isset($sidemenu[$k]['child'])) {
                foreach ($sidemenu[$k]['child'] as $key => $value) {
                    ?>
                    <li><a class="MenuBarItemSubmenu" href="<?php echo $sidemenu[$k]['child'][$key]['link']; ?>"><?php echo $sidemenu[$k]['child'][$key]['name']; ?></a>
                        <?php
                        if (isset($sidemenu[$k]['child'][$key]['child'])) {
                            ?>
                            <ul style="margin-top:-31px;">
                                <?php foreach ($sidemenu[$k]['child'][$key]['child'] as $_k => $_v) {
                                    ?> 
                                    <li><a href="<?php echo $sidemenu[$k]['child'][$key]['child'][$_k]['link']; ?>"><?php echo $sidemenu[$k]['child'][$key]['child'][$_k]['name']; ?></a></li>
                                    <?php
                                }
                                if ($sidemenu[$k]['child'][$key]['widget_image'] != '' && $sidemenu[$k]['child'][$key]['widget'] != '') {
                                    ?>
                                    <div class="image" style="background:#eeeeee; height:320px; padding:10px 0 0 0; text-align:center;">
                                        <img style="height: auto;width: 280px;" src="<?php echo base_url(); ?>assets/images/<?php echo $sidemenu[$k]['child'][$key]['widget_image']; ?>" alt="certificagte" />
                                        <p class="body-nav-text2"><?php echo $sidemenu[$k]['child'][$key]['widget']; ?></p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </ul>
                            <?php
                        }
                    }
                }
            }
            ?>
    </ul>
    <div style="clear:both"></div>

    <?php
    
    if(!empty($sideimage1)){
        ?>
        <a href="<?php echo base_url().$sideimage1->link; ?>">
            <div class="left_image_first">
                <img src="<?php echo base_url()."assets/images/".$sideimage1->image ?>" alt="<?php echo $sideimage1->image;?>">
                <p class="left_image_first_msg"><?php echo $sideimage1->msg ?></p>
            </div>
        </a>
        <?php
    }
    ?>

    <?php
    
    if(!empty($sideimage2)){
        ?>
        <a href="<?php echo base_url().$sideimage2->link; ?>">
            <div class="left_image_second">
                <img src="<?php echo base_url()."assets/images/".$sideimage2->image ?>" alt="<?php echo $sideimage2->image;?>">
                <p class="left_image_second_msg"><?php echo $sideimage2->msg ?></p>
            </div>
        </a>
        <?php
    }
    ?>

    <div style="clear:both"></div>
</div>