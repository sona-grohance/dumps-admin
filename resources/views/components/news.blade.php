<style>
    .news-img img{
        border-radius: 20px;
    }
    
    </style>
    @if($news)
<div class="news pc_width">
    <h2>Latest News</h2>
    <div class="content flexBox">
                @foreach($news as $news)
            <a href="#" class="item">
                    <div class="news-img">
                        <img alt="JobsofCCNA.png" height="" width="100%" src="{{ asset('storage/' . $news->image) }}" class="lozad" />
                    </div>
                    <p class="title">{{$news->title}}</p>
                    {!!$news->description!!}
                </a>
                @endforeach
            </div>
</div>
@endif