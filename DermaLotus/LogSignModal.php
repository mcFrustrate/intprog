
 <!-- sign up modal -->
<div class="modal fade" id="rmyModal" tabindex="-1">
 
 <div class="modal-dialog" >
  <div class="modal-content">
    <div class="modal-header">
      <h4>Sign Up</h4>
    </div>
<form method="POST" action="db_connect.php">
      <div class="modal-body" >
        <div class="form-group form-row">
    <label class="col-md-3 col-form-label">I am a</label>
    <div class="col-sm-9 pt-1">
      <label class="custom-control custom-radio custom-control-inline">
      <input class="custom-control-input" checked="" type="radio" name="user_gender" value="Male" required="">
      <span class="custom-control-label"> Male </span>
    </label>
        <label class="custom-control custom-radio custom-control-inline">
      <input class="custom-control-input" type="radio" name="user_gender" value="Female">
      <span class="custom-control-label" > Female </span>
    </label>
    <!--label class="custom-control custom-radio custom-control-inline">
      <input class="custom-control-input" type="radio" name="account_type" value="option3">
      <span class="custom-control-label"> Both </span>
    </label-->
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-md-3 col-form-label">Full name</label>
    <div class="col">
      <input type="text" name="UserFName" class="form-control" placeholder="First name" required="">
    </div>
    <div class="col">
      <input type="text" name="UserLName" class="form-control" placeholder="Last name" required="">
    </div>
  </div>


  <div class="form-group form-row">
    <label class="col-md-3 col-form-label">Phone</label>
    <div class="col-9">
      <div class="input-group">
    <select class="custom-select" style="max-width: 120px;" required="">
        <option selected="">PH +639</option>
        <option value="1">AE +971</option>
        <option value="2">US +1</option>
        <option value="3">RU +7</option>
        <option value="4">UZ +971</option>
    </select>
      <input name="UserPhone" class="form-control" placeholder="Phone number" type="text">
    </div>
    </div>
  </div>

  <div class="form-group form-row">
    <label class="col-md-3 col-form-label" >Address</label>
    <div class="col">
      <input type="text" name="CityAddress" class="form-control" placeholder="City" required="">
    </div>
    <div class="col">
      <select class="custom-select form-control" name="CountryAddress">
        
        <option>Philippines</option>
        <option>United states</option>
        <option>Germany</option>
        <option>Canada</option>
      </select>
    </div>
  </div>

  <div class="form-group form-row">
    <label class="col-md-3"> </label>
    <div class="col">
      <input type="text" name="StreetAddress" class="form-control" placeholder="Street, Building" required="">
    </div>
  </div>

  <div class="form-group form-row">
    <label class="col-md-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="email" name="UserEmail" class="form-control" placeholder="Ex. john@gmail.com" required="">
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-md-3 col-form-label">Password</label>
    <div class="col-6">
      <input type="password" name="UserPass" class="form-control mb-3" placeholder="Create password" required="">
      <input type="password" name="UserConfirmPass" class="form-control" placeholder="Repeat password" required="">
    </div>
  </div>


  <div class="form-group form-row">
    <div class="col-sm-9 offset-sm-3">
      <label class="custom-control custom-checkbox">
      <input type="checkbox"  class="custom-control-input" id="customCheck1">
      <div class="custom-control-label" for="customCheck1">I agree with <a href="#" target="_blank">terms and conditions</a></div>
    </label>

  </div>
  </div>

  
    <div class="form-group">
      <button type="submit" name="btnSave" class="btn btn-primary btn-block" href="">Register</button>
  </div>
  </form>

      </div>
      <div class="modal-footer text-center">
        Have an account? <a id="myLogin" data-toggle="modal" data-dismiss="modal"  href="" >Log In</a>
      </div>
  </div>
</div>
<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>




<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 

//         $(document).on("click",".new_user",function(){
//   $('#smyModal').modal('hide');
//   $('#rmyModal').modal('show');
// });
  $(document).ready(function(){
      $("#mySignup").click(function(){
       //$("#smyModal").modal("hide");
        $("#rmyModal").modal("show");
    });
      $("#myLogin").click(function(){
        $("#rmyModal").modal("hide");
    //$("#smyModal").modal("show");
    });

  });
  
    </script>

<!--div class="modal fade" id="smyModal" tabindex="-1">
 <div class="modal-dialog" >
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-body" >
              !-- Tab panes  login panel->
              <div class="tab tab-content">
                  <div class="container tab-pane active" id="home">
                      !-- <h4>Login Tab</h4>  --
                       <div class="panel">
                        <div class="modal-header center">
                           <h4 class=""> Welcome to DermaLotus</h4>
                        </div>
                        <div class="panel-body">
                           <form class="" name=""  action="login.php" method="POST">
                              <input class="" type="hidden" name="proid" id="proid" value="">
                              <div class="form-group">
                               <label>Email</label>
                               <input name="" class="form-control" placeholder="ex. name@gmail.com" type="email">
                            </div> !-- form-group// --
                            <div class="form-group">
                              <a class="float-right" href="#">Forgot</a>
                              <label>Password</label>
                              <input class="form-control" placeholder="******" type="password">
                            </div> !-- form-group// --> 
                                <!-- div class="form-group">
                                  <div class="">
                                    <label class="" for=
                                    "U_USERNAME">Username:</label>
                                       <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control " > 
                                    
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-10 ">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS">Password:</label>
                                    
                                    <div class="col-md-12">
                                     <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input-sm">
                            
                                    </div>
                                  </div>
                                </div> --

                                  
                                    <div class="form-group">
                                    <button type="submit" id="modalLogin" name="modalLogin" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in "></span>Login</button> 
                                     
                                    </div>
                            </form>
                       </div>
                        !--panel footer befor--
                    </div> 
                  </div>
                  !-- end login panel -->

                  <!-- sign in panel --
              <div class="modal-footer justify-content-start">
                  <!-- <p align="left">&copy; <a href="https://facebook.com/tri.357">Raul Brandon R. Bacason</a></p> --Don't have an account? <a href=""  data-toggle="modal" id="mySignup" >Sign up</a>
              </div> 
              
          </div> !-- /.modal-body --
        </div><!-- /.modal-content --
      </div><!-- /.modal-dialog --
  </div>
  </div>
</div>
<!-- end sign up modal -->