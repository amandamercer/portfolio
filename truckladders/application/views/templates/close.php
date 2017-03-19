<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script src="<?php echo base_url(); ?>js/vendor/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
<script type="text/javascript">
baseURL = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>js/utils.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
<?php if($script): ?>
<script src="<?php echo base_url(); ?>js/<?php echo $script; ?>.js"></script>
<?php endif ?>
</body>
</html>