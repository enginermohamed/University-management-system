<script type="text/javascript">
	SYD_ALL("parent","SELECT * FROM address WHERE add_no=","");
	SYD_ALL("titel","SELECT * FROM school WHERE sc_no=","");
	SYD_ALL("addrss","SELECT * FROM address WHERE add_no=","");
	SYD_ALL("stdent","SELECT * FROM student WHERE id=","");
 	SYD_ALL("klass","SELECT * FROM class WHERE cl_no=","");
 	SYD_ALL("clas","SELECT * FROM class_semister WHERE cl_sm_no=","");
 	SYD_ALL("korso","SELECT * FROM courses WHERE co_no=","");
 	SYD_ALL("fac","SELECT * FROM faculty WHERE fac_no=","");
 	SYD_ALL("dept","SELECT * FROM departments WHERE dep_no=","");
 	SYD_ALL("depcr","SELECT * FROM department_course WHERE dp_cr_no=","");
    SYD_ALL("sem","SELECT * FROM semesters WHERE sem_no=","");
    SYD_ALL("resp","SELECT * FROM responsible WHERE res_no=","");
    SYD_ALL("shahado","SELECT * FROM certificate WHERE cer_no=","");
    SYD_ALL("acc","SELECT * FROM accounts WHERE acc_no=","");
    SYD_ALL("bil","SELECT * FROM bills WHERE bil_no=","");
    SYD_ALL("rec","SELECT * FROM receipts WHERE rec_no=","");
    SYD_ALL("ex","SELECT * FROM expenses WHERE exp_no=","");
    SYD_ALL("expay","SELECT * FROM exp_payment WHERE exp_py_no=","");
    SYD_ALL("excharge","SELECT * FROM ex_charge WHERE ex_ch_no=","");
    SYD_ALL("exim","SELECT * FROM exams WHERE exm_no=","");
    SYD_ALL("ex_reg","SELECT * FROM exam_register WHERE exm_reg_no=","");
    SYD_ALL("grd","SELECT * FROM grades WHERE gr_no=","");
    SYD_ALL("reslt","SELECT * FROM results WHERE rno=","");
    SYD_ALL("empp","SELECT * FROM employee WHERE emp_no=","");
    SYD_ALL("salpay","SELECT * FROM salary_payment WHERE sal_py_no=","");
    SYD_ALL("salchrge","SELECT * FROM salary_charge WHERE sal_no=","");

$(".btn_std_info").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="CALL Student_view();";
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })



 $(".btn_std").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="SELECT student.id as No, `name`as Name, `tell`as Phone, `sex`as Gender FROM student,student_class,class_semister,class WHERE student_class.id=student.id and student_class.cl_sm=class_semister.cl_sm_no and class_semister.cl_no=class.cl_no and student.deleted=0 and student.id="+$("#cbm_std_print").val();
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })

    
$(".btn_exams_info").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="call  Responsible_view()";
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })



 $(".btn_exams").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="SELECT res_no as NO, res_name As Name, res_tell as Tell, relation as Relationship,user_id as User FROM responsible WHERE  deleted=0 and res_no="+$("#cbm_exams_print").val();
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })


$(".btn_acct_info").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="call  accounts_view()";
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })



 $(".btn_acct").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="SELECT `acc_no` as No, `acc_name` Account, `instituion` Instituion, `balance` Balance, userName FROM `accounts`,users WHERE users.user_no=accounts.user_no and accounts.deleted=0 and acc_no="+$("#cbm_acct_print").val();
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })

 $(".btn_empy_info").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="call  employee_view()";
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })


 $(".btn_empy").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="SELECT `emp_no` ID, `emp_name` as Name, `tell` as Phone, `sex` as Gender, employee.status as Status, `salary`, `qualifications`, userName FROM `employee`,users WHERE users.user_no=employee.user_no and employee.deleted=0 and emp_no="+$("#cbm_empy_print").val();
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })



$(".btn_reci_info").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  receipts_view()";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })



 $(".btn_reci").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="SELECT `rec_no`as  No, `name`as studentName, `rec_date` Dates, `acc_name` Account, `amount`Amount, `description`, `userName` FROM receipts ,accounts, users,student WHERE  receipts.acc_no=accounts.acc_no AND receipts.user_no=users.user_no and receipts.id=student.id and  receipts.deleted=0 and rec_no="+$("#cbm_reci_print").val();
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })

 $(".btn_exam_info").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  exam_register_view()";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })


 $(".btn_empy").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="SELECT `exm_reg_no` as No, exams.ex_name as Exam, `started`, `ended`, userName FROM `exam_register`,exams,users WHERE users.user_no=exam_register.user_no and exams.exm_no=exam_register.exm_no and exam_register.deleted=0 and exm_reg_no="+$("#cbm_empy_print").val();
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })


  
</script>