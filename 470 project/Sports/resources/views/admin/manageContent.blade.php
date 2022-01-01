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
                <table>
                 
                    <tr style="background-color:orange;">
                        <th style="padding:10px">contentTitle</th>
                        <th style="padding:10px">publishingDate</th>
                        <th style="padding:10px">author</th>
                        <th style="padding:10px">featureType</th>
                        <th style="padding:10px">category</th>
                        <th style="padding:10px">cotentText</th>
                        <th style="padding:10px">images</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                        


                    </tr>
                   
                    @foreach($data as $content)
                    <tr align="center" style="background-color:grey;">
                        <th >{{$content->contentTitle}}</th>
                        <th >{{$content->publishingDate}}</th>
                        <th >{{$content->author}}</th>
                        <th >{{$content->featureType}}</th>
                        <th >{{$content->category}}</th>
                        <th >{{$content->contentText}}</th>
                        <th ><img height="100" width="100" src="images/{{$content->images}}"></th>
                        <td><a onclick="return confirm('Are you sure about deleting this content?')" class="btn btn-danger" href="{{url('deleteContent',$content->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updateContent',$content->id)}}">Update</a></td>
                       


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