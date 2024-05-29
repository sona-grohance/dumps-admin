<div>
    <div class="banner">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        
                <div class="swiper-slide">
                    <a href="https://tb.53kf.com/code/client/10172212/1?custom_channel=seobanner" target="_blank" style="display: block">
                        <img src="{{ asset('storage/' . $slider->image) }}" data-src="{{ asset('storage/' . $slider->image) }}" alt="seobanner" class="lozad" style="width: 100%; height: 500px;">
                    </a>
                </div>
                @endforeach
    
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="partner">
        <div class="pc_width">
           @if($logo && $logo->logo_image)
            <img width="100%" src="{{ asset('storage/' . $logo->logo_image) }}" data-src="{{ asset('storage/' . $logo->logo_image) }}" class="lozad plogo" alt="Google, Amazon, Microsoft, IBM, Verizon, Alibaba, Dell, Tencent" />
            @endif
        </div>
    </div>
    @include('components.future-exam')
    @include('components.news')
    <div class="teacher">
        <div class="pc_width">
            <h2>The best way to become an expert is to learn from one</h2>
            <p>Our world-renowned instructors are some of the most experienced professionals in the industry and created our content with your success in mind.</p>
          
        </div>
    </div>

    
    @include('components.testimonial')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0/dist/lozad.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const observer = lozad();
            observer.observe();
            
            const swiper = new Swiper('.mySwiper', {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                loop: true,
            });
        });
    </script>
    
</div>
