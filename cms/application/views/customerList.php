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
                                <th>Feedback Count</th>
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
 <!-- Vertical form modal -->
<div id="modal_form_vertical" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Feedback</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#">
				<div class="modal-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Date</th>
							</tr>
						</thead>
						<tbody class="feedback_body">
							
						</tbody>
					</table>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /vertical form modal -->

 <!-- Edit modal -->
<div id="edit_modal" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center">Customer</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" id="updateCustomer">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label>Name</label>
								<input type="text" placeholder="name" class="form-control" id="name" name="name">
							</div>

							<div class="col-sm-6">
								<label>Mobile</label>
								<input type="number" placeholder="mobile" class="form-control" id="mobile" name="mobile">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label>Email</label>
								<input type="text" placeholder="Email" class="form-control" id="email" name="email">
							</div>

							<div class="col-sm-6">
								<label>Birthdate</label>
								<input type="date" placeholder="birthdate" class="form-control" id="birthdate" name="birthdate">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label>Anniversary Date</label>
								<input type="date" placeholder="Anniversary Date" class="form-control" id="anniversary_date" name="anniversary_date">
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn bg-primary">Submit</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit modal -->

<script>
$(document).ready(function() {
    	$('#customerList thead th').each(function () {
					    	var i = 0;
			                var title = $(this).text();
			                if(title == 'Sr. No.' || title == 'Action'){

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
									    { "name": "feedback_count",    "targets": 7 },

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

		$(document).on('click','.getDates',function(){
			var base_url = $('#base_url').val();
			var id       = $(this).attr('id');
			$.ajax({
				type:'post',
				data:{id:id},
				url: base_url+'Admin/getCustomerFeedbackDates',
				success:function(data){
					var obj = $.parseJSON(data);
					if(obj.errCode == -1){
						$('.feedback_body').empty();
						$('.feedback_body').append(obj.data);
					}else if(obj.errCode == 2){
						alert(obj.data);
					}else{
						alert(obj.messages);
					}
				}

			});
		});

		$(document).on('click','.editCustomer',function(){
			var base_url = $('#base_url').val();
			var id       = $(this).attr('id');
			$.ajax({
				type:'post',
				data:{id:id},
				url: base_url+'Admin/editCustomer',
				success:function(data){
					var obj = $.parseJSON(data);
					if(obj.errCode == -1){
						$('#id').val(obj.data.id);
						$('#name').val(obj.data.name);
						$('#mobile').val(obj.data.mobile);
						$('#email').val(obj.data.email);
						$('#birthdate').val(obj.data.birthdate);
						$('#anniversary_date').val(obj.data.anniversary_date);
					}else{
						alert('Error occur');
					}
					
				}

			});
		});

		$('#updateCustomer').submit(function(e){
			e.preventDefault();
			var form_data = new FormData($(this)[0]);
			var base_url = $('#base_url').val();
			$.ajax({
				type:'post',
				data:form_data,
				processData: false,
				contentType: false,
				url: base_url+'Admin/updateCustomer',
				success:function(data){
					var obj = $.parseJSON(data);
					if(obj.errCode == -1){
						alert('Update successfully');
						location.reload();
					}else{
						alert('Error occur');
					}
					
				}

			});

		});



</script>

