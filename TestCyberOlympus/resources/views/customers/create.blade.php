<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="CustomerForm" name="CustomerForm" class="form-horizontal">
                   {{-- <input type="hidden" name="Customer_id" id="Customer_id"> --}}

                   <div class="form-group">
                        <label for="Customer_id" class="col-sm-3 control-label">Customer id</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Customer_id" name="Customer_id" placeholder="Masukan Customer id" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Masukan First Name" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Masukan Last Name" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" id="email_label" class="col-sm-2 control-label">email</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">phone</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukan phone" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-12">
                            <textarea id="address" name="address" required="" placeholder="Masukan Address" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
