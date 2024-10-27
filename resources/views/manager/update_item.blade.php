<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
  @include('manager.css')
  <style>
    .header_name{
        font-family: "Lora", serif;
        font-size: 30px;
        text-align: center;
        font-weight: bold;
        color: #fff;
        margin-top: 20px;
        margin-bottom: 50px;
    }
    .add_item {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    color: white;
}

.add_item .col-12, 
.add_item .col-4, 
.add_item .col-6 {
    display: flex;
    flex-direction: column;

}

.add_item .col-12 {
    flex: 0 0 100%;
}

.add_item .col-4 {
    flex: 0 0 32%;
}

.add_item .col-6 {
    flex: 0 0 48%;
}

.add_item label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: white;
}

.add_item input[type="text"],
.add_item input[type="file"],
.add_item select {
    background-color: transparent;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;  
    border-radius: 5px;
    box-sizing: border-box;
    color: white;
}

.add_item input[type="file"] {
    padding: 7px;  
}

.add_item select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;
    border-radius: 5px;
}

.add_item input[type="submit"] {
    background-color: #af9556;
    color: #fff;
    font-size: 16px;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 220px;
}

.add_item input[type="submit"]:hover {
    background-color: #c4a676;
    color: white;
}


@media (max-width: 768px) {
    .add_item {
        flex-direction: column;
    }

    .add_item .col-4,
    .add_item .col-6,
    .add_item .col-12 {
        flex: 0 0 100%;
    }

    .add_item input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }
}


  </style>
  </head>
<body>

    @include('manager.header')
    
    @include('manager.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
            <div class="add_section">
                    <div class="header_name">
                        <h1> Update Menu</h1>
                    </div>

                    <form class="add_item" action="{{url('edit_item', $data-> id)}}" method="Post" enctype="multipart/form-data">

                        @csrf
                        <div class="col-12">
                            <label>Menu Title</label>
                            <input type="text" name="name" value="{{$data->name}}">
                        </div>
                        <div class="col-6">
                            <label>Category</label>
                            <select name="category" class="form-control" required="" value="{{$data->category}}">
                                <option value="Main Dishes">Main Dishes</option>
                                <option value="Desserts">Desserts</option>
                                <option value="Sea Food">Sea Food</option>
                                <option value="Beverages">Beverages</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Upload Image</label>
                            <input type="file" name="image" class="form-control" required="" value="{{$data->image}}">
                        </div>
                        <div class="col-6">
                            <label>Ingredients</label>
                            <input type="text" name="ingredients" value="{{$data->ingredients}}">
                        </div>
                        <div class="col-6">
                            <label>Price</label>
                            <input type="text" name="price" value="{{$data->price}}">
                        </div>
                        <div class="col-6">
                            <label>Original Price (Optional)</label>
                            <input type="text" name="original_price" class="form-control"  value="{{$data->original_price}}">
                        </div>
                        <div class="col-6">
                            <label>Review (Optional)</label>
                            <input type="text" name="review" class="form-control" value="{{$data->review}}">
                        </div>
                        <div class="col-12">
                            <label>Current Image</label>
                            <img class="current_img" style="margin: auto;" width="250px" src="/menu/{{$data->image}}" alt="">
                        </div>
                        <div>
                            <input type="submit" value="Add New Item">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('manager.footer')

</body>
</html>