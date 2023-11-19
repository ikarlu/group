<?php
function generateTestimonial($testimonials)
{
    

    foreach ($testimonials as $index => $testimonial) {
        
        $activeClass = ($index === 0) ? 'active' : '';

        echo '<div class="carousel-item ' . $activeClass . '">
        <div class="box">
          <div class="client_info">
            <div class="client_name">
              <h5>
                ' . $testimonial['name'] . '
              </h5>
              <h6>
              ' . $testimonial['designation'] . '
              </h6>
            </div>
            <i class="fa fa-quote-left" aria-hidden="true"></i>
          </div>
          <p>
          ' . $testimonial['content'] . '
          </p>
        </div>
      </div>';
    }

    
}

$testimonials = [
    [
        'name' => 'Morijorch',
        'designation' => 'Default model text',
        'content' => 'Editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various'
    ],
    [
        'name' => 'Rochak',
        'designation' => 'Default model text',
        'content' => 'Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy.'
    ],
    [
        'name' => 'Brad Johns',
        'designation' => 'Default model text',
        'content' => 'Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'Lorem Ipsum\' will uncover many web sites still in their infancy. Various'
    ],
];



?>