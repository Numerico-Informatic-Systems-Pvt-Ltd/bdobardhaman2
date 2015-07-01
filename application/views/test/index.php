<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php echo $_SERVER['DOCUMENT_ROOT']; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php ?>
        <textarea id="my_editor"></textarea>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>

        <form id="my_form" action="/upload/" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden"><input name="image" type="file" onchange="$('#my_form').submit();
                this.value = '';"></form>


        <!-- TinyMCE 4.x -->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/tinymce1/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">

            tinymce.init({
                selector: "textarea",
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
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================
                relative_urls: false
            });

        </script>
        
    </body>
</html>
