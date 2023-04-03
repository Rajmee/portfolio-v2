    <!-- Contact Area -->
    <section
      id="contact"
      class="contact-area"
      style="background-image: url('img/contact-bg.png')"
    >
      <div class="contact-paper-plane-img">
        <img src="img/paper-plane-bg.svg" alt="#" />
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-xl-5 col-12">
            <div class="contact-left-info">
              <div class="contact-info-top">
                <span
                  class="contact-info-sm-title wow fadeInLeft"
                  data-wow-delay="0.1s"
                  >Let’s talk</span
                >
                @if (!empty($contact_settings->title))
                            <h2 class="contact-info-big-title wow fadeInLeft"
                            data-wow-delay="0.1s">
                                {{ $contact_settings->title }}
                            </h2>
                        @endif

                        @if (empty($contact_settings->title))
                            <h2 class="contact-info-big-title wow fadeInLeft"
                            data-wow-delay="0.1s">
                                Get in touch <br />with me
                            </h2>
                        @endif
                        @if (!empty($contact_settings->desc))
                        <p  class="contact-info-text wow fadeInLeft"
                        data-wow-delay="0.1s">
                            <?php echo strip_tags($contact_settings->desc); ?>
                        </p>
                    @endif

                    @if (empty($contact_settings->desc))
                        <p  class="contact-info-text wow fadeInLeft"
                        data-wow-delay="0.1s">
                            Feel free to contact me if you have to need a business
                            consultation or other services from me. I’m available 24/7
                            days on Telegram, WhatsApp, and Skype.
                        </p>
                    @endif


                <ul class="contact-info-contact-top">
                  <li class="wow fadeInUp" data-wow-delay="0.1s">
                    @if (!empty($contact_settings->telegram))
                    <a href="{{ $contact_settings->telegram }}" target="_blank"><img
                            src="img/social-icon/telegram.svg" alt="#" />Let's
                        talk on Telegram</a>
                @endif

                @if (empty($contact_settings->telegram))
                    <a hidden href="#" target="_blank"><img src="img/social-icon/telegram.svg"
                            alt="#" />Let's
                        talk on Telegram</a>
                @endif
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.2s">
                    @if (!empty($contact_settings->whatsapp))
                    <a href="{{ $contact_settings->whatsapp }}" target="_blank"><img
                            src="img/social-icon/whatsapp.svg" alt="#" /> Let's
                        talk on WhatsApp</a>
                @endif

                @if (empty($contact_settings->whatsapp))
                    <a hidden href="#" target="_blank"><img src="img/social-icon/whatsapp.svg"
                            alt="#" /> Let's
                        talk on WhatsApp</a>
                @endif
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.3s">
                    @if (!empty($contact_settings->skype))
                                    <a href="{{ $contact_settings->skype }}" target="_blank"><img
                                            src="img/social-icon/skype.svg" alt="#" /> Let's
                                        talk on Skype</a>
                                @endif

                                @if (empty($contact_settings->skype))
                                    <a hidden href="#" target="_blank"><img src="img/social-icon/skype.svg"
                                            alt="#" /> Let's
                                        talk on Skype</a>
                                @endif
                  </li>
                </ul>
              </div>
              <div class="contact-info-widget">
                <h4
                  class="contact-info-widget-title wow fadeInLeft"
                  data-wow-delay="0.1s"
                >
                  I'm on social media:
                </h4>
                <ul class="contact-info-widget-social">
                  <li class="wow fadeInUp" data-wow-delay="0.1s">
                    @if (!empty($contact_settings->facebook))
                    <a href="{{ $header_social_settings->facebook }}" target="_blank"><img
                            src="img/social-icon/facebook.svg"
                            alt="#" /><span>Facebook</span></a>
                @endif

                @if (empty($contact_settings->facebook))
                    <a hidden href="#" target="_blank"><img src="img/social-icon/facebook.svg"
                            alt="#" /><span>Facebook</span></a>
                @endif

                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.2s">
                    @if (!empty($contact_settings->instagram))
                    <a href="{{ $header_social_settings->instagram }}" target="_blank"><img
                            src="img/social-icon/instagram.svg"
                            alt="#" /><span>Instagram</span></a>
                @endif

                @if (empty($contact_settings->instagram))
                    <a hidden href="#" target="_blank"><img src="img/social-icon/instagram.svg"
                            alt="#" /><span>Instagram</span></a>
                @endif
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.3s">
                    @if (!empty($contact_settings->twitter))
                    <a href="{{ $header_social_settings->twitter }}" target="_blank"><img
                            src="img/social-icon/twitter.svg" alt="#" /><span>Twitter</span></a>
                @endif

                @if (empty($contact_settings->twitter))
                    <a hidden href="#" target="_blank"><img src="img/social-icon/twitter.svg"
                            alt="#" /><span>Twitter</span></a>
                @endif
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.4s">
                    @if (!empty($contact_settings->linkedin))
                                    <a href="{{ $header_social_settings->linkedin }}" target="_blank"><img
                                            src="img/social-icon/linkedin.svg"
                                            alt="#" /><span>Linkedin</span></a>
                                @endif

                                @if (empty($contact_settings->linkedin))
                                    <a hidden href="#" target="_blank"><img src="img/social-icon/linkedin.svg"
                                            alt="#" /><span>Linkedin</span></a>
                                @endif
                  </li>

                  <li class="wow fadeInUp" data-wow-delay="0.6s">
                    @if (!empty($contact_settings->youtube))
                                    <a href="{{ $header_social_settings->youtube }}" target="_blank"><img
                                            src="img/social-icon/youtube.svg" alt="#" /><span>Youtube</span></a>
                                @endif

                                @if (empty($contact_settings->youtube))
                                    <a hidden href="#" target="_blank"><img src="img/social-icon/youtube.svg"
                                            alt="#" /><span>Youtube</span></a>
                                @endif
                  </li>
                </ul>
              </div>
              <div class="contact-info-widget">
                <h4
                  class="contact-info-widget-title wow fadeInLeft"
                  data-wow-delay="0.2s"
                >
                  Office location
                </h4>
                <div
                  class="contact-info-address wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <p class="contact-info-address-main">
                    <img src="img/social-icon/location.svg" alt="#" />
                    @if (!empty($contact_settings->office_location))
                    {{ $contact_settings->office_location }}
                @endif

                @if (empty($contact_settings->office_location))
                    Office Address will here...
                @endif
                  </p>
                  @if (!empty($contact_settings->map_location))
                                <a href="{{ $contact_settings->map_location }}" target="_blank"
                                    class="contact-info-address-btn"><img src="img/social-icon/explore.svg"
                                        alt="#" />View on
                                    Google Map</a>
                            @endif

                            @if (empty($contact_settings->map_location))
                                <a hidden href="#" target="_blank" class="contact-info-address-btn"><img
                                        src="img/social-icon/explore.svg" alt="#" />View on
                                    Google Map</a>
                            @endif

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-7 col-12">
            <div class="contact-form-area">
              <div class="contact-form-box">
                <form id="contact-form" action="{{ route('user.message.store') }}" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div
                      class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12"
                    >
                      <div class="contact-form-box-inner">
                        <div class="form-group">
                          <label>Full name</label>
                          <input
                            type="text"
                            name="name"
                            placeholder="ex: Jhone Smith"
                            required="required"
                          />
                        </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input
                            type="email"
                            name="email"
                            placeholder="ex: your-email@mail.com"
                            required="required"
                          />
                        </div>
                        <div class="form-group">
                          <label>Select topic</label>
                          <select style="display: none" name="topic">
                            <option selected disabled>-- Please select--</option>
                            @foreach ($message_type_list as $key => $topic_list)
                            <option value="{{ $topic_list->id }}"> {{ $topic_list->topic }}
                            </option>
                        @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Appointment date & time</label>
                          <div class="form-group-icon">
                            <input
                              name="appoint_date"
                              type="text"
                              placeholder="Date &amp; Time"
                              required="required"
                              class="datetimepicker"
                              autocomplete="off"
                            />
                            <i class="fi-rs-calendar"></i>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Message details</label>
                          <textarea name="message"></textarea>
                        </div>
                        <div class="contact-form-bottom">
                          <button type="submit" class="theme-btn">
                            Send message
                            <i class="fi-rs-paper-plane"></i>
                          </button>
                        </div>
                        <p class="form-message"></p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->
