<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{--@dd($errors->all())--}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label"> Title</label>
                            {!! Form::text('title',null,[
                        'class' =>'form-control '.($errors->has('title') ? ' is-invalid' : null),
                        'placeholder'=> 'Title' ,'required'
                        ]) !!}
                            @error('title')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="body" class="form-label"> Body</label>
                            {{--                            {!! Form::textarea('body',null,[--}}
                            {{--                        'class' =>'form-control '.($errors->has('body') ? ' is-invalid' : null),--}}
                            {{--                        'placeholder'=> 'Body' ,'required','rows'=>'7'--}}
                            {{--                        ]) !!}--}}
                            <textarea name="body" id="body" cols="30" rows="7" required
                                      class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}"
                            >{{ isset($review ) ? strip_tags(str_replace('&nbsp;', ' ', $review->body)) : ''}}</textarea>
                            @error('body')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="band" class="form-label"> Band</label>
                            {!! Form::text('band',null,[
                        'class' =>'form-control '.($errors->has('band') ? ' is-invalid' : null),
                        'placeholder'=> 'Band' ,'required'
                        ]) !!}
                            @error('band')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="profile" class="form-label"> Profile</label>
                            {!! Form::url('profile',null,[
                         'class' =>'form-control '.($errors->has('profile') ? ' is-invalid' : null),
                         'placeholder'=> 'Profile Link'
                         ]) !!}
                            @error('profile')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="website" class="form-label"> Website</label>
                            {!! Form::url('website',null,[
                         'class' =>'form-control '.($errors->has('website') ? ' is-invalid' : null),
                         'placeholder'=> 'Website Link'
                         ]) !!}
                            @error('website')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="purchase_link" class="form-label"> Purchase Link</label>
                            {!! Form::url('purchase_link',null,[
                         'class' =>'form-control '.($errors->has('purchase_link') ? ' is-invalid' : null),
                         'placeholder'=> 'Purchase Link'
                         ]) !!}
                            @error('purchase_link')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="img" class="form-label"> Image</label>
                            <input type="file" class="form-control {{$errors->has('img') ? ' is-invalid' : null}}"
                                   name="img">
                            @error('img')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label"> Thumb</label>
                            <input type="file" class="form-control {{$errors->has('thumb') ? ' is-invalid' : null}}"
                                   name="thumb">
                            @error('thumb')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="release_name" class="form-label">Release Name</label>
                            {!! Form::text('release_name',null,[
                                                  'class' =>'form-control '.($errors->has('release_name') ? ' is-invalid' : null),
                                                  'placeholder'=> 'Release Name' ,'required'
                                                  ]) !!}
                            @error('release_name')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="review_type" class="form-label">Review Type</label>
                            {!! Form::text('review_type',null,[
                                                  'class' =>'form-control '.($errors->has('review_type') ? ' is-invalid' : null),
                                                  'placeholder'=> 'Review Type' ,'required'
                                                  ]) !!}
                            @error('review_type')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="reviewer" class="form-label">Reviewer</label>
                            {!! Form::text('reviewer',null,[
                                                  'class' =>'form-control '.($errors->has('reviewer') ? ' is-invalid' : null),
                                                  'placeholder'=> 'Reviewer' ,'required'
                                                  ]) !!}
                            @error('reviewer')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="review_date" class="form-label"> Review Date</label>
                            {!! Form::date('review_date',null,[
                         'class' =>'form-control '.($errors->has('review_date') ? ' is-invalid' : null),
                         'placeholder'=> 'Review Date' ,'required'
                         ]) !!}
                            @error('review_date')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-success btn-block" type="submit">Save</button>
            </div>

        </div>
    </div>
</div>
</div>
