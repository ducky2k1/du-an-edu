
<?php if(isset($info)&&($info)){ ?>
<div class="container emp-profile">
            <form method="post">
                <div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Thông tin giảng viên</h3>

</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>Profile <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h4>
</div>
<div class="student-profile-head">

<div class="row">


<div class="col-lg-4 col-md-4">
  <div class="profile-user-box" >
    <div class="profile-user-img" style="margin-left:30px;">
      <img src="../img_customer/<?php if(isset($info)&&($info)){
                                        echo $info['image'];
                                    }  ?>" alt="Profile" style="height: 150px;width:150px;border-radius:50%;border: 2px solid #212529;">
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-4">
  <div class="names-profiles">
    <h4><?php echo $info['name']; ?></h4>
    <h5>Giảng viên</h5>
  </div>
</div>
<div class="col-lg-4 col-md-4">
  <div class="follow-btn-group">
    <a href="../controller/index.php?act=edit_cus&id=<?php echo $info['id']; ?>" class="btn btn-info follow-btns">Chỉnh sửa thông tin</a>
  </div>
</div>

  


</div>
</div>
</div>
</div>
<div class="row">
                  <div class="col-lg-4">
                    <div class="student-personals-grp">
                      <div class="card">
                        <div class="card-body">
                          <div class="heading-detail">
                            <h4>Thông tin :</h4>
                          </div>
                          <div class="personal-activity" style="display:flex;">
                            <div class="personal-icons" style="width:25px;">
                            <i class="far fa-user"></i>
                            </div>
                            <div class="views-personal">
                            <h4>Họ và tên</h4>
                            <h5 style="color:#808080"><?php echo $info['name']; ?></h5>
                            </div>
                          </div>
                          <div class="personal-activity" style="display:flex;">
                            <div class="personal-icons" style="width:25px;">
                            <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            
                            <div class="views-personal">
                            <h4>Chức vụ</h4>
                            <h5 style="color:#808080"><?php echo 'Giảng viên'; ?></h5>
                            </div>
                          </div>
                <div class="personal-activity" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="views-personal">
                <h4>Số điện thoại</h4>
                <h5 style="color:#808080"><?php echo $info['phone']; ?></h5>
                </div>
                </div>
                <div class="personal-activity" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="far fa-envelope"></i>
                </div>
                <div class="views-personal">
                <h4>Email</h4>
                <h5 style="color:#808080"><?php echo $info['email']; ?></h5>
                </div>
                </div>
                <div class="personal-activity" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="feather-user"></i>
                </div>

                </div>
                <div class="personal-activity" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="views-personal">
                <h4>Ngày sinh</h4>
                <h5 style="color:#808080"><?php echo $info['birth_day']; ?></h5>
                </div>
                </div>
                <div class="personal-activity" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="feather-italic"></i>
                </div>
              
                </div>
                <div class="personal-activity mb-0" style="display:flex;">
                <div class="personal-icons" style="width:25px;">
                <i class="far fa-map"></i>
                </div>
                <div class="views-personal">
                <h4>Địa chỉ</h4>
                <h5 style="color:#808080"><?php echo $info['location']; ?></h5>
                </div>
                </div>
                </div>
                </div>
                </div>
<div class="student-personals-grp">
<div class="card mb-0">
<div class="card-body">
<div class="heading-detail">
<h4>Kỹ năng:</h4>
</div>
<div class="skill-blk">
<div class="skill-statistics">
<div class="skills-head">
<h5>Speaking</h5>
<p>90%</p>
</div>
<div class="progress mb-0">
<div class="progress-bar bg-photoshop" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="skill-statistics">
<div class="skills-head">
<h5>Reading</h5>
<p>75%</p>
</div>
<div class="progress mb-0">
<div class="progress-bar bg-editor" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="skill-statistics mb-0">
<div class="skills-head">
<h5>Listening</h5>
<p>95%</p>
</div>
<div class="progress mb-0">
<div class="progress-bar bg-illustrator" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="skill-statistics">
<div class="skills-head">
<h5>Writing</h5>
<p>75%</p>
</div>
<div class="progress mb-0">
<div class="progress-bar bg-editor" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="student-personals-grp">
<div class="card mb-0">
<div class="card-body">
<div class="heading-detail">
<h4>Thông tin về tôi</h4>
</div>
<div class="hello-park">
<h5>Xin chào tôi là <?php echo $info['name']; ?></h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur officia deserunt mollit anim id est laborum.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
</div>
<div class="hello-park">
<h5>Giáo dục</h5>
<div class="educate-year">
<h6>2008 - 2009</h6>
<p>Secondary Schooling at xyz school of secondary education, Mumbai.</p>
</div>
<div class="educate-year">
<h6>2011 - 2012</h6>
<p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
</div>
<div class="educate-year">
<h6>2012 - 2015</h6>
<p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
</div>
<div class="educate-year">
<h6>2015 - 2017</h6>
<p class="mb-0">Master of Science at Cdm College of Engineering and Technology, Pune.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




            </form>           
        </div>



      <?php } ?>