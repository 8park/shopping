<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require_once("db_connect.php");?>
<?php require_once("db.php");?>
<?php require_once("workerslist.php");?>
<?php $dbname = new CreateDb("shopping6333","workerstb");?>
<!DOCTYPE html>
<html>
<head>
	<title>People</title>
	<link rel="icon" href="images/logo/service_logo.png" sizes="32x32" type="image/png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="style/stylesheet.css">
        <link rel="stylesheet" href="style/navbar.css">

	<style>
		td {vertical-align: top; width: 50%;}
		table {margin: 5px 0;}
		.left {padding-right: 3px;}
		.right {padding-left: 3px;}
		.member-info {position: relative;}
		.member-email {position: absolute; bottom: 0; left: 0; width: 100%; margin-bottom: 15px;}
		.team {vertical-align: top;}
		.team-row {width: 100%;}
	</style>
    
</head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg ">
            <a class="navbar-brand" href="/">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img src="images/navbar/reorder.png"/></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="allservice.html" id="current">All Services</a>
                  </li>
                  <li class="nav-item">
                      <a id="people-link" class="nav-link" href="workers.html">workers</a>
                      <div id="drop-down">
                          <a class="nav-link" href="workers.html#Cleaing-Edinburg">Cleaing - Edinburg</a>
                          <a class="nav-link" href="workers.html#Cleaning-Pharr">Cleaning - Pharr</a>
                          <a class="nav-link" href="workers.html#Cleaning-Mcallen">Cleaning - Mcallen</a>
                          <a class="nav-link" href="workers.html#Plumbing-Edinburg">Plumbing - Edinburg</a>
                          <a class="nav-link" href="workers.html#Plumbing-Pharr">Plumbing - Pharr</a>
                          <a class="nav-link" href="workers.html#Plumbing-Mcallen">Plumbing - Mcallen</a>
                          <a class="nav-link" href="workers.html#Electrical-Edinburg">Electrical - Edinburg</a>
                          <a class="nav-link" href="workers.html#Electrical-Pharr">Electrical - Pharr</a>
                          <a class="nav-link" href="workers.html#Electrical-Mcallen">Electrical-Mcallen</a>
                          <a class="nav-link" href="workers.html#Moving-Edinburg">Moving - Edinburg</a>
                          <a class="nav-link" href="workers.html#Moving-Pharr<">Moving - Pharr</a>
                          <a class="nav-link" href="workers.html#Moving-Mcallen">Moving - Mcallen</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="news.html">News</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="staff.html">Staff</a>
                  </li>
                </ul>
            </div>
        </nav>
        <span id="Cleaing-Edinburg" type="hidden"></span>
        <div class="pg-title">


            <h2 class="display-4"> Cleaning - Edinburg </h2>

        </div> 
