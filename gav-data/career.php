
    <?php include('components/header.php'); ?>
    
     <!--====== PRELOADER PART START ======-->
   <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Career</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="card category-tow">
                        <form>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="text-dark" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark" for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>


                                <div class="form-group">
                                    <label class="text-dark" for="number">Contact number</label>
                                    <input type="text" class="form-control" id="contactNumber" placeholder="Number">
                                </div>

                                <div class="form-group">
                                    <label class="text-dark" for="position">Position apply for :</label>
                                    <select class="form-control" name="Position" id="Position">
                                        <option value=""> -- select -- </option>
                                        <option value="tgt-english">TGT ENGLISH</option>
                                        <option value="tgt-hindi">TGT HINDI</option>
                                        <option value="prts">PRTs (Sci & Maths)</option>
                                        <option value="it-teacher">IT TEACHER</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="file text-dark mt-3" for="resume">
                                        <i class="fa fa-upload d-block upload-icon"></i>
                                        Click to uplaod your resume (**.pdf/.doc**)
                                        <input type="file" name="resume">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="text-dark" for="message">Contact number</label> -->
                                    <textarea type="text" class="form-control" id="message" placeholder="Add more info..." rows="3"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-vandya">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
            AOS.init({
            duration: 1200,
            })
        </script>
        <script>
            $(document).ready(function() {
                $('input[type=file]').change(function() {
                        //console.log(this.files);
                        var f = this.files;
                        var el = $(this).parent();
                        if (f.length > 1) {
                                console.log(this.files, 1);
                                el.text('Sorry, multiple files are not allowed');
                                return;
                        }
                        // el.removeClass('focus');
                        el.html(f[0].name + '<br>' +
                                '<span class="sml">' +
                                'type: ' + f[0].type + ', ' +
                                Math.round(f[0].size / 1024) + ' KB</span>');
                });

                $('input[type=file]').on('focus', function() {
                        $(this).parent().addClass('focus');
                });

                $('input[type=file]').on('blur', function() {
                        $(this).parent().removeClass('focus');
                });

        });
        </script>    
    <?php include('components/footer.php'); ?>
    
