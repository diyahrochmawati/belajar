  <div style="width: 80%;" id="dashboard" class="masthead bg-white text-black container d-flex flex-column">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item active" aria-current="page">
  <div style="float: right; ">
    <h3 class="welcome mb-0">Welcome, <?= $user['name']; ?></h3>
    <h6 class="welcome mb-0">Today is 
      <?php 
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime();
        $date->setTimeZone($timezone);

        echo $date->format('l, d M Y') . '<br/>'; 
      ?></h4>

    <a href="#" class="badge badge-dark">
      <?php 
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime();
        $date->setTimeZone($timezone);

        echo $date->format('H:i:s') . '<br/>'; 
      ?></a>
  </div>
  </li>
  </ol>
</nav>


  <div class="row text-center" >
    <div class="col-md-6 col-lg-4">
    <div class="card" style="width: 20rem;">
      <div class="card-body" style="background-color:rgba(135,206,250,0.2);">
                <div class="stats-circle blue-color">
                    <i class="fas fa-folder  fa-lg"></i>
                  </div>
        <h5 class="card-title">Taken Courses</h5>
        <h6 class="card-subtitle mb-2 text-muted">9 courses was taken</h6>
        <button type="submit" class="btn btn-primary btn-m" id="sendMessageButton">Show List</button>
      </div>
    </div>
    </div>

   <div class="col-md-6 col-lg-4">
    <div class="card" style="width: 20rem;">
      <div class="card-body" style="background: #F4F4F4;">
            <div class="stats-circle gray-color">
              <i class="fas fa-bars fa-lg"></i> 
        </div>
        <h5 class="card-title">Taken Courses</h5>
        <h6 class="card-subtitle mb-2 text-muted">9 courses was taken</h6>
        <button type="submit" class="btn btn-primary btn-m" id="sendMessageButton">Show List</button>
      </div>
    </div>
    </div>

   <div class="col-md-6 col-lg-4">
    <div class="card" style="width: 20rem;">
      <div class="card-body" style="background-color:rgba(0,128,0,0.1);">
            <div class="stats-circle green-color">
              <i class="fas fa-check-circle fa-lg"></i> 
              </div>
        <h5 class="card-title">Taken Courses</h5>
        <h6 class="card-subtitle mb-2 text-muted">9 courses was taken</h6>
        <button type="submit" class="btn btn-primary btn-m" id="sendMessageButton">Show List</button>
      </div>
    </div>
    </div>
 </div>
 </div>
 <div style="border-top: 3px solid #E4E4E4; border-bottom: 3px solid  #E4E4E4; width: 30%;" class="container d-flex flex-column ">
    <p class="lead" style="text-align:left; color: #E4E4E4;"></br><i class="fas fa-quote-left fa-lg"></i></p>
    <p class="welcome mb-0"style="text-align:center; font-style: italic; font-size:20px; font-family: serif;"><?= $user['motto']; ?></p>
    <p style="text-align:right; color: grey;"></br>-- <?= $user['name']; ?></br></p>
 </div>
     </br> </br>
 </div>
