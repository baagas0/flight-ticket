@extends('admin.layouts.app')
@section('title', 'Transportation')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
            <div class="row mb-2">
               <div class="col-md-6">
                <h4 class="card-title">Plane Transportation Data</h4>
             </div>
             <div class="col-md-6">
               <button class="btn btn-primary float-right">Add New Data</button>
             </div>
          </div>
				<div class="table-responsive">
					<table class="table table-editable table-nowrap">
						<thead>
							<tr>
								<th hidden="">ID</th>
                        <th>#</th>
								<th>Name</th>
								<th>Economy Chairs</th>
                        <th>Bussiness Chairs</th>
                        <th>First Chairs</th>
								<th>Action</th>
							</tr>
						</thead>
						@foreach($data as $row)
						<tr id="row{{ $row->id }}">
							<td class="id" hidden="">{{ $row->id }}</td>
                     <td>{{ $loop->iteration }}</td>
							<td class="name" data-original-value="{{ $row->name }}">
								<a href="#" data-type="text" data-pk="{{ $row->name }}" data-field="name" class="editable" data-url="" data-title="name">{{ $row->name }}</a>
							</td>
							<td class="economy_chair" data-original-value="1">
								<a href="#" data-type="text" data-pk="1" class="editable" data-field="economy_chair" data-url="" data-title="Edit Quantity">{{ $row->economy_chair }}</a>
							</td>
                     <td class="bussiness_chair" data-original-value="1">
                        <a href="#" data-type="text" data-pk="1" class="editable" data-field="bussiness_chair" data-url="" data-title="Edit Quantity">{{ $row->bussiness_chair }}</a>
                     </td>
                     <td class="first_chair" data-original-value="1">
                        <a href="#" data-type="text" data-pk="1" class="editable" data-field="first_chair" data-url="" data-title="Edit Quantity">{{ $row->first_chair }}</a>
                     </td>
							<td>
                        <a href="#" class="text-danger delete" fieldId="{{ $row->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                           <i class="mdi mdi-trash-can font-size-18"></i>
                        </a>
                     </td>
						</tr>
						@endforeach
					</table>
				</div>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
</div> <!-- container-fluid -->
</div>
@endsection
@push('css')
<!-- Sweet Alert-->
<link href="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('js')
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs//datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/admin/libs/datatables.net-autoFill/js/dataTables.autoFill.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-autoFill-bs4/js/autoFill.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

<script src="{{ asset('assets/admin/libs/bootstrap-editable/js/index.js') }}"></script>

{{-- <script src="{{ asset('assets/admin/js/pages/table-editable.init.js') }}"></script>  --}}
<script>
   (function ($) {



      var datatable = $('.table-editable').dataTable({
            "bPaginate": true,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                var setCell = function(response, newValue) {
                  var table = new $.fn.dataTable.Api('.table');
                  var cell = table.cell('td.focus');
                  var cellData = cell.data();

                  var div = document.createElement('div');
                  div.innerHTML = cellData;
                  var a = div.childNodes;
                  a.innerHTML = newValue;

                  var field = a[0].dataset.field;
                  var dataValue = a.innerHTML;

                  if (field == 'name') {
                     var dataPass = { name : dataValue };
                  }else if(field == 'economy_chair') {
                     var dataPass = { economy_chair : dataValue };
                  }else if(field == 'bussiness_chair') {
                     var dataPass = { bussiness_chair : dataValue };
                  }else if(field == 'first_chair') {
                     var dataPass = { first_chair : dataValue };
                  }else{
                     toastr["error"]("Danger", 'Data Not Valid');
                  }

                  console.log(a[0].dataset.field);
                  cell.data(a.innerHTML);
                  highlightCell($(cell.node()));

                  $.ajax({
                     url: '{{ route('admin.transportation.update', '1') }}',
                     type: 'POST',
                     data: dataPass,
                     success: function(result){
                        toastr["success"](result, "Success");
                     },
                     error: function(error){
                        toastr["error"](error, "Failed");
                     }
                  });
                  // This is huge cheese, but the a has lost it's editable nature.  Do it again.
                  $('td.focus a').editable({
                    'mode': 'inline',
                    'success' : setCell
                    });
                };
                $('.editable').editable(
                  {
                    'mode': 'inline',
                    'success' : setCell
                  }
                );
            },
            // "autoFill" : {
            //     "columns" : [1, 2]
            // },
            "keys" : true
      });

    addCellChangeHandler();
    addAutoFillHandler();

    function highlightCell($cell) {
        var originalValue = $cell.attr('data-original-value');
        if (!originalValue) {
            return;
        }
        var actualValue = $cell.text();
        if (!isNaN(originalValue)) {
            originalValue = parseFloat(originalValue);
            // actualValue = parseFloat(actualValue);
        }
        if (!isNaN(actualValue)) {
            actualValue = parseFloat(actualValue);
        }
        if ( originalValue === actualValue ) {
            $cell.removeClass('cat-cell-modified').addClass('cat-cell-original');
        } else {
            $cell.removeClass('cat-cell-original').addClass('a[data-pk]');

        }
    }

    function addCellChangeHandler() {
        $('a[data-pk]').on('hidden', function (e, editable) {
            var $a = $(this);
            var $cell = $a.parent('td');
            highlightCell($cell);
        });
    }

    function addAutoFillHandler() {
        var table = $('.table').DataTable();
        table.on('autoFill', function (e, datatable, cells) {
            var datatableCellApis = $.each(cells, function(index, row) {
                var datatableCellApi = row[0].cell;
                var $jQueryObject = $(datatableCellApi.node());
                highlightCell($jQueryObject);
            });
        });
    }

    $('.delete').on('click', function() {
         var id = $(this).attr("fieldId");
         Swal.fire({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor:"#34c38f",
           cancelButtonColor:"#ff3d60",
           confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
            if (result.isConfirmed) {
               $.ajax({
                  url: '{{ route('admin.transportation.destroy') }}/'+id,
                  type: 'POST',
                  success: function(result){
                     toastr["success"](result, "Success");
                     $('#row'+id).hide();
                  },
                  error: function(error){
                     toastr["error"](error, "Failed");
                  }
               });
            }
         })
      });

})(jQuery);
</script>
@endpush
