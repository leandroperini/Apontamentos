<?php include_once (dirname(__FILE__) . '/' . '../elements/header.php'); ?>

<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h2>
                    <?php echo isset($class->title) ? $class->title : 'Page Title' ?>
                </h2>
            </div>            
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h3><?php echo isset($class->title) ? $class->title : 'Section Title' ?></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php include_once (dirname(__FILE__) . '/' . '../' . $page . '.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once (dirname(__FILE__) . '/' . '../elements/footer.php'); ?>