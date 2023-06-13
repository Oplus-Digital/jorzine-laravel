<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

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
                            <textarea name="body" id="body" cols="30" rows="10" required
                                      class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}">
                                {{ isset($new ) ? strip_tags(str_replace('&nbsp;', ' ', $new->body)) : ''}}</textarea>
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
                            <label for="user_type" class="form-label">Select Section</label>
                            {!! Form::select('section_name',sectionNames(),null,['class' =>'form-control '.($errors->has('section_name') ? ' is-invalid' : null)
                            //,'placeholder'=>'Select Section'
 ]) !!}
                            @error('section_name')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="news_date" class="form-label"> News Date</label>
                            {!! Form::date('news_date',null,[
                         'class' =>'form-control '.($errors->has('news_date') ? ' is-invalid' : null),
                         'placeholder'=> 'News Date' ,'required'
                         ]) !!}
                            @error('news_date')
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
