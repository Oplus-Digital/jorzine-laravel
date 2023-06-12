<!-- Small modal -->
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#item{{$review->id}}">Details
</button>

<div class="modal fade bs-example-modal-center bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="item{{$review->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 text-center"><span class="text-danger ">{{$review->title}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>

                        <tr>
                            <th scope="row">Body</th>
                            <td>{{strip_tags(str_replace('&nbsp;', ' ', $review->body))}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Band</th>
                            <td>{{$review->band}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Profile</th>
                            <td>
                                <a href="{{$review->profile}}" target="_blank">{{$review->profile}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Website</th>
                            <td>
                                <a href="{{$review->website}}" target="_blank">{{$review->website}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Purchase Link</th>
                            <td>
                                <a href="{{$review->purchase_link}}" target="_blank">{{$review->purchase_link}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Release Name</th>
                            <td>
                                {{$review->release_name}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Review Type</th>
                            <td>
                                {{$review->review_type}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Reviewer</th>
                            <td>
                                {{$review->reviewer}}
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Image</th>
                            <td>
                                <a data-fancybox="gallery" href="{{$review->img}} ">
                                    <img src="{{$review->img}}"
                                         alt="review_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Thumb</th>
                            <td>
                                <a data-fancybox="gallery" href="{{$review->thumb}} ">
                                    <img src="{{$review->thumb}}"
                                         alt="article_thumb" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Posted By User</th>
                            <td>{{$review->posted_by_user}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Review Date</th>
                            <td>{{$review->review_date}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
