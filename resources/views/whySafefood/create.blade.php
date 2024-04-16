<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Product Tag</h2>
    </div>
    <div class="card-header py-1 clearfix bg-gradient-primary text-white">
        <h5 class="card-title font-weight-bold mb-0 float-left mt-1"></h5>
        <div class="card-title font-weight-bold mb-0 float-right">
            <div class="input-group">
                <input style="width:40px;" type="text" id="add_text" required class="form-control form-control-sm add_text" value="1">
                <span class="input-group-btn"><button class="btn btn-info btn-sm add_more" type="button">Add</button></span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('safe_food.store' )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row  table-responsive">
                <table role="presentation" class="table table-sm table-striped table-bordered m-0">
                    <thead>
                        <tr>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody class="dives">
                        <tr>
                            <td>
                                <div class="">
                                    <textarea name="details[]" class="form-control" id="details" autofocus="" maxlength="350" cols="30" rows="1" required value=""></textarea>
                                    @error('details')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm remove"><i class="fas fa-trash-alt"></i>Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="py-1 clearfix text-white">
                <div class="font-weight-bold mb-0 float-right">
                    <div class="input-group">
                        <span class="input-group-btn"><button class="mb-1 btn cus-btn btn-primary align-right" type="submit">Save</button></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>
    $(document).on("click", ".add_more", function() {

        var row_more = `<tr>
                            <td>
                                <div class="">
                                    <textarea name="details[]" class="form-control" id="details" autofocus="" maxlength="350" cols="30" rows="1" required value="">{{ ( old('details') ) }}</textarea>
                                    @error('details')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm remove"><i class="fas fa-trash-alt"></i>Delete</button>
                            </td>
                        </tr>`
        var length = $("#add_text").val();
        for (i = 1; i <= length; i++) {
            $(row_more).appendTo('.dives');
        }
    });
    $(document).on("click", ".remove", function() {
        $(this).parent().parent().remove("tr");
    });
</script>