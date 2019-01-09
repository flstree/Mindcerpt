<main class="mt-5 pt-5 col-md-6">
    <p style="color: red;"><?php if ($loginError !=  '') echo $loginError; ?></p>
    <br>
    <form role="form" enctype="multipart/form-data" method="post" action="<?php echo URL_ROOT; ?>user/validate">
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </form>
</main>