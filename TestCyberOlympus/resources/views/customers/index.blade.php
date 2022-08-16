<!DOCTYPE html>
<html>
<head>
    {{-- <meta name="csrf-token" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
{{-- @section('content') --}}
<div class="container">
    <a class="btn btn-primary" href="{{route('home')}}" >Back</a>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewCustomer"> Create New Customer</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<@include('customers.edit')
<@include('customers.create')
</body>

<script type="text/javascript">
  $(function () {

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'first_name', name: 'first_name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#createNewCustomer').click(function () {
        $('#saveBtn').val("create-Customer");
        $('#Customer_id').val('');
        $('#Customer_id').show();
        $('#Customer_id_label').show();
        $('#email_label').show();
        $('#CustomerForm').trigger("reset");
        $('#modelHeading').html("Create New Customer");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editCustomer', function () {
      var Customer_id = $(this).data('id');
      $.get(`{{ url('customers/edit') }}/${Customer_id}`, function (data) {
          $('#modelHeading').html("Edit Customer");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#label_cus').hide();
          $('#Customer_id').hide();
          $('#Customer_id').val(data.id);
          $('#first_name').val(data.first_name);
          $('#last_name').val(data.last_name);
          $('#email').val(data.email);
          $('#phone').val(data.phone);
          $('#address').val(data.address);
      })
    });

    $('body').on('click', '.showCustomer', function () {
      var Customer_id = $(this).data('id');
      $.get(`{{ url('customers/edit') }}/${Customer_id}`, function (data) {
          $('#editHeading').html("Show Customer");
          $('#edit').modal('show');
          $('#Customer_id_edit').val(data.id);
          $('#first_name_edit').val(data.first_name);
          $('#last_name_edit').val(data.last_name);
          $('#email_edit').val(data.email);
          $('#phone_edit').val(data.phone);
          $('#address_edit').val(data.address);
      })
    });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        // $(this).html('Sending..');

        $.ajax({
          data: $('#CustomerForm').serialize(),
          url: `{{ url('customers/store') }}`,
          type: "get",
          dataType: 'json',
          success: function (data) {

              $('#CustomerForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    $('body').on('click', '.deleteCustomer', function () {

        var Customer_id = $(this).data("id");
        confirm("Are You sure want to delete !");

        $.ajax({
            type: "get",
            // url: ""+'/'+Customer_id,
            url: `{{ url('customers/destroy') }}/${Customer_id}`,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


  });
</script>
{{-- @endsection --}}
</html>
