<!--FOOTER-TOP-START-->    
<div class="footer-top">
    <div class="footer-top-inner">
        <p>We have several Staffs for various projects and activities.We are providing you the better services with good staff structure.</p>
    </div>
</div>
<!--FOOTER-TOP-END-->
<!--FOOTER-MAIN-START-->    
<div class="footer-main">
    <div class="footer-main-inner">
        <?php
        foreach ($bottommenu as $k => $v) {
            ?>
            <div class="footer-main-inner-left">
                <ul>
                    <li><a href="<?php echo $bottommenu[$k]['link']; ?>"><?php echo $bottommenu[$k]['name']; ?></a></li>
                    <?php
                    if (isset($bottommenu[$k]['child'])) {
                        foreach ($bottommenu[$k]['child'] as $key => $value) {
                            ?>
                            <li><a href="<?php echo $bottommenu[$k]['child'][$key]['link']; ?>"><?php echo $bottommenu[$k]['child'][$key]['name']; ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<!--FOOTER-MAIN-END-->  
<!--FOOTER-COPY-START-->    
<div class="footer-copy">
    <div class="footer-copy-inner">
        <div class="footer-copy-inner-left">
            <p>Copyright@2014 block development office All rights reserved  </p>
        </div>
        <div class="footer-copy-inner-right">
            <p>Designed by <a href="http://nisbusiness.com/seminars.php" target="_blank">www.nisbusiness.com</a></p>
        </div>
    </div>
</div>
<!--FOOTER-COPY-END-->    
</div>
<!-- The JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        var $oe_menu = $('#oe_menu');
        var $oe_menu_items = $oe_menu.children('li');
        var $oe_overlay = $('#oe_overlay');

        $oe_menu_items.bind('mouseenter', function() {
            var $this = $(this);
            $this.addClass('slided selected');
            $this.children('div').css('z-index', '9999').stop(true, true).slideDown(200, function() {
                $oe_menu_items.not('.slided').children('div').hide();
                $this.removeClass('slided');
            });
        }).bind('mouseleave', function() {
            var $this = $(this);
            $this.removeClass('selected').children('div').css('z-index', '1');
        });

        $oe_menu.bind('mouseenter', function() {
            var $this = $(this);
            $oe_overlay.stop(true, true).fadeTo(200, 0.6);
            $this.addClass('hovered');
        }).bind('mouseleave', function() {
            var $this = $(this);
            $this.removeClass('hovered');
            $oe_overlay.stop(true, true).fadeTo(200, 0);
            $oe_menu_items.children('div').hide();
        })
    });
</script>
<script type="text/javascript">
    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
