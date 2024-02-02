<form action="POST" action="/home">
    <div>
        <input type="text" name="username" placeholder="Nhập user">
        <!-- <input type="hidden" name="_method" value="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_method" value="patch"> -->
        <!-- <input type="hidden" name="_method" value="post"> -->
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">SUBMIT</button>
</form>