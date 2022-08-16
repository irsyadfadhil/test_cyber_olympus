<div class="modal fade" id="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="CustomerFormEdit" name="CustomerFormEdit" class="form-horizontal">
                   <input type="hidden" name="Customer_id_edit" id="Customer_id_edit">

                    {{-- <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name_edit" name="name_edit" placeholder="Enter Name" value="" maxlength="50" readonly>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">First Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="first_name_edit" name="first_name_edit" placeholder="Masukan First Name" value="" maxlength="50" required="" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Last Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="last_name_edit" name="last_name_edit" placeholder="Masukan Last Name" value="" maxlength="50" required="" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">email</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email_edit" name="email_edit" placeholder="Enter email" value="" maxlength="50" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">phone</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="phone_edit" name="phone_edit" placeholder="Enter phone" value="" maxlength="50" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-12">
                            <textarea id="address_edit" name="address_edit" readonly placeholder="Enter Address" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
