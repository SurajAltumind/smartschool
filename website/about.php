

<style>
            h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
span, a, a:hover {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}
.section-head {
  margin-bottom: 60px;
}
.section-head h4 {
  position: relative;
  padding:0;
  color:#f91942;
  line-height: 1;
  letter-spacing:0.3px;
  font-size: 34px;
  font-weight: 700;  
  text-align:center;
  text-transform:none;
  margin-bottom:30px;
}
.section-head h4:before {
  content: '';
  width: 60px;
  height: 3px;
  background: #f91942;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right:0;  
  margin:0 auto;
}
.section-head h4 span {
  font-weight: 700;
  padding-bottom: 5px;
  color:#2f2f2f
}
p.service_text{
  color:#cccccc !important;
  font-size:16px;
  line-height:28px;
  text-align:center;    
}
.section-head p, p.awesome_line{
  color:#818181;
  font-size:16px;
  line-height:28px;
  text-align:center;  
}

.extra-text {
    font-size:34px;
    font-weight: 700;
    color:#2f2f2f;
    margin-bottom: 25px;
    position:relative;
    text-transform: none;
}
.extra-text::before {
    content: '';
    width: 60px;
    height: 3px;
    background: #f91942;
    position: absolute;
    left: 0px;
    bottom: -10px;
    right: 0;
    margin: 0 auto;
}
.extra-text span {
    font-weight: 700;
    color:#f91942;
}
.item {
    background: #fff;
    text-align: center;
    padding: 30px 25px;
    -webkit-box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    border-radius: 20px;
    border:5px solid rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover{
    background:#f91942;
    box-shadow:0 8px 20px 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover .item, .item:hover span.icon{
    background:#fff;
    border-radius:10px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover h6, .item:hover p{
    color:#fff;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item .icon {
    font-size: 40px;
    margin-bottom:25px;
    color: #f91942;   
    width: 90px;
    height: 90px;
    line-height: 96px;
    border-radius: 50px;
}
.item .feature_box_col_one{
    background:rgba(247, 198, 5, 0.20);
    color:#f91942
}
.item .feature_box_col_two{
    background:rgba(255, 77, 28, 0.15);
    color:#f91942
}
.item .feature_box_col_three{
    background:rgba(0, 147, 38, 0.15);
    color:#f91942
}
.item .feature_box_col_four{
    background:rgba(0, 108, 255, 0.15);
    color:#f91942
}
.item .feature_box_col_five{
    background:rgba(146, 39, 255, 0.15);
    color:#f91942
}
.item .feature_box_col_six{
    background:rgba(23, 39, 246, 0.15);
    color:#f91942
}
.item p{
    font-size:15px;
    line-height:26px;
}
.item h6 {
    margin-bottom:20px;
    color:#2f2f2f;
}
.mission p {
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 28px;
    font-weight: 500;
}
.mission i {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #f91942;
    border-radius: 50%;
    color: #fff;
    font-size: 25px;
}
.mission .small-text {
    margin-left: 10px;
    font-size: 13px;
    color: #666;
}
.skills {
    padding-top:0px;
}
.skills .prog-item {
    margin-bottom: 25px;
}
.skills .prog-item:last-child {
    margin-bottom: 0;
}
.skills .prog-item p {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 10px;
}
.skills .prog-item .skills-progress {
    width: 100%;
    height: 10px;
    background: #e0e0e0;
    border-radius:20px;
    position: relative;
}
.skills .prog-item .skills-progress span {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background: #f91942;
    width: 10%;
    border-radius: 10px;
    -webkit-transition: all 1s;
    transition: all 1s;
}
.skills .prog-item .skills-progress span:after {
    content: attr(data-value);
    position: absolute;
    top: -5px;
    right: 0;
    font-size: 10px;
    font-weight:600;    
    color: #fff;
    background:rgba(0, 0, 0, 0.9);
    padding: 3px 7px;
    border-radius: 30px;
}
</style>

<div class="services" id="#">
<div class="container">
<h3 class="title tittle"><font color="black">Let kids explore their imagination and creativity through art</font></h3>
<div class="servc-grids">
<div class="col-md-4 servc-grid col-sm-6  servc-grid-btm ">
<ul> 
<li>
<span class="fa fa-graduation-cap"  aria-hidden="true"></span>
</li>
<li>
<h4>Live & Video Classes</h4>
</li>
</ul> 
<div class="clearfix"> </div>
<p>Live video class with our smart school App</p>
</div>
<div class="col-md-4 servc-grid col-sm-6 servc-grid-btm ">
<ul> 
<li>
<span class="fa fa-book" aria-hidden="true"></span>
</li>
<li>
<h4>Books & Computer Lab</h4>
</li>
</ul> 
<div class="clearfix"> </div>
<p>All computers are equiped with latest multimedia kits and internet connected.</p>
</div>
<div class="col-md-4 servc-grid col-sm-6 servc-grid-btm ">
<ul> 
<li>
<span class="fa fa-user" aria-hidden="true"></span>
</li>
<li>
<h4>Certified Teachers</h4>
</li>
</ul> 
<div class="clearfix"> </div>
<p>We have well education and expert faculties to provide best education to your child.</p>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>

<!--about-->
<div class="about-page" id="about">
<div class="container">
<!---728x90--->

<h3 class="tittle">About</h3>
<!---728x90--->

<div class="about-grids">

<div class="col-md-6 about-grid">
<h4>Overview</h4>
<div class="about-gd">
<div class="about-gd-left">
<h5></h5>
</div>
<div class="about-gd-right">
<p>Our school is a best learning place where all students are instructed by highly qualified teachers with engaging and thoughtfully prepared lessons. Our staff takes a supportive approach to education and takes pride in making each day a learning day for our students. We strive to integrate high levels of respect, responsibility, and safety in our classrooms and playground as well.</p>
</div>
<div class="clearfix"> </div>
</div>
</br>

<h4>Our Commitment</h4>
<div class="about-gd">
<div class="about-gd-left">
<h5></h5>
</div>
<div class="about-gd-right">
<p>We are committed for professional development, new opportunities, encourage for learners, enhanced learning way in our premises. Staff continue evaluate the students for expose of student,s ability in their interest of area for personal development, bring high level experience and expertise for motivational lectures. parallel support of parents and teachers towards students reach them to new heights of opportunities.</p>
</div>
<div class="clearfix"> </div>
</div>
</div>

<div class="col-md-6 about-grid about-w3">
<img src="images/studentsyoga.png" alt=" " class="img-responsive" />
</div>
<div class="clearfix"> </div>
</div>
<!---728x90--->

</div>
</div>
<h3 class="tittle">Why Choose Our School</h3>
<p class="para">Every child is like a seed that has the potential to grow if it is nourished with love and care under the right guidance. In the current challenging times, it is essential that children should not only excel in academics but should also develop courtesy , discipline, smart personality, 
    social sensitivity and be imbibed with the traditional values and culture of our country.childhood is the best time to lay the foundation of the core values essential for the overall development of the future citizen of tomorrow.</p>
<!-- //about -->

<div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
   
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-graduation-cap"></i></span>
            <h6>Smart Classes</h6>
            <!--<p>We use latest technology for the latest world because we know the demand of peoples.</p>-->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-user"></i></span>
            <h6>Skilled Lecturers</h6>
            <!--<p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>-->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-book"></i></span>
            <h6>Book Library & Store</h6>
           <!-- <p>If our customer has any problem and any query we are always happy to help then.</p>-->
          </div>
        </div>
      </div>
    </div>
  </div>




