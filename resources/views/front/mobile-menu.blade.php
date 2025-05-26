<ul class="mainmenu metismenu" id="mobile-menu-active">
    <li class="has-droupdown">
        <a href="#" class="main"><span class="fa fa-home"></span> &nbsp; Home</a>
    </li>
    <li class="has-droupdown">
        <a href="#" class="main">What We Do</a>
    </li>
    <li class="has-droupdown">
        <a href="#" class="main"><span class="fa fa-shopping-cart"></span> &nbsp; Construction Material</a>
        <?php $Categoriez = DB::table('category')->get(); ?>
        <ul class="submenu mm-collapse">
            @foreach ($Categoriez as $categories)
             <?php $SubCategories = DB::table('sub_categories')->where('category_id', $categories->id)->get(); ?>
             @if($SubCategories->count() > 0)
                <li class="sub-dropdown down">
             @else
                 <li class="#"></li>
             @endif
            
               
                
                <a href="#">{{$categories->title}}</a>
                @if($SubCategories->count() > 0)
                    <ul class="submenu third-lvl base">
                        @foreach ($SubCategories as $subcategories)
                        <li><a href="#">{{$subcategories->title}}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endforeach
           
        </ul>
    </li>
    <li class="has-droupdown">
        <a href="{{route('portfolio')}}" class="main">Projects</a>
    </li>


    
    <li>
    <a href="{{route('news-updates')}}" class="main">News Updates</a>
    </li>
    <li>
    <a href="{{url('/')}}/contact-us" class="main">Contact Us</a>
    </li>
</ul>
