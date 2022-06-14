
<div class="container-fluid footer">
        <div class="col-4 col-sm-12 col-md-4">
            <div class="panel-transparent">
                <div class="footer-heading">How it works</div>
                <div class="footer-body">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat.</p>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. </p>
                </div>
            </div>
        </div>

        <div class="col-4 col-sm-12 col-md-4 foot2">
            <div class="panel-transparent">
                <div class="footer-heading">Categories</div>
                <div class="footer-body">
                    <ul>
                        {{-- @foreach($footerCategories as $category)
                            <li>
                                <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach --}}
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-4 col-sm-12 col-md-4 foot3">
            <div class="panel-transparent">
                <div class="footer-heading">Popular Articles</div>
                <div class="footer-body">
                    <ul>
                        {{-- @foreach($popularArticles as $article)
                            <li>
                                <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">{{ $article->title }}</a>
                            </li>
                            @endforeach --}}
                            <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                            <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                            <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                            <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                            <li> <i class="fas fa-arrow-right"></i><a>ABC1</a></li>
                           
                        </ul>
                </div>
            </div>
        </div>
</div>

<!-- COPYRIGHT INFO -->
<div class="container-fluid footer-copyright marg30">
    <div class="container row">
        <div class="pull-left col-md-6">
            Copyright © 2022 KBC</a>
        </div>
        <div class="pull-right col-md-6">
            <i class="fa fa-facebook"></i> &nbsp;
            <i class="fa fa-twitter"></i> &nbsp;
            <i class="fa fa-linkedin"></i>
        </div>
    </div>
</div>
<!-- END COPYRIGHT INFO -->