<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
<div style="float:none;margin:0 auto"class="col-md-4">
<form action="<?php echo ASSET_ROOT; ?>/home/setView3/" method="post">

        accountOwner: <input type="text" name="accOwner" class="form-control" value='<?php echo $_SESSION['accOwner']; ?>'><br>
        iban: <input type="text" name="iban" class="form-control" value='<?php echo $_SESSION['iban']; ?>'><br>
        <div class="text-center">
        <button type="submit" class="btn btn-danger" formaction="<?php echo ASSET_ROOT; ?>/home/goToView2" formmethod="POST">Back</button>
        <button type="submit" class="btn btn-success">Next</button>
        </div>        
</form>
</div>