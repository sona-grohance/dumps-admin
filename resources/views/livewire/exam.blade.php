<div>
    <div class="banner_bg" style="padding-top: 25px;">
        @if($banner)
        <div class="banner_div pc_width">
            <div class="course-landing-page__main-content course-landing-page__topic-menu dark-background-inner-text-container">
                <div class="topic-menu topic-menu-condensed udlite-breadcrumb">
                    <a class="udlite-heading-sm" href="/">Home</a>
                                        <strong>></strong>
                                        <a href="#" class="udlite-heading-sm">{!! $banner->category->category_name ?? ' ' !!}</a>
                                        @if ($type == "subcategory")
                                        <strong>></strong>
                                        <a class="udlite-heading-sm">{!! $banner->subcategory->name ?? ' ' !!}</a>
                                        @endif
                                        @if ($type == "subsubcategory")
                                        <strong>></strong>
                                        <a class="udlite-heading-sm">{!! $banner->subcategory->name ?? ' ' !!}</a>
                                        <strong>></strong>{!! $banner->subsubcategory->name ?? ' ' !!}</a>
                                        @endif
                                                            
                                                        </div>
            </div>

            <h1 class="banner_tit">{!!$banner->title ?? '&#8210;'!!}</h1>

                        <div class="banner_btnlist">
                <div class="uldiv">
                    @if($banner)
                    @foreach (explode("<p>", $banner->description_one) as $line)
                        @if (!empty(trim($line)))
                        <div class="lidiv">
                            <i class="fas fa-check icon"></i>{!! $line !!}
                        </div>
                    @endif
                    @endforeach
                    @endif
                                    </div>
                <div class="uldiv">
                    @if($banner)
                    @foreach (explode("<p>", $banner->description_two) as $line)
                        @if (!empty(trim($line)))
                        <div class="lidiv">
                            <i class="fas fa-check icon"></i>{!! $line !!}
                        </div>
                    @endif
                    @endforeach
                    @endif
                                    </div>
            </div>
                        <div class="desc">
                <a href="" class="banner_btn pointer"
                   rel="nofollow noopener" target="">Get 100% Pass Dumps</a>
            </div>
                    </div>
                    @endif
    </div>

    @if($examDetail && $examDetail->Category->examlists)
        <div class="infoBox">
        <div class="pc_width">
            <h2 class="Information">
                All {!! $examDetail->Category->category_name ?? '' !!} Exam Dumps 2024 List            </h2>
            <div class="InformationBox">
                <ul class="info-tabel">
                    <li>
                                                <div class="item item_h">CATEGORIES</div>
                                                <div class="item item_h">EXAM TRACKS</div>
                                                <div class="item item_h">EXAM QUESTION NUMBER</div>
                                                <div class="item item_h">DUMP COVERAGE</div>
                                                <div class="item item_h">100% PASS DUMPS</div>
                                                <div class="item item_h">FREE TEST</div>
                                            </li>

                                            @foreach ($examDetail->Category->examlists as $examlist)
                                                
                                        <li>
                        <!--<div class="item"></div>-->
                                                <div class="item item_p">{{$examlist->category_name}}</div>
                                                                        <div class="item item_p">
                            <a href="#">{{$examlist->exam_tracks}}</a>
                        </div>
                                                                        <div class="item item_p">{{$examlist->exam_question_number}}+</div>
                                                                        <div class="item item_p">{{$examlist->dump_coverage}} cover</div>
                                                                        <div class="item item_p">
                            <a href="{!! $examlist->pass_dump_link ?? '#' !!}" rel="nofollow noopener" target="_blank">
                                <div class="btn">Get Now</div>
                            </a>
                        </div>
                                                                        <div class="item item_p">
                            <a href="{!! $examlist->free_test_link ?? '#' !!}" class="download-btn" rel="nofollow noopener"
                               target="_blank">Test Now
                                <!--<i class="download-icon"></i>-->
                            </a>
                        </div>
                                                                    </li>
                                            @endforeach

                                       
                                    </ul>
            </div>
        </div>
    </div>
@endif    
@if($examDetail && $examDetail->announcements)
    <div class="pc_width">
    <i class="notice"></i>
    <ul id="demo_0" class="_container n_pc" >
        @foreach ($examDetail->announcements->chunk(3) as $chunk)
        <li>
            @foreach ($chunk as $notice)
            <div><span class="name">{!! $notice->title_one ?? '' !!}</span><span class="timer">{!! $notice->date ?? '' !!}</span><span>{!! $notice->title_two ?? '' !!}</span></div>
            @endforeach
        </li>
        @endforeach
    </ul>
