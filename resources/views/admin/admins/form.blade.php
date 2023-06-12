<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label"> Name</label>
                                {!! Form::text('name',null,[
                            'class' =>'form-control '.($errors->has('name') ? ' is-invalid' : null),
                            'placeholder'=> 'Name' ,'required'
                            ]) !!}
                                @error('name')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email</label>
                                {!! Form::email('email',null,[
                             'class' =>'form-control '.($errors->has('email') ? ' is-invalid' : null),
                             'placeholder'=> 'Email Address' ,'required'
                             ]) !!}
                                @error('email')
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
                                <label for="password" class="form-label"> Password</label>
                                {!! Form::password('password',[
                            'class' =>'form-control '.($errors->has('password') ? ' is-invalid' : null),
                            'placeholder'=> 'Password' ,
                            ]) !!}
                                @error('password')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label"> Password Confirmation</label>
                                {!! Form::password('password_confirmation',[
                             'class' =>'form-control '.($errors->has('password_confirmation') ? ' is-invalid' : null),
                             'placeholder'=> 'Password Confirmation ' ,
                             ]) !!}
                                @error('password_confirmation')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror
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
