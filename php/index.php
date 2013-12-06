<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Abraham Lopez Alvarez Resume</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="WOW Slider, Slideshow jQuery, Wordpress Gallery" />
			<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
			<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<?php 
$errors = '';
$myemail = 'alopez.cesun1013@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>

</head>
<body style="background-color:#d7d7d7">
	<div id="header">
		<p id="name">Abraham Lopez Alvarez </p>
		
		
	</div>
		<div class="left">
			 <a href="#Name">Name</a><br/> 
			 <a href="#AboutMe">About Me</a><br/>
			 <a href="#Experience">Experience</a> <br/>
			 <a href="#Skills">Skills</a> <br/>
			 <a href="#Education">Education</a><br/>
			 <a href="#Language">Language</a><br/> 
			 <a href="#Photos">Photos</a><br/> 
			 <a href="#Contact">Contact</a><br/>
		</div>
		<div class="right">
			<a name="Name"></a>
					<h4>Abraham Lopez Alvarez</h4>
							<strong> Date of Birth:</strong>July 19th 1983<br/>
							<strong> Place of Birth:</strong>Tijuana Baja California<br/>
							<strong> Address:</strong>7th Street # 7767, Down Town Tijuana, B.C., Mexico.<br/> 
							<strong> Zip Code:</strong>22000<br/>
							<strong> Home Number:</strong> (664) 685-43-01<br/>
							<strong> Home Number2:</strong> (664) 688-32-06<br/>
							<strong> Cell Phone Number:</strong> (044)66 43-30-91-16<br/>
							<strong> Email Address:</strong><a href="mailto:you@yourdomain.com">
																	<id="email">alopez.cesun1013@gmail.com></a><br/>
							<strong> Linked Profile:</strong><a href="http://www.linkedin.com/pub/abraham-lopez/1a/940/273">
																<id="link">Abraham Lopez's Profile></a><br/>
							<strong> Marital Status: </strong>Single<br/>
							<strong> Military Card (Mexican Army Reserve):</strong>Service Completed<br/>
						
		<hr/>
			<a name="AboutMe"></a>
				<h4>About Me</h4>
					<ul>
						<li>More than 4 years successful experience in customer service and support with recognized strengths in account retention, problem- solving and trouble-shooting, sales staff support, and planning/implementing proactive procedures and systems to avoid problems in the first place.</li>
						<li>A team player, acknowledged as Customer Service Professional.</li>
						<li>Develop plan, conduct audits and variance analyses, process payroll
						and payroll tax reports and filings, and maintain/update accurate inventories.</li>		
					</ul>
		<hr/>
			<a name="Experience"></a>
				<h4>Experience</h4>
					<ul>
						<li><strong>Border Assembly</strong><br/>
							Project Coordinator
							<ul>
								<li>Logistics Cordination</li>	
								<li>Work Order Entry</li> 
								<li>Coordination for Account Receivables</li>
								<li>Implementation of New Tecnologies</li>
								<li>Creating New Procedures</li>
								<li>Current Mapping Procedures</li>
								<li>Current procedures audit</li>
								<li>Creating presentation with proposed improved to current procedures</li>
								<li>Implementing a Continuous Improvement Culture</li>
								<li>Implementing new procedures following ( LEAN MANUFACTURING )</li>
								<li>Personel trainning ( Trainning in Spanish / English )</li>
								<li>Establish Goal oriented objectives with team leaders</li>
								<li>Operational confirmation from logistcs manager to client</li>
								<li>Work Order proyection with customer based on a previous evaluation and following the
								initial requirement ( Voice of Customer - VOC )</li>
								<li>Customer Service Care</li>
								<li>Confirmation to customer that goods have been shipped</li>
							</ul>
						<li><strong>Maquiladora CJG</strong><br/>
							Project Coordinator / Software Consultant
							<ul>
								<li>Logistics Cordination</li>	
								<li>Work Order Entry</li> 
								<li>Coordination for Account Receivables</li>
								<li>Implementation of New Tecnologies</li>
								<li>Creating New Procedures</li>
								<li>Current Mapping Procedures</li>
								<li>Current procedures audit</li>
								<li>Creating presentation with proposed improved to current procedures</li>
								<li>Implementing a Continuous Improvement Culture</li>
								<li>Personnel trainning</li>
								<li>Establish Goal oriented objectives with team leaders</li>
								<li>Operational confirmation from logistcs manager to client</li>
								<li>Customer Service Care</li>
								<li>Confirmation to customer that goods have been shipped</li>
							</ul>
						<li><strong>Dental Clinic Klinike Dentale</strong><br/>
							It Support
							<ul>
								<li>Proyect Administrator</li>
								<li>Hardware Maintenance (Preventive Care)</li>
								<li>Support Newtwork Administration</li>
								<li>Support Server Administration </li>
								<li>Assign and Create new Users</li>
								<li>Create New emails</li>
								<li>Software maintenance (installation, updating, Removing, Blocking, etc)</li> 
							</ul>
						<li><strong>Crown Transportation</strong></li>
							Project Coordinator / Software Consultant
							<ul>
								<li>Implementation of new technologies</li>
								<li>Validation of current process</li>
								<li>Six Sigma Leader</li>
								<li>Create and better current process</li> 
								<li>Maping current procedures</li>
								<li>Audit current procedures </li>
								<li>Delivered Invoices to clients</li>
								<li>Creating, Mapping more efficient procedures for Billing and collection of pending Invoices</li>
								<li>Implementation of best practices culture</li>
								<li>Lean Manufacturing</li>
								<li>Six Sigma</li>
								<li>Brain Storming</li>
								<li>Estabilsh goal oriented work schedule</li>
								<li>Customer Service</li>
							</ul>
						<li><strong>DHL Express</strong></li><br/>
							Logistics Coordinator 
							<ul>
								<li>Logistics Coordination</li>
								<li>Work Order Entry</li> 
								<li>Customer Service</li>
								<li>Data Analyst</li>
							</ul>
						<li><strong>Transportes Mexico California Mex-Cal Truckline (August 2011 to April 2013)</strong></li>
							Project Coordination <br/>
							<ul>
								<li>Coordination for Account Receivables</li>
								<li>Implementation of New Tecnologies</li>
								<li>Six Sigma Leader</li>
								<li>Creating New Procedures</li>
								<li>Current Mapping Procedures</li>
								<li>Current procedures audit</li>
								<li>Creating presentation with proposed improved to current procedures</li>
								<li>Implementing a Continuous Improvement Culture</li>
								<li>Implementing new procedures following ( LEAN MANUFACTURING )</li>
								<li>Personel trainning ( Trainning in Spanish / English )</li>
								<li>Establish Goal oriented objectives with team leaders</li>
								<li>Operational confirmation from logistcs manager to client</li>
								<li>Work Order proyection with customer based on a previous evaluation and following the
								initial requirement ( Voice of Customer - VOC )</li>
								<li>Customer Service Care</li>
								<li>Take Notes in meeting</li>
								<li>Confirmation to customer that goods have been shipped</li>
							</ul>
						<li><strong>NLP Furniture</strong></li><br/>
							Project Coordinator
							<ul>
								<li>Work Order Entry</li> 
								<li>Confirmation with Clients on Furniture Drawing with designer</li> 
								<li>Establish a gola oriented objectives with tem leaders in the production floor</li>
								<li>Confirmation with Plant manager on Production forecast</li>
								<li>Import / Export Assistant (Documentation)</li>
								<li>Gather all requiered information for customs inspection</li>
								<li>Inspection for all import goods</li>
								<li>Establish a delivery forecoast with customer to meet producction schedule</li> 
								<li>Customer service care</li>
								<li>Validation for transportation for finished goods</li>
							</ul>
						<li><strong>NLP Furniture</strong></li><br/>
							Buyer
							<ul>
								<li>Purchase Order Entry</li> 
								<li>Confirmation with Clients on Furniture Drawing with designer</li> 
								<li>Establish a gola oriented objectives with tem leaders in the production floor</li>
								<li>Confirmation with Plant manager on Production forecast</li>
								<li>Import / Export Assistant (Documentation)</li>
								<li>Gather all requiered information for customs inspection</li>
								<li>Inspection for all import goods</li>
								<li>Establish a delivery forecoast with customer to meet producction schedule</li> 
								<li>Customer service care</li>
								<li>Validation for transportation for finished goods</li>
							</ul>
						<li><strong>NLP Furniture</strong></li><br/>
							It Support
							<ul>
								<li>Hardware Maintenance (Preventive Care)</li>
								<li>Support Newtwork Administration</li>
								<li>Support Server Administration </li>
								<li>Assign and Create new Users</li>
								<li>Create New emails</li>
								<li>Software maintenance (installation, updating, Removing, Blocking, etc)</li> 
							</ul>
				</ul>	
		<hr/>
			<a name="Skills"></a>
				<h4>Skills</h4>
					<p><strong> Languages:</strong> C#, Java, CSS, IOS</p>
					<p><strong>Frameworks:</strong> .NET, Play</p>
					<p><strong>Office Activities:</strong>
						<ul>
							<li>Usage of Scanner</li>
							<li>Usage of Copy Machine</li>
							<li>Hardware Maintenance  (Preventive Care )</li>
							<li>Software maintenance (installation, updating, Removing, Blocking, etc)</li> 
							<li>Support Newtwork Administration</li>
							<li>Support Server Administration</li> 
							<li>Creating new email for users</li>
							<li>Remote desktop Support(Remote Desktop ,Team Viewer,Log me in,Join Me)</li>
						</ul>
		<hr/>
			<a name="Education"></a>
				<h4>Education</h4>
					<li><strong>Professional Education</strong><br/>
						Cesun University Tijuana, B.C., México
						<ul>
							<li>Software Development Engineering 2010-2013 (Current)<br/>
							Due to be completed by December 2013 </li>
						</ul>
					</li>
					<li><strong>Professional Education</strong><br/>
						Universidad Autónoma de Baja California  Tijuana, B.C., México
						<ul>
							<li>Electronic Engineering 2003-2004<br/>
							Only Attended 1 Year</li>
						</ul>
					</li>
					<li><strong>High School Education</strong><br/>
						CBTIS # 155  Tijuana, B.C., México
						<ul>
							<li>Technical Career “Industrial Maintenance” 1999-2002<br/>
							Only Attended 1 Year</li>
						</ul>
					</li>
					<li><strong>Specialized Computer Education</strong><br/>
						CBTIS # 155  Tijuana, B.C., México
						<ul>
							<li>Technical Career “ Industrial Maintenance” 1999-2002<br/>
							Only Attended 1 Year</li>
						</ul>
					</li>
		<hr/>
			<a name="Language"></a>
				<h4>Language</h4>
					<ul>
						<li>Spanish (Native Language)</li>
						<li>English 97% (Spoken/Written)</li>
					</ul>
		<hr/>
			<a name="Photos"></a>
				<h4>Photos</h4>
					<p>Image Galery</p>
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
						<li><img src="data1/images/anotherhorizon.jpg" alt="To see te World" title="To see te World" id="wows1_0"/></li>							<li><img src="data1/images/beach_landscape_7____sept_2009_by_pricecw_stock.jpg" alt="Walk on the beach" title="Walk on the beach" id="wows1_1"/></li>
						<li><img src="data1/images/glencarwaterfall830.jpg" alt="Nice Waterfall" title="Nice Waterfall" id="wows1_2"/></li>
						<li><img src="data1/images/gods_finger_water.jpg" alt="Let there be light" title="Let there be light" id="wows1_3"/></li>
						<li><img src="data1/images/img_0156.jpg" alt="Its true" title="Its true" id="wows1_4"/></li>
						<li><img src="data1/images/img_0355.jpg" alt="What can i say!" title="What can i say!" id="wows1_5"/></li>
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="To see te World"><img src="data1/tooltips/anotherhorizon.jpg" alt="To see te World"/>1</a>
						<a href="#" title="Walk on the beach"><img src="data1/tooltips/beach_landscape_7____sept_2009_by_pricecw_stock.jpg" alt="Walk on the beach"/>2</a>
						<a href="#" title="Nice Waterfall"><img src="data1/tooltips/glencarwaterfall830.jpg" alt="Nice Waterfall"/>3</a>
						<a href="#" title="Let there be light"><img src="data1/tooltips/gods_finger_water.jpg" alt="Let there be light"/>4</a>
						<a href="#" title="Its true"><img src="data1/tooltips/img_0156.jpg" alt="Its true"/>5</a>
						<a href="#" title="What can i say!"><img src="data1/tooltips/img_0355.jpg" alt="What can i say!"/>6</a>
					</div>
				</div>
				<span class="wsl"><a href="http://wowslider.com">jQuery Gallery</a> by WOWSlider.com v4.8m</span>
					<div class="ws_shadow">
					</div>
				</div>
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
		<hr/>
				<a name="Contact"></a>
				<h4>Contact us</h4>
					<ul>
						<?php
$action=$_REQUEST['action'];
if (!$action=="action")    /* display the contact form */
    {
    ?>
    <form  action="index.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br/>
    <input name="name" type="text" value="" size="30"/><br/>
    Your email:<br/>
    <input name="email" type="text" value="" size="30"/><br/>
    Your message:<br/>
    <textarea name="message" rows="7" cols="30"></textarea><br/>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=='name')||($email=='email')||($message=='message'))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("alopez.cesun1013@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>
						
					</ul>			
		</div>
		</div>
		<div id="footer">
			&copy; Abraham Industries |   Abraham Lopez Alvarez | Tel: (664) 330-9116
		</div>
	</body>
</html>