<td>

<!-- Small modal -->
    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
            data-bs-target="#item{{$model->id}}">Details
    </button>

    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true" id="item{{$model->id}}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0"><span class="text-danger">{{$model->first_name.' '.$model->last_name}}</span> Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                            <tr>
                                <th scope="row">Vehicle Brand Name</th>
                                <td>{{$model->car_brand}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Vehicle Model</th>
                                <td>{{$model->car_model}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Vehicle Plate Number</th>
                                <td>{{$model->plate_number}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Other Vehicle or Driver Info</th>
                                <td>{{$model->other_info}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Vehicle Type</th>
                                <td>{{$model->car_type}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Driver Image</th>
                                <td>
                                    @if($model->image)
                                    <a data-fancybox="gallery" href="{{$model->image}} ">
                                        <img src="{{$model->image }}"
                                             alt="licence_image" width="50" height="50" class="img-fluid rounded">
                                    </a>
                                    @else
                                        No Image
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Licence Image</th>
                                <td>
                                    @if($model->licence_image)
                                    <a data-fancybox="gallery" href="{{$model->licence_image}} ">
                                        <img src="{{$model->licence_image }}"
                                             alt="licence_image" width="50" height="50" class="img-fluid rounded">
                                    </a>
                                    @else
                                    No Image
                                    @endif
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <a href="{{route('admin.drivers.edit',$model->id)}}" title="Edit"
       class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-3"><i
            class="fa fa-edit"></i></a>


    <button data-url="{{route('admin.drivers.destroy',$model->id)}}"
            data-name="{{ $model->first_name.' '.$model->last_name }}"
            class="btn btn-danger rounded-3 btn-sm ml-2 delete"
            title="Delete">
        <i class="fa fa-trash"></i>
    </button>


</td>
