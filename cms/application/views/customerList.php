	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Hover rows -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Customer</h5>
					</div>


					<table class="table datatable-basic table-hover text-center" id="customerList">
						<thead>
							<tr>
								<th>Sr. No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Birthdate</th>
                                <th>Anniversary Date</th>
                                <th>Created At</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							
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
<script>
$(document).ready(function() {
    	$('#customerList thead th').each(function () {
					    	var i = 0;
			                var title = $(this).text();
			                if(title == 'Sr No.' || title == 'Action'){

			                }else if(title == 'Created At'){
			                	$(this).html(title+'<input type="text" class="col-search-input" id="created_at"/>');
			                }else{
			                	$(this).html(title+'<input type="text" class="col-search-input" />');
			                }
			            });


				    var table = $('#customerList').DataTable({
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
				            "url": "<?php echo base_url('Admin/getCustomerListDetails/'); ?>",
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
									    { "name": "birthdate",    "targets": 4 },
									    { "name": "anniversary_date",    "targets": 5 },
									    { "name": "created_at",    "targets": 6 },

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

