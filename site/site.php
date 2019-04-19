<?php
include('../inc/connection.php');
include('../inc/connection_comments.php');
include('../functions.php');
include('../inc/connection_news.php');
if (isset($_POST['comments']))
{
	$comment = $_POST['comBox'];
	
	mysqli_query($conn, "INSERT INTO comments_table SET comments ='$comment', date_posted = NOW()");
}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div id="Wrapper">



<header id="Header">

<div id="Logo">
	<a href="index.html">
  <img src="images/Logo.png"  alt="Logo"/> 
  </a>
  </div><!-- End Logo -->

<div id="Slogan">
<p>Don’t dream it. Drive it!</p>
</div><!-- End Slogan -->

</header><!-- End Header -->

<nav id="Nav">
	<ul>
    	<li><a href="../login.php">Log out</a></li>
        <li><a href="audi.html">Audi</a></li>
        <li><a href="BMW.html">BMW</a></li>
        <li><a href="mercedes.html">Mercedes</a></li>
        <li><a href="opel.html">Opel</a></li>
    </ul>
    
    <div class="social">
     <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
     <a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
     <a href="#" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
     <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>

	
</nav><!-- End Nav -->

<div class="row">
<main id="Main">
<h1>Car</h1>
<p>A car is a wheeled, self-powered motor vehicle used for transportation and a product of the automotive industry. Most definitions of the term specify that cars are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels with tyres, and to be constructed principally for the transport of people rather than goods. The year <strong>1886</strong> is regarded as the birth year of the <em>modern car</em>. In that year, German inventor <strong>Karl Benz</strong> built the <em>Benz Patent-Motorwagen</em>. Cars did not become widely available until the early <strong>20th</strong> century. One of the first cars that was accessible to the masses was the <strong>1908 Model T</strong>, an American car manufactured by the <strong>Ford Motor Company</strong>. Cars were rapidly adopted in <strong>the United States of America</strong>, where they replaced animal-drawn carriages and carts, but took much longer to be accepted in<strong> Western Europe</strong> and other parts of the world.</p>

<p>Cars are equipped with controls used for <em>driving</em>, <em>parking</em>, <em>passenger comfort</em> and <em>safety</em>, and controlling a variety of lights. Over the decades, additional features and controls have been added to vehicles, making them progressively more complex. Examples include rear <em>reversing cameras</em>, <em>air conditioning</em>, <em>navigation systems</em>, and in car entertainment. Most cars in use in the <strong>2010s</strong> are propelled by an <em>internal combustion engine</em>, fueled by deflagration of gasoline (also known as <em>petrol</em>) or <em>diesel</em>. Both fuels cause air pollution and are also blamed for contributing to <strong><em>climate change and global warming</em></strong>. Vehicles using alternative fuels such as <strong>ethanol</strong> flexible-fuel vehicles and <strong>natural gas</strong> vehicles are also gaining popularity in some countries. <strong>Electric cars</strong>, which were invented early in the history of the car, began to become commercially available in <strong>2008.</strong></p>

<p>There are costs and benefits to car use. The costs of car usage include the cost of: <em>acquiring the vehicle</em>, <em>interest payments</em> (if the car is financed), <em>repairs</em> and <em>auto maintenance</em>, <em>fuel</em>, <em>depreciation</em>, <em>driving time</em>, <em>parking fees</em>, <em>taxes</em>, and <em>insurance</em>. The costs to society of car use include: <em>maintaining roads</em>, <em>land use</em>, <em>road congestion</em>, <em>air pollution</em>, <em>public health</em>, <em>health care</em>, and disposing of the vehicle at the end of its <em>life</em>. Road traffic accidents are the <em>largest cause of injury-related deaths worldwide</em>.</p>

