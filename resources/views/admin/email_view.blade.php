this is admin page
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

        <div class="container" style="text-align:center; padding-top:100px;">

            @include('admin.navbar')
            <!-- partial -->

            <div class="container-fluid page-body-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x

                    </button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('sendemail', $data->id)}}" method="Post">
                    @csrf

                    <div style="padding:15px;">
                        <label for="">Greeting</label>
                        <input type="text" style="color: black;" name="greeting" placeholder="write the name" required>
                    </div>

                    <div style="padding:15px;">
                        <label for="">body</label>
                        <input type="text" style="color: black;" name="number" required>
                    </div>


                    <div style="padding:15px;">
                        <label for="">Action text</label>
                        <input type="text" style="color: black;" name="actiontext" required>
                    </div>
                    <div style="padding:15px;">
                        <label for="">Action url</label>
                        <input type="text" style="color: black;" name="actionurl" required>
                    </div>
                    <div style="padding:15px;">
                        <label for="">End part</label>
                        <input type="text" style="color: black;" name="endpart" required>
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success">
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