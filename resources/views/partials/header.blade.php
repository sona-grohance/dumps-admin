
<div class="nav_ctn">
    
    <div class="pc_width flex_box" style="justify-content:space-between">
        <div class="left_items">
            <a href="/">
                <img width="135" class="logo" src="{{ asset('assets/images/logo.png')}}" alt="Logo">
            </a>
        </div>
        <div class="item one_menu">
            <a href="/">
                <img height="20" width="22" src="{{ asset('assets/images/home.png')}}" alt=""></img>
                <span style="vertical-align: middle;">Home</span></a>
            <ul class="two_menu">
            </ul>
        </div>
        @foreach ($categories as $category)
            
        <div class="item one_menu">
            <a href="{{route('exam', ['type' => 'category', 'slug' => $category->slug])}}">
                {{$category->category_name}} </a>
            <ul class="two_menu">
                @foreach ($category->subcategories as $subcategory)
                <li class="two_item">
                    <a href="{{route('exam', ['type' => 'subcategory', 'slug' => $subcategory->slug])}}">{{$subcategory->name}}</a>
                    <ul class="three_menu">
                        @foreach ($subcategory->subsubcategories as $sub)
                        <li><a href="{{route('exam', ['type' => 'subsubcategory', 'slug' => $sub->slug])}}">{{$sub->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach

            </ul>
        </div>
        @endforeach

        <div class="item one_menu">
            <a href="cisco.php">News</a>
            <ul class="two_menu">
            </ul>
        </div>


    </div>
</div>