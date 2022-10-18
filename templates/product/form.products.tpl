
<!-- formulario de alta de tarea -->
<div class="card">
<h1 class="fs-3 link-light">ADD A PRODUCT</h1>
<form action="addproduct" method="POST" class="my-4 link-light" >
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control " required >
            </div>
        </div>
         <div class="col-9">
            <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="form-control"required >
            </div>
        </div>
         <div class="col-9">
            <div class="form-group">
                <label>Color</label>
                <input name="color" type="color" class="form-control"required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>size</label>
                <select name="size" class="form-control" required>
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
        <textarea name="description" class="form-control" rows="3" required></textarea>
    </div>
    <div class="col-9">
            <div class="form-group">
                <label>Category</label>
               <select name="categories" class="form-control">
                    {foreach from=$categories item=$category}
                        <option value="{$category->id_category}">{$category->category}</option required>
                     {/foreach}
                    
                </select>
            </div>
        </div>
    

    <button type="submit" class="bn632-hover bn20">Save</button>
</form>
</div>


