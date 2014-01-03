</div>
</body>
<!--擴充js-->
<script src="<?=base_url();?>lib/js/jquery-1.6.4.min.js"></script><!--jQuery-->
<script src="<?=base_url();?>lib/js/jquery-ui-1.10.3.custom.min.js"></script><!--jQuery UI-->
<script src="<?=base_url();?>lib/js/jquery.mCustomScrollbar.concat.min.js"></script><!--自訂拖拉把-->
<script src="<?=base_url();?>lib/js/jquery.lightbox-0.5.min.js"></script><!--lightbox-->
<script src="<?=base_url();?>lib/js/jquery.unveil.js"></script><!--圖片預載-->
<script src="<?=base_url();?>lib/js/jquery.mousewheel.js"></script><!--滑動滾動偵測-->
<script src="<?=base_url();?>lib/js/jquery.heapbox-0.9.3.min.js"></script><!--下拉把美化-->
<script src="<?=base_url();?>lib/js/apprise-v2.js"></script><!--美化警告視窗-->
<script src="<?=base_url();?>lib/js/bootstrap.min.js"></script><!--bootStrap-->

<script type="text/javascript">
    $(function() {
        //網站共用需在架構完全載入後執行的jquery
    });
    //網站所有資料載入後執行的jquery
    $(window).load(function() {
        //隱藏loadin
        $("#loading").hide();
    })
</script>
</html>
