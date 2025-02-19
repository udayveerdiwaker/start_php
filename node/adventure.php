<?php
include 'header.php';
?>



<img src="stywo.jpg" class="img-fluid img" alt="Responsive image">
<!-- Home Section -->
<section id="home">
    <div class="container ">
        <div class="text-start">
            <p class="text-black">
            <h3><b>The Great Outdoor</b></h3>
            </p>
            <h1 class="display-1">Adventure</h1>
            <p class="text-secondary">
            <h3>Adventure can be the feeling of going outdoors and engaging in a new activity.</h3>
            </p>
            <a href="book.php"><button type="button" class="btn btn-outline-info">Book Now</button></a>
            <a href="sign.php"><button type="button" class="btn btn-outline-info">Login Now</button></a>
        </div>
    </div>
</section>
<section id="about" class="about-section text-center">
    <div class="container">
        <h1>About Us</h1>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="norway.jpg" alt="Adventure" class="img-fluid hover-effect ">
            </div>
            <div class="col-md-6">
                <h2>Welcome to Our Adventure World!</h2>
                <p>
                    At Adventure Quest, we believe that life is an adventure waiting to be experienced. From breathtaking treks
                    to thrilling outdoor escapades, our mission is to inspire you to explore the world like never before. Whether
                    you're seeking the rush of a mountain hike or the serenity of a tranquil forest, we've got something for everyone.
                    Join us and embark on your next adventure today!
                </p>
            </div>
        </div>
    </div>
</section>
<!-- destinations section -->
<section id="destinations" class="py-5">
    <div class="container swiper">
        <h2 class="text-center mb-4">destinations</h2>
        <div class="row g-4 card-wrapper">
            <div class="col-md-6 col-lg-4 hover-effect">
                <div class="card adventure-card">
                    <img src="mountaineer.jpg" class="card-img-top" alt="Adventure 1">
                    <div class="card-body">
                        <h5 class="card-title">Mountain Hiking</h5>
                        <p class="card-text">Experience breathtaking views and challenging trails in the mountains.</p>
                        <!-- <a href="#" class="btn btn-outline-info">Learn More</a> -->
                        <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 hover-effect">
                <div class="card adventure-card">
                    <img src="samarmourya.jpg" class="card-img-top" alt="Adventure 2">
                    <div class="card-body">
                        <h5 class="card-title">Forest Camping</h5>
                        <p class="card-text">Immerse yourself in nature with a night under the stars.</p>
                        <!-- <a href="#" class="btn btn-outline-info">Learn More</a> -->
                        <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 hover-effect">
                <div class="card adventure-card">
                    <img src="pexels.jpg" class="card-img-top" alt="Adventure 3">
                    <div class="card-body">
                        <h5 class="card-title">River Rafting</h5>
                        <p class="card-text">Feel the thrill of navigating through rapid waters.</p>
                        <!-- <a href="#" class="btn btn-outline-info">Learn More</a> -->
                        <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- booking & packages section-->
<section id="booking-packages">
    <div class="container">
        <h2 class="text-center">booking & packages</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="package img-fluid hover-effect">
                    <img src="kaiwalya.jpg" alt="Adventure Package 1">
                    <h3>Includes 3 nights Adventure Package</h3>
                    <p>Includes 3 nights, guided tours, and more.</p>
                    <a href="#" class="btn btn-outline-info">Book Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="package img-fluid hover-effect">
                    <img src="altay.jpg" alt="Adventure Package 2">
                    <h3>Experience luxury Adventure Package</h3>
                    <p>Experience luxury and adventure combined.</p>
                    <a href="#" class="btn btn-outline-info">Book Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="package img-fluid hover-effect">
                    <img src="kadaaran.jpg" alt="Adventure Package 3">
                    <h3>weekend Adventure Package</h3>
                    <p>A weekend getaway with thrilling activities.</p>
                    <a href="#" class="btn btn-outline-info">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="contact section ">
    <div class="container section-title text-center" data-aos="fade-up">
        <h2 class="abo">Contact Use</h2>
        <p>Contact me and I help you.</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-7">
                <div>
                    <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Your Name</label>
                                <input type="text" name="name" id="name-field validationCustom01" class="form-control" required="">
                                <div class="valid-feedback">
                                    Looks Good.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="number-field" class="pb-2">Contact</label>
                                <input type="text" minlength="0" maxlength="10" class="form-control" name="number" id="number-field validationCustom02" required="">
                                <div class="invalid-feedback">
                                    Please Fill Your Contact Number.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="email-field" class="pb-2">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field validationCustom03" required="">
                                <div class="invalid-feedback">
                                    Please Fill Your Email.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field validationCustom04" required="">
                                <div class="invalid-feedback">
                                    Please Write Your Subject.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="9" id="message-field validationCustom05" required=""></textarea>
                                <div class="invalid-feedback">
                                    Please Write Your Massage.
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-info" name="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="info-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.280109696426!2d78.28416936955642!3d30.090079658806705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e06f6a6281d%3A0x76564b96e2aa96f1!2sAvas%20Vikas%20Colony%2C%20Rishikesh%2C%20Uttarakhand%20249201!5e1!3m2!1sen!2sin!4v1724390545146!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 430px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Process your PHP logic here, e.g., form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $number = htmlspecialchars($_POST["number"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    echo "<script>alert('Thank you $name Your message has been successfully submitted I We will get back to you shortly.');</script>";
}
?>