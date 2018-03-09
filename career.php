<?php include("includes/header.php"); ?>
<section class="page-header">
<div class="container">
  <div class="row">
    <div class="col s12">
    <h3>Career</h3>
    <p>Please enter your business enquiry and contact details in the fields below.</p>
    </div>
  </div>
</div>
</section>

<section class="form-wraper">
<div class="container">
  <div class="row">
    <form class="contact">
      <div class="input-field col s12">
    <select>
      <option selected>Select</option>
      <option value="Sr. Sales Officer">Sr. Sales Officer</option>
      <option value="Sales Manager">Sales Manager</option>
      <option value="Other">Other</option>
      <option value="Technician">Technician</option>
      <option value="Draft Man">Draft Man</option>
      <option value="Marketing Associate">Marketing Associate</option>
    </select>
    <label>Post Applied For</label>
  </div>
        <div class="input-field col s12">
         <input id="posion" type="text" class="validate">
         <label for="posion">Name</label>
       </div>

       <div class="input-field col s6">
         <input id="company" type="text" class="validate" placeholder="Graduate">
         <label for="company">Qualifaction</label>
       </div>
       <div class="input-field col s6">
         <input id="tel" type="text" class="validate" placeholder="PG">

       </div>

       <div class="input-field col s12">
         <input id="text" type="text" class="validate">
         <label for="text">Specialisation/Branch</label>
       </div>
       <div class="input-field col s12">
         <input id="text" type="text" class="validate">
         <label for="text">Current Employer</label>
       </div>
       <div class="input-field col s12">
         <input id="text" type="text" class="validate" placeholder="eg - computer skill, communication skill, analytical skill, etc">
         <label for="text">Skill Sets</label>
       </div>

       <div class="input-field col s12">
         <input id="text" type="text" class="validate">
         <label for="text">Area of intrest</label>
       </div>
       <div class="input-field col s12">
     <select>
       <option selected>Select</option>
       <option value="Fresher">Fresher</option>
       <option value="1 - 2">1 - 2</option>
       <option value="3 - 5">3 - 5</option>
       <option value="6 - 8">6 - 8</option>
       <option value="9 - 11">9 - 11</option>
       <option value="12 - 15">12 - 15</option>
       <option value="16 - 18">16 - 18</option>
       <option value="19 - 20">19 - 20</option>
       <option value="20 +">20 +</option>
     </select>
     <label>Experience</label>
   </div>

   <div class="input-field col s12">
 <select>
   <option selected>Select</option>
   <option value="Up to 10,000">Up to 10,000</option>
   <option value="Between 10,000-20,000">Between 10,000-20,000</option>
   <option value="Between 20,000-30000">Between 20,000-30000</option>
   <option value="Above 30,000">Above 30,000</option>

 </select>
 <label>Current CTC</label>
</div>

<div class="input-field col s12">
  <input id="email" type="email" class="validate">
  <label for="email">Email</label>
</div>
       <div class="input-field col s12">
         <textarea id="resume" class="materialize-textarea"></textarea>
         <label for="resume">Resume</label>
       </div>
       <div class="input-field col s6">
         <button class="btn waves-effect waves-light" type="button" value="submit">Submit</button>
         <button class="btn red waves-effect waves-light" type="reset" value="submit">Reset</button>
       </div>
    </form>


  </div>
</div>
</section>
<?php include("includes/footer.php"); ?>
