@extends('layouts.app')
@section('content')
    


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{$datas['title']}}</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi {{$datas['class']}} display-1 text-primary"></i>
                    <!--h1 class="display-1">{{$datas['title']}}</h1-->
                    <h1 class="mb-4">{{$datas['title']}}</h1>
                    <p class="mb-4">{!! $datas['content'] !!}</p>
                    <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                              google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'Mike', 'f':'Mike<div style="color:red; font-style:italic">President</div>'},'', 'The President'],
          [{'v':'Jim', 'f':'Jim<div style="color:red; font-style:italic">Vice President</div>'},'Mike', 'VP'],
          ['Alice', 'Mike', ''],
          ['Bob', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', '']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
                    </script>
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection