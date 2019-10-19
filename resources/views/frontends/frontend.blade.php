@extends("layouts.frontend")

@section("content")

    <!-- ... ABOUT ME ... -->
    <section class="about-me " id="about-me">
        <div class="container">
            <div class="about-text text-center">
                <h2>salm<span>an rahman</span> auvi</h2>
                <h3>{{$user->about->profession}}</h3>
            </div>

            <!-- ... about left ... -->
            <div class="row">
                <div class="about-left col-md-5 col-sm-12 col-xs-12">
                    <div class="my-picture">
                        <a href="#"><img class="img-responsive" src="{{asset($user->about->profile)}}" alt="{{$user->name}}"></a>
                    </div>
                    <div class="personal-text">
                        <h3>per<span>sonal inform</span>ation</h3>
                        <h4>Name : </h4>
                        <h5>{{$user->name}}</h5>
                        <h4>email : </h4>
                        <h5>{{$user->email}}</h5>
                    </div>
                </div>

                <!-- ... about right ... -->
                <div class="about-right col-md-7 col-sm-12 col-xs-12">
                    <div class="about-right-text">
                        <h3>{{$user->name}}</h3>
                        <h4>{{$user->about->profession}}</h4>
                        <p>{!! $user->about->about_me !!}</p>
                    </div>
                    <!-- ... accordion jquery plugin ... -->
                    <div class="fixed-answer">
                        @foreach($user->faqs as $faq)
                        <h4 class="text-center">{{$faq->question}}</h4>
                        <div><p>{!! $faq->answer !!}</p></div>
                            @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... MY SERVICES ... -->
    <section class="my-services" id="services">
        <div class="image-noise">
            <div class="container  wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s">

                <h2 class="text-center">what i offer</h2>

                <div class="service-offer">
                    <div class="row">
                        @foreach($user->service as $service)
                        <div class="wordpress  col-md-3 col-sm-6 col-xs-12">
                            {!! $service->icon !!}
                            <h4>{{$service->title}}</h4>
                            <p>{!! $service->description !!}</p>
                        </div>
                            @endforeach


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ... MY WORKS ... -->
    <section class="my-works" id="portfolio">
        <div class="container">
            <h2 class="text-center">M<span>y wor</span>ks</h2>

            <!-- ... mixit up plugin ... -->
            <div class="portfolio">
                <div class="portfolio-nav">
                    <!-- ... responsive menu .... -->
                    <div class="my-menu-hider image-noise">

                        <a href="#">Catagory<i class="fa fa-bars"></i></a>
                    </div>

                    <ul>
                        <li><a href="#" class="filter" data-filter="*" >All</a></li>
                        <li><a href="#" class="filter" data-filter=".ecommerce" > Ecommerce</a></li>
                        <li><a href="#" class="filter" data-filter=".landing" > Landing</a></li>
                        <li><a href="#" class="filter" data-filter=".blog" > Blog</a></li>
                        <li><a href="#" class="filter" data-filter=".institution" >Institution</a></li>
                    </ul>
                </div>

                <div class="filtering-content">
                    <div class="row">
                        <!-- ...ecommerce ... -->
                        <div class="mix ecommerce">
                            <a href="assets/ecommerce1/index.html"><img class="img-responsive" src="assets/ecommerce1/ecommerce1.jpg" alt="Ecommerce 1"></a>
                        </div>

                        <div class="mix ecommerce">
                            <a href="assets/ecommerce2/index.html"><img class="img-responsive" src="assets/ecommerce2/ecommerce2.jpg" alt="Ecommerce 2"></a>
                        </div>

                        <div class="mix ecommerce">
                            <a href="assets/ecommerce3/index.html"><img class="img-responsive" src="assets/ecommerce3/ecommerce3.jpg" alt="Ecommerce 3"></a>
                        </div>

                        <!-- ... landing page ... -->

                        <div class="mix landing">
                            <a href="assets/landing1/index.html"><img class="img-responsive" src="assets/landing1/landing1.jpg" alt="landing 1"></a>
                        </div>



                        <!-- ... blog page ... -->

                        <div class="mix blog">
                            <a href="assets/blog1/index.html"><img class="img-responsive" src="assets/blog1/blog1.jpg" alt="blog 1"></a>
                        </div>

                        <div class="mix blog">
                            <a href="assets/blog2/index.html"><img class="img-responsive" src="assets/blog2/blog2.jpg" alt="blog 2"></a>
                        </div>

                        <div class="mix blog">
                            <a href="assets/blog3/index.html"><img class="img-responsive" src="assets/blog3/blog3.jpg" alt="blog 3"></a>
                        </div>


                        <!-- ... institution page ... -->

                        <div class="mix institution ">
                            <a href="assets/institution1/index.html"><img class="img-responsive" src="assets/institution1/institution1.jpg" alt="institution 1"></a>
                        </div>



                    </div>
                </div>
                <!-- ... filtering content.... -->
            </div>


        </div>
    </section>

    <!-- ...  MY SKILLS ... -->
    <section class="my-skill" id="skills">
        <div class="image-noise">
            <div class="container">
                <h2 class="text-center">my <span>technical</span> skills</h2>
                <h3 class="text-center">{{$user->name}}</h3>
                <!-- ... skill  list ... -->
                <div class="skill-list">
                    <!-- ... html css ... -->
                    @foreach($user->skills as $skill)
                    <div class="html-css col-md-6 col-xs-12 col-sm-12">
                        <h3>{{$skill->skills}}</h3>
                        <div class="progress">
                            <div class="progress-bar wow bounceInLeft" data-wow-duaration="3s" data-wow-delay="2s" style="width: {{$skill->percent}}%">
                                    {{$skill->percent}} %
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>


            </div>
        </div>
    </section>

    <!-- ...WHY HIRE ME ...  -->
    <div class="why-hire-me">
        <div class="container">
            <h2 class="text-center">wh<span>y hire m</span>e</h2>
            <h3 class="text-center">i will make it <b>easy to use</b> make it <b>beautiful &amp; professional </b>At Look for your branding identy</h3>


            <!-- ... descrive area... -->
            <div class="descrive-area">
                <!-- .... responsive design ... -->
                <div class="row wow bounceInLeft">
                    <div class="responsive-desgin col-md-6 col-sm-6 col-xs-12 text-center">
                        <i class="fa fa-desktop"></i><i class="fa fa-mobile"></i>
                        <h4>{{$user->about->experience}} + Experience on Web Developing </h4>
                        <p>I am doing work on this field for more than 3 years,I completed 50+ projects</p>
                    </div>

                    <!-- ... affordable .... -->
                    <div class="affordable-cost col-md-6 col-sm-6 col-xs-12 text-center">
                        <i class="fa fa-money"></i>
                        <h4>affordable cost</h4>
                        <p>i can make the webpage as per your requirements.it doesn't cost so much</p>
                    </div>
                </div>

                <!-- .... clean coding .... -->
                <div class="row wow bounceInLeft">
                    <div class="clean-coding col-md-6 col-sm-6 col-xs-12 text-center">
                        <i class="fa fa-pencil"></i>
                        <h4>clean coding</h4>
                        <p>My coding is clean and standard.i will write standard and clean coding for you</p>
                    </div>

                    <!-- ... free support ... -->
                    <div class="free-support col-md-6 col-sm-6 col-xs-12 text-center">
                        <i class="fa fa-support"></i>
                        <h4>free support</h4>
                        <p>i will give you free support for the life time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ... ADVISE AREA ... -->
    <section class="advice-area">
        <div class="image-noise">
            <div class="container">
                <h2 class="text-center">“Create your own visual style… let it be unique for yourself and yet identifiable for others.” </h2>
                <h3 class="text-center">Web design &amp; development is combination of :</h3>
                <h4 class="text-center">1. Passion</h4>
                <h4 class="text-center">2. promise</h4>
                <h4 class="text-center">3. proof</h4>

            </div>
        </div>
    </section>

    <!-- ... CONTACT ME ... -->
    <section class="contact-me" id="contact">
        <div class="container">
            <h2 class="text-center">con<span>tact m</span>e</h2>
            <h3 class="text-center">feel free to write whatever you want</h3>
            <form action="{{route('contact.store')}}" method="post" id="con">
                <div class="email-template">
                    {{csrf_field()}}
                    <input type="text" name="name" id="name" placeholder="Enter your Name" required="required">
                    <input type="email" name="email" id="email" placeholder="Please enter your valid email address" required="required">

                    <textarea name="sms" class="" cols="30" rows="10" placeholder="Please Write Somwthing" required="required"></textarea>

                    <!-- ... submit button ... -->
                    <div class="submit-area">
                        <input type="submit" value="Submit">
                    </div>
                    <div class="form-group">
                        <div class="text-success cmg">
                            <h4 id="msg"></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-success cmg">
                            <h4 id="danger"></h4>
                        </div>
                    </div>
                </div>


            </form>
            <!-- ... quick contact ... -->
            <div class="quick-contact text-center">
                <div class="row">
                    <div class="my-personal-mail col-md-4 col-sm-5 col-xs-12 wow bounceInLeft" data-wow-duration="1s">
                        <fieldset>
                            <legend><i class="fa fa-address-card-o"></i></legend>
                            <h4>Email me at:</h4>
                            <h5>{{$user->email}}</h5>
                        </fieldset>
                    </div>
                    <div class="work-time  col-md-offset-3 col-md-4 col-sm-5 col-xs-12 wow bounceInLeft" data-wow-duration="1s">
                        <fieldset>
                            <legend><i class="fa fa-clock-o"></i></legend>
                            <h4>working hour</h4>
                            <h5>mon - fri: 13:00 pm - 2:00 am</h5>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

