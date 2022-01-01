<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    
  </head>
  <body>
    
    @include('admin.navbar')
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding:100px">
            <!--first table-->
                <table>
               
                    <tr style="background-color:orange;">
                        <th style="padding:10px">name</th>
                        <th style="padding:10px">email</th>
                        <th style="padding:10px">contact</th>
                        <th style="padding:10px">user_ID</th>
                        <th style="padding:10px">subscriptionStatus</th>
                        <th style="padding:10px">Approve</th>
                        <th style="padding:10px">Cancel</th>
                        


                    </tr>
                   
                    @foreach($data as $user)
                    <tr align="center" style="background-color:white;">
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        <td >{{$user->contact}}</td>
                        <td >{{$user->id}}</td>
                        <td >{{$user->subscriptionStatus}}</td>
                        <td><a class="btn btn-success" href="{{url('approved',$user->id)}}">Approve</a></td>
                        <td><a class="btn btn-success" href="{{url('cancel',$user->id)}}">Cancel</a></td>
                       


                    </tr>
                    @endforeach


                </table>

                <!--second table-->
                <p>
                  <br>
                  <br>
                  <br>
                </p>




                <table>
               
                    <tr style="background-color:orange;">
                        <th style="padding:10px">First_Name</th>
                        <th style="padding:10px">Last_Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Card_Number</th>
                        <th style="padding:10px">Subscription_Status</th>
                        <th style="padding:10px">User_ID</th>
                        <th style="padding:10px">Approve</th>
                        <th style="padding:10px">Cancel</th>
                        


                    </tr>
                   
                    @foreach($data2 as $user)
                    <tr align="center" style="background-color:white;">
                        <td >{{$user->fName}}</td>
                        <td >{{$user->lName}}</td>
                        <td >{{$user->email}}</td>
                        <td >{{$user->date}}</td>
                        <td >{{$user->cardNumber}}</td>
                        <td >{{$user->status}}</td>
                        <td >{{$user->user_id}}</td>
                        <td><a class="btn btn-success" href="{{url('approved2',$user->id)}}">Approve</a></td>
                        <td><a class="btn btn-success" href="{{url('cancel2',$user->id)}}">Cancel</a></td>
                       


                    </tr>
                    @endforeach
                </table>

                <!--third table-->
                <p>
                  <br>
                  <br>
                  <br>
                </p>


                <table>
               
                    <tr style="background-color:orange;">
                        <th style="padding:10px">name</th>
                        <th style="padding:10px">email</th>
                        <th style="padding:10px">date</th>
                        
                        <th style="padding:10px">bkashNumber</th>
                        <th style="padding:10px">status</th>
                        <th style="padding:10px">user_id</th> 
                        <th style="padding:10px">Approve</th>
                        <th style="padding:10px">Cancel</th>
                        
                        


                    </tr>
                   
                    @foreach($data3 as $user)
                    <tr align="center" style="background-color:white;">
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        <td >{{$user->date}}</td>
                        <td >{{$user->bNumber}}</td>
                        <td >{{$user->status}}</td>
                        <td >{{$user->user_id}}</td>
                        <td><a class="btn btn-success" href="{{url('approved3',$user->id)}}">Approve</a></td>
                        <td><a class="btn btn-success" href="{{url('cancel3',$user->id)}}">Cancel</a></td>
                       


                    </tr>
                    @endforeach
                </table>




            </div>





        </div>
        
      
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>