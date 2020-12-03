</body>
<script src="jquery/jquery-3.5.1.js" charset="utf-8"></script>
<script src="bootstrap-4.5.3/dist/js/bootstrap.js" charset="utf-8"></script>
<script src="plugins/datapicker/bootstrap-datepicker.js" charset="utf-8"></script>
<script type="text/javascript">
  $("#open-mn-sm").click(function(event) {
    $("#menu-sm").addClass('active');
  });
  $("#close-menu").click(function(event) {
    $("#menu-sm").removeClass('active');
  });
  $(".tab-search .menu-search").click(function(event) {
    $(".tab-search .menu-search").removeClass('active');
    $(this).addClass('active');
  });
  $(".date input").datepicker({
      startView: 2,
      todayBtn: "linked",
      keyboardNavigation: false,
      forceParse: false,
      autoclose: true,
      format: "dd/mm/yyyy"
  });
  $(".filter").click(function(event) {
    $(this).find('.box-filter').addClass('active');
  });
  $(document).mouseup(function(e) {
      var container = $(".box-filter");
      var date = $(".datepicker");
      if (!container.is(e.target) && container.has(e.target).length === 0 && !date.is(e.target) && date.has(e.target).length === 0) {
          $('.box-filter').removeClass('active');
      }
  });
  $("#click-to-top").click(function(event) {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
  });
</script>
</html>
