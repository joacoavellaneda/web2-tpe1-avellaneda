{include file= 'header.tpl'}

<div class="mt-5 w-25 mx-auto card link-light">
<h1 class="fs-4">SING IN</h1>
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="bn632-hover bn20">Login</button>
    </form>
    
</div>

{include file='footer.tpl'}

