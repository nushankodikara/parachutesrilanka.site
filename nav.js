const navigation_html = `
<h2 class="logo">PARACHUTE SRI LANKA</h2>

<ul class="nav-links">
    <li><a href="index.html">Home</a></li>
    <li>
        <a href="Guidline.html">Guidlines</a>
    </li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="login.html">Log In</a></li>
    <li><a href="FAQ.html">FAQ</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="nsbm.html">Community</a></li>
    <li>
        <a class="ctn" href="contact.html">Contact</a>
    </li>
</ul>

<img src="menu.png" alt="" class="menu-btn" />
`;

const navigation = document.querySelector(".navbar");

navigation.innerHTML = navigation_html;
