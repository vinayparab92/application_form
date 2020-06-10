@extends('layouts.app')

        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('ssc_year').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });
        </script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form wire:submit.prevent="saveContact">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name of Candidate ') }}<span class="text-danger">(Starting with Surname)</span></label>

                            <div class="col-md-6">
                                <input wire:model="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="SurName         CandidateName         FatherName" required autocomplete="name"  autofocus>

                                 @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
<!--------------------------father name-------------------------------------------->
                        <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-3">
                                <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" placeholder="Father Name" required autocomplete="fathername" autofocus>

                                @error('fathername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--------------------------mother name-------------------------------------------->
                        <div class="form-group row">
                            <label for="mothername" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-3">
                                <input id="mothername" type="text" class="form-control @error('mothername') is-invalid @enderror" name="mothername" value="{{ old('mothername') }}" placeholder="Mother Name" required autocomplete="mothername" autofocus>

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
                                <input id="dateofbirth" type="date" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth') }}" placeholder="" required autocomplete="dateofbirth" autofocus>

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
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
                                <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
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
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" placeholder="Address Line 1" required autocomplete="address1" autofocus>

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
                                <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" placeholder="Address Line 2" required autocomplete="address2" autofocus>

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
                                <input id="address3" type="text" class="form-control @error('address3') is-invalid @enderror" name="address3" value="{{ old('address3') }}" placeholder="Address Line 3" required autocomplete="address3" autofocus>

                                @error('address3')
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
                                <input id="uid" type="text" class="form-control @error('uid') is-invalid @enderror" name="uid" value="{{ old('uid') }}" placeholder="Aadhar NO" required autocomplete="uid" autofocus>

                                @error('uid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<div class="form-group row">
    <label for="addr" class="col-md-5 col-form-label text-md-right text-danger">{{ __('Permanent Address (If same as above)') }}</label>
    <div class="form-check col-md-6">
        <input class="form-check-input" type="checkbox" value="" id="addr">
    </div>
    @error('addr')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<!--------------------------paddress1-------------------------------------------->
                        <div class="form-group row">
                            <label for="paddress1" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="paddress1" type="text" class="form-control @error('paddress1') is-invalid @enderror" name="paddress1" value="{{ old('paddress1') }}" placeholder="Address Line 1" required autocomplete="paddress1" autofocus>

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
                                <input id="paddress2" type="text" class="form-control @error('paddress2') is-invalid @enderror" name="paddress2" value="{{ old('paddress2') }}" placeholder="Address Line 2" required autocomplete="paddress2" autofocus>

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
                                <input id="paddress3" type="text" class="form-control @error('paddress3') is-invalid @enderror" name="paddress3" value="{{ old('paddress3') }}" placeholder="Address Line 3" required autocomplete="paddress3" autofocus>

                                @error('paddress3')
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
                                
                                <select  class="form-control" name="caste" id="caste">
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
                                <input id="mobileno" type="text" class="form-control @error('mobileno') is-invalid @enderror" name="mobileno" value="{{ old('mobileno') }}" placeholder="Enter Mobile No" required autocomplete="mobileno" autofocus>

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
                                <input id="altno" type="text" class="form-control @error('altno') is-invalid @enderror" name="altno" value="{{ old('altno') }}" placeholder="Alternate Mobile No" required autocomplete="altno" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="certno" type="text" class="form-control @error('certno') is-invalid @enderror" name="certno" value="{{ old('certno') }}" required autocomplete="certno">

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
                                <select class="form-control" name="centre" id="Centre">
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
                            <table class="table table-bordered">
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
                                    <td><input type="text" class="form-control" name="ssc_board" placeholder="Board/University/ Institute"></td>
                                    <td><input  class="form-control" type="text" maxlength="4" placeholder="Enter Year of Passing" name="ssc_year"  id="ssc_year"></td>
                                    <td><input  class="form-control" type="text" maxlength="5" placeholder="Percentage/Grade Point" name="ssc_per" id="ssc_per"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HSC</td>
                                    <td><input type="text" class="form-control"name="hsc_board" placeholder="Board/University/ Institute"></td>
                                    <td><input  class="form-control" type="text" maxlength="4" placeholder="Enter Year of Passing" name="hsc_year" id="hsc_year"></td>
                                    <td><input  class="form-control" type="text" maxlength="5" placeholder="Percentage/Grade Point"  name="hsc_per" id="hsc_per"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>GRADUATION
                                        <div class="form-group">
                                            <select class="form-control col-md-10" name="graduation" id="graduation">
                                                <option value="">Select Graduation</option>
                                                <option value="BSC">BSC</option>
                                                <option value="Bcom">Bcom</option>
                                                <option value="BA">BA</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control" name="graduate_board" placeholder="Board/University/ Institute"></td>
                                    <td><input  class="form-control" type="text" maxlength="4" placeholder="Enter Year of Passing" name="graduate_year" id="graduate_year"></td>
                                    <td><input  class="form-control" type="text" maxlength="5" placeholder="Percentage/Grade Point" name="graduation_per" id="graduation_per"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>POST GRADUATION (If Any)
                                        <div class="form-group">
                                            <select class="form-control col-md-10" name="postgraduation" id="postgraduation">
                                                <option value="">Select PostGraduation</option>
                                                <option value="MSC">MSC</option>
                                                <option value="MCOM">MCOM</option>
                                                <option value="MA">MA</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"  name="post_board" placeholder="Board/University/ Institute"></td>
                                    <td><input  class="form-control" type="text" maxlength="4" placeholder="Enter Year of Passing" name="post_year" id="post_year"></td>
                                    <td><input  class="form-control" type="text" maxlength="5" placeholder="Percentage/Grade Point" name="post_per" id="post_per"></td>
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
                                        <input class="form-check-input" type="radio" name="prelims_17" id="prelims_17" value="1">
                                        <label class="form-check-label" for="prelims_17">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="prelims_17" id="prelims_17" value="2">
                                        <label class="form-check-label" for="prelims_17">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_17" id="mains_17" value="1">
                                        <label class="form-check-label" for="mains_17">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_17" id="mains_17" value="2">
                                        <label class="form-check-label" for="mains_17">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_17" id="interview_17" value="1">
                                        <label class="form-check-label" for="interview_17">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_17" id="interview_17" value="2">
                                        <label class="form-check-label" for="interview_17">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                </tr>
                                <!---        --->
                                <tr>
                                    <td>2</td>
                                    <td>UPSC-2018</td>
                                    <td>
                                       <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="prelims_18" id="prelims_18" value="1">
                                        <label class="form-check-label" for="prelims_18">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="prelims_18" id="prelims_18" value="2">
                                        <label class="form-check-label" for="prelims_18">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_18" id="mains_18" value="1">
                                        <label class="form-check-label" for="mains_18">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_18" id="mains_18" value="2">
                                        <label class="form-check-label" for="mains_18">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_18" id="interview_18" value="1">
                                        <label class="form-check-label" for="interview_18">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_18" id="interview_18" value="2">
                                        <label class="form-check-label" for="interview_18">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>UPSC-2019</td>
                                    <td>
                                       <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="prelims_19" id="prelims_19" value="1">
                                        <label class="form-check-label" for="prelims_19">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="prelims_19" id="prelims_19" value="2">
                                        <label class="form-check-label" for="prelims_19">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_19" id="mains_19" value="1">
                                        <label class="form-check-label" for="mains_19">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="mains_19" id="mains_19" value="2">
                                        <label class="form-check-label" for="mains_19">
                                        No
                                        </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_19" id="interview_19" value="1">
                                        <label class="form-check-label" for="interview_19">
                                        Yes
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="interview_19" id="interview_19" value="2">
                                        <label class="form-check-label" for="interview_19">
                                        No
                                        </label>
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
                                <input class="form-check-input" type="radio" name="area" id="area" value="urban">
                                <label class="form-check-label" for="area">Urban</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area" id="area" value="rural">
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
                                <input class="form-check-input" type="radio" name="ph" id="ph" value="yes">
                                <label class="form-check-label" for="ph">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ph" id="ph" value="no">
                                <label class="form-check-label" for="ph">No</label>
                                </div>
                                @error('ph')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-------------------------- end-------------------------------------------->
<!--------------------------disability-------------------------------------------->
                        <div class="form-group row">
                            <label for="disability" class="col-md-4 col-form-label text-md-right">{{ __('Which type of Disablity' ) }}</label>
                            <div class="col-md-3">
                                <input id="disability" type="text" class="form-control @error('disability') is-invalid @enderror" name="disability" placeholder="Enter Disablity" required autocomplete="disability">
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
                                <input class="form-check-input" type="radio" name="finance_limit" id="finance_limit" value="yes">
                                <label class="form-check-label" for="finance_limit">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="finance_limit" id="finance_limit" value="no">
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
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="past_benefit" id="past_benefit" value="yes">
                                <label class="form-check-label" for="past_benefit">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="past_benefit" id="past_benefit" value="no">
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
                            <label for="past_benefit" class="col-md-4 col-form-label text-md-right">{{ __('If Yes then, under which scheme      
' ) }}
                            </label>
                            <div class="col-md-3">
                               <div class="form-group">
                                <select class="form-control" name="scheme" id="scheme">
                                  <option value="">Select Scheme</option>
                                  <option value="UPSC">UPSC</option>
                                  <option value="MPSC">MPSC</option>
                                  <option value="IBPS">IBPS</option>
                                  <option value="SKILL">SKILL</option>
                                  <option value="POLICE">POLICE</option>
                                  <option value="BHARATI Coaching">BHARATI Coaching</option>
                                </select>
                              </div>
                                @error('past_benefit')
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
                                <input class="form-check-input" type="checkbox" name="terms" id="terms" value="option1">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                 <button type="submit">Save Contact</button>
                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection