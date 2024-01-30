<div class="tab-pane active" id="dash">

					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>

			<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-users fa-money"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Balance</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT sum(balance) as 'balance' from accounts where Deleted=0";

										$res = mysqli_query($db,$query);
										$data = mysqli_fetch_array($res);
										echo '<h3>'.$data['balance'] .' $'.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="fa fa-user"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Users</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT user_no  from users where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
										<i class="material-icons">person</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="20">Total Students</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT id  from student where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="material-icons">receipts</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Receipts</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT rec_no  from receipts where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
									</div>
								</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="material-icons">local_grocery_store</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Employee</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT emp_no  from employee where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="fa fa-user"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Responsible</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT res_no  from responsible where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
										<i class="material-icons">schools</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Schools</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT sc_no  from School where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-money"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Bills</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT bil_no  from bills where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="material-icons">home</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Classes</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT cl_no  from class where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="material-icons">book</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Exams</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT exm_no  from exams where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
										<i class="material-icons">description</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Cources</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT co_no  from courses where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-money"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h4" data-counter="counterup" data-value="23">Total Expenses</p>
										<?php 
										$db=new mysqli("localhost","root","","university");
										$query = "SELECT exp_no  from expenses where Deleted=0";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h3>'.$row.'</h3>';

										 ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<div class="tab-pane" id="std">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="Parents" data-toggle="tab" href="#tb_Parents" role="tab"
							aria-controls="profile" aria-selected="false">Address</a>
						</li>
						
							<li class="nav-item">
							<a class="nav-link" id="iskuul" data-toggle="tab" href="#tb_iskuul" role="tab"
							aria-controls="profile" aria-selected="false">School</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="Arday" data-toggle="tab" href="#tb_Arday" role="tab"
							aria-controls="profile" aria-selected="false">Student</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="kuliyadda" data-toggle="tab" href="#tb_kuliyadda" role="tab"
							aria-controls="profile" aria-selected="false">Faculty</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="qaybta" data-toggle="tab" href="#tb_qaybta" role="tab"
							aria-controls="profile" aria-selected="false">Departments</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" id="deptcr" data-toggle="tab" href="#tb_deptcr" role="tab"
							aria-controls="profile" aria-selected="false">Department-Cource</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="semester" data-toggle="tab" href="#tb_semester" role="tab"
							aria-controls="profile" aria-selected="false">SemesterS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="fasalka" data-toggle="tab" href="#tb_fasalka" role="tab"
							aria-controls="profile" aria-selected="false">Class</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="fasl" data-toggle="tab" href="#tb_fasl" role="tab"
							aria-controls="profile" aria-selected="false">Class-Semester</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" id="fasal" data-toggle="tab" href="#tb_fasal" role="tab"
							aria-controls="profile" aria-selected="false">Student-Class</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" id="koorso" data-toggle="tab" href="#tb_koorso" role="tab"
							aria-controls="profile" aria-selected="false">Cources</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="shahadada" data-toggle="tab" href="#tb_shahadada" role="tab"
							aria-controls="profile" aria-selected="false">Certificate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="masul" data-toggle="tab" href="#tb_masul" role="tab"
							aria-controls="profile" aria-selected="false">Responsible</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_Parents" role="tabpanel" aria-labelledby="Parents">
										<div class="row">
											<div class="col-md-6">
											 <button type="button" class="btn btn-primary btn_new_parent" data-toggle="modal" data-target="#parent">Add New Address
                                              <i class="material-icons">person_add</i></button>

										</div>
										<div class="col-md-12">
										<div id="tbl_id_parent" class="tbl_cls_parent">
										<?php $coder->Table("CALL address_view()","dt_parent","n") 
										?>	
										</div>	
										</div>
										
										</div>
										</div>
										<div class="tab-pane fade" id="tb_iskuul" role="tabpanel" aria-labelledby="iskuul">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_titelt" data-toggle="modal" data-target="#titel">Add New School
                                             <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_titel" class="tbl_cls_titel">
										<?php $coder->Table("CALL school_view()","dt_titel","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_Arday" role="tabpanel" aria-labelledby="Arday">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_stdent" data-toggle="modal" data-target="#stdent">Add New Student
										    <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_stdent" class="tbl_cls_stdent">
										<?php $coder->Table("CALL Student_view()","dt_stdent","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_fasal" role="tabpanel" aria-labelledby="fasal">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_klass" data-toggle="modal" data-target="#klass">Add New Class
											<i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_class" class="tbl_cls_class">
										<?php $coder->Table("CALL class_view()","dt_klass","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_koorso" role="tabpanel" aria-labelledby="koorso">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_korso" data-toggle="modal" data-target="#korso">Add New Cources
										    <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_korso" class="tbl_cls_korso">
										<?php $coder->Table("CALL courses_view()","dt_korso","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										
										 <div class="tab-pane fade" id="tb_fasalka" role="tabpanel" aria-labelledby="fasalka">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_klass" data-toggle="modal" data-target="#klass">Add New class
											<i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_klass" class="tbl_cls_klass">
										<?php $coder->Table("CALL class_view()","dt_klass","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										 <div class="tab-pane fade" id="tb_fasl" role="tabpanel" aria-labelledby="fasl">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_clas" data-toggle="modal" data-target="#clas">Add New classemester
											 <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_class_semister" class="tbl_cls_class_semister">
										<?php $coder->Table("CALL class_semister_view()","dt_clas","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										 <div class="tab-pane fade" id="tb_semester" role="tabpanel" aria-labelledby="semester">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_sem" data-toggle="modal" data-target="#sem">Add New Semester
											 <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_sem" class="tbl_cls_sem">
										<?php $coder->Table("CALL semesters_view()","dt_sem","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_qaybta" role="tabpanel" aria-labelledby="qaybta">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_dept" data-toggle="modal" data-target="#dept">Add New department
								            <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_dept" class="tbl_cls_dept">
										<?php $coder->Table("CALL departments_view()","dt_dept","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_deptcr" role="tabpanel" aria-labelledby="deptcr">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_depcr" data-toggle="modal" data-target="#depcr">Add departcource
                                              <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_depcr" class="tbl_cls_depcr">
										<?php $coder->Table("CALL department_course_view()","dt_depcr","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_kuliyadda" role="tabpanel" aria-labelledby="kuliyadda">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_fac" data-toggle="modal" data-target="#fac">Add New Faculty
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_fac" class="tbl_cls_fac">
										<?php $coder->Table("CALL focaulty_view()","dt_fac","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										
										 <div class="tab-pane fade" id="tb_masul" role="tabpanel" aria-labelledby="masul">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_resp" data-toggle="modal" data-target="#resp">Add New Responsible
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_resp" class="tbl_cls_resp">
										<?php $coder->Table("CALL Responsible_view()","dt_resp","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										

                                    <div class="tab-pane fade" id="tb_shahadada" role="tabpanel" aria-labelledby="shahadada">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_shahado" data-toggle="modal" data-target="#shahado">Add New certificate
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_shahado" class="tbl_cls_shahado">
										<?php $coder->Table("CALL certificate_view()","dt_shahado","n") 
										?>	
										</div>	
										</div>
										</div>

										</div>
							</div>	
										</div>
										</div>
										
										</div>
									</div>
								
			
<div class="tab-pane" id="pay">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="Akoonka" data-toggle="tab" href="#tb_Akoonka" role="tab"
							aria-controls="profile" aria-selected="false">Accounts</a>
						</li>
						
							<li class="nav-item">
							<a class="nav-link" id="biil" data-toggle="tab" href="#tb_biil" role="tab"
							aria-controls="profile" aria-selected="false">Bills</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="rect" data-toggle="tab" href="#tb_rect" role="tab"
							aria-controls="profile" aria-selected="false">Reciepts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="exps" data-toggle="tab" href="#tb_exps" role="tab"
							aria-controls="profile" aria-selected="false">Expenses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="expayments" data-toggle="tab" href="#tb_expayments" role="tab"
							aria-controls="profile" aria-selected="false">Expense-Payment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="expchrg" data-toggle="tab" href="#tb_expchrg" role="tab"
							aria-controls="profile" aria-selected="false">Expense-Charge</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_Akoonka" role="tabpanel" aria-labelledby="Akoonka">
										<div class="row">
											<div class="col-md-6">
											 <button type="button" class="btn btn-primary btn_new_acc" data-toggle="modal" data-target="#acc">Add New Accounts
                                              <i class="material-icons">person_add</i></button>

										</div>
										<div class="col-md-12">
										<div id="tbl_id_acc" class="tbl_cls_acc">
										<?php $coder->Table("CALL accounts_view()","dt_acc","n") 
										?>	
										</div>	
										</div>
										
										</div>
										</div>
										<div class="tab-pane fade" id="tb_biil" role="tabpanel" aria-labelledby="biil">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_bil" data-toggle="modal" data-target="#bil">Add New Bills
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_bil" class="tbl_cls_bil">
										<?php $coder->Table("CALL bills_view()","dt_bil","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_rect" role="tabpanel" aria-labelledby="rect">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_rec" data-toggle="modal" data-target="#rec">Add New Reciepts
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_rec" class="tbl_cls_rec">
										<?php $coder->Table("CALL receipts_view()","dt_rec","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_exps" role="tabpanel" aria-labelledby="exps">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_ex" data-toggle="modal" data-target="#ex">Add New expenses
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_ex" class="tbl_cls_ex">
										<?php $coder->Table("CALL expenses_view()","dt_ex","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_expayments" role="tabpanel" aria-labelledby="expayments">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_expay" data-toggle="modal" data-target="#expay">Add expense Payment
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_expay" class="tbl_cls_expay">
										<?php $coder->Table("CALL exp_payment_view()","dt_expay","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										 <div class="tab-pane fade" id="tb_kuliyada" role="tabpanel" aria-labelledby="kuliyada">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_fac" data-toggle="modal" data-target="#fac">Add New Faculty
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_fac" class="tbl_cls_fac">
										<?php $coder->Table("CALL focaulty_view()","dt_fac","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_dept" role="tabpanel" aria-labelledby="dept">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_dep" data-toggle="modal" data-target="#deb">Add department
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_dep" class="tbl_cls_dep">
										<?php $coder->Table("CALL departments_view()","dt_dep","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										 <div class="tab-pane fade" id="tb_semester" role="tabpanel" aria-labelledby="semester">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_sem" data-toggle="modal" data-target="#sem">Add New Semester
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_sem" class="tbl_cls_sem">
										<?php $coder->Table("CALL semesters_view()","dt_sem","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										 <div class="tab-pane fade" id="tb_masul" role="tabpanel" aria-labelledby="masul">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_resp" data-toggle="modal" data-target="#resp">Add New Responsible
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_resp" class="tbl_cls_resp">
										<?php $coder->Table("CALL employee_view()","dt_resp","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										

                                    <div class="tab-pane fade" id="tb_expchrg" role="tabpanel" aria-labelledby="expchrg">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_excharge" data-toggle="modal" data-target="#excharge">Add New excharge
											 	 <i class="material-icons">person_add</i>
                                             </button>
											<div class="col-md-12">
										<div id="tbl_id_excharge" class="tbl_cls_excharge">
										<?php $coder->Table("CALL ex_charge_view()","dt_excharge","n") 
										?>	
										</div>	
										</div>
										</div>

										</div>
							</div>	
										</div>
										</div>
										
										</div>
									</div>


<div class="tab-pane" id="exa">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="imtixan" data-toggle="tab" href="#tb_imtixan" role="tab"
							aria-controls="profile" aria-selected="false">Exams</a>
						</li>
						
							<li class="nav-item">
							<a class="nav-link" id="imtixaan" data-toggle="tab" href="#tb_imtixaan" role="tab"
							aria-controls="profile" aria-selected="false">Exam_Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="dhibco" data-toggle="tab" href="#tb_dhibco" role="tab"
							aria-controls="profile" aria-selected="false">Grades</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="natiijo" data-toggle="tab" href="#tb_reslt" role="tab"
							aria-controls="profile" aria-selected="false">Results</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_imtixan" role="tabpanel" aria-labelledby="imtixan">
										<div class="row">
											<div class="col-md-6">
											 <button type="button" class="btn btn-primary btn_new_exim" data-toggle="modal" data-target="#exim">Add New exams
                                              <i class="material-icons">person_add</i></button>

										</div>
										<div class="col-md-12">
										<div id="tbl_id_exim" class="tbl_cls_exim">
										<?php $coder->Table("CALL exams_view()","dt_exim","n") 
										?>	
										</div>	
										</div>
										
										</div>
										</div>
										<div class="tab-pane fade" id="tb_imtixaan" role="tabpanel" aria-labelledby="imtixaan">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_ex_reg" data-toggle="modal" data-target="#ex_reg">Add New ex_reg
                                            <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_ex_reg" class="tbl_cls_ex_reg">
										<?php $coder->Table("CALL exam_register_view()","dt_ex_reg","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_dhibco" role="tabpanel" aria-labelledby="dhibco">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_grd" data-toggle="modal" data-target="#grd">Add New Grades
									       <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_grd" class="tbl_cls_grd">
										<?php $coder->Table("CALL grades_view()","dt_grd","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<!-- tijaabo -->
										<div class="tab-pane fade" id="tb_reslt" role="tabpanel" aria-labelledby="reslt">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_reslt" data-toggle="modal" data-target="#reslt">Add New result
									       <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_reslt" class="tbl_cls_reslt">
										<?php $coder->Table("CALL resultsView()","dt_reslt","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<!-- tj -->
										
										
										
							</div>	
										</div>
										</div>
										
										</div>
									</div>


<div class="tab-pane" id="emp">
	<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="shaqaale" data-toggle="tab" href="#tb_shaqaale" role="tab"
							aria-controls="profile" aria-selected="false">Employee</a>
						</li>
						
							<!-- <li class="nav-item">
							<a class="nav-link" id="imtixaan" data-toggle="tab" href="#tb_imtixaan" role="tab"
							aria-controls="profile" aria-selected="false">Employee_attendence</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" id="musharbixin" data-toggle="tab" href="#tb_musharbixin" role="tab"
							aria-controls="profile" aria-selected="false">Salary_payment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="salchar" data-toggle="tab" href="#tb_salchar" role="tab"
							aria-controls="profile" aria-selected="false">Salary_charge</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<!-- <div class="tab-pane  active" id="tb_shaqaale" role="tabpanel" aria-labelledby="shaqaale">
										<div class="row">
											<div class="col-md-6">
											 <button type="button" class="btn btn-primary btn_new_emp" data-toggle="modal" data-target="#emp">Add New employee
                                              <i class="material-icons">person_add</i></button>

										</div>
										<div class="col-md-12">
										<div id="tbl_id_emp" class="tbl_cls_emp">
										<?php $coder->Table("CALL employee_view()","dt_emp","n") 
										?>	
										</div>	
										</div>
										
										</div>
										</div> -->

										<!-- ff -->
										<div class="tab-pane active" id="tb_shaqaale" role="tabpanel" aria-labelledby="shaqaale">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_empp" data-toggle="modal" data-target="#empp">Add new employee
                                              <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_empp" class="tbl_cls_empp">
										<?php $coder->Table("CALL employee_view()","dt_empp","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<!-- ddd -->

										<div class="tab-pane fade" id="tb_musharbixin" role="tabpanel" aria-labelledby="musharbixin">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_salpay" data-toggle="modal" data-target="#salpay">Add salary payment
                                              <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_salpay" class="tbl_cls_salpay">
										<?php $coder->Table("CALL salary_payment_view()","dt_salpay","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_salchar" role="tabpanel" aria-labelledby="salchar">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_salchrge" data-toggle="modal" data-target="#salchrge">Add New salcharge
						            <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_salchrge" class="tbl_cls_salchrge">
										<?php $coder->Table("CALL salary_charge_view()","dt_salchrge","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										<div class="tab-pane fade" id="tb_natiijo" role="tabpanel" aria-labelledby="natiijo">
											<div class="row">
												<div class="col-12">
												
											</div>
											 <button type="button" class="btn btn-primary btn_new_reslt" data-toggle="modal" data-target="#reslt">Add New Results
										  <i class="material-icons">person_add</i></button>
											<div class="col-md-12">
										<div id="tbl_id_reslt" class="tbl_cls_reslt">
										<?php $coder->Table("CALL resultsView()","dt_reslt","n") 
										?>	
										</div>	
										</div>
										</div>
										
										</div>
										
										
							</div>	
										</div>
										</div>
										
										</div>
									</div>			

<div class="tab-pane" id="rep">
				<div class="row">
						<div class="col-12">
						<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="repo" data-toggle="tab" href="#tb_repo" role="tab"
							aria-controls="profile" aria-selected="false">Student-Reports</a>
						</li>

						
							<li class="nav-item">
							<a class="nav-link" id="tit" data-toggle="tab" href="#tb_tit" role="tab"
							aria-controls="profile" aria-selected="false">Responsible_Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="Accnt" data-toggle="tab" href="#tb_Accnt" role="tab"
							aria-controls="profile" aria-selected="false">Accounts-Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="emplo" data-toggle="tab" href="#tb_emplo" role="tab"
							aria-controls="profile" aria-selected="false">Employee-Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="exm" data-toggle="tab" href="#tb_exm" role="tab"
							aria-controls="profile" aria-selected="false">Exam-Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="recie" data-toggle="tab" href="#tb_recie" role="tab"
							aria-controls="profile" aria-selected="false">Receipts-Report</a>
						</li>
							</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_repo" role="tabpanel" aria-labelledby="repo">
										<div class="row">
											<div class="col-12">
											 <?php $coder->fillCombo("SELECT * from student where Deleted=0","cbm_std_print","Select student name"); ?>

									<button class="btn btn-sm btn-primary btn_std" >student</button>

									<button class="btn btn-sm btn-primary btn_std_info" >students_info</button>
									<hr>
									<img src="assets/img/dddd.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">	
										</div>										
										</div>
										</div>
										<div class="tab-pane fade" id="tb_tit" role="tabpanel" aria-labelledby="tit">
											<div class="row">
												<div class="col-12">
									<?php $coder->fillCombo("SELECT * from responsible where Deleted=0","cbm_exams_print","Select responsible name"); ?>

									<button class="btn btn-sm btn-primary btn_exams" >responsible</button>

									<button class="btn btn-sm btn-primary btn_exams_info" >responsible_info</button>
										<hr>
									<img src="assets/img/bb.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">		
											
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_Accnt" role="tabpanel" aria-labelledby="Accnt">
											<div class="row">
												<div class="col-12">
								<?php $coder->fillCombo("SELECT * from accounts where Deleted=0","cbm_acct_print","Select accounts name"); ?>

								<button class="btn btn-sm btn-primary btn_acct" >account</button>

								<button class="btn btn-sm btn-primary btn_acct_info" >accounts_info</button>
									<hr>
									<img src="assets/img/acnt.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">			
											
										</div>
										</div>
										</div>
                 <div class="tab-pane fade" id="tb_emplo" role="tabpanel" aria-labelledby="emplo">
											<div class="row">
												<div class="col-12">
				  <?php $coder->fillCombo("SELECT * from employee where Deleted=0","cbm_empy_print","Select employee name"); ?>

								<button class="btn btn-sm btn-primary btn_empy" >employee</button>

								<button class="btn btn-sm btn-primary btn_empy_info" >employees_info</button>
								<hr>
									<img src="assets/img/resp.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">				
											
										</div>
										</div>
										</div>	
<div class="tab-pane fade" id="tb_recie" role="tabpanel" aria-labelledby="recie">
											<div class="row">
												<div class="col-12">
								<?php $coder->fillCombo("SELECT * from student where Deleted=0","cbm_reci_print","Select receipt name"); ?>

								<button class="btn btn-sm btn-primary btn_reci" >receipt</button>

								<button class="btn btn-sm btn-primary btn_reci_info" >receipts_info</button>
									<hr>
									<img src="assets/img/acc.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">			
											
										</div>
										</div>
										</div>
	 <div class="tab-pane fade" id="tb_exm" role="tabpanel" aria-labelledby="exm">
											<div class="row">
												<div class="col-12">
				  <?php $coder->fillCombo("SELECT * from exams where Deleted=0","cbm_exam_print","Select Exam Name"); ?>

								<button class="btn btn-sm btn-primary btn_exam" >Exams</button>

								<button class="btn btn-sm btn-primary btn_exam_info" >Exams_info</button>
								<hr>
									<img src="assets/img/resp.jpg" class="img img-fluid " style="width: 100%; height: 480px; margin-top: -2%;">				
											
										</div>
										</div>
										</div>									

									</div> 

								</div> 
							
																
</div>
</div>
</div>
<div class="tab-pane" id="about">
<img src="assets/img/iam.jpg" class="img img-fluid " style="width: 400%; height: 650px; margin-top: -2%;">
				</div>






