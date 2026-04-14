<?php
    
    include 'dbconfig.php';
    
    include 'nav.php'; ?>
       
       <div>
            <source align="center" src="Video/intro.mp4" type="video/mp4">
            <video style="padding: 5rem -25rem;" autoplay muted loop id="myVideo">
                <source src="Video/intro.mp4" type="video/mp4">
            </video>
        </div>
        
    

    <!-- Body of the home page -->
    <!-- product main and carousel-->
      <div class="pmain">
        <div class="product" id="product">
            <h3>Products</h3>
            <ul>
                <li><i><a href="all.php?type=phones">Phones</a></i></li><hr>
                <li><i><a href="all.php?type=Tablet">Tab's</a></i></li><hr>
                <li><i><a href="all.php?type=laptop">Laptop</a></i></li><hr>
                <li><i><a href="all.php?type=airpods">Airpods</a></i></li><hr>
                <li><i><a href="all.php?type=accessories">Accessories</a></i></li><hr>
            </ul>
        </div>
        
        <div class="carousel-container">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <div class="product-scroll">
                <div class="myslide" draggable="true">
                    <a href="all.php?type=guitar"><img src="images/16_Showcase.png" alt="Guitars"></a>
                </div>
                <div class="myslide" draggable="true">
                    <a href="all.php?type=drum"><img src="images/16pro_Showcase.png" alt="Drums"></a>
                </div>
                <div class="myslide" draggable="true">
                    <a href="all.php?type=Keyboard"><img src="images/17air_Showcase.png" alt="Keyboards"></a>
                </div>
                <div class="myslide" draggable="true">
                    <a href="all.php?type=midi"><img src="images/17pro_Showcase.png" alt="MIDI"></a>
                </div>
                <div class="myslide" draggable="true">
                    <a href="all.php?type=mic"><img src="images/17_Showcase.png" alt="Microphones"></a>
                </div>
            </div>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <!-- Add navigation dots -->
            <div class="carousel-dots">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div> <!-- product main div end -->
  
<div class="texts">
            <h1>Get Your Groove On with Apple</h1><br>
            <p><b><I>“Apple’s goal isn’t to make money. Our goal is to design and develop and bring to market good products.”</B></I></p>
            <a href="about.php"><button>About Us</button></a>
        </div>

    <!--Featured products-->
    <div class="featured">
        <h2>Trending Items</h2>
        <section class="featured_products">
            <?php 
            $sql = mysqli_query($conn,"SELECT * FROM product WHERE featured = 'Remove'");
                if(mysqli_num_rows($sql) > 0){
                
                while($row = mysqli_fetch_assoc($sql)){ 
                    $img = $row['img_url'];
                    $name = $row['product'];
                    $price = $row['price'];
                    $id = $row['pid'];
                    ?>
                    
            <div class="featured_product">
                <a href="view_product.php?id=<?=$id?>"><img src="images/<?=$img?>"></a>
                <p><?=$name?>
                    <br>
                    <?php $check = mysqli_query($conn,"SELECT * FROM sale WHERE pid = $id");
                    if(mysqli_num_rows($check) == 0){?>
                        <p><?=$price?></p>
                    <?php }else{
                        $sale = mysqli_fetch_assoc($check);
                        ?>
                        <p><?=$sale['sale_amt']?></p>
                    <?php }?>
                    
                </p>
                <form action="buy.php?id=<?=$id?>&type=product" method="post">
                    <input type="submit" value="Buy Now" name="buy" class="buy-btn">
                    <input type="submit" value="Add To Cart" name="cart" class="cart-btn">
                </form>
            </div>
                <?php }}?>
            
        </section><!-- featured products end-->
    </div>
    <!--featured end-->
    <hr>
    <!-- Trending items -->
    <div class="trending">
        <h2>For sale</h2>
        <section class="trend">
            <?php 
                $query = mysqli_query($conn, "SELECT * FROM product JOIN sale ON product.pid = sale.pid");
                while($row = mysqli_fetch_assoc($query)){ 
                    $img = $row['img_url'];
                    $name = $row['product'];
                    $price = $row['price'];
                    $id = $row['pid'];
                    $sale = $row['sale_amt'];
            ?>
            <div class="trending_products">
            <a href="view_product.php?id=<?=$id?>"><img src="images/<?=$img?>"></a>
                <p><?=$name?>
                    <br>
                    <p><?=$sale?> <strike><?=$price?></strike></p>
                </p>
                <form action="buy.php?id=<?=$id?>&type=product" method="post">
                    <input type="submit" value="Buy Now" name="buy" class="buy-btn">
                    <input type="submit" value="Add To Cart" name="cart" class="cart-btn">
                </form>
            </div>
                    <?php }?>    
        </section><!-- trending product end-->
    </div>
    <!-- Footer at the end of the page -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <?php
    if(isset($_POST['send'])){
            if(empty($_SESSION['username'])){
                echo '<script> var msg = confirm("Please login to contact us!");
                    if(msg == true){
                        location.assign("login/login.php");
                    }</script>';
            }
        else{
            if(empty($_POST['message'])){
                echo '<script> alert("Please enter a message to continue");</script>';
            }
            else{
                $username = $_SESSION['username'];
                $msg = $_POST['message'];
                $message = mysqli_query($conn,"INSERT INTO message(msg,username) VALUES('$msg','$username')");
                if($message){
                    echo '<script> alert("Inserted successfully!");</script>';
                }
                else{
                    echo '<script> alert("Something went wrong!");</script>';
                }
            }
        }
        
    }