</div>
@endif

        <!-- 建议模块 -->
        @if($examDetail)
    <h2 class="Information" id="support">{!!$examDetail->exam_title ?? '&#8210;' !!}</h2>
    <div class="support pc_width">
        {!! $examDetail->exam_description ?? '&#8210;' !!}
        <div class="support-contain">
            @if ($examDetail)
                
            <img src="{!! asset('storage/' . $examDetail->image) ?? '&#8210;' !!}" alt="{!! $examDetail->exam_code ?? '&#8210;' !!}" id="productImage">
            @endif
                        <div class="support-contain-box">
                <div class="support-contain-info">
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
                        Exam Code:						</span> <br>
                        <span class="support-contain-info-item-content">
                        {!!$examDetail->exam_code ?? '&#8210;' !!}						</span>
                    </div>
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
                            Exam Fee:						</span> <br>
                        <span class="support-contain-info-item-content">
                            {!! $examDetail->exam_fee ?? '&#8210;' !!}						</span></div>
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
                            Exam Duration: 						</span> <br>
                        <span class="support-contain-info-item-content">
							{!! $examDetail->exam_duration ?? '&#8210;' !!} 						</span>
                    </div>
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
                            Available language:						</span> <br>
                        <span class="support-contain-info-item-content">
                            {!! $examDetail->languages ?? '&#8210;' !!} 						</span>
                    </div>
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
							Exam Format:						</span> <br>
                        <span class="support-contain-info-item-content">
							{!! $examDetail->exam_format ?? '&#8210;' !!}						</span>
                    </div>
                    <div class="support-contain-info-item">
                        <span class="support-contain-info-item-label">
													</span> <br>
                        <span class="support-contain-info-item-content">
													</span>
                    </div>
                </div>
                <div class="support-contain-suggest">
                    <h2 style="font-weight:700;font-size:15px">
                                            </h2>
                                    </div>
            </div>
        </div>
        <!---->
    </div>
    @endif
    <!-- 建议模块 end-->
        <!-- faq -->
        @if ($examDetail && $examDetail->knowledge)
            
    <h2 class="Information">Some knowledge you should know about {!! $examDetail->exam_code ?? '&#8210;' !!} exam</h2>
    <div class="questionBox pc_width">
        <div role="tablist" aria-multiselectable="true" class="el-collapse">
            @foreach ($examDetail->knowledge as $knowledge)
                
                        <div class="el-collapse-item" onclick="tab(event)">
                <div role="tab">
                    <div role="button" tabindex="0" class="el-collapse-item__header">
                        <h3 class="collapseTitle">{{$loop->iteration}}.{!! $knowledge->question ?? '&#8210;' !!}</h3>
                        <i class="el-collapse-item__arrow el-icon-arrow-right"></i>
                    </div>
                </div>
                <div role="tabpanel" class="el-collapse-item__wrap">
                    <div class="el-collapse-item__content ">
                            <span class="collapseS ">
                                {!! $knowledge->answer ?? '&#8210;' !!}
<p>
	<strong></strong> 
</p>                            </span>
                    </div>
                </div>
            </div>
            @endforeach

                                </div>
    </div>
    @endif
