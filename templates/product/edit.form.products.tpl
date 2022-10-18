{include file="header.tpl"}


<div  class="card link-light">
<h4 class="fs-3">UPDATE A PRODUCT</h4>
<p class="fs-4">Product: {$product->name}</p>
<form action="editproductfinal" method="POST" class="my-4 ">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" value="{$product->name}">
                <input name="id_products" hidden type="text" class="form-control" value={$product->id_products}>
                
            </div>
        </div>
         <div class="col-9">
            <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="form-control" value={$product->price}>
            </div>
        </div>
         <div class="col-9">
            <div class="form-group">
                <label>Color</label>
                <input name="color" type="color" class="form-control" value={$product->color}>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>size</label>
                <select name="size" class="form-control" value={$product->size}>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">Xl</option>
                    <option value="xxl">XXL</option>
                    <option value="null">Null</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="description" class="form-control" rows="3" >{$product->description}</textarea>
    </div>
    <div class="col-9">
            <div class="form-group">
                <label>Category</label>
                <select name="categories" class="form-control">
                    {foreach from=$categories item=$category}
                        <option value="{$category->id_category}">{$category->category}</option>
                     {/foreach}
                    
                </select>
            </div>
        </div>
    

    <button type="submit" class="bn632-hover bn20 ">Update</button>
</form>
</div>
<a class="cardbuttom" href="products">
    <button class="bn54 mt-3 ">
        <span class="bn54span">Previous</span>
    </button>
</a>

{include file="footer.tpl"}