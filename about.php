<?php
    include 'nav.php';
?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .about-container{
        border: 5px double;
        border-radius: 10px;
        margin: 1rem;
        width: 50%;
        height: 50%; 
        padding: 35px 60px;
    }
    .profile{
        padding-bottom: 25px;
        letter-spacing: 5px;
    }
    .about-container p{
        text-align: justify;
    }
    .profile img{
        width: 15rem;
        border-radius: 50%;
        border: 5px double;
    }
    
</style>
<center>
<div class="about-container">
    <div class="profile">
        <img src="images/newprofile.jpg" alt="Picture">
        <img src="images/newprofile1.jpg" alt="Picture">
        <h2>Pranav Amreliya & Darshit Mehta</h2>
        <i>Project Leader</i>
    </div>
    <p>
    We are two dedicated partners united by a shared vision: to create a powerful, user-friendly website that delivers real value to our audience.
    <br></br>
    👨‍💻 <B><I>Darshit Mehta – </B></I>Backend Developer & Technical Architect
    Darshit specializes in backend development, ensuring the website runs smoothly and securely. His expertise in PHP, MySQL, session management, and authentication forms the backbone of our platform. From handling complex logic to optimizing performance and security, Darshit ensures that every function works flawlessly behind the scenes.
    <br></br>
    👨‍💻<B><I> Pranav Amreliya – </B></I> Frontend Developer & UI Designer
    Pranav Amreliya brings the visual and interactive elements to life. With a strong command of HTML, CSS, and JavaScript, they crafted a responsive, intuitive interface that enhances user experience. Their attention to design details ensures that the site is not only functional but also visually engaging.
    Together, we’ve built a site that reflects our combined strengths — robust backend architecture and elegant frontend design — with a focus on reliability, performance, and user satisfaction.
    </p>
</div>
</center>


<?php include_once 'footer.php'; ?>