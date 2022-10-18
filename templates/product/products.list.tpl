
{include file="header.tpl"}



{if ($log)}
    
{include file ="templates/product/form.products.tpl"}
{/if} 
<!-- lista de tareas -->

<ul class="card list-group link-light">
<h2 class="fs-3">LIST OF PRODUCTS</h2>
    {foreach from=$products item=$product}
        
        <li class='list-group-item d-flex justify-content-between align-items-center '>
            <span> <a class='link-warning' href="info/{$product->id_products}"><b><i class="fa-solid fa-eye"></i>  {$product->name}</b></a> (${$product->price} )
            
            {if ($log)}
                <a href='updateproduct/{$product->id_products}' type='button' class='btn btn-primary'>Update</a>
                <a href='deleteproduct/{$product->id_products}' type='button' class='btn btn-danger'>Delete</a>
            {/if}    
            </div>
        </li>
    {/foreach}
</ul>



{include file="footer.tpl"}
