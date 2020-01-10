const url = new Routes;

let userUrl = `${url.api_origin}${url.getUser}`;

let people = document.getElementById('people__container');

people.innerHTML = '';

//fetch users
const fetchUser = async ()=>{
    try{
        let response = await fetch(userUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        let {user} = data;
        console.log(user)
        //insert the users into the DOM
    if (data.status) {
        user.forEach(user =>{
            let {
                fullname
            } = user;
            console.log(fullname)

            //insert peoples data into the DOM
            people.innerHTML += `
            <div class="col-md-4">
            <div class="ts-speaker">
               <div class="speaker-img">
                  <img class="img-fluid" src="images/speakers/speaker2.jpg" alt="">
                  <a href="#popup_6" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                              <i class="icon icon-plus"></i>
                          </a>
               </div>
               <div class="ts-speaker-info">
                  <h3 class="ts-title"><a href="#">${fullname} </a></h3>
                  <p>
                     Lead Designer, Payol
                  </p>
               </div>
            </div>
            <!-- popup start-->
            <div id="popup_06" class="container ts-speaker-popup mfp-hide">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="ts-speaker-popup-img">
                        <img src="images/speakers/speaker1.jpg" alt="">
                     </div>
                  </div><!-- col end-->
                  <div class="col-lg-6">
                     <div class="ts-speaker-popup-content">
                        <h3 class="ts-title">David Robert</h3>
                        <span class="speakder-designation">Cheif Architecture</span>
                        <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                        <p>
                           World is committed to making participation in the event a harass ment free experience
                           for everyone, regardless of level experience gender, gender identity and expression
                        </p>
                        <h4 class="session-name">
                           Sessions by David
                        </h4>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="speaker-session-info">
                                 <h4>Day 1</h4>
                                 <span>
                                                   10.30 - 11.30 am
                                             </span>
                                 <p>
                                    Marketing Matters
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="speaker-session-info">
                                 <h4>Day 1</h4>
                                 <span>
                                                      10.30 - 11.30 am
                                                </span>
                                 <p>
                                    Marketing Matters
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="ts-speakers-social">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                           <a href="#"><i class="fa fa-google-plus"></i></a>
                           <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                     </div><!-- ts-speaker-popup-content end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div><!-- popup end-->
         </div> <!-- col end-->
            `

        });
        } else {
            // usersCount.innerHTML = 0;
        }
    } catch (err){
        console.log(err);
    }
}
fetchUser();