<!--
        <div class="workers" style="padding-top: 0;">          
            <div class="group">

                <div style="width: 100%;">
                    <span id="start" type="hidden"></span>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/1.jpg" />
                    <div class="member-info">
                        <h5>James</h5>
                        <p><strong>Best Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Dept. of Ash Cleaning Service</strong></p>
                            <p>2409 S 18th Ave</p>
                            <p>Edinburg, TX 78539</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:belinda.alvarado02@utrgv.edu" target="_top">Email Belinda Alvarado</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/2.jpg" />
                    <div class="member-info">
                        <h5>Robert</h5>
                        <p><strong>Fast Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Liga Clean Company</strong></p>
                            <p>2109 E 15th Ave</p>
                            <p>Edinburg, TX 78494</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:daniel.castillo03@utrgv.edu" target="_top">Email Daniel Castillo</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/3.jpg" />
                    <div class="member-info">
                        <h5>John</h5>
                        <p><strong>Perfect Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Eigo Company</strong></p>
                            <p>4092 U 14th Bve</p>
                            <p>Edinburg, TX 75843</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:jose.r.espinoza01@utrgv.edu" target="_top">Email Jose Espinoza</a>
                        </div>
                    </div>
                </div>

                <div id=10 data-aos="zoom-in-up" class="member">
                    <img src="images/people/4.jpg" />
                    <div class="member-info">
                        <h5>Mary</h5>
                        <p><strong>Excellent Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Oeit Company</strong></p>
                            <p>4838 E 12th Ie</p>
                            <p>Edinburg, TX 78342</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:joselito.guardado01@utrgv.edu" target="_top">Email Joselito Guardado</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/5.jpg" />
                    <div class="member-info">
                        <h5>Patricia</h5>
                        <p><strong>Brillant Cleaner</strong></p>
                        <div class="member-info-align">
                         <p><strong>Cleaner</strong></p>
                            <p><strong>Qie Company</strong></p>
                            <p>5849 Q 49th Te</p>
                            <p>Edinburg, TX 78120</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:mdashraful.islam01@utrgv.edu" target="_top">Email Md Ashraful Islam</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/6.jpg" />
                    <div class="member-info">
                        <h5>Jennifer</h5>
                        <p><strong>Cleaner</strong></p>
                         <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Wing Company</strong></p>
                            <p>8594 E 14th Le</p>
                            <p>Edinburg, TX 78409</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:christian.narcia01@utrgv.edu" target="_top">Email Christian Narcia</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/7.jpg" />
                    <div class="member-info">
                        <h5>Michael</h5>
                        <p><strong>Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Qie Company</strong></p>
                            <p>5738 I 23th Le</p>
                            <p>Edinburg, TX 78302</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:junseong.park01@utrgv.edu" target="_top">Email Junseong Park</a>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="member">
                    <img src="images/people/8.jpg" />
                    <div class="member-info">
                        <h5>William</h5>
                        <p><strong>Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cleaner</strong></p>
                            <p><strong>Qie Company</strong></p>
                            <p>4837 Q 34th Te</p>
                            <p>Edinburg, TX 78490</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:angel.peredo01@utrgv.edu" target="_top">Email Angel Peredo</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    -->

     <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
            workerslist($row['worker_id'], $row['worker_name'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['worker_active']);  
        }
   ?>



        <span id="Cleaning-Pharr" type="hidden"></span>
        <div class="pg-title sub-title" style="margin-top: -60px;">
            <h2 class="display-4"> Cleaning - Pharr </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=13 data-aos="zoom-in-up" class="member">
                    <img src="images/people/9.jpg" />
                    <div class="member-info">
                        <h5>David</h5>
                        <p><strong>Best Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Dainel Company</strong></p>
                            <p>5834 U 25th Te</p>
                            <p>Edinburg, TX 78132</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:zhixiang.chen@utrgv.edu" target="_top">Email Dr. Zhixiang Chen</a>
                        </div>
                    </div>
                </div>

                <div id=15 data-aos="zoom-in-up" class="member">
                    <img src="images/people/10.jpg" />
                    <div class="member-info">
                        <h5>Richard</h5>
                        <p><strong>Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Padding Company</strong></p>
                            <p>508 N Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:mark.chu@utrgv.edu" target="_top">Email Dr. Mark Chu</a>
                        </div>
                    </div>
                </div>

                <div id=14 data-aos="zoom-in-up" class="member">
                    <img src="images/people/11.jpg" />
                    <div class="member-info">
                        <h5>Joseph</h5>
                        <p><strong>Cleanerr</strong></p>
                        <div class="member-info-align">
                            <p><strong>Edu Company</strong></p>
                            <p>806 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:jungseok.ho@utrgv.edu" target="_top">Email Dr. Jungsoek Ho</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <span id="Cleaning-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="display-4"> Cleaning - Mc allen </h2>
        </div>

        <div class="people">

            <div id="faculty" class="group">

                <div id=17 data-aos="zoom-in-up" class="member">
                    <img src="images/people/12.jpg" />
                    <div class="member-info">
                        <h7>Thomas</h7>
                        <p><strong>Best Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Coe Comany</strong></p>
                              <p>2101 N Ware Rd</p>
                              <p>McAllen, TX 78501</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:carlos.penacaballero01@utrgv.edu" target="_top">Email Carlos Pena</a>
                        </div>
                    </div>
                </div>

                <div id=20 data-aos="zoom-in-up" class="member">
                    <img src="images/people/13.jpg" />
                    <div class="member-info">
                        <h5>Charles</h5>
                        <p><strong>Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Deo</strong></p>
                             <p>201 N Bentsen Rd</p>
                             <p>McAllen, TX 78501</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:erik.enriquez01@utrgv.edu" target="_top">Email Dr. Erik Enriquez</a>
                        </div>
                    </div>
                </div>

                <div id=16 data-aos="zoom-in-up" class="member">
                    <img src="images/people/14.jpg" />
                    <div class="member-info">
                        <h5>Christopher</h5>
                        <p><strong>Cleaner</strong></p>
                        <div class="member-info-align">
                            <p><strong>Mid Company</strong></p>
                            <p>P200 N 17th St</p>
                            <p>McAllen, TX 78501<p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:dongchul.kim@utrgv.edu" target="_top">Email Dr. Dongchul Kim</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span id="Plumbing-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="display-4"> Plumbing - Edinburg </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/15.jpg" />
                    <div class="member-info">
                        <h5>Daniel</h5>
                        <p><strong>Best Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Gin Company</strong></p>
                            <p>2901 N 23rd St</p>
                            <p>Edinburg, TX 78501</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/16.jpg" />
                    <div class="member-info">
                        <h5>Adolfo Gonzalez</h5>
                        <p><strong>Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Rue Company</strong></p>
                            <p>3301 N 23rd St</p>
                            <p>Edinburg, TX 78501</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/17.jpg" />
                    <div class="member-info">
                        <h5>Matthew</h5>
                        <p><strong>Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Smi Company</strong></p>
                            <p>3600 Nolana Ave</p>
                            <p>Edinburg, TX 78504</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

     

        <span id="alumni" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Plumbing - Pharr </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/18.jpg" />
                    <div class="member-info">
                        <h5>Anthony</h5>
                        <p><strong>Best Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Mar Company</strong></p>
                            <p>4114 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/19.jpg" />
                    <div class="member-info">
                        <h5>Mark</h5>
                        <p><strong>Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Dai Company</strong></p>
                            <p>301 E Hall Acres Rd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/20.jpg" />
                    <div class="member-info">
                        <h5>Donald</h5>
                        <p><strong>Cae Company</strong></p>
                        <div class="member-info-align">
                            <p><strong>Pai Company</strong></p>
                            <p>700 E Hall Acres Rd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>



            <span id="Plumbing-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Plumbing - Mc allen </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/21.jpg" />
                    <div class="member-info">
                        <h5>Steven</h5>
                        <p><strong>Best Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Gue ComPany</strong></p>
                            <p>101 N Main St</p>
                            <p>McAllen, TX 78501</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/22.jpg" />
                    <div class="member-info">
                        <h5>Paul</h5>
                        <p><strong>Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Rue Comany</strong></p>
                            <p>5201 N 29th St</p>
                            <p>McAllen, TX 78504</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/23.jpg" />
                    <div class="member-info">
                        <h5>Andrew</h5>
                        <p><strong>Plumbing</strong></p>
                        <div class="member-info-align">
                            <p><strong>Coe Company</strong></p>
                            <p>4200 W Daffodil Ave</p>
                            <p>McAllen, TX 78501</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        <span id="Electrical-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Edinburg </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/24.jpg" />
                    <div class="member-info">
                        <h5>Joshua</h5>
                        <p><strong>Best Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Bei Company</strong></p>
                            <p>Austin, TX</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/25.jpg" />
                    <div class="member-info">
                        <h5>Kenneth</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Cag Company</strong></p>
                            <p>5160 N, I-69C</p>
                            <p>Edinburg, TX 78542</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/26.jpg" />
                    <div class="member-info">
                        <h5>Kevin</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Eui Company</strong></p>
                            <p>1616 S Raul Longoria Rd #9169</p>
                            <p>Edinburg, TX 78542</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        <span id="Electrical-Pharr" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Pharr </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/27.jpg" />
                    <div class="member-info">
                        <h5>Brian</h5>
                        <p><strong>Best Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Gui Company</strong></p>
                            <p>1300 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/28.jpg" />
                    <div class="member-info">
                        <h5>George</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Ult Company</strong></p>
                            <p>13424 E Highway 107</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/29.jpg" />
                    <div class="member-info">
                        <h5>Edward</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Mei Company</strong></p>
                            <p>Hidalgo, TX</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        <span id="Electrical-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Mc allen </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/30.jpg" />
                    <div class="member-info">
                        <h5>Ronald</h5>
                        <p><strong>Best Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Rui Company</strong></p>
                            <p>2101 N Ware Rd</p>
                            <p>McAllen, TX 78501</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/31.jpg" />
                    <div class="member-info">
                        <h5>Timothy</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Pei Company</strong></p>
                            <p>4201 N 29th St</p>
                            <p>McAllen, TX 78504</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/32.jpg" />
                    <div class="member-info">
                        <h5>Jason</h5>
                        <p><strong>Electrical</strong></p>
                        <div class="member-info-align">
                            <p><strong>Sie Company</strong></p>
                            <p>1601 N 27th St</p>
                            <p>McAllen, TX 78501</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        <span id="Moving-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Edinburg </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/33.jpg" />
                    <div class="member-info">
                        <h5>Jeffrey</h5>
                        <p><strong>Best Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong> Hie Company</strong></p>
                            <p>4005 N Seminary Rd</p>
                            <p>Edinburg, TX 78541</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/34.jpg" />
                    <div class="member-info">
                        <h5>Ryan</h5>
                        <p><strong>Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>Tec Company</strong></p>
                            <p>7135 N Expressway 281</p>
                            <p>Edinburg, TX 78542</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/35.jpg" />
                    <div class="member-info">
                        <h5>Jacob</h5>
                        <p><strong>Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>CIe Company</strong></p>
                            <p>4010 N Doolittle Rd</p>
                            <p>Edinburg, TX 78542</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        <span id="Moving-Pharr" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Pharr </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/36.jpg" />
                    <div class="member-info">
                        <h5>Gary</h5>
                        <p><strong>Best Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>Sei Company</strong></p>
                            <p>6521 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/37.jpg" />
                    <div class="member-info">
                        <h5>Nicholas</h5>
                        <p><strong>Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>Tie Company</strong></p>
                            <p>600 E Las Milpas Rd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/38.jpg" />
                    <div class="member-info">
                        <h5>Eric</h5>
                        <p><strong>Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>Ian Company</strong></p>
                            <p>10602 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

           <span id="Moving-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Mcallen </h2>
        </div>

        <div class="people">

            <div id="collab" class="group">

                <div id=19 data-aos="zoom-in-up" class="member">
                    <img src="images/people/39.jpg" />
                    <div class="member-info">
                        <h5>Jonathan</h5>
                        <p><strong>Moving</strong></p>
                        <div class="member-info-align">
                            <p><strong>Rie Company</strong></p>
                            <p>6521 S Cage Blvd</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=18 data-aos="zoom-in-up" class="member">
                    <img src="images/people/40.jpg" />
                    <div class="member-info">
                        <h5>Stephen</h5>
                        <p><strong>Gie Company</strong></p>
                        <div class="member-info-align">
                            <p><strong>Bie Company</strong></p>
                            <p>1025 S Richmond Dr</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

                <div id=5 data-aos="zoom-in-up" class="member">
                    <img src="images/people/41.jpg" />
                    <div class="member-info">
                        <h5>Larry</h5>
                        <p><strong>Yie Company</strong></p>
                        <div class="member-info-align">
                            <p><strong>Eoe Company</strong></p>
                            <p>300 E Javelina Dr</p>
                            <p>Pharr, TX 78577</p>
                        </div>
                    </div>
                </div>

             
                </div>

            </div>

        </div>


        <div class="info">


  
     
            <div class="nav-contact-us">
              <h4> <abbr title="attribute">Contact Us</abbr> </h4>
              <img id="utrgv-logo" src="images/logo/service_logo.png">
              <p>DataBase@UTRGV</p>
              <p>2202 SanRodrigo, Edinburg, TX</p>
              <p>Email: <a href="junseong.park01@utrgv.edu" target="_top">DataBase@utrgv.edu</a></p>    
              <p>Phone: 956-324-3333</p>           
            </div>
  
        </div>
    

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="static/action.js?01"></script>
        <script type="text/javascript" src="static/search.js?123"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>

    </body>
</html>
