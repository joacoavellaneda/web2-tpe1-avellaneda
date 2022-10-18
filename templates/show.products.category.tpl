

{include file="header.tpl"}
<h2 class="fs-3 link-light">PRODUCTS BY CATEGORY</h2>

<div class="cardinfo table-hover">


  {foreach from=$products item=$product}
        
        <span > <a href="info/{$product->id_products}" class=" btn btn-primary card list-group link-dark d-flex flex-row mb-3 " style="background-color: #e4e2e2;"> <b>{$product->name}</b></a>
  {foreachelse}
                 
                <div class=" alert alert-warning mt-3" role="alert"> THERE ARE NO PRODUCTS IN THIS CATEGORY!</div>   
{/foreach}

</div>  
<a  class="cardbuttom" href="categories">
  <button class="bn54 mt-3 ">
    <span class="bn54span">previous</span>
  </button>
</a>

{include file="footer.tpl"}

