<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
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

            <div class="container" align="center" style="padding: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x

                    </button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color:black" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color:black" name="phone" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Speciality</label>
                        <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Room</label>
                        <input type="text" style="color:black" name="room" value="{{$data->room}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Old image</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Change image</label>
                        <input type="file" name="file">

                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>

            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>