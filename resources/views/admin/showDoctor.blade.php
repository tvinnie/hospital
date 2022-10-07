<!DOCTYPE html>
<html lang="en">
  <head>
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
            <table>
                <tr style="background-color: black;">
                    <th style="padding: 10px; color:white;">Doctor Name</th>
                    <th style="padding: 10px; color:white;">Phone</th>
                    <th style="padding: 10px; color:white;">Speciality</th>
                    <th style="padding: 10px; color:white;">Room No.</th>
                    <th style="padding: 10px; color:white;">Image</th>
                    <th style="padding: 10px; color:white;">Delete</th>
                    <th style="padding: 10px; color:white;">Update</th>
                   
                </tr>

                @foreach ($data as $doctor)
                    
                
                <tr align="center" style="background-color: skyblue;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100px" width="100px" src="doctorimage/{{$doctor->image}}"/></td>
                    <td><a onclick="return confirm('Are you sure you want to Delete ? ')"  class="btn btn-danger" href="{{url('delete',$doctor->id)}}">Delete</a></td>
                    <td><a  class="btn btn-success" href="{{url('update', $doctor->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>

          
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.scripts')
</body>
</html>