@if($examDetail && $examDetail->service)
        <div>
        <div class="passcBox pc_width">
            <h2 class="Information">{!!$examDetail->service->title ?? '&#8210;' !!}</h2>
            {!!$examDetail->service->description ?? '&#8210;' !!}
            <div class="flex_box">
                <a class=" yellowBtn " href="">Consult {!! $examDetail->exam_code ?? ''!!} Exams Service Details</a>
            </div>
        </div>
    </div>
    @endif
    @if($reports)
        <div class="report pc_width">
        <!-- <div class="pc_width">-->
        <h2 class="Information">Latest Passing Reports from SPOTO Candidates</h2>
        <div class="pc-width">
            <div class="swiperBox" style="background:#fff;border:0;position: relative;">
                <div class="mask-background"></div>
                <div class="swiper-button-prev b-p-1"></div>
                <div class="swiper pc_width">
                    <div class="swiper-containers rpot">
                        <div class="swiper-wrapper">
                            @foreach ($reports as $report)
                                
                                                        <div class="swiper-slide">
                                <div class="imgBox">
                                    <div class="imgsss"
                                         style="background:url('{{ asset('storage/' . $report->image) }}');background-size:100% 100%;"></div>
                                    <p>{{$report->exam_code}}</p>
                                </div>
                            </div>
                            @endforeach

                             
                                                    </div>
                        <div class="swiper-pagination-report"></div>
                    </div>
                </div>
                <div class="swiper-button-next b-n-1"></div>
            </div>
        </div>
    </div>
    @endif
        <!-- 用户评论 -->
        @if($examDetail && $examDetail->stories)
    <div id="comment pc_width" class="comment">
        <h2 class="Information">Achieving Success Stories with Cisco {!! $examDetail->exam_code ?? '' !!} Dumps</h2>
        <div class="pc_width comment_contain">
            <div class="swiperBox" style="border:0;">
                <div class="swiper pc_width">
                    <div class="swiper-containers comt">
                        <div class="swiper-wrapper">
                            @foreach ($examDetail->stories as $story)
                                
                                                        <div class="swiper-slide">
                                <div class="comment_item">
                                    <div class="comment-content">
                                        {!! $story->description !!}                                  <div class="comment_item_content_tri"></div>
                                    </div>
                                    <div class="comment-user">
                                        <div class="avatar" style="background:#45b7d6">
                                            {{ substr($story->name, 0, 2) }}                                        </div>
                                        <div class="comment-info">
                                            <div>{!! $story->name !!}   </div>
                                            <span>4.9</span>
                                            <img src="{{ asset('assets/images/star_5.png')}}" alt="star"
                                                 class="star">
                                            <!--<img src="/static/img/newpage/trustpilot.png?v=1" alt="Trustpilot" class="ad">-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                       
                            @endforeach
                                                    </div>
                        <div class="swiper-pagination-comment"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($examDetail && $examDetail->Category->examDetail)

        <div class="product_relation">
        <h2 class="Information pc_width">Related Dumps</h2>
        <div class="pc-width">
            <div class="left_ctn">
                <div class="swiperBox" style="background:#fff;border:0;position: relative;">
                    <div class="mask-background"></div>
                    <div class="swiper-button-prev b-p-3"></div>
                    <div class="swiper pc_width">
                        <div class="swiper-containers rrtio">
                            <div class="swiper-wrapper">
                                @foreach($examDetail->Category->examDetail as $exam)
                                                                <div class="swiper-slide">
                                    <div class="imgBox">
                                        <a class="imgss" href="#">
                                            <div class="imgsss"
                                                 style="background:url('{{ asset('storage/' . $exam->image) }}')no-repeat;background-size:80%; background-position:center"></div>
                                        </a>
                                        <p>{{$exam->exam_code}}</p>
                                    </div>
                                </div>
                                @endforeach
                                                                
                                                            </div>
                            <div class="swiper-pagination-product"></div>
                        </div>
                    </div>
                    <div class="swiper-button-next b-n-3"></div>
                </div>
            </div>
        </div>
    </div>
       @endif
    <div>
        <div class="passItBox pc_width">
            <h2 class="Information">Limited Offer</h2>
            <p class="it">Pass Your IT Certifications In First Attempt!</p>
            <div class="timeBox">
                <div class="items">
                    <div class="day"></div>
                    <span>day</span>
                </div>
                <div class="items">
                    <div class="hour"></div>
                    <span>hours</span>
                </div>
                <div class="items">
                    <div class="minute"></div>
                    <span>minutes</span>
                </div>
                <div class="items">
                    <div class="second"></div>
                    <span>seconds</span>
                </div>
            </div>
            <div>
                <a href="https://tb.53kf.com/code/client/10172212/4?custom_channel=seo" rel="nofollow noopener"
                   target="_blank" class="limit_btn">Get Special Offers</a>
            </div>
        </div>
    </div>
   
        <!-- faq -->
        @if($examDetail && $examDetail->faqs)
    <h2 class="Information">Frequently asked questions about {!!$examDetail->exam_code ?? ''!!} dumps</h2>
    <div class="questionBox pc_width">
        <div role="tablist" aria-multiselectable="true" class="el-collapse">
            @foreach ($examDetail->faqs as $faq)
                
                        <div class="el-collapse-item" onclick="tab(event)">
                <div role="tab">
                    <div role="button" tabindex="0" class="el-collapse-item__header">
                        <h3 class="collapseTitle">{{$loop->iteration}}.{!! $faq->question ?? '' !!}</h3>
                        <i class="el-collapse-item__arrow el-icon-arrow-right"></i>
                    </div>
                </div>
                <div role="tabpanel" class="el-collapse-item__wrap">
                    <div class="el-collapse-item__content ">
                            <span class="collapseS ">
                                {!! $faq->answer ?? '' !!}        </span>
                    </div>
                </div>
            </div>
            @endforeach
                                  
                                  
                                </div>
    </div>
    @endif
    


</div>

    
