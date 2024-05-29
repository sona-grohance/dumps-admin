<style>
    .card-category-2 ul, .card-category-3 ul, .card-category-4 ul, .card-category-5 ul, .card-category-6 ul {
        padding: 0;
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap; /* Allows wrapping on smaller screens */
    }
    
    .card-category-2 ul li, .card-category-3 ul li, .card-category-4 ul li, .card-category-5 ul li, .card-category-6 ul li {
        list-style-type: none;
        display: inline-block;
        vertical-align: top;
        flex: 1 1 30%; /* Allows flexibility and wrapping */
    }

    .card-category-2 ul li, .card-category-3 ul li {
        margin: 10px 5px;
    }

    .card-category-1, .card-category-2, .card-category-3, .card-category-4, .card-category-5, .card-category-6 {
        font-family: sans-serif;
        margin-bottom: 45px;
        text-align: center;
    }

    .card-category-1 div, .card-category-2 div {
        display: inline-block;
    }

    .card-category-1 > div, .card-category-2 > div:not(:last-child) {
        margin: 10px 5px;
        text-align: left;
    }

    /* Basic Card */
    .basic-card {
        width: 300px;
        position: relative;
        
        -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -o-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
    }
    
    .basic-card .card-content {
        padding: 30px;
    }

    .basic-card .card-title {
        font-size: 25px;
        font-family: 'Open Sans', sans-serif;
    }

    .basic-card .card-text {
        line-height: 1.6;
    }

    .basic-card .card-link {
        padding: 25px;
        width: -webkit-fill-available;
    }

    .basic-card .card-link a {
        text-decoration: none;
        position: relative;
        padding: 10px 0px;
    }

    .basic-card .card-link a:after {
        top: 30px;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        width: 0;

        -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        -moz-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        -o-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
    }

    .basic-card .card-link a:hover:after { 
        width: 100%; 
        left: 0; 
    }
    
    .basic-card-aqua {
        background-image: linear-gradient(to bottom right, #00bfad, #99a3d4);
    }

    .basic-card-aqua .card-content, .basic-card .card-link a {
        color: #fff;
    }
        
    .basic-card-aqua .card-link {
        border-top: 1px solid #82c1bb;
    }

    .basic-card-aqua .card-link a:after {
        background: #fff;
    }

    .basic-card-lips {
        background-image: linear-gradient(to bottom right, #ec407b, #ff7d94);
    }

    .basic-card-lips .card-content {
        color: #fff;
    }

    .basic-card-lips .card-link {
        border-top: 1px solid #ff97ba;
    }

    .basic-card-lips .card-link a:after {
        background: #fff;
    }
    
    .basic-card-light {
        border: 1px solid #eee;
    }

    .basic-card-light .card-title, .basic-card-light .card-link a {
        color: #636363;
    }
        
    .basic-card-light .card-text {
        color: #7b7b7b;
    }

    .basic-card-light .card-link {
        border-top: 1px solid #eee;
    }

    .basic-card-light .card-link a:after {
        background: #636363;
    }

    .basic-card-dark {
        background-image: linear-gradient(to bottom right, #252525, #4a4a4a);
    }

    .basic-card-dark .card-title, .basic-card-dark .card-link a {
        color: #eee;
    }

    .basic-card-dark .card-text {
        color: #dcdcdcdd;
    }

    .basic-card-dark .card-link {
        border-top: 1px solid #636363;
    }

    .basic-card-dark .card-link a:after {
        background: #eee;
    }

    /* Image Card */
    .img-card {
        width: 100%;
        position: relative;
        border-radius: 20px;
        text-align: left;

        -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -o-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);        
    }

    .img-card .card-image {
        position: relative;
        margin: auto;
        overflow: hidden;
        border-radius: 5px 5px 0px 0px;
        height: 200px;
        width: 100%;
    }

    .img-card .card-image img {
        width: 100%;
        border-radius: 20px 20px 10px 10px;
        
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        transition: all 0.8s;
    }

    .img-card .card-image:hover img {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }        

    .img-card .card-text {
        padding: 0 15px 15px;
        line-height: 1.5;   
    }

    .img-card .card-link {
        padding: 20px 15px 30px;
        width: -webkit-fill-available;
    }

    .img-card .card-link a {
        text-decoration: none;
        position: relative;
        padding: 10px 0;
    }

    .img-card .card-link a:after {
        top: 30px;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        width: 0;

        -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        -moz-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        -o-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
    }

    .img-card .card-link a:hover:after { 
        width: 100%; 
        left: 0; 
    }        

    .img-card.iCard-style1 .card-title {
        position: absolute;
        font-family: 'Open Sans', sans-serif;
        z-index: 1;
        top: 10px;
        left: 10px;
        font-size: 30px;
        color: #fff;
    }
    
    .img-card.iCard-style1 .card-text {            
        color: #795548;
    }

    .img-card.iCard-style1 .card-link a {
        color: #FF9800;                
    }

    .img-card.iCard-style1 .card-link a:after {            
        background: #FF9800;
    }

    .img-card.iCard-style2 .card-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        text-align: center;
        color: #616161;
        padding: 20px;
    }

    .img-card.iCard-style2 .card-text {            
        color: #757575;
    }

    .img-card.iCard-style2 .card-link a {
        color: #795548;                
    }

    .img-card.iCard-style2 .card-link a:after {            
        background: #795548;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .card-category-2 ul, .card-category-3 ul, .card-category-4 ul, .card-category-5 ul, .card-category-6 ul {
            flex-direction: column;
            gap: 10px;
            padding: 15px;
        }

        .card-category-2 ul li, .card-category-3 ul li, .card-category-4 ul li, .card-category-5 ul li, .card-category-6 ul li {
            flex: 1 1 100%;
            max-width: 100%;
        }

        .basic-card, .img-card {
            width: 100%;
            margin-bottom: 0px;
        }
    }

    @media (max-width: 480px) {
        .card-category-2 ul li, .card-category-3 ul li, .card-category-4 ul li, .card-category-5 ul li, .card-category-6 ul li {
            margin: 5px 0;
        }

        .basic-card .card-title, .img-card .card-title {
            font-size: 20px;
        }

        .basic-card .card-text, .img-card .card-text {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 999px) {
    .card-category-2 h2 {
        color: #212121;
        padding-bottom: 18px;
        text-align: center;
        font-size: 18px;
        font-weight: 700;
        }
    }
</style>

<div class="card-category-2 pc_width">
            
            
            <h2>Future Exam and Certification in 2023</h2>
            
            <ul>
                
                
                
                <li>
                    <div class="img-card iCard-style2">
                        <div class="card-content">
                            <div class="card-image">
                               
                                <img src="https://resources.reed.co.uk/courses/coursemedia/295888/816a1e4f-fb68-460b-ab78-bc9d4ac40a2c_cover.webp"/>
                            </div>
                            
                            <span class="card-title">Cisco CCNP</span>
                            
                            <div class="card-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/moonzigg-6341937/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">moonzigg</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">Pixabay</a>
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>                    
                </li>
                <li>
                    <div class="img-card iCard-style2">
                        <div class="card-content">
                            <div class="card-image">
                               
                                <img src="https://resources.reed.co.uk/courses/coursemedia/295888/816a1e4f-fb68-460b-ab78-bc9d4ac40a2c_cover.webp"/>
                            </div>
                            
                            <span class="card-title">Cisco CCNP</span>
                            
                            <div class="card-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/moonzigg-6341937/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">moonzigg</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">Pixabay</a>
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>                    
                </li>
                <li>
                    <div class="img-card iCard-style2">
                        <div class="card-content">
                            <div class="card-image">
                               
                                <img src="https://resources.reed.co.uk/courses/coursemedia/295888/816a1e4f-fb68-460b-ab78-bc9d4ac40a2c_cover.webp"/>
                            </div>
                            
                            <span class="card-title">Cisco CCNP</span>
                            
                            <div class="card-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/moonzigg-6341937/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">moonzigg</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2715461" style="text-decoration: none">Pixabay</a>
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>                    
                </li>
                
                
                
    
               
            </ul>

        </div>