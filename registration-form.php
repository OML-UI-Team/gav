
    
    <?php include('components/header.php'); ?>
    
   <!--====== PAGE BANNER PART START ======-->
   <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>The School</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">The school</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- gav registration form start-->
    <div class="admission-form">
        <div class="container admin">
            <h3 class="text-center">REGISTRATION FORM</h3>
        <form method="POST" id="registration_form" action="php/save-registration-form.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="place_of_birth">Place of Birth</label>
                  <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="school_name">Present school name , address and telephone</label>
                  <input type="text" class="form-control" id="school_name" name="school_name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="school_attended">Others school attended (since age 5)</label>
                  <input type="text" class="form-control" id="school_attended" name="school_attended" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Interest">Particular Interest of the child</label>
                  <input type="text" class="form-control" id="Interest" name="interest" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="academic_difficulties">Any Academic Difficulties</label>
                  <input type="text" class="form-control" id="academic_difficulties" name="academic_difficulties" placeholder="">
                </div>
              </div>
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Transport Facility</legend>
                  <div class="col-sm-10">
                    <div class="form-check d-inline">
                      <input class="form-check-input" type="radio" name="transport_facility" id="transport_facility_yes" value="Yes" checked>
                      <label class="form-check-label" for="transport_facility_yes">
                        Yes
                      </label>
                    </div>
                    <div class="form-check d-inline">
                      <input class="form-check-input" type="radio" name="transport_facility" id="transport_facility_no" value="No">
                      <label class="form-check-label" for="transport_facility_no">
                        No
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <h5 class="text-left">FAMILY INFORMATION</h5>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="father_name">Fathers Name</label>
                  <input type="text" class="form-control" id="father_name" name="father_name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="father_qualification">Educational Qualification</label>
                  <select id="father_qualification" name="father_qualification" class="form-control">
                    <option value="" selected>Choose...</option>
                    <option value="10">10<sub>th</sub></option>
                    <option value="12">12<Sub>th</Sub></option>
                    <option value="Graduation">Graduation</option>
                    <option value="Post Graduation">Post Graduation</option>
                </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="father_profession">Profession</label>
                    <input type="text" class="form-control" id="father_profession" name="father_profession" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="father_contact_no">Father's Contact Number</label>
                  <input type="text" class="form-control" id="father_contact_no" name="father_contact_no" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="father_email">Father's E.mail Id</label>
                  <input type="email" class="form-control" id="father_email" name="father_email" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="mother_name">Mother Name</label>
                  <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="mother_qualification">Educational Qualification</label>
                    <select id="mother_qualification" name="mother_qualification" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option value="10">10<sub>th</sub></option>
                      <option value="12">12<sub>th</sub></option>
                      <option value="Graduation">Graduation</option>
                      <option value="Post Graduation">Post Graduation</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="mother_profession">Profession</label>
                    <input type="text" class="form-control" id="mother_profession" name="mother_profession" placeholder="">
                </div>

                <div class="form-group col-md-6">
                  <label for="mother_contact_no">Mother's Contact Number</label>
                  <input type="text" class="form-control" id="mother_contact_no" name="mother_contact_no" placeholder="">
                </div>

              </div>
              <div class="form-row">
               
                <div class="form-group col-md-6">
                  <label for="mother_email">Mother's E.mail Id</label>
                  <input type="email" class="form-control" id="mother_email" name="mother_email" placeholder="">
                </div>

                <div class="form-group col-md-6">
                  <label for="telephone">Telephone (R) with Area Code</label>
                  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="permanent_address">Permanent Address (Home)</label>
                  <textarea class="form-control" id="permanent_address" name="permanent_address" rows="3"></textarea>
                </div>              
              </div>
              <div class="submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
    <!-- gav form registration form end-->
    <script>
    AOS.init({
        duration: 1200,
    })
    $("#registration_form").validate({
        rules: {
            first_name: {
            required: true,
          },
          last_name: {
            required: true,
          },
          dob: {
            required: true,
          },
          place_of_birth: {
            required: true,
          },
          school_name: {
            required: true,
          },
          school_attended: {
            required: true,
          },
          interest: {
            required: true,
          },
          academic_difficulties: {
            required: true,
          },
          transport_facility: {
            required: true,
          },
          father_name: {
            required: true,
          },
          father_qualification: {
            required: true,
          },
          father_profession: {
            required: true,
          },
          father_contact_no: {
            required: true,
          },
          father_email: {
            required: true,
          },
          mother_name: {
            required: true,
          },
          mother_qualification: {
            required: true,
          },
          mother_profession: {
            required: true,
          },
          mother_contact_no: {
            required: true,
          },
          mother_email: {
            required: true,
          },
          permanent_address: {
            required: true,
          },
          telephone: {
            required: true,
          }
        }
      });
</script>    
    <?php include('components/footer.php'); ?>
