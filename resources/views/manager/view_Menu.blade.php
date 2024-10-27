<!DOCTYPE html>
<html>
  <head> 
  @include('manager.css')
<style>
    .header_name h1 {
    font-family: "Lora", serif;
    font-size: 30px;
    text-align: center;
    font-weight: bold;
    color: #fff;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    border: 2px solid gray;
    color: white;
    font-family: "Lora", serif;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

table .view_title {
    background-color: #c4a676;  
    color: white;
    font-weight: 600;
}

table .view_title td {
    padding: 12px 15px;
    text-align: center;
}

table .view_del td {
    padding: 12px 15px;
    text-align: center;
    background-color: transparent;  
    color: white;  
}

table tr {
    border-bottom: 2px solid #999;
}

table td {
    text-transform: capitalize;
    border-right: 1px solid #ddd;
}

table td:last-child {
    border-right: none;  
}

table tr:nth-child(even) .view_del {
    background-color: transparent;  
}

@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    table th,
    table td {
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

            <table>
            <div class="header_name">
                <h1> All Menu Item</h1>
            </div>

                <tr class="view_title">
                    <td>Menu Title</td>
                    <td>Category</td>
                    <td>Upload Image</td>
                    <td>Ingredients</td>
                    <td>Price</td>
                    <td>Original Price (Optional)</td>
                    <td>Review (Optional)</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>

                @foreach ($data as $data )
            
                <tr class="view_del">
                    <td>{{$data->name}}</td>
                    <td>{{$data->category}}</td>
                    <td>
                        <img width="120px" src="menu/{{ $data->image}}" alt="">
                    </td>
                    <td>{{$data->ingredients}}</td>
                    <td>${{$data->price}}</td>
                    <td>${{$data->original_price}}</td>
                    <td>{{$data->review}}</td>

                    <td>
                        <a onclick="return confirm ('Are sure to delete this');"
                        href="{{url('item_delete', $data -> id)}}" class="btn btn-danger">Delete</a>
                    </td>

                    <td>
                        <a class="btn btn-warning" href="{{url('update_item', $data -> id)}}" >Update</a>
                    </td>

                </tr>

                @endforeach
            </table>
    
            </div>
        </div>
    </div>

    @include('manager.footer')

</body>
</html>