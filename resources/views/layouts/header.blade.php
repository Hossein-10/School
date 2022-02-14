
<style>
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #282d32;
        overflow: hidden;
    }

    .auth
    {
        float: right !important;
        padding-right: 10px !important;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        padding-right: 50px;
    }

    /* Add an active class to highlight the current page */
    .active {
        /*background-color: white;*/
        color: white;
    }

    /* Hide the link that should open and close the topnav on small screens */
    .topnav .icon {
        display: none;
    }

    /* Dropdown container - needed to position the dropdown content */
    .dropdown {
        float: left;
        overflow: initial;
    }

    /* Style the dropdown button to fit inside the topnav */
    .dropdown .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
        display: flex;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Style the links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Add a dark background on topnav links and the dropdown button on hover */
    /*.topnav a:hover, .dropdown:hover .dropbtn {*/
    /*    background-color: #555;*/
    /*    color: white;*/
    /*}*/

    /* Add a grey background to dropdown links on hover */
    /*.dropdown-content a:hover {*/
    /*    background-color: #282d32;*/
    /*    color: white;*/
    /*}*/

    /*!* Show the dropdown menu when the user moves the mouse over the dropdown button *!*/
    /*.dropdown:hover .dropdown-content {*/
    /*    display: block;*/
    /*}*/

    /*!* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) *!*/
    /*@media screen and (max-width: 600px) {*/
    /*    .topnav a:not(:first-child), .dropdown .dropbtn {*/
    /*        display: none;*/
    /*    }*/
    /*    .topnav a.icon {*/
    /*        float: right;*/
    /*        display: block;*/
    /*    }*/
    /*}*/

    /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
    /*@media screen and (max-width: 600px) {*/
    /*    .topnav.responsive {position: relative;}*/
    /*    .topnav.responsive a.icon {*/
    /*        position: absolute;*/
    /*        right: 0;*/
    /*        top: 0;*/
    /*    }*/
    /*    .topnav.responsive a {*/
    /*        float: none;*/
    /*        display: block;*/
    /*        text-align: left;*/
    /*    }*/
    /*    .topnav.responsive .dropdown {float: none;}*/
    /*    .topnav.responsive .dropdown-content {position: relative;}*/
    /*    .topnav.responsive .dropdown .dropbtn {*/
    /*        display: block;*/
    /*        width: 100%;*/
    /*        text-align: left;*/
    /*    }*/

    /*}*/

</style>

<div class="topnav" id="myTopnav">
    <a style="color: white; padding-right: 160px;">MEHRGAN HIGHT SCHOOL</a>
    <a href="" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
    <a href="#about">About</a>
    <a class="auth" href="/login">Login</a>
    <a class="auth" href="/register">Sign up</a>
    <div class="dropdown" style="float: right !important;">
        <button class="dropbtn">Info
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
{{--    <label class="auth" title="search"  >--}}
{{--        <input type="text" name="search" style="margin-top: 12px;  ">--}}
{{--    </label>--}}

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
