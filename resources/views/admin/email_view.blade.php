<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sideadminbar')
      @include('admin.navbar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div align='center' style="padding-top: 100px;">

            @if(session()->has('message'))

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
              x
            </button>
            {{session()->get('message')}}

          </div>
          @endif

            <form action="{{url('sendEmail',$data->id)}}" method="POST">
                @csrf

                <div style='padding:15px;'>
                <label>Greetings</label>
                <input type="text" style="color:black;" name="greeting" required/>
                </div>

                <div style='padding:15px;'>
                <label>Body</label>
                <input type="text" style="color:black;" name="body" equired/>
                </div>


                <div style='padding:15px;'>
                <label>Action Text</label>
                <input type="text" style="color:black;" name="actiontext"  required/>
                </div>

                <div style='padding:15px;'>
                    <label>Action Url</label>
                    <input type="text" style="color:black;" name="actionurl" required/>
                </div>

                <div style='padding:15px;'>
                    <label>End Part</label>
                    <input type="text" style="color:black;" name="endpart" required/>
                </div>

                <div style='padding:15px;'>
                <button type="submit" class="btn btn-success">Send Mail</button>
                </div>

            </form>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.scripts')
</body>
</html>
