@extends('layouts.app')

@section('content')
<style>
	:root {
--gradient: linear-gradient(90deg, #637cbb, #485e95);
}

* {
font-family: "Open Sans", sans-serif;
margin: 0;
padding: 0;
box-sizing: border-box;
text-decoration: none;
outline: none;
text-transform: capitalize;
transition: all 0.2s linear;
}

*::selection {
background: #fff;
color: #333;
}

html {
font-size: 62.5%;
overflow-x: hidden;
}

body {
background: #333;
}

section {
padding: 0 7%;
}

.btn {
padding: 0.6rem 3rem;
font-size: 2rem;
margin-top: 1rem;
cursor: pointer;
border: none;
background: var(--gradient);
color: #fff;
}

.btn:hover {
background: #fff;
color: #333;
}

.heading {
text-align: center;
font-size: 3rem;
color: #fff;
padding: 1rem;
padding-top: 8.5rem;
width: 50rem;
margin: 0 auto;
}

.home {
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
background: url(../images/home-img.jfif) no-repeat;
background-size: cover;
background-position: center;
background-attachment: fixed;

}

.home .image {
padding: 1rem;
flex: 1 1 40rem;
text-align: center;
}

.home .image img {
height: 70vh;
padding-top: 4rem;
}

.home .content {
padding: 1rem;
flex: 1 1 40rem;
}

.home .content h1 {
font-size: 6rem;
color: #fff;
}

.home .content p {
font-size: 1.7rem;
color: #eee;
padding: 1rem 0;
}

.core {
min-height: 100vh;
}

.core .row {
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
}

.core .row .image {
text-align: center;
flex: 1 1 30rem;
}

.core .row .image img {
height: 65vh;
padding: 3rem 0;
}

.core .row .box-container {
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
flex: 1 1 70rem;
}

.core .row .box-container .box {
margin: 2rem;
padding: 2rem;
width: 27rem;
box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
background: #444;
border-radius: 0.5rem;
}

.core .row .box-container .box:hover {
background: var(--gradient);
}

.core .row .box-container .box:hover i {
color: #fff;
}

.core .row .box-container .box h3 {
font-size: 2rem;
color: #fff;
}

.core .row .box-container .box h3 i {
color: #637cbb;
padding-right: 0.7rem;
}

.core .row .box-container .box p {
font-size: 1.3rem;
color: #eee;
padding: 1rem 0;
}

.about {
background: #222;
}

.about .row {
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding-top: 3rem;
}

.about .row .image {
flex: 1 1 45rem;
text-align: center;
}

.about .row .image img {
width: 85%;
border-radius: 0.5rem;
}

.about .row .content {
flex: 1 1 45rem;
padding: 2.5rem;
}

.about .row .content h3 {
font-size: 3.5rem;
color: #fff;
}

.about .row .content p {
font-size: 1.8rem;
color: #eee;
padding: 1rem 0;
}

.about .row .content p i {
padding-right: 0.5rem;
color: #637cbb;
}


.contact {
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding-top: 8.5rem;
padding-bottom: 4rem;
}

.contact form {
flex: 1 1 40rem;
background: #444;
padding: 3rem;
box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
}

.contact form .box {
height: 5rem;
width: 100%;
background: none;
border: none;
border-bottom: 0.1rem solid #ccc;
font-size: 2rem;
margin: 1rem 0;
color: #fff;
text-transform: none;
}

.contact form textarea {
height: 15rem;
width: 100%;
background: none;
border: none;
border-bottom: 0.1rem solid #ccc;
font-size: 2rem;
margin: 1rem 0;
color: #fff;
text-transform: none;
resize: none;
}

.contact form .box::placeholder,
.contact form textarea::placeholder {
text-transform: capitalize;
}

.contact form .box:focus,
.contact form textarea:focus {
border-color: #637cbb;
}

.contact form .btn {
width: 100%;
}

.contact .content {
flex: 1 1 40rem;
padding: 4rem;
}

.contact .content h3 {
font-size: 4rem;
color: #fff;
}

.contact .content p {
font-size: 1.4rem;
color: #eee;
padding: 1rem 0;
}

.contact .content .icons {
display: flex;
align-items: center;
}

.contact .content .icons p {
font-size: 2rem;
color: #fff;
}

.contact .content .icons i {
font-size: 2rem;
color: #637cbb;
padding-right: 1rem;
}

.footer {
background: #222;
text-align: center;
}

.footer .share {
padding: 1rem 0;
}

.footer .share h3 {
font-size: 3rem;
color: #fff;
}

.footer .share a {
font-size: 3rem;
color: #fff;
margin: 3rem 1.4rem;
}

.footer .share a:hover {
color: #637cbb;
}

.footer .credit {
padding: 2rem 1rem;
color: #fff;
background: #111;
text-align: center;
font-size: 2rem;

padding-bottom: 9rem;
}

.footer .credit a {
color: #637cbb;
}

/* media queries  */

@media (max-width: 768px) {
html {
	font-size: 55%;
}

header #menu {
	display: block;
}

header .navbar {
	position: fixed;
	top: -120%;
	left: 0;
	width: 100%;
	background: #fff;
}

header .navbar ul {
	flex-flow: column;
	padding: 2rem;
}

header .navbar ul li {
	width: 100%;
	text-align: center;
}

header .navbar ul li a {
	display: block;
	background: var(--gradient);
	margin: 1rem 0;
	padding: 1rem;
	font-size: 2.5rem;
	z-index: 0;
}

header .navbar ul li a::before {
	height: 100%;
	bottom: 0;
	z-index: -1;
	background: #333;
}

.fa-times {
	transform: rotate(180deg);
}

header .navbar.nav-toggle {
	top: 7.4rem;
}

.home .content {
	text-align: center;
}

.core .row .image {
	display: none;
}

.contact .content {
	padding: 3rem 0;
}
}

