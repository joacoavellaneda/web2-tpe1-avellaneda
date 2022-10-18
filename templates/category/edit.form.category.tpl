{include file="header.tpl"}





<div class="card link-light">
    <h2 class="fs-3">UPDATE CATEGORY</h2>
    <form action="updateCategoria" method="POST" class="my-4">
    
        <p class="fs-4">Category: {$category->category}</p>
        <div class="row">
            <div class="col-9">
                <div class="form-group link-light">
                    <label>Category</label>
                    
                    <input name="category" type="text" class="form-control" value="{$category->category}">
                    <input name="id_category" hidden type="text" class="form-control" value="{$category->id_category}">
                
                </div>
            </div>
            <button type="submit" class="bn632-hover bn20 mt-3 ">Update</button>
        </div>
    </form>
</div>
<a class="cardbuttom" href="categories">
  <button class="bn54 mt-3 ">
    <span class="bn54span">previous</span>
  </button>
</a>



