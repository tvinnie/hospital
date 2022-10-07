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
                    <th style="padding: 10px; color:white;">Customer Name</th>
                    <th style="padding: 10px; color:white;">Customer Email</th>
                    <th style="padding: 10px; color:white;">Phone No.</th>
                    <th style="padding: 10px; color:white;">Doctor Name</th>
                    <th style="padding: 10px; color:white;">Date</th>
                    <th style="padding: 10px; color:white;">Message</th>
                    <th style="padding: 10px; color:white;">Status</th>
                    <th style="padding: 10px; color:white;">Approve</th>
                    <th style="padding: 10px; color:white;">Cancel</th>
                    <th style="padding: 10px; color:white;">Send Mail</th>
                </tr>

                @foreach ($data as $appoint)
                    
                
                <tr align="center" style="background-color: skyblue;">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a  class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a></td>
                    <td><a  class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a></td>
                    <td><a  class="btn btn-primary" href="{{url('emailView',$appoint->id)}}">Mail</a></td>
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
