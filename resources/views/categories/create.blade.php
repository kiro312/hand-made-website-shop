<h1>Create Category</h1>

<form action="{{route('categories.store')}}" method="post">
    @csrf
    <label for= "category_name">Category Name</label>
    <input id = "category_name" type="text" name="category_name">
    <br><br>
    <label for= "category_description">Description Description</label>
    <input id = "category_description" type="text" name="category_description">
    <br>
    <button type="submit">Create</button>
</form>