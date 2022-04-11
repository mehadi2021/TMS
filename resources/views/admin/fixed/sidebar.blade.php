<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

           <!--traveller part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Travelers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('traveler.List')}}">Traveler List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route(('traveler.report.show'))}}">Traveler Report</a></li>
              </ul>
            </div>
          </li>

           <!--tourplan part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Tour plan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('admin.added.TourList')}}">view Tour plan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.view.joined.tourlist')}}">Joined Tour Plan List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('Tourplan.Report')}}">Tour Plan Report</a></li>
              </ul>
            </div>
          </li>
          
          <!--transport part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Transport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.addtransportform')}}">Add Transport</a></li>

                <li class="nav-item"> <a class="nav-link" href="{{route('admin.addtransportList')}}">Transport List </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('transport.Report')}}">Transport Report</a></li>
              </ul>
            </div>
          </li>

          <!--location part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Location</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.location')}}">Add Location </a></li>
              
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.location.list')}}">Location List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route ('location.Report')}}">Location Report</a></li>
              </ul>
            </div>
          </li>

           <!--Spot part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Spot</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.Addspot')}}">Add Spot </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.Spotlist')}}">Spot List </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('spot.Report')}}">Spot Report </a></li>

              </ul>
            </div>
           </li>

           
         
   <!--blog part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#au" aria-expanded="false" aria-controls="au">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="au">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.add.blog')}}">Add Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.blog.blogList')}}">Blog List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('blog.Report')}}">Blog Report</a></li>
              </ul>
            </div>
          </li>
  <!--contact part-->
  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#demo" aria-expanded="false" aria-controls="demo">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Contact info</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="demo">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('contact.show')}}">Add contact info</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route ('contact.list')}}">contact list</a></li>
               
              </ul>
            </div>
          </li>
          <!--feedback part-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Feedback</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
     
              <li class="nav-item"> <a class="nav-link" href="{{route('admin.review.list')}}">View Feedback</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('review.Report')}}">Feedback report</a></li>
              </ul>
            </div>
          </li>
           <!--report part-->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Report</span>
              <i class="nav-item"></i>
            </a>
           </li> -->
        </ul>
      </nav>