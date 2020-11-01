<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineCafe Author</title>
    <link rel="stylesheet" href="author.css">
    <script>function toggleSidebar(ref)
        {
            document.getElementById("sidebar").classList.toggle('active');
        }</script>
</head>
<body>
<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar(this)">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="list">
        <div class="item"><a href="" class="d"> Home </a></div>
        <div class="item"><a href="author.html" class="d">Profile</a> </div>
        <div class="item">Earning</div>
        <div class="item"><a href = "../chat-app/index.html"> connect TO user </a></div>
        <div class="item"><a href="author.html" class="d"> Logout</a></div>
    </div>
</div>
<header>
    <h1 class="a">Dashboard</h1>
</header>
<div class="containerflex">
    <div class="child1">
        <h3 class="a"> Basic information</h3>
        <div>
            <div class="container">
                <form action="action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="mname">Middle Name</label>
                    <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="Gender">Gender</label>
                    <select id="Gender" name="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Rather not say">Rather not say</option>
                    </select>
                    <label for="Qualification">Qualification</label>
                    <select id="Qualification" name="Qualification">
                        <option value="Intermediate">Intermediate</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Post-Graduate">Post-Graduate</option>
                    </select>

                </form>
            </div>

        </div>
    </div>
    <div class="child1">
        <h3 class="a">Tell Us About You</h3>
        <div>
            <div class="container">
                <form action="action_page.php">

                    <label for="Experience">Experience</label>
                    <textarea id="Experience" name="Experience" placeholder="Write about yourself..." style="height:350px"></textarea>

                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <ul>
        <li class="fot_lft"><a target="_blank" href=" /aboutus/  " class="d">About Us</a></li>
        <li class="fot_lft"><a target="_blank" href=" /contactus/  " class="d">Contact Us</a></li>
        <li class="fot_lft"><a target="_blank" href=" /privacypolicy/  " class="d">Privacy Policy</a></li>
        <li class="fot_lft"><a target="_blank" href=" /termsandconditions/  " class="d">Terms &amp; Conditions</a></li>
    </ul>
    <h4 class="copyright">&copy; copywrite 2020 by DGNRA</h4>
</footer>
</div>
</body>
</html>
