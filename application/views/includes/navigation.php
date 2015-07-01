<?php 
 $init_start=-61;
 $shift=-134;
?>
<!--NAVIGATION-START--><div style="clear:both"></div>    
<div class="header-nav">
    <div class="navigation-inner">
        <div id="oe_overlay" class="oe_overlay"></div>
        <ul id="oe_menu" class="oe_menu">
            <?php foreach ($menu as $k => $v) { ?>
                    <li><a href="<?php echo $menu[$k]['link']; ?>"><?php echo $menu[$k]['name']; ?></a>
                        <?php  if (isset($menu[$k]['child'])) { ?>
                            <div style="left:<?php echo $init_start; ?>px;">
                                <?php  foreach ($menu[$k]['child'] as $key => $value) {  ?>
                                    <ul>
                                        <li class="oe_heading"><a href="<?php echo $menu[$k]['child'][$key]['link']; ?>"><?php echo $menu[$k]['child'][$key]['name']; ?></a></li>
                                            <?php  if (isset($menu[$k]['child'][$key]['child'])) {  ?>
                                                <?php foreach ($menu[$k]['child'][$key]['child'] as $_k => $_v) { ?>
                                                <li class="<?php if($menu[$k]['child'][$key]['child'][$_k]['underline']) echo "oe_heading"; ?>"  ><a href="<?php echo $menu[$k]['child'][$key]['child'][$_k]['link']; ?>"><?php echo $menu[$k]['child'][$key]['child'][$_k]['name']; ?></a></li>                    
                                            <?php } ?>
                                        <?php }  ?>
                                    </ul>    
                                <?php }  ?>
                                <?php if($menu[$k]['widget_image'] !=""){ ?><img src="<?php echo base_url(); ?>assets/images/<?php echo $menu[$k]['widget_image'] ?>" width="200" height="125" alt="organization" style="float:right; margin-left:20px; border:3px solid #999;" /> <?php } ?>
                                <?php if($menu[$k]['widget'] !="") echo $menu[$k]['widget']; ?>
                            </div>
                        <?php } 
                         $init_start=$init_start+$shift;
                        ?>
                    </li>
            <?php } ?>
        </ul>	
    </div>
</div>                                                                    
</div>
<!--NAVIGATION-END-->   