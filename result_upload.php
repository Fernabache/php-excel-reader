    <!DOCTYPE html>
    <?php 
    	include 'db.php';
     
    ?>	
    <html lang="en">
    	<head>
    		<meta charset="utf-8">
    		<title>Alpha-Examz Application</title>
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta name="description" content="Import Excel File To MySql Database Using php">
     
     
    	</head>
    	<body>    
        <div align="middle">
        <fieldset class="ggt"><legend class="ftt">C.B.T Result Uploading System(CSV FORMAT ONLY)</legend>
    				<form action="importer.php" method="post" name="upload_excel" enctype="multipart/form-data">

    								<p align="left"><input type="file" name="file" id="" class=""/></p>
    							
    								<p align="left"> <input type="text" name="cat" placeholder="Enter Course Code" id="" class="wer"/></p>
    						
    						<p align="left"> 
								<select name="type[]" class="select">
    						<option value="exam">Examination</option>
    						<option value="test" selected="">Test</option>
    						</select>
    						</p>
    						
							<p align="left"> 
								<select name="session[]" class="select">
								
    						<option value="2015/2016">2015/2016</option>
    						
    						</select>
    						</p>
							
							<p align="left"> 
								<select name="semester[]" class="select">
    						<option value="First Semester">First Semester</option>
    						<option value="Second Semester" >Second Semester</option>
    						</select>
    						</p>
							
							
    					<input type="submit" value="Upload Data" class="jk" name="Import"/>
    				</form></fieldset>
        
        </div>
        <style type="text/css">
        .ggt{
			width:500px;
			 padding-left:30px;
			}
			.ftt{
				border:2px solid aqua;
				padding:10px;
				}
				.jk{
					width:200px;
					padding:10px;
					}
					.wer{
						width:400px;
						padding:10px;
						}
						.select{
							width:430px;
							
							
							}
							option{
								padding:10px;
								
								}
        
        </style>
    	</body>
    </html>
