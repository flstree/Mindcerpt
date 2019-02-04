<main class="mt-5 pt-5 col-md-6">  
    <h2>Create a Post</h2>
    <hr>
    <?php if ($postMessage ==  'success'): ?>
        <p style="color: green;">Success! Your Post has been published.</p>
    <?php elseif ($postMessage == 'error'): ?>
        <p style="color: green;">Oops! Something went wrong.</p>
    <?php endif; ?>
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
    <form role="form" enctype="multipart/form-data" method="" action="<?php echo URL_ROOT; ?>friend/requestFriend">
        <button name="submit" type="submit" class="btn btn-primary">RequestFriend</button>
    </form>
</main>