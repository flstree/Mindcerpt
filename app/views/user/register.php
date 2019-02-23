<div class="container">
    <form class="form-signin" enctype="multipart/form-data" method="post" action="<?php echo URL_ROOT; ?>user/register">
        <div class="text-center mb-4">
            <img class="mb-4" src="/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">SEUSS</h1>
            <small>Let's begin that incredible journey!</small>
        </div>
            <?php if ($results) {
                    foreach ($results as $value) {
                        # code...
                        echo $value;
                    }
                }
            ?>
            <?php 
                if ($registerSuccess) {
                    echo '<li class="list-group-item list-group-item-success">
                        Success! Please <a href="user/login">Login</a>.
                    </li>';
                }
            ?>
        <div class="form-label-group">
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" 
                value="<?= $formData ? $formData->firstname : '' ?>" required autofocus>
        </div>

        <div class="form-label-group">
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" 
                value="<?= $formData ? $formData->lastname : '' ?>" required autofocus>
        </div>

        <div class="form-label-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" 
                value="<?= $formData ? $formData->email : ''?>" required autofocus>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-label-group">
            <input type="password" name="confirm_password" id="inputPassword_confirm" class="form-control" placeholder="Confirm Password" required>
        </div>

        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p> -->
    </form>
</div>