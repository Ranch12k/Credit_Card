<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Credit Card Status</title>
    <style>


@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
.design-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #86b7fe;
  min-height: 100vh;
  padding: 100px 0;
  font-family: Jost;
}

.design {
  display: flex;
  align-items: center;
  justify-content: center;
}

.timeline {
  width: 80%;
  height: auto;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
}

.timeline-content {
  padding: 20px;
  background: #00b2fb;
  /* -webkit-box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #242424;
          box-shadow:  2px 3px 5px #e9ecef, -5px -5px 10px #242424; */
  border-radius: 5px;
  color: white;
  padding: 1.75rem;
  transition: 0.4s ease;
  overflow-wrap: break-word !important;
  margin: 1rem;
  margin-bottom: 20px;
  border-radius: 6px;
}

.timeline-component {
  margin: 0px 20px 20px 20px;
}


@media screen and (min-width: 768px) {
  .timeline {
    display: grid;
    grid-template-columns: 1fr 3px 1fr;
  }
  .timeline-middle {
    position: relative;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    width: 3px;
    height: 100%;
  }
  .main-middle {
    opacity: 0;
  }
  .timeline-circle {
    position: absolute;
    top: 0;
    left: 50%;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
 
}
    </style>
   
  </head>
  <body>


    </div>
              <!--This is the main container that contains the whole timeline.-->
              <section class="design-section">
                <div class="timeline">


                            <div class="timeline-empty">
                            </div>
                            <div class="timeline-middle">
                                <div class="timeline-circle">
                            </div>
                            </div>
                @if(count($user) === 0)
                            <div class="timeline-component timeline-content">
                                  <h3>Not APPLIED</h3>
                                  <p> You Haven't Applied For Credit Card..</p>
                            </div>
                @elseif($user!= '')
                            <div class="timeline-component timeline-content">
                                  <h3>APPLIED</h3>
                                  <p> Your Application Submit Successfully Wait For Getting Your Card Approved.</p>
                            </div>


                            <div class="timeline-component timeline-content" style="background: #198970;color: white;">
                                  <h3>Pending</h3>
                                  <p>Your Application Submit Successfully Wait For Getting Your Card Approved.</p>
                            </div>
                            <div class="timeline-middle">
                                  <div class="timeline-circle"></div>
                            </div>

                            
                                <div class="timeline-empty"></div>
                                 <div class="timeline-empty"></div>


                            <div class="timeline-middle">
                                <div class="timeline-circle"></div>
                            </div>
                    @foreach($user as $user)
                        @if($user->status==="Aproved")
                                <div class="timeline-component timeline-content" style="background: #FFFFE0;color: white;">
                                  <h3>Approved</h3>
                                  <p>Application Accepted.</p>
                                </div>
                        @elseif($user->status==="Rejected")
                                <div class="timeline-component timeline-content" style="background: red;color: white;">
                                  <h3>Rejected</h3>
                                  <p>Application Rejected.</p>
                                </div>
                        @endif
                    @endforeach

                        </div>
                  @endif

                 </div> 
</section>






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>