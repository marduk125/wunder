<script  src="<?php echo ASSET_ROOT ; ?>/js/bootstrap.min.js" />
<script  src="<?php echo ASSET_ROOT ; ?>/js/jquery-3.3.1.slim.min.js" />
<script  src="<?php echo ASSET_ROOT ; ?>/js/popper.min.js" />
<script> 

function messageFactory(input){
  switch(input.name){
  case "telephone":input.setCustomValidity('telephone should contains only numbers');
  break;
  default:input.setCustomValidity('wrong format for '+ input.name);
  break;  }
}
</script>
</body>
</html>