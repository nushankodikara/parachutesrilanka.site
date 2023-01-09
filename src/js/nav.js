// Navbar HTML

const nav_html = `
            <input
				type="checkbox"
				id="check" />
			<label class="logo">PARACHUTE SRI LANKA</label>
			<label
				for="check"
				class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<ul>
				<li>
					<a
						href="index.php"
						>Home</a
					>
				</li>
				<li><a href="Guideline.html">Guidelines</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="login.html">Log In</a></li>
				<li><a href="FAQ.html">FAQ</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="nsbm.html">Community</a></li>
				<li><a href="/clientArea">Client Area</a></li>
				<li>
					<a
						class="ctn"
						href="contact.html"
						>Contact</a
					>
				</li>
			</ul>
`;

// Insert the HTML into the DOM nav.navbar

const nav = document.querySelector("nav.navbar");
nav.innerHTML = nav_html;

// Footer HTML

const footer_html =`
            <p>Copyright © 2022 Parachute Sri Lanka | parachutesrilanka@gmail.com </p>
`;

// Insert the HTML into the DOM section.footer

const footer = document.querySelector("section.footer");
footer.innerHTML = footer_html;
