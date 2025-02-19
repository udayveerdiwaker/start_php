<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Slider HTML & CSS | CodingNepal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<style>



    .card-wrapper {
        height: auto;
        max-width: 1100px;
        margin: 20px 60px 35px;
        padding: 20px 10px;
        overflow: hidden;
    }

    .card-list {
        display: flex;
        flex-wrap: nowrap;
        padding: 0;
    }

    .card-item {
        display: block;
        padding: 18px;
        user-select: none;
        border-radius: 12px;
        text-decoration: none;
        border: 2px solid transparent;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);
        transition: 0.2s ease;
        list-style: none;
        height: 70vh;
    }

    .card-item:active {
        cursor: grabbing;
    }

    .card-image {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
    }

    .badge {
        color: #5372F0;
        width: fit-content;
        padding: 8px 16px;
        font-size: 0.95rem;
        border-radius: 50px;
        font-weight: 500;
        background: #DDE4FF;
        margin: 16px 0 18px;
    }

    .badge-designer {
        color: #B22485;
        background: #F7DFF5;
    }

    .badge-marketer {
        color: #B25A2B;
        background: #FFE3D2;
    }

    .badge-gamer {
        color: #205C20;
        background: #D6F8D6;
    }

    .badge-editor {
        color: #856404;
        background: #fff3cd;
    }

    .card-title {
        color: #000;
        font-size: 1.19rem;
        font-weight: 600;
    }

    .swiper-button-prev,
    .swiper-button-next {
        color: #5372F0;
        margin-top: -35px;
    }

    @media (max-width: 768px) {
        .card-wrapper {
            margin: 0 10px 25px;
        }

        .swiper-button-prev,
        .swiper-button-next {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .card-item {
            height: 50vh;
        }

        .card-title {
            font-size: 1rem;
        }
    }
</style>

<body>

    <div class="container swiper">
        <div class="card-wrapper">
            <!-- Card slides container -->
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <img src="mountaineer.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-designer">Mountain Hiking</p>
                    <h2 class="card-title">Experience breathtaking views and challenging trails in the mountains.</h2>
                </li>
                <li class="card-item swiper-slide">
                    <img src="samarmourya.jpg" alt="Card Image" class="card-image">

                    <p class="badge badge-developer">Forest Camping</p>
                    <h2 class="card-title">Immerse yourself in nature with a night under the stars.</h2>
                    <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                    <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="pexels.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-marketer">River Rafting</p>
                    <h2 class="card-title">Feel the thrill of navigating through rapid waters.</h2>
                </li>

                <li class="card-item swiper-slide">
                    <img src="mountaineer.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-designer">Mountain Hiking</p>
                    <h2 class="card-title">Experience breathtaking views and challenging trails in the mountains.</h2>
                </li>
                <li class="card-item swiper-slide">
                    <img src="samarmourya.jpg" alt="Card Image" class="card-image">

                    <p class="badge badge-developer">Forest Camping</p>
                    <h2 class="card-title">Immerse yourself in nature with a night under the stars.</h2>
                </li>
                <li class="card-item swiper-slide">
                    <img src="pexels.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-marketer">River Rafting</p>
                    <h2 class="card-title">Feel the thrill of navigating through rapid waters.</h2>
                </li>

            </ul>

            <div class="swiper-pagination"></div>

            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper('.card-wrapper', {
            loop: true,
            spaceBetween: 30,

            // Pagination bullets
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Responsive breakpoints
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>

</html>