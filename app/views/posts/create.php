<main class="mt-5 pt-5 col-md-6">  
    <h2>Create a Post</h2>
    <hr>
    <p style="color: red;"><?php if ($postMessage !=  '') echo $loginMessage; ?></p>
    <form role="form" enctype="multipart/form-data" method="post" action="<?php echo URL_ROOT; ?>posts/create">
        <div class="form-group">
            <label>Title</label>
            <input name="post_title" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="post_body" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <input name="post_category" type="text" class="form-control" placeholder="">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Publish</button>
    </form>
</main>