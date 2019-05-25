<!-- Content area -->
		<!-- 	 <script src="<?php echo base_url()?>js/demo_pages/charts/google/lines/lines.js"></script> -->
			<div class="content">
                 

				<!-- Simple line chart -->
				<div class="card">
					<div class="card-body">
                        <div class="row" style="margin-bottom: 5%">
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box1">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">No Of Customer Review</span>
                          <h3 class="info-box-number"><?php echo $dashboard['no_of_customer']?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                </div>  
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box2">
                        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Food</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_1'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->      
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box3">
                        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Room</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_2'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box4">
                        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Service</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_3'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box5">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Friendliness </span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_4'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box6">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Apperance</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_5'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>

                    
                  </div>

                  <div class="row" style="padding-top: 1%">
                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box7">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Money</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_6'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                      <div class="info-box box8">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Design</span>
                          <h3 class="info-box-number"><?php echo round(($dashboard['question_7'] / ($dashboard['no_of_customer'] * 5) * 5),2)?></h3>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <hr>

						<div class="row">
						<form method="post" action="<?php echo base_url('Admin/dashboard')?>" class="header-elements-inline">
							<div class="form-group" style="margin-right: 2%">
								<label>Start Date:</label>
								<input type="date" class="form-control" placeholder="Eugene Kopyov" name="start_date">
							</div>

							<div class="form-group" style="margin-right: 2%">
								<label>End Date:</label>
								<input type="date" class="form-control" placeholder="Your strong password" name="end_date">
							</div>

							<div class="d-flex justify-content-start align-items-center">
								<button type="submit" class="btn bg-blue ml-3">Submit</button>
							</div>
						</form>
						</div>
					</div>
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Question 1</h5>
					</div>

					<div class="card-body">
						

						<div class="chart-container">
							<div class="chart" id="google-line-question-1"></div>
						</div>
					</div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 2</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-2"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 3</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-3"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 4</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-4"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 5</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-5"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 6</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-6"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Question 7</h5>
                    </div>

                    <div class="card-body">
                        

                        <div class="chart-container">
                            <div class="chart" id="google-line-question-7"></div>
                        </div>
                    </div>
				</div>
				<!-- /simple line chart -->


			</div>
			<!-- /content area -->
<script type="text/javascript">
				/* ------------------------------------------------------------------------------
 *
 *  # Google Visualization - lines
 *
 *  Google Visualization line chart demonstration
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var GoogleLineBasic = function() {


    //
    // Setup module components
    //

    // Line chart
    var _googleLineBasic = function() {
        if (typeof google == 'undefined') {
            console.warn('Warning - Google Charts library is not loaded.');
            return;
        }

        // Initialize chart
        google.charts.load('current', {
            callback: function () {

                // Draw chart
                drawLineChart();

                // Resize on sidebar width change
                $(document).on('click', '.sidebar-control', drawLineChart);

                // Resize on window resize
                var resizeLineBasic;
                $(window).on('resize', function() {
                    clearTimeout(resizeLineBasic);
                    resizeLineBasic = setTimeout(function () {
                        drawLineChart();
                    }, 200);
                });
            },
            packages: ['corechart']
        });

        // Chart settings
        function drawLineChart() {

            // Define charts element
            var line_chart_element_1 = document.getElementById('google-line-question-1');
            var line_chart_element_2 = document.getElementById('google-line-question-2');
            var line_chart_element_3 = document.getElementById('google-line-question-3');
            var line_chart_element_4 = document.getElementById('google-line-question-4');
            var line_chart_element_5 = document.getElementById('google-line-question-5');
            var line_chart_element_6 = document.getElementById('google-line-question-6');
            var line_chart_element_7 = document.getElementById('google-line-question-7');



            // Data
            var data_1 = google.visualization.arrayToDataTable([
                ['Date', 'question_1'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                   		  ".$row['question_1']."],";
                }
                ?>
            ]);

            var data_2 = google.visualization.arrayToDataTable([
                ['Date', 'question_2'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_1']."],";
                }
                ?>
            ]);

            var data_3 = google.visualization.arrayToDataTable([
                ['Date', 'question_3'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_3']."],";
                }
                ?>
            ]);

            var data_4 = google.visualization.arrayToDataTable([
                ['Date', 'question_4'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_4']."],";
                }
                ?>
            ]);

            var data_5 = google.visualization.arrayToDataTable([
                ['Date', 'question_5'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_5']."],";
                }
                ?>
            ]);

            var data_6 = google.visualization.arrayToDataTable([
                ['Date', 'question_6'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_6']."],";
                }
                ?>
            ]);

            var data_7 = google.visualization.arrayToDataTable([
                ['Date', 'question_7'],

                <?php 
                $i = 0;
                foreach($rating as $row){

                   echo "['".$row['created_at']."',
                          ".$row['question_7']."],";
                }
                ?>
            ]);

            // Options
            var options = {
                fontName: 'Roboto',
                height: 400,
                curveType: 'function',
                fontSize: 12,
                chartArea: {
                    left: '5%',
                    width: '94%',
                    height: 350
                },
                pointSize: 4,
                tooltip: {
                    textStyle: {
                        fontName: 'Roboto',
                        fontSize: 13
                    }
                },
                vAxis: {
                    title: 'Rating',
                    titleTextStyle: {
                        fontSize: 13,
                        italic: false
                    },
                    gridlines:{
                        color: '#e5e5e5',
                        count: 10
                    },
                    minValue: 0
                },
                legend: {
                    position: 'top',
                    alignment: 'center',
                    textStyle: {
                        fontSize: 12
                    }
                }
            };

            // Draw chart
            var line_chart_1 = new google.visualization.LineChart(line_chart_element_1);
            line_chart_1.draw(data_1, options);

            var line_chart_2 = new google.visualization.LineChart(line_chart_element_2);
            line_chart_2.draw(data_2, options);

            var line_chart_3 = new google.visualization.LineChart(line_chart_element_3);
            line_chart_3.draw(data_3, options);

            var line_chart_4 = new google.visualization.LineChart(line_chart_element_4);
            line_chart_4.draw(data_4, options);

            var line_chart_5 = new google.visualization.LineChart(line_chart_element_5);
            line_chart_5.draw(data_5, options);

            var line_chart_6 = new google.visualization.LineChart(line_chart_element_6);
            line_chart_6.draw(data_6, options);

            var line_chart_7 = new google.visualization.LineChart(line_chart_element_7);
            line_chart_7.draw(data_7, options);
        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _googleLineBasic();
        }
    }
}();


// Initialize module
// ------------------------------

GoogleLineBasic.init();


			</script>