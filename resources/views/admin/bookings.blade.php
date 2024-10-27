<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')
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

        table .booking_title {
            background-color: #c4a676;
            color: white;
            font-weight: 600;
        }

        table .booking_title td {
            padding: 10px;
            text-align: center;
        }

        table .booking_del td {
            padding: 10px;
            text-align: center;
            background-color: transparent;
            color: white;
        }
        table .booking_del .btn-warning{
            margin-top: 10px;
            padding: 8px 18px;
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

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1> View Bookings</h1>
                    </div>

                    <table>
                        <tr class="booking_title">
                            <td>Room ID</td>
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Check In</td>
                            <td>Check Out</td>
                            <td>Room Type</td>
                            <td>Adults</td>
                            <td>Children</td>
                            <td>Status</td>
                            <td>Approve</td>
                            <td>Delete</td>
                        </tr>

                        @foreach ($data as $data)

                            <tr class="booking_del">
                                <td>{{$data->room_id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->check_in}}</td>
                                <td>{{$data->check_out}}</td>
                                <td>{{$data->room->room_type}}</td>
                                <td>{{$data->rooms_no}}</td>
                                <td>{{$data->children}}</td>
                                <td>
                                    @if ($data->status == 'approved')
                                    <span style="color:green;">Approved</span>
                                    @endif

                                    @if ($data->status == 'canceled')
                                    <span style="color:red;">Canceled</span>
                                    @endif
                                    @if ($data->status == 'waiting')
                                    <span style="color:yellow;">Waiting</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{url('approve_booking', $data->id)}}">Approve</a>
                                    <a class="btn btn-warning" href="{{url('cancel_booking', $data->id)}}">Cancel</a>
                                </td>
                                <td>
                                    <a onclick="return confirm ('Are sure to delete this');"
                                        href="{{url('delete_booking', $data->id)}}" class="btn btn-danger">Delete</a>
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