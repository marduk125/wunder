<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>

<div style="float:none;margin:0 auto"class="col-md-4">
<form action="<?php echo ASSET_ROOT; ?>/home/goToView3/" method="post">

        street: <input type="text" name="street" class="form-control" value='<?php echo $_SESSION['street']; ?>'><br>
        houseNumber: <input type="text" name="houseNumber" class="form-control" value='<?php echo $_SESSION['houseNumber']; ?>'><br>
        zipCode: <input type="text" name="zipCode" class="form-control" value='<?php echo $_SESSION['zipCode']; ?>'><br>
        city: <input type="text" name="city" class="form-control" value='<?php echo $_SESSION['city']; ?>'><br>
        <div class="text-center">
        <button type="submit" class="btn btn-danger" formaction="<?php echo ASSET_ROOT; ?>/home/goToView1/1" formmethod="POST">Back</button>        
        <button type="submit" class="btn btn-success">Next</button>
        </div>
</form>
</div>
