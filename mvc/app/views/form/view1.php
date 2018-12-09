<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<div style="float:none;margin:0 auto"class="col-md-4">
<form action="<?php echo ASSET_ROOT; ?>/home/goToView2/" method="post">

        Name: <input type="text" class="form-control"  required name="name" value='<?php echo $_SESSION['name']; ?>'><br>
        Last name: <input type="text" class="form-control"  required name="lastName" value='<?php echo $_SESSION['lastName']; ?>'><br>
        telephone: <input type="tel"  required class="form-control" name="telephone" value='<?php echo $_SESSION['telephone']; ?>'><br>
        <div class="text-center">       
        <button type="submit" class="btn btn-success text-center">Next</button>
</div>
</div>
</form>

