<?php

$treatment = [

    [
        'icon' => 'images/t1.png',
        'title' => 'Nephrologist Care',
    ],

    [
        'icon' => 'images/t2.png',
        'title' => 'Eye Care',
    ],

    [
        'icon' => 'images/t3.png',
        'title' => 'Pediatrician Clinic',
    ],

    [
        'icon' => 'images/t4.png',
        'title' => 'Parental Care',
    ],

];




function generateTeams() :void {

    $teams = [

        [
            'icon' => 'images/team1.jpg',
            'title' => 'Hennry',  
        ],
    
        [
            'icon' => 'images/team2.jpg',
            'title' => 'Jenni',  
        ],
    
        [
            'icon' => 'images/team3.jpg',
            'title' => 'Morco',  
        ],
    
    ];

    foreach ($teams as $team) {

       echo '<div class="item">
        <div class="box">
          <div class="img-box">
            <img src="' . $team['icon'] .  '" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              ' . $team['title'] . '
            </h5>
            <h6>
              MBBS
            </h6>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>';
    }

}