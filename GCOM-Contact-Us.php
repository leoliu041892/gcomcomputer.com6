<?php
$currentMenu = 5;
$subtitle = "Contact Us";
include_once 'static/header.php';
?>


<div class="main">

    <div id="maps" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0px);"></div>

    <!--  - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - -  -->	

    <section class="container clearfix" style="min-height: 347px;">

        <div class="four columns">

            <div class="widget_contacts">

                <h3 class="widget-title"><span>Our </span>Contacts</h3>			

                <ul class="our-contacts">

                    <li class="address">
                        <b>West End Store:</b>
                        <b>Main</b>
                        <p id="_address2" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">#100,10524-178st</span> 
                            <span itemprop="addressLocality">Edmonton</span>,
                            <span itemprop="addressRegion">AB</span>,
                            <span itemprop="postalCode">T5S 2J1</span></p>

                        <b>Downtown Store:</b>
                        <p id="_address3" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">10932-97st</span><br/>
                            <span itemprop="addressLocality">Edmonton</span>,
                            <span itemprop="addressRegion">AB</span>,
                            <span itemprop="postalCode">T5H 2M9</span></p>
                    </li>
                    <li itemscope itemtype="http://schema.org/LocalBusiness" itemref="_address3 _name14" class="phone">
                        <b>Phone(West End):</b> <br/> <span id="_telephone12" itemprop="telephone">(780)757-6828</span> <br/>
                        <b>Phone(Downtown):</b> <br/> <span id="_telephone13" itemprop="telephone">(780)756-6828</span> <br/>
                    </li>
                    <li>
                        <b>Email: <a href="mailto:gcom.computer.ltd@gmail.com">gcom.computer.ltd@gmail.com</a></b>
                    </li>

                </ul><!-- / .our-contacts -->

            </div><!-- / .widget-container -->

        </div><!-- / .four .columns -->

        <div class="twelve columns">

            <div id="contact">

                <h3 class="widget-title"><span>WestEnd </span>Store</h3>

                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=Gcom+Computers+Ltd+(West+End+Location),+Edmonton,+AB&aq=0&oq=Gcom+Compute&sll=53.549301,-113.627424&sspn=0.117084,0.308647&ie=UTF8&hq=Gcom+Computers+Ltd+(West+End+Location),&hnear=Edmonton,+Division+No.+11,+Alberta&ll=53.549301,-113.627424&spn=0.117009,0.308647&t=m&z=12&iwloc=A&cid=11830249260297888655&output=embed"></iframe><br/><small><a href="https://maps.google.ca/maps?f=q&source=embed&hl=en&geocode=&q=Gcom+Computers+Ltd+(West+End+Location),+Edmonton,+AB&aq=0&oq=Gcom+Compute&sll=53.549301,-113.627424&sspn=0.117084,0.308647&ie=UTF8&hq=Gcom+Computers+Ltd+(West+End+Location),&hnear=Edmonton,+Division+No.+11,+Alberta&ll=53.549301,-113.627424&spn=0.117009,0.308647&t=m&z=12&iwloc=A&cid=11830249260297888655" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                <h3 class="widget-title"><span>Downtown </span>Store</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.0793476836525!2d-113.49148100000004!3d53.55635099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023acddb735c7%3A0xd7013939c707564c!2sGcom+Computer+Ltd!5e0!3m2!1szh-CN!2sca!4v1395686164206" width="100%" height="300" frameborder="0" style="border:0"></iframe>				</div><!-- / #contact -->

        </div><!-- / .twelve .columns -->



    </section><!-- /.container  -->

    <!--  - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - -  -->			

</div><!-- / .main -->

<?php include_once 'static/footer.php'; ?>