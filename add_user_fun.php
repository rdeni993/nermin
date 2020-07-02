<?php include("header.php"); ?>
<?php if( @$_POST['korisnik'] ): ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
        <?php $user_id = add_user($_db, $_POST); ?>
        <?php if($user_id): ?>
            <div class="alert alert-success">User with ID "<?php echo $user_id; ?>" successfully inserted!</div>
            <a href="manage.php?user_id=<?php echo $user_id; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Open User <?php echo $user_id; ?></a>
        <?php else: ?>
            <div class="alert alert-danger">User is not inserted</div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
        <?php $user_id = add_empty_user($_db); ?>
        <?php if($user_id): ?>
            <div class="alert alert-warning">EMPTY User with ID "<?php echo $user_id; ?>" successfully inserted!</div>
            <a href="manage.php?user_id=<?php echo $user_id; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Open User <?php echo $user_id; ?></a>
        
        <?php else: ?>
            <div class="alert alert-danger">User is not inserted</div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php include("footer.php"); ?>