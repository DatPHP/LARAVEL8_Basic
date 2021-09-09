<form method="post" action="/user/news/store">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <p>
        <label for="title">Name</label><br>
        <input type="text" name="name" value="">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="">
    </p>    


     <p>
        <label for="email">Password</label><br>
        <input type="password" name="password" value="">
    </p>   
    <p>
        <button type="submit">Submit</button>
    </p>
</form>