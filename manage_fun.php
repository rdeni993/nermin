<?php include("header.php"); ?>

<?php if( @$_POST['korisnik'] ): ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
        <?php if(update_user($_db, $_POST, $_POST['user_id'])): ?>
            <div class="alert alert-success">User with id "<?php echo $_POST['user_id']; ?>" successfully updated!</div>
            <a href="manage.php?user_id=<?php echo $_POST['user_id']; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Return to user <?php echo $_POST['user_id']; ?></a>
        <?php else: ?>
            <div class="alert alert-danger">User is not updated</div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php else: ?>
<?php if(update_user($_db, [], $_POST['user_id'])): ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <div class="alert alert-warning">You remove all rights from user with ID <?php echo $_POST['user_id']; ?>!</div>
            <a href="manage.php?user_id=<?php echo $_POST['user_id']; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Return to user <?php echo $_POST['user_id']; ?></a>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php include("footer.php"); ?>