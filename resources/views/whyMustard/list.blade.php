<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Why Mustard List</h2>
    </div>
    <div class="card-header py-1 clearfix bg-gradient-primary text-white">
        <h5 class="card-title font-weight-bold mb-0 float-left mt-1"></h5>
        <div class="py-1 clearfix text-white">
            <div class="font-weight-bold mb-0 float-right">
                <div class="input-group">
                    <span class="input-group-btn">
                        <a href="{{route('home')}}" class="mb-1 btn cus-btn btn-primary align-right" type="submit">Back</a>

                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="form-row table-responsive table-hover">
            <table role="presentation" class="table table-sm table-striped table-bordered m-0">
                <thead>
                    <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">Picture</th>
                        <th class="text-center">Details</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dta)
                    <tr >
                        <td class="text-center">{{$loop->index+1}}</td>
                        <td class="text-center">
                            <img style="height:50px; width: 100px; " src="{{asset('images/whymustard/'.$dta->icon ?? '')}}" alt="">
                        </td>
                        <td>{{$dta->details}}</td>
                        <td class="text-center">
                            <form action="{{route('mustard.destroy',$dta->id)}}" method="POST">
                                @method('Delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="{{asset('assets/jquery/jquery.min.js')}}"></script>