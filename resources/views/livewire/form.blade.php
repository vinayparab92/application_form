<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div class="card-body">
                    <form wire:submit.prevent="saveContact" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name of Candidate ') }}<span class="text-danger">(Starting with Surname)</span></label>

                            <div class="col-md-6">
                                <input wire:model.lazy="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="SurName         CandidateName         FatherName" required autocomplete="name"  autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--------------------------father name-------------------------------------------->
                        <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-3">
                                <input id="fathername" wire:model.lazy="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" placeholder="Father Name" required autocomplete="fathername" autofocus>

                                @error('fathername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--------------------------end-------------------------------------------->
<!--------------------------mother name-------------------------------------------->
                        <div class="form-group row">
                            <label for="mothername" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-3">
                                <input id="mothername" wire:model.lazy="mothername" type="text" class="form-control @error('mothername') is-invalid @enderror" name="mothername" value="{{ old('mothername') }}" placeholder="Mother Name" required autocomplete="mothername" autofocus>

                                @error('mothername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end--------------------------------------------> 
<!--------------------------date of birth-------------------------------------------->
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Brith') }}</label>

                            <div class="col-md-3">
                                <input id="dateofbirth" wire:model="dateofbirth" type="date" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth') }}" placeholder="" required autocomplete="dateofbirth" autofocus>

                                @error('dateofbirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------gender-------------------------------------------->
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" wire:model="gender" type="radio" name="gender" id="gender" value="male" required>
                                <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="gender" name="gender" id="gender" value="female">
                                <label class="form-check-label" for="gender">Female</label>
                                </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->

<!--------------------------address1-------------------------------------------->
                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="address1" wire:model.lazy="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" placeholder="Address Line 1" required autocomplete="address1" autofocus>

                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------address2-------------------------------------------->
                        <div class="form-group row">
                            <label for="address2" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 2') }}</label>

                            <div class="col-md-6">
                                <input id="address2" wire:model.lazy="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" placeholder="Address Line 2" required autocomplete="address2" autofocus>

                                @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------address3-------------------------------------------->
                        <div class="form-group row">
                            <label for="address3" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 3') }}</label>

                            <div class="col-md-6">
                                <input id="address3" wire:model.lazy="address3" type="text" class="form-control @error('address3') is-invalid @enderror" name="address3" value="{{ old('address3') }}" placeholder="Address Line 3" required autocomplete="address3" autofocus>

                                @error('address3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------country state-------------------------------------------->
                        <div class="form-group row">
                            <label for="country" class="col-md-3 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="country" name="country" id="country">
                                    
                                  <option value="">Please Select</option>
                                    @foreach($country1 as $countries)
                                    <option value="{{$countries->name}}">{{$countries->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!---    state     ----->
                            <label for="state" class="col-md-1 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="state" name="state" id="state">
                                    
                                    <option value="">Please Select</option>
                                    @foreach($state1 as $states)
                                    <option value="{{$states->name}}">{{$states->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!---    city     ----->
                            <label for="city" class="col-md-1 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="city" name="city" id="city">
                                    
                                    <option value="">Please Select</option>
                                    @foreach($city1 as $cities)
                                    <option value="{{$cities->name}}">{{$cities->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------pincode-------------------------------------------->
                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            <div class="col-md-3">
                                <input id="pincode" type="text" wire:model.lazy="pincode" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" maxlength="12" placeholder="PinCode" required autocomplete="pincode" autofocus>

                                @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------uid-------------------------------------------->
                        <div class="form-group row">
                            <label for="uid" class="col-md-4 col-form-label text-md-right">{{ __('Addhar No (UID)') }}</label>

                            <div class="col-md-3">
                                <input id="uid" type="text" wire:model.lazy="uid" class="form-control @error('uid') is-invalid @enderror" name="uid" value="{{ old('uid') }}" maxlength="12" placeholder="Aadhar NO" required autocomplete="uid" autofocus>

                                @error('uid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!-------------------------- pa-------------------------------------------->
<div class="form-group row">
    <label for="addr" class="col-md-5 col-form-label text-md-right text-danger">{{ __('Permanent Address') }}</label>
</div>
<!--------------------------paddress1-------------------------------------------->
                        <div class="form-group row">
                            <label for="paddress1" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="paddress1" wire:model.lazy="paddress1" type="text" class="form-control @error('paddress1') is-invalid @enderror" name="paddress1" value="{{ old('paddress1') }}" placeholder="Permanent Address Line 1" required autocomplete="paddress1" autofocus>

                                @error('paddress1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------address2-------------------------------------------->
                        <div class="form-group row">
                            <label for="paddress2" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 2') }}</label>

                            <div class="col-md-6">
                                <input id="paddress2" wire:model.lazy="paddress2" type="text" class="form-control @error('paddress2') is-invalid @enderror" name="paddress2" value="{{ old('paddress2') }}" placeholder="Permanent Address Line 2" required autocomplete="paddress2" autofocus>

                                @error('paddress2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------address3-------------------------------------------->
                        <div class="form-group row">
                            <label for="paddress3" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 3') }}</label>

                            <div class="col-md-6">
                                <input id="paddress3" wire:model.lazy="paddress3" type="text" class="form-control @error('paddress3') is-invalid @enderror" name="paddress3" value="{{ old('paddress3') }}" placeholder="Permanent Address Line 3" required autocomplete="paddress3" autofocus>

                                @error('paddress3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------country state-------------------------------------------->
                        <div class="form-group row">
                            <label for="pcountry" class="col-md-3 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="pcountry" name="pcountry" id="pcountry">
                                    
                                  <option value="">Please Select</option>
                                    @foreach($country1 as $countries)
                                    <option value="{{$countries->name}}">{{$countries->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('pcountry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!---    state     ----->
                            <label for="pstate" class="col-md-1 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="pstate" name="pstate" id="pstate">
                                    
                                    <option value="">Please Select</option>
                                    @foreach($state1 as $states)
                                    <option value="{{$states->name}}">{{$states->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('pstate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!---    city     ----->
                            <label for="pcity" class="col-md-1 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="pcity" name="pcity" id="pcity">
                                    
                                    <option value="">Please Select</option>
                                    @foreach($city1 as $cities)
                                    <option value="{{$cities->name}}">{{$cities->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('pcity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------pincode-------------------------------------------->
                        <div class="form-group row">
                            <label for="ppincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            <div class="col-md-3">
                                <input id="ppincode" type="text" wire:model.lazy="ppincode" class="form-control @error('ppincode') is-invalid @enderror" name="ppincode" value="{{ old('ppincode') }}" maxlength="12" placeholder="PinCode" required autocomplete="ppincode" autofocus>

                                @error('ppincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------caste category-------------------------------------------->
                        <div class="form-group row">
                            <label for="castecate" class="col-md-4 col-form-label text-md-right">{{ __('Caste Category') }}</label>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="castecate" id="castecate" value="1" checked="true">
                                <label class="form-check-label" for="castecate">Schedule Caste</label>
                                </div>
                                @error('castecate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------caste-------------------------------------------->
                        <div class="form-group row">
                            <label for="caste" class="col-md-4 col-form-label text-md-right">{{ __('Caste') }}</label>
                            <div class="col-md-3">
                                <div class="form-group">
                                
                                <select  class="form-control" wire:model="caste" name="caste" id="caste">
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </div>
                                @error('caste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------mobileno-------------------------------------------->
                        <div class="form-group row">
                            <label for="mobileno" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                            <div class="col-md-3">
                                <input id="mobileno" wire:model.lazy="mobileno"  type="text" class="form-control @error('mobileno') is-invalid @enderror" name="mobileno" maxlength="10" value="{{ old('mobileno') }}" placeholder="Enter Mobile No" required autocomplete="mobileno" autofocus>

                                @error('mobileno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------alt mobile no-------------------------------------------->
                        <div class="form-group row">
                            <label for="altno" class="col-md-4 col-form-label text-md-right">{{ __('Alternate Mobile no') }}</label>

                            <div class="col-md-3">
                                <input id="altno" type="text" wire:model.lazy="altno" maxlength="10" class="form-control @error('altno') is-invalid @enderror" name="altno" value="{{ old('altno') }}" placeholder="Alternate Mobile No" required autocomplete="altno" autofocus>

                                @error('altno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->

<!-------------------------- email-------------------------------------------->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-3">
                                <input id="email" wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!-------------------------- ssc certno-------------------------------------------->

                        <div class="form-group row">
                            <label for="certno" class="col-md-4 col-form-label text-md-right">{{ __('SSC Cert No') }}</label>

                            <div class="col-md-3">
                                <input id="certno" wire:model.lazy="certno" maxlength="10" type="text" class="form-control @error('certno') is-invalid @enderror" name="certno" value="{{ old('certno') }}" required autocomplete="certno">

                                @error('certno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->

<div class="form-group row text-danger">
1. Coaching and CET centre once allotted by BARTI will not be changed in any circumstances.<br>
2. BARTI reserves the right to cancel any centre or add any centre and increase or decrease the number of 
seats at any of the above centre
</div>

<!-------------------------- centre-------------------------------------------->

                        <div class="form-group row">
                            <label for="centre" class="col-md-4 col-form-label text-md-right">{{ __('Centre Applying for BARTI-DELHI-CET-2021 entrance examination') }}</label>

                            <div class="col-md-3">
                                <div class="form-group">
                                <select class="form-control" wire:model="centre" name="centre" id="centre">
                                  <option value="">Select Center</option>
                                  <option value="pune">Pune</option>
                                  <option value="mumbai">Mumbai</option>
                                  <option value="nashik">Nashik</option>
                                  <option value="aurangabad">Aurangabad</option>
                                  <option value="amravati">Amravati</option>
                                  <option value="nagpur">Nagpur</option>
                                  <option value="nanded">Nanded</option>
                                  
                                </select>
                              </div>

                                @error('centre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<hr>
<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-left text-danger">Eligiblity Qualification</label>
</div>

<!-------------------------- qualification-------------------------------------------->
                        <div class="form-group row">
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <th>Sr.NO</th>
                                    <th>Name of Examination</th>
                                    <th>Board/University/ Institute</th>
                                    <th>Year of Passing</th>
                                    <th>Percentage/Grade Point</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><label class="col-form-label">SSC</label></td>
                                    <td>
                                        <input id="ssc_board" wire:model="ssc_board" maxlength="25" type="text" class="         form-control @error('ssc_board') is-invalid @enderror" name="ssc_board" value="{{ old('ssc_board') }}" placeholder="Board/University/ Institute" required autocomplete="ssc_board">
                                        @error('ssc_board')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="ssc_year" wire:model="ssc_year" maxlength="25" type="text" class="         form-control @error('ssc_year') is-invalid @enderror" name="ssc_year" value="{{ old('ssc_year') }}" placeholder="Enter Year of Passing" required autocomplete="ssc_year">
                                        @error('ssc_year')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="ssc_per" wire:model="ssc_per" maxlength="25" type="text" class="         form-control @error('ssc_per') is-invalid @enderror" name="ssc_per" value="{{ old('ssc_per') }}" placeholder="Percentage/Grade Point" required autocomplete="ssc_per">
                                        @error('ssc_per')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HSC</td>
                                    <td>
                                        <input id="hsc_board" wire:model="hsc_board" maxlength="25" type="text" class="         form-control @error('hsc_board') is-invalid @enderror" name="hsc_board" value="{{ old('hsc_board') }}"placeholder="Board/University/ Institute" required autocomplete="hsc_board">
                                        @error('hsc_board')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="hsc_year" wire:model="hsc_year" maxlength="25" type="text" class="         form-control @error('hsc_year') is-invalid @enderror" name="hsc_year" value="{{ old('hsc_year') }}" placeholder="Enter Year of Passing" required autocomplete="hsc_year">
                                        @error('hsc_year')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="hsc_per" wire:model="hsc_per" maxlength="25" type="text" class="         form-control @error('hsc_per') is-invalid @enderror" name="hsc_per" value="{{ old('hsc_per') }}" placeholder="Percentage/Grade Point" required autocomplete="hsc_per">
                                        @error('hsc_per')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>GRADUATION
                                        <div class="form-group">
                                            <select class="form-control col-md-12" wire:model="graduation" name="graduation" id="graduation">
                                                <option value="">Select Graduation</option>
                                                <option value="BSC">BSC</option>
                                                <option value="Bcom">Bcom</option>
                                                <option value="BA">BA</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>

                                            @error('graduation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <input id="graduation_board" wire:model="graduation_board" maxlength="25" type="text" class="form-control @error('graduation_board') is-invalid @enderror" name="graduation_board" value="{{ old('graduation_board') }}"placeholder="Board/University/ Institute" required autocomplete="graduation_board">
                                        @error('graduation_board')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="graduation_year" wire:model="graduation_year" maxlength="25" type="text" class="         form-control @error('graduation_year') is-invalid @enderror" name="graduation_year" value="{{ old('graduation_year') }}" placeholder="Enter Year of Passing" required autocomplete="graduation_year">
                                        @error('graduation_year')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="graduation_per" wire:model="graduation_per" maxlength="25" type="text" class="         form-control @error('graduation_per') is-invalid @enderror" name="graduation_per" value="{{ old('graduation_per') }}" placeholder="Percentage/Grade Point" required autocomplete="graduation_per">
                                        @error('graduation_per')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>POST_GRADUATION
                                        <div class="form-group">
                                            <select class="form-control col-md-12" wire:model="post_graduation" name="post_graduation" id="post_graduation">
                                                <option value="">Select Graduation</option>
                                                <option value="MSC">MSC</option>
                                                <option value="Mcom">Mcom</option>
                                                <option value="MA">MA</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>

                                            @error('post_graduation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <input id="post_graduation_board" wire:model="post_graduation_board" maxlength="25" type="text" class="form-control @error('post_graduation_board') is-invalid @enderror" name="post_graduation_board" value="{{ old('post_graduation_board') }}"placeholder="Board/University/ Institute" required autocomplete="post_graduation_board">
                                        @error('post_graduation_board')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="post_graduation_year" wire:model="post_graduation_year" maxlength="25" type="text" class="form-control @error('post_graduation_year') is-invalid @enderror" name="post_graduation_year" value="{{ old('post_graduation_year') }}" placeholder="Enter Year of Passing" required autocomplete="post_graduation_year">
                                        @error('post_graduation_year')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="post_graduation_per" wire:model="post_graduation_per" maxlength="25" type="text" class="form-control @error('post_graduation_per') is-invalid @enderror" name="post_graduation_per" value="{{ old('post_graduation_per') }}" placeholder="Percentage/Grade Point" required autocomplete="post_graduation_per">
                                        @error('post_graduation_per')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                            </table>
                        </div>
<hr>

<div class="form-group row">
    <label class="col-md-12 col-form-label text-md-left text-danger">About Preveious attempts of UPSC (Skip if not attempted)</label>
</div>

<!-------------------------- previous attemped-------------------------------------------->
                        <div class="form-group row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Sr.NO</th>
                                    <th>Name of Exam</th>
                                    <th>Prelims</th>
                                    <th>Mains</th>
                                    <th>Interview</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>UPSC-2017</td>
                                    <td>
                                       <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_17" type="radio" name="prelims_17" id="prelims_17" value="yes" required>
                                        <label class="form-check-label" for="prelims_17">
                                        Yes
                                        </label>
                                        @error('prelims_17')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_17" type="radio" name="prelims_17" id="prelims_17" value="no">
                                        <label class="form-check-label" for="prelims_17">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_17" type="radio" name="mains_17" id="mains_17" value="yes" required>
                                        <label class="form-check-label" for="mains_17">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_17" type="radio" name="mains_17" id="mains_17" value="no">
                                        <label class="form-check-label" for="mains_17">
                                        No
                                        </label>
                                        @error('mains_17')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="interview_17" type="radio" name="interview_17" id="interview_17" value="yes" required>
                                        <label class="form-check-label" for="interview_17">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input"wire:model="interview_17"  type="radio" name="interview_17" id="interview_17" value="no">
                                        <label class="form-check-label" for="interview_17">
                                        No
                                        </label>
                                        @error('interview_17')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                </tr>
                                <!---        --->
                                <tr>
                                    <td>2</td>
                                    <td>UPSC-2018</td>
                                    <td>
                                       <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_18" type="radio" name="prelims_18" id="prelims_18" value="yes" required>
                                        <label class="form-check-label" for="prelims_18">
                                        Yes
                                        </label>
                                        @error('prelims_18')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_18" type="radio" name="prelims_18" id="prelims_18" value="no">
                                        <label class="form-check-label" for="prelims_18">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_18" type="radio" name="mains_18" id="mains_18" value="yes" required>
                                        <label class="form-check-label" for="mains_18">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_18" type="radio" name="mains_18" id="mains_18" value="no">
                                        <label class="form-check-label" for="mains_18">
                                        No
                                        </label>
                                        @error('mains_18')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="interview_18" type="radio" name="interview_18" id="interview_18" value="yes" required>
                                        <label class="form-check-label" for="interview_18">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input"wire:model="interview_18"  type="radio" name="interview_18" id="interview_18" value="no">
                                        <label class="form-check-label" for="interview_18">
                                        No
                                        </label>
                                        @error('interview_18')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                </tr>
                                <!---        --->
                                <tr>
                                    <td>3</td>
                                    <td>UPSC-2019</td>
                                    <td>
                                       <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_19" type="radio" name="prelims_19" id="prelims_19" value="yes" required>
                                        <label class="form-check-label" for="prelims_19">
                                        Yes
                                        </label>
                                        @error('prelims_19')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="prelims_19" type="radio" name="prelims_19" id="prelims_19" value="no">
                                        <label class="form-check-label" for="prelims_19">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_19" type="radio" name="mains_19" id="mains_19" value="yes" required>
                                        <label class="form-check-label" for="mains_19">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="mains_19" type="radio" name="mains_19" id="mains_19" value="no">
                                        <label class="form-check-label" for="mains_19">
                                        No
                                        </label>
                                        @error('mains_19')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" wire:model="interview_19" type="radio" name="interview_19" id="interview_19" value="yes" required>
                                        <label class="form-check-label" for="interview_19">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input"wire:model="interview_19"  type="radio" name="interview_19" id="interview_19" value="no">
                                        <label class="form-check-label" for="interview_19">
                                        No
                                        </label>
                                        @error('interview_19')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
<!--------------------------area-------------------------------------------->
                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Belongs to which Area' ) }}(For official Purpose)</label>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" wire:model="area" type="radio" name="area" id="area" value="urban" required>
                                <label class="form-check-label" for="area">Urban</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" wire:model="area" type="radio" name="area" id="area" value="rural">
                                <label class="form-check-label" for="area">Rural</label>
                                </div>
                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------ph-------------------------------------------->
                        <div class="form-group row">
                            <label for="ph" class="col-md-4 col-form-label text-md-right">{{ __('Physically challenged ' ) }}(PH 40%  or more)</label>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" wire:model="ph" type="radio" name="ph" id="ph" value="yes" required>
                                <label class="form-check-label" for="ph">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" wire:model="ph" type="radio" name="ph" id="ph" value="no">
                                <label class="form-check-label" for="ph">No</label>
                                </div>
                                @error('ph')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--------------------------disability-------------------------------------------->
                        <div class="form-group row">
                            <label for="disability" class="col-md-4 col-form-label text-md-right">{{ __('Which type of Disablity' ) }}</label>
                            <div class="col-md-3">
                                <input id="disability" type="text" wire:model="disability" class="form-control @error('disability') is-invalid @enderror" name="disability" placeholder="Enter Disablity" autocomplete="disability">
                                @error('disability')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------finance_limit-------------------------------------------->
                        <div class="form-group row">
                            <label for="finance_limit" class="col-md-4 col-form-label text-md-right">{{ __('Below than Rs. 8.00 lakh' ) }}<span class="text-danger">(At the time of verification
                            Income Certificate is mandatory)</span>
                            </label>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input wire:model="finance_limit" class="form-check-input" type="radio"  name="finance_limit" class="form-control @error('finance_limit') is-invalid @enderror" id="finance_limit" value="yes" required>
                                <label class="form-check-label" for="finance_limit" >Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="finance_limit" name="finance_limit"class="form-control @error('finance_limit') is-invalid @enderror" id="finance_limit" value="no">
                                <label class="form-check-label" for="finance_limit">No</label>
                                </div>
                                @error('finance_limit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->

<!--------------------------benifit-------------------------------------------->
                        <div class="form-group row">
                            <label for="past_benefit" class="col-md-4 col-form-label text-md-right">{{ __('Have you taken any benefit of BARTI, in past?*      
' ) }}
                            </label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="past_benefit" name="past_benefit" id="past_benefit" value="yes" required>
                                <label class="form-check-label" for="past_benefit" >Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="past_benefit" name="past_benefit" id="past_benefit" value="no">
                                <label class="form-check-label" for="past_benefit">No</label>
                                </div>
                                @error('past_benefit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->


<!--------------------------scheme-------------------------------------------->
                        <div class="form-group row">
                            <label for="scheme" class="col-md-4 col-form-label text-md-right">{{ __('If Yes then, under which scheme      
' ) }}
                            </label>
                            <div class="col-md-3">
                               <div class="form-group">
                                <select class="form-control" name="scheme" wire:model="scheme" id="scheme">
                                  <option value="">Select Scheme</option>
                                  <option value="UPSC">UPSC</option>
                                  <option value="MPSC">MPSC</option>
                                  <option value="IBPS">IBPS</option>
                                  <option value="SKILL">SKILL</option>
                                  <option value="POLICE">POLICE</option>
                                  <option value="BHARATI Coaching">BHARATI Coaching</option>
                                </select>
                              </div>
                                @error('scheme')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<hr>
<div class="form-group row">
    <label for="past_benefit" class="col-md-4 col-form-label text-md-left text-danger">{{ __('UNDERTAKING')}}</label>
    I, hereby confirm that the information provided in the form above is true and my application can be rejected 
at any stage of the selection process if any of the above information is found to be false. 

I will be suspended at any stage of the course in case the above information is found to be false. Additionally, 
the cost of coaching will be recovered from me, in case the above information is found to be false. 


</div>

<!-------------------------- ACCEPT-------------------------------------------->
                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="terms" wire:model.lazy="terms" id="terms" value="accept" required>
                                <label class="form-check-label" for="terms"> I Accept Terms and Conditions. </label>
                                </div>

                                @error('terms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<!-------------------------- password-confirm-------------------------------------------->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" wire:model="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        



    <button type="submit">Save Contact</button>
</form>





