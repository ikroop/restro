	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Hover rows -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Rating</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>


					<table class="table datatable-basic table-hover text-center" id="rating">
						<thead>
							<tr>
								<th>Sr. No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Question 1 </th>
                                <th>Question 2 </th>
                                <th>Question 3 </th>
                                <th>Question 4 </th>
                                <th>Question 5 </th>
                                <th>Question 6 </th>
                                <th>Question 7 </th>
                                <th>Created At</th>
							</tr>
						</thead>
						<tbody>
							 <!-- <?php
                            $i = 1;
                            foreach ($rating as $row) {
                                ?>
							<tr>
								<td><?php echo $i; ?></td>
                                <td><?php echo ucwords($row['name']); ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td> 
                                <td><?php echo $row['question_1']; ?></td>
                                <td><?php echo $row['question_2']; ?></td>  
								<td><?php echo $row['question_3']; ?></td> 
								<td><?php echo $row['question_4']; ?></td> 
								<td><?php echo $row['question_5']; ?></td> 
								<td><?php echo $row['question_6']; ?></td> 
								<td><?php echo $row['question_7']; ?></td> 
								<td><?php echo $row['created_at']; ?></td> 
							</tr>
							<?php $i++; } ?> -->
						</tbody>
					</table>
				</div>
				<!-- /hover rows -->


			</div>
			<!-- /content area -->



		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/datatable_styling.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2019 07:07:30 GMT -->
</html>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#rating thead th').each(function () {
					    	var i = 0;
			                var title = $(this).text();
			                if(title == 'Sr No.' || title == 'Action'){

			                }else if(title == 'Created At'){
			                	$(this).html(title+'<input type="text" class="col-search-input" id="created_at"/>');
			                }else{
			                	$(this).html(title+'<input type="text" class="col-search-input" />');
			                }
			            });


				    var table = $('#rating').DataTable({
				    	"scrollX": true,
            			"pagingType": "numbers",
				        // Processing indicator
				        "processing": true,
				        // DataTables server-side processing mode
				        "serverSide": true,
				        // Initial no order.
				        "order": [],
				        // Load data from an Ajax source
				        "ajax": {
				            "url": "<?php echo base_url('Admin/getRatingDetails/'); ?>",
				            "type": "POST"
				        },
				        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				        "dom" : 'Blfrtip',
				         "buttons": [
					           {
					               "extend": 'excelHtml5',
					               "title" : 'Product List _'
					           },
					           {
					               "extend": 'pdfHtml5',
					               "title" : 'Product List'
					           },
					           {
					             "extend"  : 'print',
					             "title"   : 'product list'
					           },
					     ],
				        //Set column definition initialisation properties
				        "columnDefs": [{ "name": "sr_no",   "targets": 0 },
									    { "name": "name",  "targets": 1 },
									    { "name": "mobile", "targets": 2 },
									    { "name": "email",  "targets": 3 },
									    { "name": "question_1",    "targets": 4 },
									    { "name": "question_2",    "targets": 5 },
									    { "name": "question_3",    "targets": 6 },
									    { "name": "question_4",    "targets": 7 },
									    { "name": "question_5",    "targets": 8 },
									    { "name": "question_6",    "targets": 9 },
									    { "name": "question_7",    "targets": 10 },
									    { "name": "created_at",    "targets": 11 },

									   ]
				    	});

				    	//draw table
					    table.columns().every(function () {
			                var table = this;
			                $('input', this.header()).on('keyup change', function () {
			                    if (table.search() !== this.value) {
			                    	   table.search(this.value).draw();
			                    }
			                });
			            });
			


			//tooltip
	

			$(function() {

			  $('#created_at').daterangepicker({
			    opens: 'left',
			  }, function(start, end, label) {

			    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			  });
			});
			
		});

</script>
