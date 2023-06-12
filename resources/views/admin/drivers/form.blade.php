<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label"> First Name</label>
                                {!! Form::text('first_name',null,[
                            'class' =>'form-control '.($errors->has('first_name') ? ' is-invalid' : null),
                            'placeholder'=> 'First Name' ,'required'
                            ]) !!}
                                @error('first_name')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label"> Last Name</label>
                                {!! Form::text('last_name',null,[
                            'class' =>'form-control '.($errors->has('last_name') ? ' is-invalid' : null),
                            'placeholder'=> 'LastName' ,'required'
                            ]) !!}
                                @error('last_name')
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label"> Phone</label>
                                {!! Form::text('phone',null,[
                            'class' =>'form-control '.($errors->has('phone') ? ' is-invalid' : null),
                            'placeholder'=> 'Phone' ,
                            ]) !!}
                                @error('phone')
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
                                <label for="wallet" class="form-label"> Wallet</label>
                                {!! Form::number('wallet',null,[
                            'class' =>'form-control '.($errors->has('wallet') ? ' is-invalid' : null),
                            'placeholder'=> 'Wallet','step'=>'0.01' ,
                            ]) !!}
                                @error('wallet')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label"> Image (Optional)</label>
                                {!! Form::file('image',[ 'class' =>'form-control '.($errors->has('image') ? ' is-invalid' : null) ]) !!}
                                @error('image')
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
                            <label for="car_brand" class="form-label"> Vehicle Brand Name</label>
                            {!! Form::text('car_brand',null,[
                        'class' =>'form-control '.($errors->has('car_brand') ? ' is-invalid' : null),
                        'placeholder'=> ' Vehicle Brand Name' ,'required'
                        ]) !!}
                            @error('car_brand')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="car_model" class="form-label"> Vehicle Model</label>
                            {!! Form::text('car_model',null,[
                        'class' =>'form-control '.($errors->has('car_model') ? ' is-invalid' : null),
                        'placeholder'=> 'Vehicle Model' ,'required'
                        ]) !!}
                            @error('car_model')
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
                            <label for="plate_number" class="form-label"> Vehicle Plate Number</label>
                            {!! Form::text('plate_number',null,[
                        'class' =>'form-control '.($errors->has('plate_number') ? ' is-invalid' : null),
                        'placeholder'=> ' Vehicle Plate Number' ,'required'
                        ]) !!}
                            @error('plate_number')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="other_info" class="form-label"> Other Vehicle or Driver Info</label>
                            {!! Form::text('other_info',null,[
                        'class' =>'form-control '.($errors->has('other_info') ? ' is-invalid' : null),
                        'placeholder'=> 'Other Info'
                        ]) !!}
                            @error('other_info')
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
                            <label for="car_type" class="form-label"> Vehicle Type</label>
                            {!! Form::text('car_type',null,[
                        'class' =>'form-control '.($errors->has('car_type') ? ' is-invalid' : null),
                        'placeholder'=> ' Vehicle Type' ,'required'
                        ]) !!}
                            @error('car_type')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="licence_image" class="form-label"> Licence Image </label>
                            {!! Form::file('licence_image',[ 'class' =>'form-control '.($errors->has('licence_image') ? ' is-invalid' : null) ]) !!}
                            @error('licence_image')
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
