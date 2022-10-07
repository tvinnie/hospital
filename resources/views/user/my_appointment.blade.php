<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.header')


    <div align='center' style="padding: 70px;">
        <table>
            <tr style="background-color: black;">
                <th style="padding: 10px; font-size:20px; color:white;">Doctor Name</th>
                <th style="padding: 10px; font-size:20px; color:white;">Date</th>
                <th style="padding: 10px; font-size:20px; color:white;">Message</th>
                <th style="padding: 10px; font-size:20px; color:white;">Status</th>
                <th style="padding: 10px; font-size:20px; color:white;">Cancel Appointment</th>
            </tr>

            @foreach ($appoint as $points)
            <tr style="background-color: black" align="center">
                <td style="padding: 10px; font-size:20px; color:white;">{{$points->doctor}}</td>
                <td style="padding: 10px; font-size:20px; color:white;">{{$points->date}}</td>
                <td style="padding: 10px; font-size:20px; color:white;">{{$points->message}}</td>
                <td style="padding: 10px; font-size:20px; color:white;">{{$points->status}}</td>
                <td> <a class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete the Appointment ? ')" href="{{url('cancel_appointment',$points->id)}}">Cancel</a></td>
            @endforeach
            
        </table>
    </div>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    
    <script src="../assets/vendor/wow/wow.min.js"></script>
    
    <script src="../assets/js/theme.js"></script>
    
  </body>
  </html>