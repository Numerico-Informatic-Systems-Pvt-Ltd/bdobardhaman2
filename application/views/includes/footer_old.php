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
        <div class="footer-main-inner-left">
            <ul>
                <li><a href="establishment.php">Establishment</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="holiday-list.php">Holiday List</a></li>
                <li><a href="#">Budget</a></li>
                <li><a href="#">Budgetary Sources</a></li>
                <li><a href="#">Revenues</a></li>
                <li><a href="#">Department I </a></li>
                <li><a href="department-school.php">Department II</a></li>
                <li><a href="#">Block</a></li>
                <li><a href="panchayat-samiti.php">Panchayat Samiti</a></li>
                <li><a href="caste-certificate.php">Caste Certificate</a></li>
                <li><a href="domicile-certificate.php">Domicile Certificate</a></li>
            </ul>
        </div>
        <div class="footer-main-inner-left">
            <ul>
                <li><a href="income-certificate.php">Income Certificate</a></li>
                <li><a href="#">Residential Certificate</a></li>
                <li><a href="trade-license.php">Trade License</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Financial Assistance</a></li>
                <li><a href="#">Grant [Cash / Kind]</a></li>
                <li><a href="#">Registration of Birth & Death</a></li>
                <li><a href="#">RTI</a></li>
                <li><a href="#">Passport</a></li>
                <li><a href="#">Public Grievance</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Marriage Hall</a></li>
            </ul>
        </div>
        <div class="footer-main-inner-left">
            <ul>
                <li><a href="#">Guest house</a></li>
                <li><a href="#">Utsav Mancha</a></li>
                <li><a href="#">Retail Shops</a></li>
                <li><a href="#">Dead / Damaged Tree</a></li>
                <li><a href="#">Land Dispute</a></li>
                <li><a href="#">Domestic Violence</a></li>
                <li><a href="#">Misc Public Grievance</a></li>
                <li><a href="#">BPHC</a></li>
                <li><a href="#">SHC</a></li>
                <li><a href="#">Ayush Clinic</a></li>
                <li><a href="#">ICDS Center</a></li>
                <li><a href="#">Veterinary Clinic</a></li>
            </ul>
        </div>
        <div class="footer-main-inner-left">
            <ul>
                <li><a href="#">Suggestions</a></li>
                <li><a href="#">Midday</a></li>
                <li><a href="#">MDM</a></li>
                <li><a href="#">NBA</a></li>
                <li><a href="#">NREGA</a></li>
                <li><a href="#">13FC</a></li>
                <li><a href="#">MPLAD</a></li>
                <li><a href="#">KANYASREE</a></li>
                <li><a href="#">BEUP</a></li>
                <li><a href="#">3rd FC</a></li>
                <li><a href="#">Unemployment Assistance</a></li>
                <li><a href="#">Housing</a></li>
            </ul>
        </div>
        <div class="footer-main-inner-left">
            <ul>
                <li><a href="#">Tourism</a></li>
                <li><a href="#">Damodar River</a></li>
                <li><a href="#">Picnic Spot</a></li>
                <li><a href="#">Green landscape</a></li>
                <li><a href="#">Musuri Mayer Bedi</a></li>
                <li><a href="#">Dining & Confectionary</a></li>
                <li><a href="#">Primary</a></li>
                <li><a href="#">Upper Primary</a></li>
                <li><a href="#">Jr High</a></li>
                <li><a href="#">Secondary</a></li>
                <li><a href="#">Higher Secondary</a></li>
            </ul>
        </div>
        <div class="footer-main-inner-right">
            <ul>
                <li><a href="#">Co-operative Society</a></li>
                <li><a href="#">Information Kiosk</a></li>
                <li><a href="#">Open University Centers</a></li>
                <li><a href="#">Rajib Gandhi Computer Center</a></li>
                <li><a href="#">Telephone Exchange</a></li>
                <li><a href="#">Electric Office</a></li>
                <li><a href="#">Bus Terminus</a></li>
                <li><a href="#">Railway Stations</a></li>
                <li><a href="#">Petrol Pump</a></li>
                <li><a href="#">Fire Station</a></li>
                <li><a href="#">Police Station</a></li>
                <li><a href="#">Tender / Quotation Notification</a></li>
            </ul>
        </div>
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
