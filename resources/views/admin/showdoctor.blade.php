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
                        <th style="padding: 10px;">Doctor Name</th>
                        <th style="padding: 10px;"> Phone</th>
                        <th style="padding: 10px;">Speciality</th>
                        <th style="padding: 10px;">Room No</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">deleted</th>
                        <th style="padding: 10px;">Updated</th>


                    </tr>
                    @foreach($data as $doctor)
                    <tr>
                        <td style="padding: 10px;">{{$doctor->name}}</td>
                        <td style="padding: 10px;">{{$doctor->phone}}</td>
                        <td style="padding: 10px;">{{$doctor->speciality}}</td>
                        <td style="padding: 10px;">{{$doctor->room}}</td>
                        <td style="padding: 10px;"> <img src="doctorimage/{{$doctor->image}}" height="80px" width="80px"></td>
                        <td style="padding: 10px;"><a onclick=" return confirm('are you sure to delete ')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">deleted</a></td>
                        <td style="padding: 10px;"><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">updated</a></td>
                    </tr>
                    @endforeach
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>