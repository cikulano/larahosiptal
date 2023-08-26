
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px ;
        }

        
    </style>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">  
                
        <div class="container-fluid" align="center" style="padding: 100px;">  

            @if(session()->has('message'))
        <div class="alert alert-success" style="position: relative;">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 0; right: 0; font-size: 40px;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            // Close the alert when the "X" button is clicked
            document.querySelector('.alert .close').addEventListener('click', function () {
                this.parentElement.style.display = 'none';
            });
        </script>
        @endif

            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                     <label for="">Doctor Name</label>
                     <input style="color: black;" type="text" name="name" value="{{$data->name}}">
                </div>

                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input style="color: black;" type="number" name="phone" value="{{$data->phone}}">
                </div>

                <div style="padding: 15px;">
                    <label for="">Speciality</label>
                    <input style="color: black;" type="text" name="speciality" value="{{$data->speciality}}">
                </div>

                <div style="padding: 15px;">
                    <label for="">Room</label>
                    <input style="color: black;" type="text" name="room" value="{{$data->room}}">
                </div>
                <div style="padding: 15px;">
                    <label>Old Image</label>
                    <img src="doctorimage/{{$data->image}}" height="150" width="150">
                </div>
                
                <div style="padding: 15px;">
                    <label for="file" style="display: block;">Change Image</label>
                    <input type="file" name="file" id="file" style="display: block;">
                </div>             
                 
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-primary">
                </div>

               
            </form>
        </div>
      
      </div>

    <!-- container-scroller -->
      @include('admin.script')
  </body>
</html>

