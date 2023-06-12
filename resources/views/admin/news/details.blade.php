<!-- Small modal -->
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#item{{$new->id}}">Details
</button>

<div class="modal fade bs-example-modal-center bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="item{{$new->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 text-center"><span class="text-danger ">{{$new->title}}</span>  </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>

                        <tr>
                            <th scope="row">Body</th>
                            <td>{{strip_tags(str_replace('&nbsp;', ' ', $new->body))}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Band</th>
                            <td>{{$new->band}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Profile</th>
                            <td>
                                <a href="{{$new->profile}}" target="_blank">{{$new->profile}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Section Name</th>
                            <td>
                                {{$new->section_name}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Posted By User</th>
                            <td>{{$new->posted_by_user}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Date</th>
                            <td>{{$new->date}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
