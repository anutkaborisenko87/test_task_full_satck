@extends('layouts.frontlayout.appFront')
@section('content')
    <div class="news_cards_section">
        <div class="one_new_card">
            <div class="news_image">
                <img src="{{ asset('css/front/img/joga.png') }}" alt="ioga_img">
            </div>
            <div class="news_content_card_section">
                <p class="one_news_category">Pharmaceuticals</p>
                <h1 class="one_news_title">A Sure Way To Get Rid Of Your Back Ache Problem</h1>
                <p class="one_news_content">
                    If you have tried everything, but still seem to suffer from snoring, don’t
                    give up. Before turning to surgery, consider shopping for anti-snore devices. These products do not
                    typically require a prescription, are economically priced and may just be the answer that you are
                    looking for. However, as is the case when shopping for anything, there are a lot of anti-snore devices
                    out there and…
                </p>
                <p class="one_news_footer">
                    <span class="one_news_date_publication">28 Feb 2021</span>
                    <span class="one_news_author_publication">Jim Sullivan</span>
                    <span class="one_news_time_publication_read"><span class="icon-Clock"></span> 6 min read</span>
                </p>
            </div>
        </div>
        <div class="news_list_column">
            <div class="news_list">
                <p class="news_list_title">
                    Our Latest News
                </p>
                <div class="item">
                    <a href="#">
                        <div class="item-background" style="background-image: url({{ asset('css/front/img/relax_message.png') }});"></div>
                        <div class="item-background-accept" style=""></div>
                        <div class="item-content">
                            <h4>Basic Swedish Back Massage Techniques</h4>
                            <p>28 Feb 2021</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="item-background" style="background-image: url({{ asset('css/front/img/codding_note_book.png') }});"></div>
                        <div class="item-background-accept" style=""></div>
                        <div class="item-content">
                            <h4>How to Learn Coding for Beginners</h4>
                            <p>28 Feb 2021</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="item-background" style="background-image: url({{ asset('css/front/img/notebook_with_coffee.png') }});"></div>
                        <div class="item-background-accept" style=""></div>
                        <div class="item-content">
                            <h4>How to Learn Coding for Beginners</h4>
                            <p>28 Feb 2021</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <testimonial-list-component></testimonial-list-component>
    </div>
    <footer>
        <div class="footer-columns">
            <div class="column">
                <h2>Departments</h2>
                <ul>
                    <li><a href="#">Medical</a></li>
                    <li><a href="#">Pharmaceuticals</a></li>
                    <li><a href="#">Medical Equipment</a></li>
                </ul>
            </div>
            <div class="column">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">What do we do?</a></li>
                    <li><a href="#">Our expertise</a></li>
                    <li><a href="#">Request an Appointment</a></li>
                    <li><a href="#">Book with a Specialist</a></li>
                </ul>
            </div>
            <div class="column">
                <h2>Head Office</h2>
                <ul>
                    <li><a href="#"><span class="icon-Shape"></span> 4517 Washington Ave. Manchester, Kentucky 39495</a></li>
                    <li><a href="mailto:darrell@mail.com"><span class="icon-Email"></span> darrell@mail.com</a></li>
                    <li><a href="tel:(671)555-0110"><span class="icon-Phone"></span> (671) 555-0110</a></li>
                </ul>
            </div>
            <div class="column">
                <img src="{{ asset('css/front/logos/FooterLogo.png') }}" alt="Logo">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit tincidunt ut sed. Velit euismod
                    integer convallis ornare eu.
                </p>
            </div>
        </div>
        <p>© 2021 All Rights Reserved</p>
    </footer>
@endsection
