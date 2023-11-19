<?php
function generateSlider($slides)
{
    

    foreach ($slides as $index => $slide) {
        $activeClass = ($index === 0) ? 'active' : '';

        echo '<div class="carousel-item ' . $activeClass . '">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <div class="play_btn">
                                    <button>
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <h1>' . $slide['title'] . '<br><span>' . $slide['subtitle'] . '</span></h1>
                                <p>' . $slide['description'] . '</p>
                                <a href="' . $slide['link'] . '">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="' . $slide['image'] . '" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }

    
}

$slides = [
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => '',
        'image' => 'images/slider-img.jpg'
    ],

    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => '',
        'image' => 'images/slider-img.jpg'
    ],

    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => '',
        'image' => 'images/slider-img.jpg'
    ],
    
];



?>