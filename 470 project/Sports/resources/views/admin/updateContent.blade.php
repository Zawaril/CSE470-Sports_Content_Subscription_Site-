<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">

      <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>  

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

        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding:100px">
          @if(session()->has('message'))

           <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert">x</button>
                  {{session()->get('message')}}


           </div>

          @endif
      

         

          <form action="{{url('editContent',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding-top:15px;">
                    <label>Content Title</label>
                    <input type="text" style="color:black;" name="name" placeholder="{{$data->contentTitle}}">

                </div>

                <div style="padding-top:15px;">
                    <label>Publishing Date</label>
                    
                    <input type="date" style="color:black;" name="date" placeholder="{{$data->publishingDate}}">

                </div>

                <div style="padding-top:15px;">
                    <label>Author Name</label>
                    <input type="text" style="color:black;" name="nameauth" placeholder="{{$data->author}}">

                </div>

                <div style="padding-top:15px;">
                    <label>Feature Type</label>
                    
                    <select name="featureType" style="color:black; width:200px;">
                        <option value="{{$data->featureType}}">--Select--</option>
                        <option value="article">Article</option>
                        <option value="newsletter">Newsletter</option>
                        <option value="podcast">Podcast</option>
            

                    </select>

                </div>

                <div style="padding-top:15px;">
                    <label>Category</label>
                    
                    <select name="category" style="color:black; width: 200px;" >
                        <option value="$data->category">--Select--</option>
                        <option value="cricket">Cricket </option>
                        <option value="football">Football </option>
                        <option value="others">Others </option>
            

                    </select>

                </div>
                <div class="col-lg-12" sytle="padding-top:15px;">
                    <fieldset>
                          <textarea name="contentText" rows="6" id="message" placeholder="$data->contentText" required=""></textarea>
                    </fieldset>
                </div>

                

                <div style="padding-top:15px;">
                    <label>Old Image</label>
                    <img height="150" width="150" src="images/{{$data->images}}">
                    

                </div>

                <div style="padding-top:15px;">
                    <label>New Image</label>
                    <input type="file" name="file2">

                </div>


                <div style="padding-top:15px;">
                    
                    <input type="submit" class="btn btn-success">

                </div>




            </form>


        
        
        </div>




        </div>

      

        



        






        
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>