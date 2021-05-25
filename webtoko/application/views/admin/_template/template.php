<!DOCTYPE html>
<html lang="en">
<?php echo @$head; ?>

<body id="page-top">
    <div id="wrapper">
        <?php echo @$sidebar; ?>
        <div id="layoutSidenav_content">
            <div id="content">
                <?php echo @$topbar; ?>
                <?php echo @$content; ?>
            </div>
            <?php echo @$footer; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-bar-demo.js') ?>''></script>
    <script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/demo/datatables-demo.js') ?>"></script>
</body>

</html>