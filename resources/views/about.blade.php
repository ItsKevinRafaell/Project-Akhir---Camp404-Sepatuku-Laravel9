@extends('layouts.app')

@section('content')

<style>
    :root{
    --gradient:linear-gradient(90deg, #637CBB, #485E95);
}

*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection{
    background:#fff;
    color:#333;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body{
    background:#333;
}

section{
    padding:0 7%;
}

.btn{
    padding:.6rem 3rem;
    font-size: 2rem;
    margin-top: 1rem;
    cursor: pointer;
    border:none;
    background:var(--gradient);
    color:#fff;
}

.btn:hover{
    background:#fff;
    color:#333;
}

.heading{
    text-align: center;
    font-size: 3rem;
    color:#fff;
    padding:1rem;
    padding-top: 3.5rem;
    width:50rem;
    margin:0 auto;
}



.about{
    background:#222;
}

.about .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding-top: 3rem;
}

.about .row .image{
    flex:1 1 45rem;
    text-align: center;
}

.about .row .image img{
    width:85%;
    border-radius: .5rem;
}

.about .row .content{
    flex:1 1 45rem;
    padding: 2.5rem;
}

.about .row .content h3{
    font-size: 3.5rem;
    color:#fff;
}

.about .row .content p{
    font-size: 1.8rem;
    color:#eee;
    padding:1rem 0;
}

.about .row .content p i{
    padding-right: .5rem;
    color:#637CBB;
}


/* media queries  */

@media (max-width:768px){

    html{
        font-size: 55%;
    }


}

@media (max-width:500px){

    html{
        font-size: 50%;
    }
dth:90%;
    }

    .heading{
        width: auto;
    }

}
</style>

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading">about the company</h1>

<div class="row">

   

    <div class="content">
        <h3>Company That Make Best Shoes And Give Best Services</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod fugit eum adipisci dolores ipsum sunt repudiandae numquam sapiente iure.</p>
        <p> <i class="fas fa-check-circle"></i> Gives Best Quality And Price</p>
        <p> <i class="fas fa-check-circle"></i> Fast Respont </p>
    </div>
    <div class="image">
        <img src="img/company.png" alt="">
    </div>
</div>

</section>

<!-- about section ends -->



<!-- product section ends -->


@endsection