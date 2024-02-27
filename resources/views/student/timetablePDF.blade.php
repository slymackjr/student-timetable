<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Student Timetable Management</title>
    <style>
        /* Define basic styles for the table */
table {
  width: 100%;
  border-collapse: collapse;
}

/* Define styles for table header */
table thead th {
  background-color: #f8f9fa; /* Light gray background */
  border: 1px solid #dee2e6; /* Gray border */
  padding: 8px; /* Padding */
  text-align: center; /* Center-align text */
}

/* Define styles for table body */
table tbody td {
  border: 1px solid #dee2e6; /* Gray border */
  padding: 8px; /* Padding */
  text-align: center; /* Center-align text */
}

/* Define styles for odd rows (alternating row colors) */
table tbody tr:nth-child(odd) {
  background-color: #f8f9fa; /* Light gray background */
}
    </style>
  </head>
  <body>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                Classes  Weekly
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-striped">
                    <thead>
                        <tr class="bg-light-gray">
                            <th class="text-uppercase">Time</th>
                            <th class="text-uppercase">Monday</th>
                            <th class="text-uppercase">Tuesday</th>
                            <th class="text-uppercase">Wednesday</th>
                            <th class="text-uppercase">Thursday</th>
                            <th class="text-uppercase">Friday</th>
                            <th class="text-uppercase">Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 7; $i <= 19; $i++)
                            <tr>
                                <td class="align-middle">{{ $i }}:00 - {{ $i + 1 }}:00</td>
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
                                    <td>
                                        @foreach($classesData as $class)
                                            @php
                                                $classStartTime = strtotime($class->start_time);
                                                $classEndTime = strtotime($class->end_time);
                                                $startTimeInRange = ($classStartTime <= strtotime("$i:00:00") && $classEndTime > strtotime("$i:00:00"));
                                                $endTimeInRange = ($classStartTime < strtotime(($i + 1) . ":00:00") && $classEndTime >= strtotime(($i + 1) . ":00:00"));
                                            @endphp
                
                                            @if ($class->day_of_week == $day && ($startTimeInRange || $endTimeInRange))
                                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16 xs-font-size13">{{ $class->module_name }}</span>
                                                <div class="margin-10px-top font-size14">{{ $class->start_time->format('H:i A') }} - {{ $class->end_time->format('H:i A') }}</div>
                                                <div class="font-size13 text-light-gray">{{ $class->lecturer_name }}</div>
                                                <div class="font-size13 text-success">{{ $class->room_name }}</div>
                                            @endif
                                        @endforeach
                                    </td>
                                @endforeach
                            </tr>
                        @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
