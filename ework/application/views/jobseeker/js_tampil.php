<style>
.mix {
    
}



nav.navbar-custom ul.navbar-nav a { 
    color: #dfe0ed; 
    border-style: solid; 
    border-width: 0 0 2px 0; 
    border-color: #fff; 
}
    
nav.navbar-custom ul.navbar-nav a:hover,
nav.navbar-custom ul.navbar-nav a:visited,
nav.navbar-custom ul.navbar-nav a:focus,
nav.navbar-custom ul.navbar-nav a:active { 
    background: #5CB85C; 
}
nav.navbar-custom ul.navbar-nav a:hover { 
    border-color: #5CB85C; 
}
nav.navbar-custom li.divider { 
    background: #5CB85C; 
}
nav.navbar-custom button.navbar-toggle { 
    background: #5CB85C; 
    border-radius: 2px; 
}
nav.navbar-custom button.navbar-toggle:hover { 
    background: #999; 
}
nav.navbar-custom button.navbar-toggle > span.icon-bar { 
    background: #fff; 
}
nav.navbar-custom ul.dropdown-menu { 
    border: 0; 
    background: #fff; 
    border-radius: 4px; 
    margin: 4px 0; 
    border: 2px solid #5CB85C;
    box-shadow: 0 0 4px 0 #ccc; 
}
nav.navbar-custom ul.dropdown-menu > li > a { 
    color: black; 
}
nav.navbar-custom ul.dropdown-menu > li > a:hover { 
    background: #5CB85C; color: #fff; 
}
nav.navbar-custom span.badge { 
    background: #5CB85C; 
    font-weight: normal; 
    font-size: 11px;
     margin: 0 4px; 
}
nav.navbar-custom span.badge.new { 
    background: rgba(255, 0, 0, 0.8); color: #fff; 
}

</style>

<div class="container mix" style="width: 100%; background-color: #488cf6" >
    <nav class="navbar navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php echo base_url('') ?>assets/img/log.png" alt="" style="margin-top: -30px; width: 50%;"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i>Notifications <span class="badge">0</span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-fw fa-tag"></i><span class="badge">label text</span> Item </a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item </a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item </a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item </a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="#">Navigation Item <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">Navigation Item <span class="sr-only"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">YOU <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-adjust"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-info-circle"></i> Personal Information</a></li>
                            <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

  <section id="resume-sec">
      <div class="container">
          <div class="row  move-me">
              <div class="col-lg-4 col-md-4 col-sm-4 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                  <h1>DOWNLOAD </h1>
                  <h1>RESUME</h1>
                  <div class="color-strip"></div>
                  <a href="#resume-sec" class="btn btn-style-three ">DOWNLOAD RESUME (.txt file)</a>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">

                  <div class="board">
                      <div class="board-inner">
                          <ul class="nav nav-tabs" id="myTab">
                              <li class="active">
                                  <a href="#home" data-toggle="tab" title="PERSONAL DETAILS">
                                      <span class="round-tabs one">
                                          <i class="fa fa-home"></i>
                                      </span>
                                  </a></li>

                              <li><a href="#profile" data-toggle="tab" title="EDUCATIONAL PROFILE">
                                  <span class="round-tabs two">
                                      <i class="fa fa-briefcase"></i>
                                  </span>
                              </a>
                              </li>
                              <li><a href="#exp" data-toggle="tab" title="EXPERIENCE DETAILS">
                                  <span class="round-tabs three">
                                      <i class="fa fa-recycle"></i>
                                  </span></a>
                              </li>

                              <li><a href="#location" data-toggle="tab" title="PRESENT LOCATION">
                                  <span class="round-tabs four">
                                      <i class="fa fa-paper-plane-o"></i>
                                  </span>
                              </a></li>

                              <li><a href="#contact" data-toggle="tab" title="CONTACT ME">
                                  <span class="round-tabs five">
                                      <i class="fa fa-comments-o"></i>
                                  </span></a>
                              </li>

                          </ul>
                      </div>

                      <div class="tab-content">
                          <div class="tab-pane fade in active" id="home">

                              <h4 class="head text-center">PERSONAL DETAILS</h4>
                              <p class="narrow text-center">
                                  <span>
                                      <i>NAME : </i>JHON BINEENA DEXONA
                                  </span>
                                  <span>
                                      <i>AGE :</i>25 YEARS
                                  </span>
                                  <span>
                                      <i>EXPERIENCE :</i>5 + YEARS TILL DATE
                                  </span>
                              </p>


                          </div>
                          <div class="tab-pane fade" id="profile">

                              <h4 class="head text-center">EDUCATIONAL PROFILE</h4>
                              <p class="narrow text-center">
                                  <span>
                                      <i>TECHINICAL : </i>B.E. ( Computer Science ) 
                                  </span>
                                  <span>
                                      <i>SKILLS  :</i>HTML, CSS , PHP, JQUERY, etc.
                                  </span>
                                  <span>
                                      <i>SOFTWARES  :</i>PHOTOSHOP, MAYA, etc.
                                  </span>
                              </p>
                          </div>
                          <div class="tab-pane fade" id="exp">
                              <h4 class="head text-center">EXPERIENCE DETAILS</h4>
                              <p class="narrow text-center">
                                  <span>
                                      <i>MICROSOFT  : </i>2013 - TILL DATE  as SR. UI DESIGNER
                                  </span>
                                  <span>
                                      <i>MAYA ANIMATIONS : </i>2010 - 2013 as UI DESIGNER
                                  </span>
                                  <span>
                                      <i>JALSON CREATIVES :</i>2009 - 2010 as DEVELOPER.
                                  </span>
                              </p>
                          </div>
                          <div class="tab-pane fade" id="location">
                              <h4 class="head text-center">PRESENT LOCATION </h4>
                              <p class="narrow text-center">
                                  <span>
                                      <i>LOCALITY </i>243/90 - NEW YORK STREET
                                  </span>
                                  <span>
                                      <i>COUNTRY </i>UNITED STATES OF AMERICA
                                  </span>
                                  <span>
                                      <i>PIN </i>345-908-00
                                  </span>
                              </p>
                          </div>
                          <div class="tab-pane fade" id="contact">
                              <h4 class="head text-center">CONTACT ME </h4>

                              <p class="narrow text-center">
                                  <span>
                                      <i>EMAIL </i>hello@yourdomain.com
                                  </span>
                                  <span>
                                      <i>Call </i>+90-908-678-654
                                  </span>
                                  <span>
                                      <i>SKYPE </i>meracallo
                                  </span>
                              </p>
                          </div>
                      </div>

                  </div>
              </div>
          </div>

          <div class="row pad-top  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="alert alert-info text-center">


                      <h4 class="media-heading"><strong>10 USD</strong> / HOUR</h4>
                      <p>
                          Aenean faucibus luctus enim.  
                      </p>
                      <a href="#hire-sec" class="btn btn-info">BUY PLAN NOW</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="alert alert-success text-center">


                      <h4 class="media-heading"><strong>200 USD</strong> / MONTH</h4>
                      <p>
                          Aenean faucibus luctus enim. 
                      </p>
                      <a href="#hire-sec" class="btn btn-success ">BUY PLAN NOW</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="alert alert-info text-center">


                      <h4 class="media-heading"><strong>1500 USD</strong> / YEAR</h4>
                      <p>
                          Aenean faucibus luctus enim.  
                      </p>
                      <a href="#hire-sec" class="btn btn-info">BUY PLAN NOW</a>
                  </div>
              </div>
          </div>

      </div>
  </section>
  <!-- RESUME SECTION END-->
