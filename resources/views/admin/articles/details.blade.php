<!-- Small modal -->
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#item{{$article->id}}">Details
</button>

<div class="modal fade bs-example-modal-center bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="item{{$article->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 text-center"><span class="text-danger ">{{$article->title}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>

                        <tr>
                            <th scope="row">Body</th>
                            <td>{{strip_tags(str_replace('&nbsp;', ' ', $article->body))}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Band</th>
                            <td>{{$article->band}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Profile</th>
                            <td>
                                <a href="{{$article->profile}}" target="_blank">{{$article->profile}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Website</th>
                            <td>
                                <a href="{{$article->website}}" target="_blank">{{$article->website}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Author</th>
                            <td>
                                {{$article->author}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Thumb</th>
                            <td>
                                @if($article->thumb)
                                    <a data-fancybox="gallery" href="{{$article->thumb}} ">
                                        <img src="{{$article->thumb}}"
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
                            <td>{{$article->posted_by_user}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Article Date</th>
                            <td>{{$article->article_date}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
