
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php $this->load->view('includes/header.php'); ?>
    <body>
        <div class="main-wrapper">
            <?php $this->load->view('includes/banner.php'); ?>
            <?php $this->load->view('includes/navigation.php'); ?>
            <div class="body-inner">
                <?php $this->load->view('includes/left_nav.php'); ?>
                <?php
                if ($slug == "gallery") {
                    $this->load->view('includes/gallery.php');
                } else {
                    $this->load->view('includes/home.php');
                }
                ?> 
            </div>  
            <?php $this->load->view('includes/footer.php'); ?> 
        </div>
    </body>
</html>
