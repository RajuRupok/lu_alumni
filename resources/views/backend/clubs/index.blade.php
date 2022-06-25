@extends('layouts.withnav')

@section('title', '| All Clubs')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/fire-css/assets/faq.css') }}">
@endsection

@section('content')

<section class="fire_faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="faq_tab_menu clearfix">
                        <div class="general">
                            <h5 class="color_22 fw_300 text-center">Clubs</h5>
                            <ul role="tablist" class="nav nav-tabs">
                                <li class="nav-item"><a class="active" data-toggle="tab" href="#faqtab1" role="tab" aria-selected="true">Is F1 responsive?</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#faqtab2" role="tab" aria-selected="false">What if I purchase the extended license?</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#faqtab3" role="tab" aria-selected="false">Is Startup a WordPress template?</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#faqtab4" role="tab" aria-selected="false">How long it takes to install?</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#faqtab5" role="tab" aria-selected="false">What included in F1 package?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/col-4-->

                <div class="col-xl-8 col-lg-7">
                    <div class="faq_tab_content">
                        <div id="myTabContent" class="tab-content">
                            <div id="faqtab1" role="tabpanel" class="tab-pane fade show active">
                                <h4 class="fw_300 color_22">Is F1 responsive?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-2-->
                            <div id="faqtab2" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">What if I purchase the extended license?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-3-->
                            <div id="faqtab3" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Is F1 a WordPress template?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-4-->
                            <div id="faqtab4" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">How long it takes to install?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-5-->
                            <div id="faqtab5" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">What included in F1 package?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-6-->
                            <div id="faqtab6" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Is F1 responsive?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-7-->
                            <div id="faqtab7" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">What if I purchase the extended license?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-8-->
                            <div id="faqtab8" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Is F1 a WordPress template?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-9-->
                            <div id="faqtab9" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">How long it takes to install?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-10-->
                            <div id="faqtab10" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">What included in F1 package?</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>
                            <!--/tab-pane-->
                        </div>
                    </div>
                </div>
                <!--/col-8-->
            </div>
        </div>
    </section>


@endsection
