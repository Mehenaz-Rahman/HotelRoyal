<!DOCTYPE html>
<html>

<head>
    <base href="/public">
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

    @include('manager.header')

    @include('manager.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1>View All Messages</h1>
                    </div>

                    <table>
                        <tr class="booking_title">
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>Send Email</td>
                        </tr>

                        @foreach ($data as $data)

                            <tr class="booking_del">
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->subject}}</td>
                                <td>{{$data->message}}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{url('send_mail', $data->id)}}">Reply</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

    @include('manager.footer')

</body>

</html>