<p>The benefits may include on-demand <em>transportation</em>, <em>mobility</em>, <em>independence</em>, and <em>convenience</em>.The societal benefits may include: <em>economic benefits</em>, such as job and wealth creation from car production, <em>sales and maintenance</em>, <em>transportation provision</em>, <em>society well-being derived from leisure and travel opportunities</em>, and <em>revenue generation from the tax opportunities</em>. The ability for humans to move flexibly from place to place has far-reaching implications for the nature of societies. It was estimated in <strong>2014</strong> that the number of cars had risen to over <strong>1.25 billion vehicles</strong>, up from the <strong>500 million of 1986</strong>. The numbers are increasing rapidly, <em>especially in China, India</em> and other newly industrialized countries.</p>
<h2>Mass production</h2>
<p>The large-scale, production-line manufacturing of affordable cars was debuted by Ransom Olds in 1901 at his Oldsmobile factory located in  Lansing, Michigan and based upon stationary assembly line techniques pioneered by Marc Isambard Brunel at the Portsmouth Block Mills, England, in 1802. The assembly line style of mass production and interchangeable parts had been pioneered in the U.S. by Thomas Blanchard in 1821, at the Springfield Armory in Springfield, Massachusetts. This concept was greatly expanded by Henry Ford, beginning in 1913 with the world's first <em>moving</em> assembly line for cars at the Highland Park Ford Plant.</p>
<p>As a result, Ford's cars came off the line in fifteen-minute   intervals, much faster than previous methods, increasing productivity   eightfold, while using less manpower (from 12.5-man-hours to 1 hour 33   minutes). It was so successful, paint became a bottleneck. Only Japan Black would dry fast enough, forcing the company to drop the variety of colors available before 1913, until fast-drying Duco lacquer was developed in 1926. This is the source of Ford's apocryphal remark, "any color as long as it's black". In 1914, an assembly line worker could buy a Model T with four months' pay.</p>
<p>Ford's complex safety procedures—especially assigning each worker to a   specific location instead of allowing them to roam about—dramatically   reduced the rate of injury. The combination of high wages and high   efficiency is called "Fordism,"   and was copied by most major industries. The efficiency gains from the   assembly line also coincided with the economic rise of the United   States. The assembly line forced workers to work at a certain pace with   very repetitive motions which led to more output per worker while other   countries were using less productive methods.</p>
<p>In the automotive industry, its success was dominating, and quickly   spread worldwide seeing the founding of Ford France and Ford Britain in   1911, Ford Denmark 1923, Ford Germany 1925; in 1921, Citroen was the first native European manufacturer to adopt the production   method. Soon, companies had to have assembly lines, or risk going broke;   by 1930, 250 companies which did not, had disappeared.</p>
<p>Development of automotive technology was rapid, due in part to the   hundreds of small manufacturers competing to gain the world's attention.   Key developments included electric ignition and the electric self-starter (both by Charles Kettering, for the Cadillaca Motor Company in 1910–1911), independent suspension, and four-wheel brakes.</p>

</main><!-- End Main -->


<aside id="Sidebar">

<h2 style="text-align:center">News</h2>
  
<?php
mysqli_select_db($con,"posts") or die("error");

$query = mysqli_query($con,"SELECT * FROM news_table;");

while($row= mysqli_fetch_array($query)){
	
	echo '<h1 style="text-align:center">';
		echo $row['title'];
		echo '</h1>';
		echo $row['post'];
		echo "<br><br>";
		echo '<h3 style="text-align:center;">';
		echo "Posted at: ";
		echo '</h3>';
		$row_date = strtotime($row['date']);
		echo '<h4 style="text-align: center;">';
		echo date("j. F ,Y. , H:i", $row_date);
		echo '</h4>';
	
}

?>

	
  <h2 style="text-align:center">Comment</h2>
  <form action="" method ="post" name="comments">
  <textarea maxlength="460" placeholder="Enter comment here" rows="15" cols="28" name= "comBox"></textarea>
  <center><input class="btn" type="submit" name="comments" value="Comment"</input></center>
  </form>
  
</aside><!-- End Sidebar -->
</div>

<footer id="Footer">
<p>Copyright &copy; Ivan Mitic</p>
</footer><!-- End Footer -->

</div><!-- End Wrapper -->

</body>
</html>
