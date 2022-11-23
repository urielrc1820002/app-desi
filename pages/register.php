

<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
	$obj=new DbFunction();
	$rs=$obj->showCourse();
	$rs1=$obj->showCountry();
	$ses=$obj->showSession();
	$res1=$ses->fetch_object();
	//$res1->session;
	if(isset($_POST['submit'])){
	
     
     $obj->register($_POST['course-short'],$_POST['c-full'],$_POST['fname'],$_POST['mname'],$_POST['lname'],
     	            $_POST['gname'],$_POST['ocp'],$_POST['gender'],$_POST['income'],$_POST['category'],$_POST['ph'],$_POST['nation']

     	             , $_POST['mobno'],$_POST['email'],$_POST['country'],$_POST['state'],$_POST['city'],$_POST['padd'],
     	              $_POST['cadd'],$_POST['board1'],$_POST['board2'],$_POST['roll1'],$_POST['roll2'],$_POST['pyear1'],
     	              $_POST['pyear2'],$_POST['sub1'],$_POST['sub2'],$_POST['marks1'],$_POST['marks2'],$_POST['fmarks1'],
     	              $_POST['fmarks2'] ,$_POST['session']);
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>register</title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">
	<?php include('leftbar.php');?>


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Registro</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-10">
			<div class="form-group">
		    <div class="col-lg-4">
			<label>Seleccionar curso<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
<select class="form-control" name="course-short" id="cshort"  onchange="showSub(this.value)" required="required" >			
<option VALUE="">SELECT</option>
				<?php while($res=$rs->fetch_object()){?>							
			
                        <option VALUE="<?php echo htmlentities($res->cid);?>"><?php echo htmlentities($res->cshort)?></option>
                        
                        
                    <?php }?>   </select>
										</div>
											
										</div>	
										
								<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Seleccion profesor<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
 <input class="form-control" name="c-full"  id="c-full" >
       </select>
	</div>
	 </div>	
										
	 <br><br>								
			
			<div class="form-group">
		<div class="col-lg-4">
		<label>Current  Session<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		
	   <input class="form-control" name="session" value="<?php echo htmlentities($res1->session);?>" readonly>
	 </div>	
										
	 <br><br>								
	
	</div>	
	<br><br>		
		
									
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Informacion personal</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Primer nombre<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" required="required" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Segundo nombre</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mname">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Apellido</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="lname" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Gender</label>
			
			</div>
			<div class="col-lg-4">
		 <input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
		 <input type="radio" name="gender" id="female" value="feale"> &nbsp; Female &nbsp;
		 <input type="radio" name="gender" id="other" value="other"> &nbsp; Other &nbsp;
			</div>
			</div>	
	<br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>dni<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="gname" >
			</div>
			 <div class="col-lg-2">
			<label>Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="ocp" id="ocp">
			</div>
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Grado académico<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="income"  id="income"required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="Inicial">Inicial</option>
        <option value="Primaria">Primario</option>
        <option value="Secundaria">Secundario</option>
        
       </select>
			</div>
			 <div class="col-lg-2">
			<label>CGrado<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="category"  id="category" required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="1ro">1ro</option>
        <option value="2do">2do</option>
        <option value="3ro">3ro</option>
        <option value="4to">4to</option>
		<option value="5to">5to</option>
       </select>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>¿Posee discapacidad?<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="ph"  id="ph"required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="yes">Yes</option>
        <option value="no">No</option>
               
       </select>
			</div>
			 <div class="col-lg-2">
			<label>Nacionalidad<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="nation" id="nation">
			</div>
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Información del contacto</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Celular<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" type="number" name="mobno" required="required" maxlength="10">
			</div>
			 <div class="col-lg-2">
			<label>Email</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="email" name="email">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>País</label>
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="country" id="country" onchange="showState(this.value)" required="required" >			
<option VALUE="">Select Country</option>
				<?php while($res=$rs1->fetch_object()){?>							
			
   <option VALUE="<?php echo htmlentities($res->id);?>"><?php echo htmlentities($res->name)?></option>
                        
                        
                    <?php }?>   </select>
			</div>
			 <div class="col-lg-2">
			<label>Ciudad</label>
			
			</div>
			<div class="col-lg-4">
 <select name="state" id="state"  class="form-control" onchange="showDist(this.value)" required="required">
        <option value="">Select State</option>
        </select>
			</div>
			
			</div>	
			
	<br><br><br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
				
			<label>Calle<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			
			<!-- <div class="col-lg-4">
           <select name="city" id="dist"  class="form-control" onchange="" required="required">
        <option value="">Select City</option>
		<option value="">Lima</option>
		</select>
			</div> -->
			
			
			<div class="col-lg-4">
			<input class="form-control" name="city" id="city">
			</div>
			
			 <div class="col-lg-2">
			<label>Dirección<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<textarea class="form-control" rows="3" name="padd" id="padd"></textarea>
			</div>
			</div>	
			<br><br><br><br>
					
		     
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Referencias<span id="" style="font-size:11px;color:red">*</span>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="cadd"  id="cadd"></textarea>
			</div>
			 <div class="col-lg-2">
			
			
			
			</div>
			<div class="col-lg-4">
			
			</div>
			</div>	
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>					
        <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Información académica</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Año<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Ordénde mérito</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Grado pasado<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                 
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="board1">
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll1" >
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear1" >
			</div></td>
                  </tr>

              <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="board2" >
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll2" >
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear2" >
			</div></td>
                  </tr>      
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div>	
			<br><br>			
			<br><br>
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>S.No</th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Curso</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Nota obtenida</th>
			</div>                                 
             <div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Ordén mérito</th>
			</div>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td>1</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sub1">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks1">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="fmarks1">
			</div></td>
                  </tr>
				  
	         <tr> 
                  <td>2</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sub2">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="fmarks2">
			</div></td>
                  </tr>			  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
							
		  </div>	
			<br>
		
	<div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Register"></button>
	</div>
	</div>			
	</div>
	</div><!--row!-->		
	</div>	
			</div>
		</div>
	</div>
	</form>

	<!-- jQuery -->
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
function showState(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'id='+val,
	success: function(data){
	  // alert(data);
		$("#state").html(data);
	}
	});
}

function showDist(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'did='+val,
	success: function(data){
	  // alert(data);
		$("#dist").html(data);
	}
	});
	
}



function showSub(val) {
    
    //alert(val);
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'cid='+val,
	success: function(data){
	  // alert(data);
		$("#c-full").val(data);
	}
	});
	
}
</script>



</body>

</html>
