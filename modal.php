<div class="modal  fade" id="mdl_All_reports" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> Report</h4>
        <button type="button" class="exit" style="background-color: white; cursor: pointer;" data-dismiss="modal" aria-label="exit">
          <span aria-hidden="true">&times;</span>
        </button>
        <button type="button" class="btn btn-success btn-sm" id="btn_prt_dt_rpt"><i class="material-icons">print</i>PRINT</button> 
      </div>

      <div class="modal-body">
        <div class="row">
          
          <div class="col-md-12">
            <form id="rpt_show_PRINT">
              <div class="col-md-12">
                 <center>
                          <img src="assets/img/j.jpg" class="img img-fluid " style="width: 100%; height: 130px; margin-top: -2%;">
                        </center>
              </div>
              <div class="col-md-12">
                <div id="rpt_show"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="parent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Address</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="parent_alert"></div>
              <div class="modal-body">
                <form id="frm_parent" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="address_proc"  value="address_proc">
              <input type="hidden" name="add_no" id="add_no">
                </div>
                <div class="col-md-6">
                  <label>State:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT s.st_no,  s.st_name FROM states s WHERE s.st_no
                      ","cmb_test_nmae","Select States")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>City:</label>
                  <input type="text" name="capital" id="capital" class="form-control" placeholder="Enter City" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Village:</label>
                  <input type="text" name="xaafad" id="xaafad" class="form-control" placeholder="Enter Your Village" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_parent">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_parent">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="titel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Schools</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="titel_alert"></div>
              <div class="modal-body">
                <form id="frm_titel">
                <div class="row">
                  <div class="col-md-12">
              <input type="hidden" name="school_proc"  value="school_proc">
              <input type="hidden" name="sc_no" id="sc_no">
                  </div>
                  <div class="col-md-12">
                    <label>School_Name:</label>
                      <input type="text" name="schname" id="schname" class="form-control" >
                  </div>
                   <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT a.add_no,concat(s.st_name,' - ',a.city)name FROM address a , states s WHERE a.st_no=s.st_no","cmb_test_nmae","select Address")?>
                  </div>
                   <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
                
                </div>
             </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_titel">Save</button>
                <button type="button" class="btn btn-primary" id="btn_update_titel">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="stdent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Student</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="stdent_alert"></div>
              <div class="modal-body">
                <form id="frm_stdent">
                <div class="row">
                  <div class="col-md-12">
              <input type="hidden" name="Student_Proc"  value="Student_Proc">
              <input type="hidden" name="id" id="id">
                  </div>
                  <div class="col-md-12">
                    <label>Student_Name:</label>
                      <input type="text" name="stdnam" id="stdnam" class="form-control" placeholder="Student_Name">
                  </div>
                   <div class="col-md-12">
                    <label>Tell:</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
                  </div>
                   <div class="col-md-12">
                    <label>Sex:</label>
                      <SELECT name="genferr">
                        <option value="Male">
                          Male
                        </option>
                        <option value="female">
                          Female
                        </option>
                      </SELECT>
                  </div>
                  <div class="col-md-12">
                    <label>Birth_Date:</label>
                      <input type="date" name="bdates" id="bdates" class="form-control" placeholder="Birth_Date" placeholder="Birth_Date">
                  </div>
                   <div class="col-md-12">
                    <label>School_no:</label>
                      <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT s.sc_no, s.sc_name FROM school s WHERE s.sc_no
                         ","cmb_test_nmaes","Select School")?>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <label>ResponsibleOne:</label>
                     <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT r.res_no, r.res_name FROM responsible r WHERE r.res_no
                         ","cmb_test_nmae","Select Responsible")?>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <label>ResponsibleTwo:</label>
                       <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT r.res_no, r.res_name2 FROM responsible r WHERE r.res_no
                         ","cmb_test_nmae1","Select Responsible")?>
                  </div>
                  </div>

                   <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
              </div>  
                
             </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_stdent">Save</button>
                <button type="button" class="btn btn-primary" id="btn_update_stdent">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="korso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Cources</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="korso_alert"></div>
              <div class="modal-body">
                <form id="frm_korso">
                <div class="row">
                  <div class="col-md-12">
              <input type="hidden" name="courses_proc"  value="courses_proc">
              <input type="hidden" name="co_no" id="co_no">
                  </div>
                  <div class="col-md-12">
                    <label>CourceName:</label>
                      <input type="text" name="classes" id="classes" class="form-control" >
                  </div>
                  
                   <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
                
                </div>
             </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_korso">Save</button>
                <button type="button" class="btn btn-primary" id="btn_update_korso">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="shahado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Certificate</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="shahado_alert"></div>
              <div class="modal-body">
                <form id="frm_shahado">
                <div class="row">
                  <div class="col-md-12">
              <input type="hidden" name="certificate_proc"  value="certificate_proc">
              <input type="hidden" name="cer_no" id="cer_no">
                  </div>
                  <div class="col-md-12">
                    <label>STD-ID:</label>
                <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT s.id, s.name FROM student s WHERE s.id
                         ","cmb_test_stds","Select Student")?>
                </div>                  </div>
                   <div class="col-md-12">
                    <label>Cer-Date:</label>
                      <input type="date" name="cdar" id="cdar" class="form-control" placeholder="Certificate date">
                  </div>
                  
                   <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
                
                </div>
             </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_shahado">Save</button>
                <button type="button" class="btn btn-primary" id="btn_update_shahado">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="fac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Faculty</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="fac_alert"></div>
              <div class="modal-body">
                <form id="frm_fac" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="focaulty_proc"  value="focaulty_proc">
              <input type="hidden" name="fac_no" id="fac_no">
                </div>
                <div class="col-md-6">
                  <label>fac_name:</label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your Faculty" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_fac">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_fac">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="dept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Department</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="dept_alert"></div>
              <div class="modal-body">
                <form id="frm_dept" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="departments_proc"  value="departments_proc">
              <input type="hidden" name="dep_no" id="dep_no">
                </div>
                <div class="col-md-6">
                  <label>dep_name:</label>
                  <input type="text" name="depts" id="depts" class="form-control" placeholder="Enter your dep_name" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Faculty_No:</label>
                   <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT f.`fac_no`, f.`fac_name` FROM faculty f WHERE f.`fac_no`
                      ","cmb_test_nmaef","Select Faculty")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Sem_Name:</label>
                  <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT s.sem_no, s.sem_name  FROM semesters s WHERE s.sem_no
                         ","cmb_test_nmaase","Select Semester")?>
                </div>
                </div>
                  <div class="col-md-6">
                  <label>Price:</label>
                  <input type="number" name="pdep" id="pdep" class="form-control" placeholder="Enter your Sem_Name" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_dept">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_dept">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="depcr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Department Cource</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="depcr_alert"></div>
              <div class="modal-body">
                <form id="frm_depcr" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="department_course_proc"  value="department_course_proc">
              <input type="hidden" name="dp_cr_no" id="dp_cr_no">
                </div>
                <div class="col-md-6">
                <label>Cource_No:</label>
                  <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT c.co_no, c.course_name  FROM courses c WHERE c.co_no
                         ","cmb_test_dep","Select Cource")?>
                </div>
                </div>
                <div class="col-md-6">
                  <label>Semester_No:</label>
                 <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT s.sem_no, s.sem_name  FROM semesters s WHERE s.sem_no
                         ","cmb_test_nddd","Select Semester")?>
                </div>
                </div>
                 <div class="col-md-6">
                  <label>Hours:</label>
                  <input type="time" name="hr" id="hr" class="form-control" placeholder="Enter your Hours" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_depcr">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_depcr">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="sem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Semesters</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="sem_alert"></div>
              <div class="modal-body">
                <form id="frm_sem" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="semesters_proc"  value="semesters_proc">
              <input type="hidden" name="sem_no" id="sem_no">
                </div>
                <div class="col-md-6">
                  <label>Semester_Name:</label>
                  <input type="text" name="sem_noname" id="sem_noname" class="form-control" placeholder="Enter your Semester" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_sem">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_sem">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="klass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Class</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="klass_alert"></div>
              <div class="modal-body">
                <form id="frm_klass" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="class_semister_proc"  value="class_proc">
              <input type="hidden" name="cl_no" id="cl_no">
                </div>
                <div class="col-md-6">
                  <label>cl_Name:</label>
                  <input type="text" name="ckn" id="ckn" class="form-control" placeholder="Enter your cl_Name" required="" >
                </div>
                <div class="col-md-6">
                  <label>dep_no:</label>
                   <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT d.dep_no, d.dep_name  FROM departments d WHERE d.dep_no
                         ","cmb_test_nclass","Select Department")?>
                </div>
                </div>
                <div class="col-md-6">
                  <label>y_no:</label>
                  <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT y.y_no, y.y_name FROM academic_year y WHERE y.y_no
                         ","cmb_test_nayear","Select Academic Year")?>
                </div>
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_klass">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_klass">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="clas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Class-Semester</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="clas_alert"></div>
              <div class="modal-body">
                <form id="frm_clas" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="class_semister_proc"  value="class_semister_proc">
              <input type="hidden" name="cl_sm_no" id="cl_sm_no">
                </div>
                <div class="col-md-6">
                  <label>cl_No:</label>
                  <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT c.cl_no , c.cl_name FROM `class` c WHERE c.cl_no
                         ","cmb_test_clasem","Select Class")?>
                </div>
                </div>
                <div class="col-md-6">
                  <label>sem_no:</label>
                     <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT s.sem_no, s.sem_name  FROM semesters s WHERE s.sem_no
                         ","cmb_test_semis","Select Semester")?>
                </div>
                </div>
                <div class="col-md-6">
                  <label>ys_no:</label>
                   <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT y.y_no, y.y_name FROM academic_year y WHERE y.y_no
                         ","cmb_test_yasn","Select Acc_Year ")?>
                </div>
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_clas">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_clas">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="resp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Responsible</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="resp_alert"></div>
              <div class="modal-body">
                <form id="frm_resp" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="Responsible_proc"  value="Responsible_proc">
              <input type="hidden" name="res_no" id="res_no">
                </div>
                <div class="col-md-6">
                  <label>res_name:</label>
                  <input type="text" name="res_name" id="res_name" class="form-control" placeholder="Enter responsible name " required="" >
                </div>
                <div class="col-md-6">
                  <label>res_tell:</label>
                  <input type="text" name="res_phone" id="res_phone" class="form-control" placeholder="Enter resphone" required="" >
                </div>
                 <div class="col-md-6">
                  <label>relation:</label>
                  <input type="text" name="rel" id="rel" class="form-control" placeholder="Enter Your relation" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_resp">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_resp">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Accounts</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="acc_alert"></div>
              <div class="modal-body">
                <form id="frm_acc" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="accounts_proc"  value="accounts_proc">
              <input type="hidden" name="acc_no" id="acc_no">
                </div>
                <div class="col-md-6">
                  <label>Account_Name:</label>
                  <input type="text" name="accname" id="accname" class="form-control" placeholder="Enter account name " required="" >
                </div>
                <div class="col-md-6">
                  <label>Institutions:</label>
                  <input type="text" name="ins" id="ins" class="form-control" placeholder="Enter Institutions" required="" >
                </div>
                <div class="col-md-6">
                  <label>Balance:</label>
                  <input type="text" name="bal" id="bal" class="form-control" placeholder="Enter your balance " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_acc">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_acc">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="bil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Bills</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="bil_alert"></div>
              <div class="modal-body">
                <form id="frm_bil" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="bills_proc"  value="bills_proc">
              <input type="hidden" name="bil_no" id="bil_no">
                </div>
                <div class="col-md-6">
                  <label>Student_Class:</label>
                 <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT c.cl_no,  c.cl_name FROM class c WHERE c.cl_no
                      ","cmb_test_biilsm","Select Student")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Amount:</label>
                  <input type="text" name="amt" id="amt" class="form-control" placeholder="Enter Amount" required="" >
                </div>
                <div class="col-md-6">
                  <label>Bill_Date:</label>
                  <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Enter Bill_Date " required="" >
                </div>
                 <div class="col-md-6">
                  <label>Amount:</label>
                 <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT `am_no`,`am_name` FROM `amount_types`","cmb_amount_biils","Select Student")?>
                  </div>
                </div>
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>
                <div class="col-md-12">

                 

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_bil">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_bil">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="rec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Reciepts</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="rec_alert"></div>
              <div class="modal-body">
                <form id="frm_rec" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="receipt_proc"  value="receipt_proc">
              <input type="hidden" name="rec_no" id="rec_no">
                </div>
                <div class="col-md-6">
                  <label>Student_ID:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT s.id,  s.name FROM student s WHERE s.id
                      ","cmb_test_recs","Select Student")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Rec_Date:</label>
                  <input type="date" name="rdate" id="rdate" class="form-control" placeholder="Enter Rec_Date" required="" >
                </div>
                <div class="col-md-6">
                  <label>Account_No:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT c.acc_no,  c.acc_name FROM accounts c WHERE c.acc_no
                      ","cmb_test_acct","Select Accounts")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Amount:</label>
                  <input type="text" name="amnt" id="amnt" class="form-control" placeholder="Enter Amount " required="" >
                </div>
                <div class="col-md-6">
                  <label>Description:</label>
                  <input type="text" name="dec" id="dec" class="form-control" placeholder="Enter Description " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_rec">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_rec">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Expenses</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="ex_alert"></div>
              <div class="modal-body">
                <form id="frm_ex" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="expenses_proc"  value="expenses_proc">
              <input type="hidden" name="exp_no" id="exp_no">
                </div>
                <div class="col-md-6">
                  <label>exp__Name:</label>
                  <input type="text" name="expnam" id="expnam" class="form-control" placeholder="Enter  exp__Name " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_ex">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_ex">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="expay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Expense_payment</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="expay_alert"></div>
              <div class="modal-body">
                <form id="frm_expay" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="exp_payment_proc"  value="exp_payment_proc">
              <input type="hidden" name="exp_py_no" id="exp_py_no">
                </div>
                <div class="col-md-6">
                  <label>exp__No:</label>
                 <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT e.exp_no,  e.exp_name FROM expenses e WHERE e.exp_no
                      ","cmb_test_nmae","Select Expenses")?>
                  </div>
                </div>
                 <div class="col-md-6">
                  <label>Amount:</label>
                  <input type="text" name="amn" id="amn" class="form-control" placeholder="Enter  Amount " required="" >
                </div>
                 <div class="col-md-6">
                  <label>Account:</label>
                 <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT c.acc_no,  c.acc_name FROM accounts c WHERE c.acc_no
                      ","cmb_test_nmae_acc","Select Accounts")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>description:</label>
                  <input type="text" name="des" id="des" class="form-control" placeholder="Enter  description " required="" >
                </div>
                 <div class="col-md-6">
                  <label>PayDAte:</label>
                  <input type="date" name="payda" id="payda" class="form-control" placeholder="Enter  PayDAte " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_expay">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_expay">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="excharge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Expense_Charge</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="excharge_alert"></div>
              <div class="modal-body">
                <form id="frm_excharge" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="ex_charge_proc"  value="ex_charge_proc">
              <input type="hidden" name="ex_ch_no" id="ex_ch_no">
                </div>
                <div class="col-md-6">
                  <label>Exp__No:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT e.exp_no,  e.exp_name  FROM expenses e WHERE e.`exp_no`
                      ","cmb_test_nmae","Select Expenses")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Amount:</label>
                  <input type="text" name="aaaa" id="aaaa" class="form-control" placeholder="Enter  Amount " required="" >
                </div>
                <div class="col-md-6">
                  <label>Exp__Date:</label>
                  <input type="date" name="expdat" id="expdat" class="form-control" placeholder="Enter  exp__Date " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_excharge">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_excharge">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="exim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Exams</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="exim_alert"></div>
              <div class="modal-body">
                <form id="frm_exim" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="exams_proc"  value="exams_proc">
              <input type="hidden" name="exm_no" id="exm_no">
                </div>
                <div class="col-md-6">
                  <label>Exam_Name:</label>
                  <input type="text" name="exname" id="exname" class="form-control" placeholder="Enter Exam_Name " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_exim">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_exim">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="ex_reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Exam_Register</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="ex_reg_alert"></div>
              <div class="modal-body">
                <form id="frm_ex_reg" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="exam_register_proc"  value="exam_register_proc">
              <input type="hidden" name="exm_reg_no" id="exm_reg_no">
                </div>
                <div class="col-md-6">
                  <label>Exam_No:</label>
                   <div class="col-md-14">
                    <?php $coder->fillCombo("SELECT e.exm_no, e.ex_name  FROM exams e WHERE e.exm_no
                         ","cmb_test_nmae","Select Exam")?>
                </div>
                   <div class="col-md-14">
                  <label>Started:</label>
                  <input type="date" name="start" id="start" class="form-control" placeholder="Enter when Started" required="" >
                </div>
                   <div class="col-md-14">
                  <label>Ended:</label>
                  <input type="date" name="end" id="end" class="form-control" placeholder="Enter when Ended " required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>
</div>
               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_ex_reg">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_ex_reg">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="grd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Grades</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="grd_alert"></div>
              <div class="modal-body">
                <form id="frm_grd" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="grade_proc"  value="grade_proc">
              <input type="hidden" name="gr_no" id="gr_no">
                </div>
                <div class="col-md-6">
                  <label>Grade_Name:</label>
                  <input type="text" name="gname" id="gname" class="form-control" placeholder="Enter Grade_Name " required="" >
                </div>
                <div class="col-md-6">
                  <label>Range_:</label>
                  <input type="text" name="ran" id="ran" class="form-control" placeholder="Enter Range___" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_grd">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_grd">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- tijaabo -->
        <div class="modal fade" id="reslt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>result</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="reslt_alert"></div>
              <div class="modal-body">
                <form id="frm_reslt" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="results_proc"  value="results_proc">
              <input type="hidden" name="rno" id="rno">
                </div>
                <div class="col-md-6">
                  <label>State:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT co_no, course_name  FROM courses
                      ","cmb_coure","Select course")?>
                  </div>
                </div>

                <div class="col-md-6">
                  <label>student:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT id, name  FROM student
                      ","cmb_std","Select Student")?>
                  </div>
                </div>

                <div class="col-md-6">
                  <label>Marks:</label>
                  <input type="number" name="mr" id="mr" class="form-control" placeholder="Enter marks" required="" >
                </div>
                 
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_reslt">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_reslt">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end Tijaabo -->
 
<div class="modal fade" id="empp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Employee</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="empp_alert"></div>
              <div class="modal-body">
                <form id="frm_empp" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="employee_proc"  value="employee_proc">
              <input type="hidden" name="emp_no" id="emp_no">
                </div>
                <div class="col-md-6">
                  <label>Emp_Name:</label>
                  <input type="text" name="ename" id="ename" class="form-control" placeholder="Enter Emp_Name " required="" >
                </div>
                <div class="col-md-6">
                  <label>Tellephone:</label>
                  <input type="text" name="tell" id="tell" class="form-control" placeholder="Enter Emp Tell" required="" >
                </div>
                <div class="col-md-6">
                  <label>Sex:</label>
                  <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter gender" required="" >
                </div>
                <div class="col-md-6">
                  <label>Status:</label>
                  <input type="text" name="stt" id="stt" class="form-control" placeholder="Enter Emp Status" required="" >
                </div>
                <div class="col-md-6">
                  <label>Salary:</label>
                  <input type="text" name="sal" id="sal" class="form-control" placeholder="Enter Emp Salary" required="" >
                </div>
                <div class="col-md-6">
                  <label>Qualifications:</label>
                  <input type="text" name="quali" id="quali" class="form-control" placeholder="Enter Emp Qualifications" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_empp">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_empp">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="salpay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>salary_payment</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="salpay_alert"></div>
              <div class="modal-body">
                <form id="frm_salpay" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="Salary_payments_proc"  value="Salary_payments_proc">
              <input type="hidden" name="sal_py_no" id="sal_py_no">
                </div>
                <div class="col-md-6">
                  <label>Empl_No:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT e.emp_no,  e.emp_name FROM employee e WHERE e.emp_no
                      ","cmb_test_nmae","Select Employee")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Amount:</label>
                  <input type="text" name="am" id="am" class="form-control" placeholder="Enter Amount" required="" >
                </div>
                <div class="col-md-6">
                  <label>Account_No:</label>
                   <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT c.acc_no,  c.acc_name FROM accounts c WHERE c.acc_no
                      ","cmb_test_nacc","Select Accounts")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Descriptions:</label>
                  <input type="text" name="decs" id="decs" class="form-control" placeholder="Enter Descriptions" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_salpay">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_salpay">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <div class="modal fade" id="salchrge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><hr><mark>Salary_Charge</mark></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="salchrge_alert"></div>
              <div class="modal-body">
                <form id="frm_salchrge" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="salary_charge_proc"  value="salary_charge_proc">
              <input type="hidden" name="sal_no" id="sal_no">
                </div>
                <div class="col-md-6">
                  <label>Empl_No:</label>
                  <div class="col-md-12">
                    <?php $coder->fillCombo("SELECT e.emp_no,  e.emp_name FROM employee e WHERE e.emp_no
                      ","cmb_test_nmae","Select Employee")?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Charge_Date:</label>
                  <input type="date" name="chdate" id="chdate" class="form-control" placeholder="Enter Charge_Date" required="" >
                </div>
                <div class="col-md-6">
                  <label>Amount:</label>
                    <input type="text" name="amt" id="amt" class="form-control" placeholder="Enter Amount" required="" >
                </div>
                <div class="col-md-6">
                  <label>Descriptions:</label>
                  <input type="text" name="decs" id="decs" class="form-control" placeholder="Enter Descriptions" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="user_no"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_salchrge">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_salchrge">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        </div





 -----------MDL DELETE------------ -->
<div style="position: absolute">
  <div class="modal fade" id="mdl_delete_all"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="top: 150px;">
        <div class="model-header bg-info">
          <h3 class="model-tilte text-center" style="font-family: impact; color: #fff;">Delete Record</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 text-center">
              <h6 style="font-size: 12px; text-align: center;color: red;"><strong>Are you sure you want to delete this record?</strong></h6><br>
              <h1 style="font-family: impact; font-size: 20px; text-align: center; color: blue; "></h1>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger btn-sm btn-circle" id="yes_d_btn"><span>YES</span></button>
            <button type="button" class="btn btn-github btn-sm" data-dismiss="modal"><span id="spm_deld_Faculty">NO</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MDL DELETE -->


