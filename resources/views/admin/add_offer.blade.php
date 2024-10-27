<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .header_name {
            font-family: "Lora", serif;
            font-size: 30px;
            text-align: center;
            font-weight: bold;
            color: #fff;
            margin-top: 20px;
        }

        .add_discount {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color: white;
        }

        .add_discount .col-12,
        .add_discount .col-4,
        .add_discount .col-6 {
            display: flex;
            flex-direction: column;

        }

        .add_discount .col-12 {
            flex: 0 0 100%;
        }

        .add_discount .col-4 {
            flex: 0 0 32%;
        }

        .add_discount .col-8 {
            flex: 0 0 100%;
            margin-left: 120px;
        }

        .add_discount label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
        }

        .add_discount input[type="text"],
        .add_discount input[type="date"],
        .add_discount select {
            background-color: transparent;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 2px solid #bbb;
            border-radius: 5px;
            box-sizing: border-box;
            color: white;
        }

        .add_discount input[type="file"] {
            padding: 7px;
        }

        .add_discount select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 2px solid #bbb;
            border-radius: 5px;
        }

        .add_discount input[type="submit"] {
            background-color: #af9556;
            color: #fff;
            font-size: 16px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-left: 220px;
        }

        .add_discount input[type="submit"]:hover {
            background-color: #c4a676;
            color: white;
        }


        @media (max-width: 768px) {
            .add_discount {
                flex-direction: column;
            }

            .add_discount .col-8 {
                flex: 0 0 100%;
            }

            .add_discount input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
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
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1> Discount</h1>
                    </div>

                    <form class="add_discount" action="{{url('add_discount')}}" method="Post" enctype="multipart/form-data">

                        @csrf
                        <div class="col-8">
                            <label>Percentage</label>
                            <input type="text" name="percentage">
                        </div>
                        <div class="col-8">
                            <label>Time</label>
                            <input type="date" name="time">
                        </div>

                        <div>
                            <input type="submit" value="Add Discount">
                        </div>
                    </form>

                    <table>

                        <tr class="view_title">
                            <td>Percentage</td>
                            <td>Time</td>
                            <td>Delete</td>
                        </tr>

                        @foreach ($discount as $discount)
                            <tr class="view_del">
                                <td>{{$discount->percentage}}</td>
                                <td>{{$discount->time}}</td>

                                <td>
                                    <a onclick="return confirm ('Are sure to delete this');"
                                        href="{{url('delete_discount', $discount->id)}}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


    @include('admin.footer')

</body>

</html>