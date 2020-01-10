<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Owerribusiness forum</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <script src="https://use.fontawesome.com/f4773594c6.js"></script>
   <style type="text/css">
      .progressbar {

         margin: 0;
         padding: 0;
         counter-reset: step;
      }

      .progressbar li {
         list-style-type: none;
         width: 20%;
         float: left;
         font-size: 15px;
         position: relative;
         text-align: center;
         font-family: 'PT Sans Narrow', sans-serif;
         color: #7d7d7d;
      }

      .progressbar li:before {
         width: 30px;
         height: 30px;
         content: counter(step);
         counter-increment: step;
         line-height: 30px;
         border: 2px solid #7d7d7d;
         display: block;
         text-align: center;
         margin: 0 auto 10px auto;
         border-radius: 50%;
         background-color: white;
      }

      .progressbar li:after {
         width: 100%;
         height: 2px;
         content: '';
         position: absolute;
         background-color: #7d7d7d;
         top: 15px;
         left: -50%;
         z-index: -1;
      }

      .progressbar li:first-child:after {
         content: none;
      }

      .progressbar li.active {
         color: green;
         content: "\f00c";
         font-family: FontAwesome;
         font-family: 'PT Sans Narrow', sans-serif;
      }

      .progressbar li.active {
         color: green;
         content: "\f00c";
         font-family: FontAwesome;
         font-family: 'PT Sans Narrow', sans-serif;
      }

      .progressbar li.active:before {
         border-color: #55b776;
         content: "\f00c";
         font-family: FontAwesome;
      }

      .progressbar li.active+li:after {
         background-color: #55b776;
      }

      .input_label {
         font-size: 15px !important;
         color: blue;
      }
   </style>
</head>