@media (max-width: 500px) {
html {
	font-size: 50%;
}

.home .content h1 {
	font-size: 4rem;
}

.home .image img {
	height: auto;
	width: 90%;
}

.heading {
	width: auto;
}

.product .box-container .box {
	flex-flow: column;
}

.product .box-container .box .image img {
	width: 85%;
	border: none;
}
}

</style>


<section class="home" id="home">

    <div class="content">
        <h1>All New For a Better You</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur modi sed delectus dolorum doloremque id vero deleniti voluptates ad magni?</p>
        <a href="#"><button class="btn">Order Now</button></a>
    </div>

    <div class="image">
        <img src="fotoproduk/stan.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- core features section starts  -->

<section class="core" id="core">

<h1 class="heading">Outstanding Core Features of The Product</h1>

<div class="row">

    
    <div class="box-container">

        <div class="box">
            <h3> <i class="fas fa-user"></i> Super Comfort</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat exercitationem quasi natus aliquid consequuntur, consectetur rerum molestiae optio doloremque.</p>
        </div>

       

        <div class="box">
            <h3> <i class="fas fa-sync-alt"></i> Best Quality & Premium </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat exercitationem quasi natus aliquid consequuntur, consectetur rerum molestiae optio doloremque.</p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-magic"></i> Cheapest Price </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat exercitationem quasi natus aliquid consequuntur, consectetur rerum molestiae optio doloremque.</p>
        </div>

    </div>

</div>

</section>

<!-- core features section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading">about the product</h1>

<div class="row">

    <div class="image">
        <img src="fotoproduk/airforce.png" alt="">
    </div>

    <div class="content">
        <h3>Best and Fashionable Shoes For Easy Life.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod fugit eum adipisci dolores ipsum sunt repudiandae numquam sapiente iure.</p>
        <p> <i class="fas fa-check-circle"></i> Super Comfort </p>
        <p> <i class="fas fa-check-circle"></i> Have Best Quality</p>
        <p> <i class="fas fa-check-circle"></i> Have Good Design</p>
        <a href="#"><button class="btn">Learn More</button></a>
    </div>

</div>

</section>



<!-- contact section starts  -->

<section class="contact" id="contact">

<form action="">

    <input class="box" type="text" placeholder="name">
    <input class="box" type="email" placeholder="your email">
    <input class="box" type="number" placeholder="your number">

    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

    <input type="submit" class="btn" value="send message">

</form>

<div class="content">

    <h3>Need Help? Don't Forget to Contact With Us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ut earum. Doloremque minus, error voluptas totam blanditiis dolores iste aliquam!</p>
    <div class="icons"> <i class="fas fa-map-marker-alt"></i> <p>Balikpapan, Indonesia - 40016</p> </div>
    <div class="icons"> <i class="fas fa-globe"></i> <p>www.yourwebsite.com</p> </div>
    <div class="icons"> <i class="fas fa-phone"></i> <p>123-456-7890</p> </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->



<!-- footer section ends -->


@endsection