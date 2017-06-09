<?php
	session_start();
	
	if (isset($_SESSION['user']) || isset($_SESSION['pass']))
	{
		echo "<header>
				<img src='Media/WR_Basic.png' />
				<nav>
					<ul>
						<li><a href='index.php'>Home</a></li>
						<li><a href='updates_list.php'>Updates</a></li>
						<li><a href='/control_panel/controlpanel.php'>Control Panel</a></li>
						<li><a href='signout_submit.php'>Sign out</a></li>
					</ul>
				</nav>
			  </header>
			  <hr />";
	}
	
	else if (!isset($_SESSION['user']) || !isset($_SESSION['pass']))
	{
		echo "<header>
				<img src='Media/WR_Basic.png' />
				<nav>
					<ul>
						<li><a href='index.php'>Home</a></li>
						<li><a href='updates_list.php'>Updates</a></li>
						<li><a href='signin_form.php'>Sign in</a></li>
					</ul>
				</nav>
			  </header>
			  <hr />";
	}
?>