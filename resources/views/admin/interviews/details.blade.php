<!-- Small modal -->
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#item{{$interview->id}}">Details
</button>

<div class="modal fade bs-example-modal-center bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="item{{$interview->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 text-center"><span class="text-danger ">{{$interview->title}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>

                        <tr>
                            <th scope="row">Body</th>
                            <td>{{strip_tags(str_replace('&nbsp;', ' ', $interview->body))}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Band</th>
                            <td>{{$interview->band}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Profile</th>
                            <td>
                                <a href="{{$interview->profile}}" target="_blank">{{$interview->profile}}</a>
                            </td>
                        </tr>


                        <tr>
                            <th scope="row">Interviewer</th>
                            <td>
                                {{$interview->interviewer}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Thumb</th>
                            <td>
                                @if($interview->thumb)
                                <a data-fancybox="gallery" href="{{$interview->thumb}} ">
                                    <img src="{{$interview->thumb}}"
                                         alt="article_thumb" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                                @else
                                    Not Found
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Posted By User</th>
                            <td>{{$interview->posted_by_user}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Interview Date</th>
                            <td>{{$interview->interview_date}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
