<style>
    /* Base styles */
    
    .swiper1-container .swiper-slide {
        width: 33.1%; /* Default width for non-mobile devices */
        box-sizing: border-box;
        padding: 10px 0; /* Adjust padding for better spacing */
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .swiper1-container .swiper-wrapper {
            flex-direction: column;
        }

        .swiper1-container .swiper-slide {
            width: 100%; /* Full width for mobile devices */
            padding: 10px 0; /* Adjust padding for better spacing */
        }

        .user_comments_user-w {
            margin-bottom: 20px; /* Add spacing between user comments */
        }

        .user_comments_user-w img {
            max-width: 100%; /* Ensure the image scales properly on mobile */
            height: auto; /* Maintain aspect ratio */
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user_comments_user-w .desc {
            font-size: 14px; /* Adjust font size for better readability on mobile */
        }
    }
</style>

<div class="recommended users">
    <div class="pc_width">
        <h2>Hear how we've helped others get their certifications</h2>
        <div class="user_comments">
            <div class="pc_width">
                <div class="swiper1-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            
                        <div class="swiper-slide">
                            <div class="user_comments_user-w">
                                <div>
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Avatar" />
                                    {{$testimonial->name}}
                                </div>
                                <div class="desc">
                                    {{$testimonial->description}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
