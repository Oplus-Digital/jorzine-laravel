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
                            >{{ isset($interview ) ? strip_tags(str_replace('&nbsp;', ' ', $interview->body)) : ''}}</textarea>
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
                         'placeholder'=> 'Profile Link' ,'required'
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
                            <label for="interviewer" class="form-label">Interviewer</label>
                            {!! Form::text('interviewer',null,[
                                                  'class' =>'form-control '.($errors->has('interviewer') ? ' is-invalid' : null),
                                                  'placeholder'=> 'Interviewer' ,'required'
                                                  ]) !!}
                            @error('interviewer')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="interview_date" class="form-label"> Interview Date</label>
                            {!! Form::date('interview_date',null,[
                         'class' =>'form-control '.($errors->has('interview_date') ? ' is-invalid' : null),
                         'placeholder'=> 'Interview Date' ,'required'
                         ]) !!}
                            @error('interview_date')
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
