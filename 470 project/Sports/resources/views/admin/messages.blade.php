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
                        <th style="padding:10px">Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Subject</th>
                        <th style="padding:10px">Message</th>
                        
                        


                    </tr>
                   
                    @foreach($data as $user)
                    <tr align="center" style="background-color:white;">
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        <td >{{$user->subject}}</td>
                        <td >{{$user->message}}</td>
                        
                        
                       


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