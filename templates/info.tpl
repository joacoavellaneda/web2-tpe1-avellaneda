{include file= 'header.tpl'}
<h2 class="fs-3 link-light">PRODUCT</h2>
<div class="cardinfo link-light " ">
       <div class="form-control " style="background-color:  #e4e2e2 ;">
             <h5><b>{$product->name}</b></h5>
             
             <p hidden>{$product->id_products} </p>

             <p><b>Price:</b> (${$product->price} )</p>
               
             <p><b>color:</b>  <input class="item-colors-bullet-square " name="color"  type="color" disabled value={$product->color}></p>
           
             
             <p> <b>Size:</b>  {$product->size} </p>
             <p><b>Description:</b></p>
             <div > {$product->description}</div>

             <p><b>Category:</b> ({$product->categoria})</p>
       </div>
 
       
</div>
<a class="cardbuttom" href="showbycat/{$product->id_category}">
  <button class=" bn54 mt-3 ">
    <span class="bn54span">Products by category</span>
  </button>
</a>
<a class="cardbuttom" href="products">
    <button class="bn54 mt-3 ">
        <span class="bn54span">products</span>
    </button>
</a>

{include file='footer.tpl'}
