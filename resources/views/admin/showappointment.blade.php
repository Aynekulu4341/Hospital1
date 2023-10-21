this is admin page
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    @include('admin.css')

</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px;">Customer Name</th>
                        <th style="padding: 10px;"> Email</th>
                        <th style="padding: 10px;"> Phone</th>
                        <th style="padding: 10px;">Doctor Name</th>
                        <th style="padding: 10px;">Date</th>
                        <th style="padding: 10px;">Message</th>
                        <th style="padding: 10px;">status</th>
                        <th style="padding: 10px;">approved</th>
                        <th style="padding: 10px;">cancel</th>
                        <th style="padding: 10px;">send mail</th>
                    </tr>
                    @foreach($data as $appoint)
                    <tr align="center" style="background-color:skyblue">
                        <td style="padding: 0px;">{{$appoint->name}}</td>
                        <td style="padding: 0px;">{{$appoint->email}}</td>
                        <td style="padding: 0px;">{{$appoint->phone}}</td>
                        <td style="padding: 0px;">{{$appoint->doctor}}</td>
                        <td style="padding: 0px;">{{$appoint->date}}</td>
                        <td style="padding: 0px;">{{$appoint->message}}</td>
                        <td style="padding: 0px;">{{$appoint->status}}</td>
                        <td style="padding: 0px;"><a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Aproved</a></td>
                        <td style="padding: 0px;"> <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">canceled</a></td>
                        <td style="padding: 0px;"> <a class="btn btn-primary" href="#">send mail</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>