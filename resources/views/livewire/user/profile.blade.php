<div>
    <!-- progress bar -->
    {{-- <div class="container">
        <div class="row m-3">
            <div class="col-md-12 col-lg-12">
                <h4>Your Profile Progress Status</h4>
                <div>
                    <a href="#" class="nav-link">
                        <h5><i class="nav-icon fas fa-check-circle text-success"><strong> Complete</strong></i></h5>
                    </a>

                    <a href="#" class="nav-link">
                        <h5><i class="nav-icon fas fa-times-circle text-danger"><strong> Incomplete</strong></i></h5>
                        <p>Please Complete All the Verifications To Use Full Feature Of the Syatem</p>
                    </a>
                </div>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0"
                        aria-valuemax="100" style="background-color:red; width:30%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr> --}}
    <div class="row row-eq-height m-3" style="justify-content: center;">
        <div class="col-md-4 col-lg-4">
            <form method="post" wire:submit.prevent='profileUpdate' class="card h-100" id="form_profile">
                @csrf
                <div class="card-header">
                    <h3 class="card-title" id="card-title-pin-request">My Profile</h3>
                </div>

                <div class="card-body" id="card-body-pin-request">
                    <center>
                        <div class="circle">
                            <!-- User Profile Image -->
                            <img src="#" class="profile-pic">

                            <div class="p-image">
                                <i class="fa fa-camera upload-button">
                                    <input type="file" class="file-upload" {{-- wire:model="profile_image" --}} /></i>
                            </div>
                        </div>
                        <div class="user-heading">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" title="edit your profile name!"
                                        style="font-size: 24px;font-weight: 600;" type="text" wire:model='name'
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" wire:model='email' disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" wire:model="mobile"
                                        pattern="[1-9]{1}[0-9]{9}" disabled>
                                </div>
                            </div>
                            <!-- Alternate Mobile Number -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                    <input type="text" class="form-control" name="alt_mob" id="alt_mobile"
                                        wire:model='alt_mobile' placeholder="Alternate Mobile Number">
                                </div>
                                @error('alt_mobile') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Alternate mobile number -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-plus-square"></i></span>
                                    <input type="text" class="form-control" wire:model.lazy='upi'
                                        placeholder="Enter Your UPI" @if($upi !=null) disabled @endif>
                                    {{-- <input type="hidden" class="form-control" wire:model='upi_hide'> --}}
                                </div>
                            </div>

                        </div>
                        <div class="form-group" style="float: right !important;">
                            <input type="submit" id="profile_update" name="profile_update"
                                class="btn btn-info action-btn" value="Save Changes">
                        </div>
                        <!--.,form-group-->
                    </center>
                </div>
                <!--/.card-body-->
            </form>
            @if (session()->has('messageprofile'))
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Profile successfully updated.'
            });
            </script>
        @endif
        </div>

        {{-- Address section --}}
        <div class="col-md-4 col-lg-4">
            <form method="post" wire:submit.prevent='updateAdress' class="card h-100" id="form_address">
                @csrf

                <div class="card-header">
                    <h3 class="card-title" id="card-title-pin-request">My Address</h3>
                </div>
                <div class="card-body" id="card-body-pin-request">
                    <div class="form-group">
                        <div class="form-label">Addresss Line 1</div>
                        <textarea class="form-control" rows="3" wire:model="address"></textarea>

                    </div>
                    <!--/.form-group-->
                    <div class="form-group">
                        <div class="form-label">Pin/Zip</div>
                        <input type="number" class="form-control" wire:model="pincode">

                    </div>
                    <!--/.form-group-->
                    <div class="form-group">
                        <div class="form-label">District</div>
                        <input type="text" class="form-control" wire:model="dist">

                    </div>

                    <div class="form-group">
                        <div class="form-label">State</div>
                        <!-- <input type="number" class="form-control" name="pincode" value=" required=""> -->
                        <select wire:model='state' id="state" class="form-control">
                         @if($state != null)
                                <option value="{{$state}}">{{$state}}</option> 
                                @else
                                <option>Select State</option>
                                @endif
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option> 
                              
                        </select>
                    </div>

                    <br>
                    <div class="form-group" align="right">
                        <input type="submit" name="address_update" id="address_update" class="btn btn-info action-btn"
                            value="Update Address">

                    </div>
                    <!--.,form-group-->

                </div>
                <!--/.card-body-->
            </form>
         @if (session()->has('messageaddres'))
            <script>
                Swal.fire({
              icon: 'success',
              title: 'Address successfully updated.'
            });
            </script>
        @endif
        </div>



    </div>
    <!--/.row-->
</div>