<?php include_once 'header.php';
      include_once 'navbar.php';?>

<div class="jumbotron big-banner" style="height: 500px; padding-top: 150px;">
<div class="py-5">
    <div class="contrainer text-center">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome <?php echo $_SESSION['useruid']; ?></h3>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once 'footer.php';?>