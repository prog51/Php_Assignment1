<div id="footer" class="p-3 mb-2 bg-primary text-white fixed-bottom">
    <p class="text-center">  copyright &copy; IT Conference System <?php echo date('Y'); ?></p>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#dob" ).datepicker({
       
       changeMonth: true,
       changeYear: true,
       yearRange: "-100:+0",
       dateFormat: "yy-mm-dd"

    });
  } );
  </script
</body>
</html>