<body>
   <div>
      <br>
      <div class="text-center"> <img src="images/sponsors/obiz.png" alt="logo"></div>

      <div class="container">
         <hr>
         <h2 class="text-center">Participant Registration</h2>

         <hr>
      </div>

      <div class="container">
         <form action="submitRegistration.php" method="post">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="input_label">Surname</label>
                     <input type="text" class="form-control" name="surname" value="" data-validation="required" data-validation-error-msg="Please Enter Surname.">
                  </div>
                  <div class="form-group">
                     <label class="input_label">Email</label>
                     <input type="text" class="form-control" name="email" value="" data-validation="required" data-validation-error-msg="Please Enter Email.">
                  </div>


               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="input_label">Other Names</label>
                     <input type="text" class="form-control" name="oname" value="" data-validation="required" data-validation-error-msg="Please Enter Other Names.">
                  </div>
                  <div class="form-group">
                     <label class="input_label">Phone Number</label>
                     <input type="text" class="form-control" name="phone" value="" data-validation="required" data-validation-error-msg="Please Enter Phone Number.">
                  </div>
               </div>



               <div class="col-md-3">
                  <div class="form-group">
                     <label class="input_label">State Of Origin</label>
                     <select name="State" class="form-control" data-validation="required" data-validation-error-msg="Please Select State">
                        <option value=""> State </option>
                        <option>ABUJA FCT</option>
                        <option>ABIA</option>
                        <option>ADAMAWA</option>
                        <option>AKWA IBOM</option>
                        <option>ANAMBRA</option>
                        <option>BAUCHI</option>
                        <option>BAYELSA</option>
                        <option>BENUE</option>
                        <option>BORNO</option>
                        <option>CROSS RIVER</option>
                        <option>DELTA</option>
                        <option>EBONYI</option>
                        <option>EDO</option>
                        <option>EKITI</option>
                        <option>ENUGU</option>
                        <option>GOMBE</option>
                        <option>IMO</option>
                        <option>JIGAWA</option>
                        <option>KADUNA</option>
                        <option>KANO</option>
                        <option>KATSINA</option>
                        <option>KEBBI</option>
                        <option>KOGI</option>
                        <option>KWARA</option>
                        <option>LAGOS</option>
                        <option>NASSARAWA</option>
                        <option>NIGER</option>
                        <option>OGUN</option>
                        <option>ONDO</option>
                        <option>OSUN</option>
                        <option>OYO</option>
                        <option>PLATEAU</option>
                        <option>RIVERS</option>
                        <option>SOKOTO</option>
                        <option>TARABA</option>
                        <option>YOBE</option>
                        <option>ZAMFARA</option>
                     </select>
                  </div>

               </div>

               <div class="col-md-3">
                  <div class="form-group">
                     <label class="input_label">Local Govt. Area (If Imo)</label><br>
                     <select class="form-control" name="lga">
                        <option value="">Please Select LGA</option>
                        <option value="1">Aboh Mbaise</option>
                        <option value="2">Ahiazu Mbaise</option>
                        <option value="3">Ehime Mbano</option>
                        <option value="4">Ezinihitte Mbaise</option>
                        <option value="5">Ideato North</option>
                        <option value="6">Ideato South</option>
                        <option value="7">Ihitte/Uboma</option>
                        <option value="8">Ikeduru</option>
                        <option value="9">Isiala Mbano</option>
                        <option value="10">Isu</option>
                        <option value="11">Mbaitoli</option>
                        <option value="12">Ngor Okpala</option>
                        <option value="13">Njaba</option>
                        <option value="14">Nkwerre</option>
                        <option value="15">Nwangele</option>
                        <option value="16">Obowo</option>
                        <option value="17">Oguta</option>
                        <option value="18">Ohaji/Egbema</option>
                        <option value="19">Okigwe</option>
                        <option value="20">Onuimo</option>
                        <option value="21">Orlu</option>
                        <option value="22">Orsu</option>
                        <option value="23">Oru East</option>
                        <option value="24">Oru West</option>
                        <option value="25">Owerri Municipal</option>
                        <option value="26">Owerri North</option>
                        <option value="27">Owerri West</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="input_label">Profession</label>
                     <input type="text" class="form-control" name="prof" value="" data-validation="required" data-validation-error-msg="Please Enter Profession.">
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label class="input_label">City of Residence</label>
                     <input type="text" class="form-control" name="cor" value="" data-validation="required" data-validation-error-msg="Please Enter City of Residence.">
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label class="input_label">Country of Residence</label>
                     <input type="text" class="form-control" name="cnor" value="" data-validation="required" data-validation-error-msg="Please Enter Country of Residence.">
                  </div>
               </div>
            </div>
            <div class="row">
               

               <div class="col-md-4">
                  <div class="form-group">
                     <label class="input_label">Industries of interest</label>
                     <select name="ioi" class="form-control" data-validation="required" data-validation-error-msg="Please Select Industries of interest">
                        <option value=""></option>
                        <option value="Accounting">Accounting</option>
                        <option value="Airlines/Aviation">Airlines/Aviation</option>
                        <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                        <option value="Alternative Medicine">Alternative Medicine</option>
                        <option value="Animation">Animation</option>
                        <option value="Apparel/Fashion">Apparel/Fashion</option>
                        <option value="Architecture/Planning">Architecture/Planning</option>
                        <option value="Arts/Crafts">Arts/Crafts</option>
                        <option value="Automotive">Automotive</option>
                        <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                        <option value="Banking/Mortgage">Banking/Mortgage</option>
                        <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                        <option value="Broadcast Media">Broadcast Media</option>
                        <option value="Building Materials">Building Materials</option>
                        <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                        <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                        <option value="Chemicals">Chemicals</option>
                        <option value="Civic/Social Organization">Civic/Social Organization</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Commercial Real Estate">Commercial Real Estate</option>
                        <option value="Computer Games">Computer Games</option>
                        <option value="Computer Hardware">Computer Hardware</option>
                        <option value="Computer Networking">Computer Networking</option>
                        <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                        <option value="Computer/Network Security">Computer/Network Security</option>
                        <option value="Construction">Construction</option>
                        <option value="Consumer Electronics">Consumer Electronics</option>
                        <option value="Consumer Goods">Consumer Goods</option>
                        <option value="Consumer Services">Consumer Services</option>
                        <option value="Cosmetics">Cosmetics</option>
                        <option value="Dairy">Dairy</option>
                        <option value="Defense/Space">Defense/Space</option>
                        <option value="Design">Design</option>
                        <option value="E-Learning">E-Learning</option>
                        <option value="Education Management">Education Management</option>
                        <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                        <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                        <option value="Environmental Services">Environmental Services</option>
                        <option value="Events Services">Events Services</option>
                        <option value="Executive Office">Executive Office</option>
                        <option value="Facilities Services">Facilities Services</option>
                        <option value="Farming">Farming</option>
                        <option value="Financial Services">Financial Services</option>
                        <option value="Fine Art">Fine Art</option>
                        <option value="Fishery">Fishery</option>
                        <option value="Food Production">Food Production</option>
                        <option value="Food/Beverages">Food/Beverages</option>
                        <option value="Fundraising">Fundraising</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Gambling/Casinos">Gambling/Casinos</option>
                        <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                        <option value="Government Administration">Government Administration</option>
                        <option value="Government Relations">Government Relations</option>
                        <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                        <option value="Health/Fitness">Health/Fitness</option>
                        <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                        <option value="Hospital/Health Care">Hospital/Health Care</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Human Resources/HR">Human Resources/HR</option>
                        <option value="Import/Export">Import/Export</option>
                        <option value="Individual/Family Services">Individual/Family Services</option>
                        <option value="Industrial Automation">Industrial Automation</option>
                        <option value="Information Services">Information Services</option>
                        <option value="Information Technology/IT">Information Technology/IT</option>
                        <option value="Insurance">Insurance</option>
                        <option value="International Affairs">International Affairs</option>
                        <option value="International Trade/Development">International Trade/Development</option>
                        <option value="Internet">Internet</option>
                        <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                        <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                        <option value="Judiciary">Judiciary</option>
                        <option value="Law Enforcement">Law Enforcement</option>
                        <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                        <option value="Legal Services">Legal Services</option>
                        <option value="Legislative Office">Legislative Office</option>
                        <option value="Leisure/Travel">Leisure/Travel</option>
                        <option value="Library">Library</option>
                        <option value="Logistics/Procurement">Logistics/Procurement</option>
                        <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                        <option value="Machinery">Machinery</option>
                        <option value="Management Consulting">Management Consulting</option>
                        <option value="Maritime">Maritime</option>
                        <option value="Market Research">Market Research</option>
                        <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                        <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                        <option value="Media Production">Media Production</option>
                        <option value="Medical Equipment">Medical Equipment</option>
                        <option value="Medical Practice">Medical Practice</option>
                        <option value="Mental Health Care">Mental Health Care</option>
                        <option value="Military Industry">Military Industry</option>
                        <option value="Mining/Metals">Mining/Metals</option>
                        <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                        <option value="Museums/Institutions">Museums/Institutions</option>
                        <option value="Music">Music</option>
                        <option value="Nanotechnology">Nanotechnology</option>
                        <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                        <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                        <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                        <option value="Online Publishing">Online Publishing</option>
                        <option value="Other Industry">Other Industry</option>
                        <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                        <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                        <option value="Packaging/Containers">Packaging/Containers</option>
                        <option value="Paper/Forest Products">Paper/Forest Products</option>
                        <option value="Performing Arts">Performing Arts</option>
                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                        <option value="Philanthropy">Philanthropy</option>
                        <option value="Photography">Photography</option>
                        <option value="Plastics">Plastics</option>
                        <option value="Political Organization">Political Organization</option>
                        <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                        <option value="Printing">Printing</option>
                        <option value="Professional Training">Professional Training</option>
                        <option value="Program Development">Program Development</option>
                        <option value="Public Relations/PR">Public Relations/PR</option>
                        <option value="Public Safety">Public Safety</option>
                        <option value="Publishing Industry">Publishing Industry</option>
                        <option value="Railroad Manufacture">Railroad Manufacture</option>
                        <option value="Ranching">Ranching</option>
                        <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                        <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                        <option value="Religious Institutions">Religious Institutions</option>
                        <option value="Renewables/Environment">Renewables/Environment</option>
                        <option value="Research Industry">Research Industry</option>
                        <option value="Restaurants">Restaurants</option>
                        <option value="Retail Industry">Retail Industry</option>
                        <option value="Security/Investigations">Security/Investigations</option>
                        <option value="Semiconductors">Semiconductors</option>
                        <option value="Shipbuilding">Shipbuilding</option>
                        <option value="Sporting Goods">Sporting Goods</option>
                        <option value="Sports">Sports</option>
                        <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                        <option value="Supermarkets">Supermarkets</option>
                        <option value="Telecommunications">Telecommunications</option>
                        <option value="Textiles">Textiles</option>
                        <option value="Think Tanks">Think Tanks</option>
                        <option value="Tobacco">Tobacco</option>
                        <option value="Translation/Localization">Translation/Localization</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Utilities">Utilities</option>
                        <option value="Venture Capital/VC">Venture Capital/VC</option>
                        <option value="Veterinary">Veterinary</option>
                        <option value="Warehousing">Warehousing</option>
                        <option value="Wholesale">Wholesale</option>
                        <option value="Wine/Spirits">Wine/Spirits</option>
                        <option value="Wireless">Wireless</option>
                        <option value="Writing/Editing">Writing/Editing</option>
                     </select>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label class="input_label">Nature of interest</label>
                     <select name="noi" class="form-control" data-validation="required" data-validation-error-msg="Please Select Nature of interest">
                        <option value=""></option>
                        <option value="Social Assistance">Social Assistance</option>
                        <option value="Investment Opportunities">Investment Opportunities</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label class="input_label">Suggestions for Owerribizforum</label>
               <textarea class="form-control" rows="3" name="sdsc"></textarea>
            </div>
           

            <hr>
            <div class="text-center"> <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right" aria-hidden="true"></i> Register</button></div>
         </form>
         <hr>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
      <script>
         $.validate({
            lang: 'es'
         });
      </script>

</body>

</html>