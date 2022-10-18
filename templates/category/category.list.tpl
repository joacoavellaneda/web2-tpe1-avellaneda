{include file="header.tpl"}


{if ($log)}
{include file="templates/category/form.category.tpl"}
{/if}    
<div>
<!-- lista de tareas -->
<ul class="card list-group link-light">
<h2 class="fs-3">LIST OF CATEGORIES</h2>
    {foreach from=$categories item=$category}
        <li class='list-group-item d-flex justify-content-between align-items-center '>
            <span> <b>{$category->category}</b> </span>
            <div class="ml-auto">
            <a href='showbycat/{$category->id_category}' type='button' class='btn btn-link'><b><i class="fa-solid fa-eye"></i> Show Products</b></a>
            {if ($log) }
                
                <a href='update/{$category->id_category}' type='button' class='btn btn-primary'>update</a>
                <a href='delete/{$category->id_category}' type='button' class='btn btn-danger'>Delete</a>
            {/if}    
            </div>
        </li>
    {/foreach}
</ul>
</div>

{include file='imgcarousel.tpl'}