?>
<script>
let slideIndex = 0;
const slides = document.getElementsByClassName("myslide");
const dots = document.getElementsByClassName("dot");
let slideTimer;
let dragStartX = 0;
let dragEndX = 0;

// Update dots
function updateDots() {
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    dots[slideIndex - 1].classList.add('active');
}

function showSlides() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
    }
    
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    slides[slideIndex - 1].classList.add('active');
    updateDots();
    
    slideTimer = setTimeout(showSlides, 5000);
}

// Manual navigation
function plusSlides(n) {
    clearTimeout(slideTimer);
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
    }
    
    slideIndex += n;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    
    slides[slideIndex - 1].classList.add('active');
    updateDots();
    
    slideTimer = setTimeout(showSlides, 5000);
}

// Navigate to specific slide
function currentSlide(n) {
    clearTimeout(slideTimer);
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
    }
    
    slideIndex = n;
    slides[slideIndex - 1].classList.add('active');
    updateDots();
    
    slideTimer = setTimeout(showSlides, 5000);
}

// Drag functionality
const carousel = document.querySelector('.carousel-container');

carousel.addEventListener('dragstart', (e) => {
    dragStartX = e.clientX;
    clearTimeout(slideTimer);
});

carousel.addEventListener('dragend', (e) => {
    dragEndX = e.clientX;
    if (dragEndX < dragStartX - 50) { // Dragged left
        plusSlides(1);
    } else if (dragEndX > dragStartX + 50) { // Dragged right
        plusSlides(-1);
    }
});

// Touch functionality for mobile
carousel.addEventListener('touchstart', (e) => {
    dragStartX = e.touches[0].clientX;
    clearTimeout(slideTimer);
});

carousel.addEventListener('touchend', (e) => {
    dragEndX = e.changedTouches[0].clientX;
    if (dragEndX < dragStartX - 50) { // Swiped left
        plusSlides(1);
    } else if (dragEndX > dragStartX + 50) { // Swiped right
        plusSlides(-1);
    }
});

// Pause on hover
carousel.addEventListener('mouseenter', () => {
    clearTimeout(slideTimer);
});

carousel.addEventListener('mouseleave', () => {
    slideTimer = setTimeout(showSlides, 5000);
});

// Start slideshow
if (slides.length > 0) {
    slideIndex = 1;
    slides[0].classList.add('active');
    updateDots();
    slideTimer = setTimeout(showSlides, 5000);
}
</script>

</body>
</html>