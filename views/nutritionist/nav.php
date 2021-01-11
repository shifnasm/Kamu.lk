<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/nutritionist/nav.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-menu">
                <div ><img src="../assets/images/logo.png" alt="logo" width="125px"></div>
                <div class="username">Hi Nutritionist</div>
                <div class="dropdown">
                    <button class="dropbtn"><img  src="../assets/images/user.png" alt="user" width="40px"></button>
                        <div class="dropdown-content">
                            <a href="my-profile">My Profile</a>
                            <a href="../logout.php">Log Out</a>
                        </div>
                </div>
            </div>
        </div>
        <nav class="sidebar">
            <ul>
                <li class="active"><a href="dashboard">Dashboard</a></li>
                <li>
                    <a href="#" class="food-btn">Food
                        <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="food-show">
                        <li><a href="food-add">add</a></li>
                        <li><a href="food-view">view</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="meal-btn">Meal Plans
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="meal-show">
                        <li><a href="mealplan-add">Add</a></li>
                        <li><a href="mealplan-view">View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="post-btn">Posts
                        <span class="fas fa-caret-down third"></span>
                    </a>
                    <ul class="post-show">
                        <li><a href="post-add">Add</a></li>
                        <li><a href="post-view">View</a></li>
                    </ul>
                </li>
                <li><a href="contact-admin">Contact Administrator</a></li>
           
            </ul>
        </nav>
    </div>

<script>
        $('.food-btn').click(function(){
            $('nav ul .food-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });

        $('.meal-btn').click(function(){
            $('nav ul .meal-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });

        $('.post-btn').click(function(){
            $('nav ul .post-show').toggleClass("show2");
            $('nav ul .third').toggleClass("rotate");
        });

        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
</script>
</body>
</html>
                           