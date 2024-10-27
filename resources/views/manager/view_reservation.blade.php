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
                        <h1> All Table Reservation</h1>
                    </div>

                    <tr class="view_title">
                        <td>Guest Name</td>
                        <td>Email</td>
                        <td>Phone No.</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>person</td>
                        <td>Status</td>
                        <td>Approve</td>
                        <td>Delete</td>
                    </tr>

                    @foreach ($reservation as $reservation)
                        <tr class="view_del">
                            <td>{{$reservation->name}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->phone}} Sq.ft</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->time}}</td>
                            <td>{{$reservation->person}}</td>
                            <td>
                                @if ($reservation ->status == 'approved')
                                    <span style="color:green;">Approved</span>
                                @endif

                                @if ($reservation ->status == 'canceled')
                                    <span style="color:red;">Canceled</span>
                                @endif
                                @if ($reservation ->status == 'waiting')
                                    <span style="color:yellow;">Waiting</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success" style="margin-right: 10px;"
                                    href="{{url('approve_reservation', $reservation ->id)}}">Approve</a>
                                <a class="btn btn-warning" href="{{url('cancel_reservation', $reservation ->id)}}">Cancel</a>
                            </td>
                            <td>
                                <a onclick="return confirm ('Are sure to delete this');"
                                    href="{{url('delete_reservation', $reservation ->id)}}" class="btn btn-danger">Delete</a>
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