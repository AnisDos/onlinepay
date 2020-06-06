
@extends('admin.base')



@section('style')

@endsection



@section('content')



    <div class="right_col" role="main">


        <script type="text/javascript" > 
            setTimeout(function() {
         $('#successalert').fadeOut('fast');
       }, 8000); // <-- time in milliseconds
       </script>
      
     
          
          @if (session('success'))
        <div class="x_content bs-example-popovers" id="successalert" >
            <div class="alert alert-success alert-dismissible fade in" role="alert" style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>{{ session('success') }}</strong> 
              </div>
            </div>
            @endif

         

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              


                
                <div class="card-body">

                       
                  


             

                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    
                    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                    
                    
                    <script type="text/javascript">
                        // Radialize the colors
                    Highcharts.setOptions({
                        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                            return {
                                radialGradient: {
                                    cx: 0.5,
                                    cy: 0.3,
                                    r: 0.7
                                },
                                stops: [
                                    [0, color],
                                    [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                                ]
                            };
                        })
                    });
                    
                    // Build the chart
                    Highcharts.chart('container', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'wilaya de vos client les plus frequentes'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                    connectorColor: 'silver'
                                }
                            }
                        },
                        series: [{
                            name: 'Share',
                            data: [
           

  @foreach ($exchangeFrom as $x)
{ name:'{{ $x->from }}', y:{{ $x->totFrom }} }, 
  @endforeach
                            ]
                        }]
                    });
                    </script>




 
                 
               
                      
                  </div>





              </div>

          </div>





          <br />

          <div class="row">


           

            

          </div>


          <div class="row">
          
          </div>
        </div>



 @endsection


@section('scripts')


   



   


@endsection
