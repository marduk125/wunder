

<?php
if($_SESSION['id']=="1"): ?>
<div class="progress">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>
<div class="alert alert-danger text-center" role="alert" >
<?php echo $_SESSION['result']; ?>
</div>
<?php else: ?>
<div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>
<div class="alert alert-success text-center" role="alert">
<?php echo $_SESSION['result']; ?><br>
<p> your payment ID = <?php echo$_SESSION['id']; ?> </p>
</div>
<?php endif; ?>


