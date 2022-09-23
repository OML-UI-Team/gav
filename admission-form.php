
    <?php include('components/header.php'); ?>
    
   <!--====== PAGE BANNER PART START ======-->
   <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>The Admissions</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">The Admissions</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART end ======-->
    <!-- gav form -->
    <div class="admission-form" data-aos="fade-up">
        <div class="container admin">
            <h3 class="text-center admi">ADMISSION FORM</h3>
            <form method="POST" id="admission_form" action="php/save-admission-form.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="admission_number">Admission Number</label>
                    <input type="text" class="form-control" id="admission_number" name="admission_number" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name_of_the_child">Name Of the Child</label>
                    <input type="text" class="form-control" id="name_of_the_child" name="name_of_the_child" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="class_of_enrollment">Class of Enrollment</label>
                    <input type="text" class="form-control" id="class_of_enrollment" name="class_of_enrollment" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="last_school_attended">Last school attended</label>
                    <input type="text" class="form-control" name="last_school_attended" id="last_school_attended" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="transfer_certificate_no">Transfer certificate No</label>
                    <input type="text" class="form-control" id="transfer_certificate_no" name="transfer_certificate_no" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="date_of_issue">Date of issue</label>
                    <input placeholder="Select date" type="date" id="date_of_issue" name="date_of_issue" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="promotion_report_card">Promotion report card</label>
                    <input type="text" class="form-control" id="promotion_report_card" name="promotion_report_card" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="medical_instructions">Medical instructions / history (if Any)</label>
                    <input type="text" class="form-control" id="medical_instructions" name="medical_instructions" placeholder="">
                  </div>
                </div>
                <h5 class="parent-det">Parents Details</h5>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="father_name">Father's Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="father_qualification">Qualification</label>
                    <select id="father_qualification" name="father_qualification" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option value="10">10<sub>th</sub></option>
                      <option value="12">12<Sub>th</Sub></option>
                      <option value="Graduation">Graduation</option>
                      <option value="Post Graduation">Post Graduation</option>
                  </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="father_profession">Profession</label>
                    <input type="text" class="form-control" id="father_profession" name="father_profession" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="father_contact_no">Contact No.Office/Personal</label>
                    <input type="text" class="form-control" id="father_contact_no" name="father_contact_no" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E.mail id</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mother_qualification">Qualification</label>
                    <select id="mother_qualification" name="mother_qualification" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option value="10">10<sub>th</sub></option>
                      <option value="12">12<Sub>th</Sub></option>
                      <option value="Graduation">Graduation</option>
                      <option value="Post Graduation">Post Graduation</option>
                  </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="mother_profession">Profession</label>
                    <input type="text" class="form-control" id="mother_profession" name="mother_profession" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mother_contact_no">Contact No. office/personal</label>
                    <input type="text" class="form-control" id="mother_contact_no" name="mother_contact_no" placeholder="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="permanent_address">Permanent Address</label>
                    <textarea class="form-control" id="permanent_address" name="permanent_address" rows="3"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="transport_route">Transport Route</label>
                    <input type="text" class="form-control" id="transport_route" name="transport_route" placeholder="">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Transport Facility</legend>
                    <div class="col-sm-10">
                      <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="transport_facility" id="transport_facility1" value="Yes" checked>
                        <label class="form-check-label" for="transport_facility1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="transport_facility" id="transport_facility2" value="No">
                        <label class="form-check-label" for="transport_facility2">
                          No
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="submit">
                  <!-- <a href="#">Submit</a> -->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
      AOS.init({
        duration: 1200,
      })
      $("#admission_form").validate({
        rules: {
          admission_number: {
            required: true,
          },
          name_of_the_child: {
            required: true,
          },
          dob: {
            required: true,
          },
          class_of_enrollment: {
            required: true,
          },
          last_school_attended: {
            required: true,
          },
          transfer_certificate_no: {
            required: true,
          },
          date_of_issue: {
            required: true,
          },
          promotion_report_card: {
            required: true,
          },
          medical_instructions: {
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
          email: {
            required: true,
          },
          mother_name: {
            required: true,
          },
          mother_qualification: {
            required: true,
          },
          permanent_address: {
            required: true,
          },
          transport_route: {
            required: true,
          },
          transport_facility: {
            required: true,
          }
        }
      });
    </script>
    <?php include('components/footer.php'); ?>
    