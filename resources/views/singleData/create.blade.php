<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Product Tag</h2>
    </div>
    <div class="card-body">
        <form action="{{route('headings.update', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col-6 mb-3">
                    <label for="heading_one"> First Headline <span class="required-icon">*</span></label>
                    <textarea name="heading_one" class="form-control" id="heading_one" autofocus="" maxlength="120" cols="30" rows="2" required>{{ ( ($data->heading_one!='')) ? $data->heading_one : (old('heading_one') ?? '') }}</textarea>
                    @error('heading_one')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="heading_second"> Second Headline <span class="required-icon">*</span></label>
                    <textarea name="heading_second" class="form-control" id="heading_second" autofocus="" maxlength="100" cols="30" rows="2" required value="">{{ ( ($data->heading_second!='')) ? $data->heading_second : (old('heading_second') ?? '') }}</textarea>
                    @error('heading_second')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="heading_third"> Third Headline <span class="required-icon">*</span></label>
                    <textarea name="heading_third" class="form-control" id="heading_third" autofocus="" maxlength="100" cols="30" rows="2" required value="">{{ ( ($data->heading_third!='')) ? $data->heading_third : (old('heading_third') ?? '') }}</textarea>
                    @error('heading_third')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="heading_fourth"> Forth Headline <span class="required-icon">*</span></label>
                    <textarea name="heading_fourth" class="form-control" id="heading_fourth" autofocus="" maxlength="100" cols="30" rows="2" required value="">{{ ( ($data->heading_fourth!='')) ? $data->heading_fourth : (old('heading_fourth') ?? '') }}</textarea>
                    @error('heading_fourth')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="heading_fifth"> Fifth Headline <span class="required-icon">*</span></label>
                    <textarea name="heading_fifth" class="form-control" id="heading_fifth" autofocus="" maxlength="100" cols="30" rows="2" required value="">{{ ( ($data->heading_fifth!='')) ? $data->heading_fifth : (old('heading_fifth') ?? '') }}</textarea>
                    @error('heading_fifth')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="picture_one"> First Picture <span class="required-icon">*</span></label>
                    <input type="file" autofocus="" class="form-control" name="picture_one" id="picture_one" placeholder="Enter tag name" value="" maxlength="100" >
                    <span> <img style="height:30px; width: 50px; " src="{{asset('images/mustard_oil/'.$data->picture_one)}}" alt="Picture"></span>
                </div>


                <div class="col-6 mb-3">
                    <label for="picture_second"> Second Picture <span class="required-icon">*</span></label>
                    <input type="file" autofocus="" class="form-control" name="picture_second" id="picture_second" placeholder="Enter tag name" value="" maxlength="100" >
                    <span> <img style="height:30px; width: 50px; " src="{{asset('images/mustard_oil/'.$data->picture_second)}}" alt="Picture"></span>
                </div>

                <div class="col-6 mb-3">
                    <label for="picture_third"> Third Picture <span class="required-icon">*</span></label>
                    <input type="file" autofocus="" class="form-control" name="picture_third" id="picture_third" placeholder="Enter tag name" value="" maxlength="100">
                    <span> <img style="height:30px; width: 50px; " src="{{asset('images/mustard_oil/'.$data->picture_third)}}" alt="Picture"></span>
                </div>

            </div>
            <button class="mb-1 btn cus-btn btn-primary align-right" type="submit">Update</button>

        </form>
    </div>
</div>