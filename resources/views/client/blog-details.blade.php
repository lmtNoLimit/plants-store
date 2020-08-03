<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TNGreen</title>
  <!-- Css Styles -->
  @include('client.common.assets')
</head>

<body>
  @include('client.section.humberger_menu')
  @include('client.section.header')
  @include('client.section.hero')

  <!-- Blog Details Hero Begin -->
  <section class="blog-details-hero set-bg" data-setbg="{{ asset('dist/img/banner/breadcrumb.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog__details__hero__text">
            <h2>{{$blog->title}}</h2>
            <ul>
              <li>{{ date('d/m/Y', strtotime($blog->created_at)) }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Hero End -->

  <!-- Blog Details Section Begin -->
  <section class="blog-details spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-5 order-md-1 order-2">
          <div class="blog__sidebar">
            <div class="blog__sidebar__search">
              <form action="#">
                <input type="text" placeholder="Search...">
                <button type="submit"><span class="icon_search"></span></button>
              </form>
            </div>
            <div class="blog__sidebar__item">
              <h4>Recent News</h4>
              <div class="blog__sidebar__recent">
                <a href="#" class="blog__sidebar__recent__item">
                  <div class="blog__sidebar__recent__item__pic">
                    <img src="img/blog/sidebar/sr-1.jpg" alt="">
                  </div>
                  <div class="blog__sidebar__recent__item__text">
                    <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                    <span>MAR 05, 2019</span>
                  </div>
                </a>
                <a href="#" class="blog__sidebar__recent__item">
                  <div class="blog__sidebar__recent__item__pic">
                    <img src="img/blog/sidebar/sr-2.jpg" alt="">
                  </div>
                  <div class="blog__sidebar__recent__item__text">
                    <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                    <span>MAR 05, 2019</span>
                  </div>
                </a>
                <a href="#" class="blog__sidebar__recent__item">
                  <div class="blog__sidebar__recent__item__pic">
                    <img src="img/blog/sidebar/sr-3.jpg" alt="">
                  </div>
                  <div class="blog__sidebar__recent__item__text">
                    <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                    <span>MAR 05, 2019</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7 order-md-1 order-1">
          <div class="blog__details__text">
            <img src="{{ asset('storage'.$blog->featured_image) }}" alt="" width="100%">
            {!! $blog->content !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Section End -->

  <!-- Related Blog Section Begin -->
  <section class="related-blog spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title related-blog-title">
            <h2>Các bài viết khác</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="img/blog/blog-1.jpg" alt="">
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">Cooking tips make cooking simple</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="img/blog/blog-2.jpg" alt="">
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="img/blog/blog-3.jpg" alt="">
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">Visit the clean farm in the US</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Related Blog Section End -->

  @include('client.section.footer')

  <!-- Js Plugins -->
  @include('client.common.plugin')



</body>

</html>