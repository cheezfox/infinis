<html lang="en">
    <head>
        <title>Home | INFINIS</title>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="javascript.js"></script>
		<script src="jQuery.js"></script>
    </head>
    <body class="page_index">
        <header>
            <nav>
                <div id="topBar"></div>
                <ul id="nav_desktop">
                    <a href="index.html"><li id="nav_home">INFINIS</li></a>
                    <a href="matches.html"><li id="nav_matches">Matches</li></a>
                    <a href="players.html"><li id="nav_players">Players</li></a>
                    <a href="events.html"><li id="nav_events">Events</li></a>
                    <a href="news.html"><li id="nav_news">News</li></a>
                    <a href="about.html"><li id="nav_about">About</li></a>
                    <a href="javascript:navLogin()"><li id="nav_login">Login <img src="assets/default-user.png"></li></a>
                </ul>
				<button onclick="navMobile()">&#9776;</button>
				<ul id="nav_mobile">
                    <a href="home.html"><li id="mnav_home">INFINIS</li></a>
                    <a href="matches.html"><li id="mnav_matches">Matches</li></a>
                    <a href="players.html"><li id="mnav_players">Players</li></a>
                    <a href="events.html"><li id="mnav_events">Events</li></a>
                    <a href="news.html"><li id="mnav_news">News</li></a>
                    <a href="about.html"><li id="mnav_about">About</li></a>
                    <a href="javascript:navLogin()" id="mnav_login"><li>Login</li></a>
					<div id="nav_background"></div>
                </ul>
            </nav>
            <div id="vid_text">
                <h2>Welcome to</h2>
                <h1>INFINIS</h1>
                <h3>Dota 2 League</h3>
				<button onclick="location.href='beta.html'"><p>Get your Beta Key</p></button>
            </div>
            <video autoplay loop muted><source src="assets/home.mp4"></video>
			<img src="assets/background-mobile.jpg" id="mobile_background">
            <div id="bottomBar"></div>
            <div id="bottomBar2"></div>
        </header>
		<div id="page_login">
			<form id="login_form">
				<h2>Login</h2>
				<p>Username</p><input type="text" id="login_username"><br>
				<p>Password</p><input type="password" id="login_password"><br>
				<button onclick="login()">Log in</button>
			</form>
			<a href="javascript:closeLogin()"><div id="login_background"></div></a>
		</div>
        <main>
            
        </main>
        <footer>
            <div id="topBar"></div>
            <h2>INFINIS</h2>
            <p>Thoughtbox Productions &copy; 2018 | Beta v1.0.0</p>
        </footer>
    </body>
</html>