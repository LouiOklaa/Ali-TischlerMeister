@extends('layouts.master_home_page')
@section('title')
    Über Uns
@endsection
@section('current_page')
    Über Uns
@endsection
@section('contents')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div>

                <div class="col-lg-7">
                    <h2>Unser Engagement für Qualität und Zuverlässigkeit im Tischlerhandwerk</h2>
                    <div class="our-story">
                        <h4>Gegründet 2024</h4>
                        <h3>Unsere Geschichte</h3>
                        <p>Die Firma Ali TischlerMeister wurde im Jahr 2024 gegründet, um ein Symbol für Innovation und
                            Zuverlässigkeit im Tischlerhandwerk zu sein. Von Anfang an war unser Ziel nicht nur Holz zu
                            bearbeiten, sondern auch die individuellen Wünsche und Träume unserer Kunden wahr werden zu
                            lassen.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>
                                <span> Maßgeschneiderte Tischlerlösungen.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Wir garantieren hohe Qualität in jeder Projektphase.</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Unser Team setzt Projekte effizient um.</span>
                            </li>
                        </ul>
                        <p>Wir stehen für Qualität, Präzision und nachhaltige Lösungen, die den Ansprüchen unserer
                            Kunden gerecht werden. Ob es sich um ein individuelles Möbelstück, eine komplette
                            Innenausstattung oder besondere Holzarbeiten handelt – wir begleiten Sie von der ersten Idee
                            bis zur Umsetzung mit unserem Fachwissen und Engagement.</p>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                <span data-purecounter-start="0" data-purecounter-end="75" data-purecounter-duration="1"
                      class="purecounter"></span>
                            <p>Zufriedene Kunden</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                      class="purecounter"></span>
                            <p>Projekte</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                <span data-purecounter-start="0" data-purecounter-end="632" data-purecounter-duration="1"
                      class="purecounter"></span>
                            <p>Anfragen beantwortet</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                      class="purecounter"></span>
                            <p>Mitarbeiter</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section>
    <!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Unsere Leistungen im Überblick</h3>
                    <p>Wir bieten Ihnen eine umfassende Palette an Allgemeine Tischlerei- und Baudienstleistungen. Jede unserer
                        Leistungen wird mit höchster Präzision und Qualität ausgeführt, um Ihre Erwartungen zu
                        übertreffen.</p>


                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link"></a>Allgemeine Tischlerei</h4>
                            <p>Wir bieten individuelle Lösungen im Bereich der allgemeinen Tischlerei, die auf
                                hochwertige, funktionale Möbel und langlebige Holzkonstruktionen spezialisiert sind.
                                Unsere Arbeit vereint handwerkliche Präzision mit ästhetischem Design, um Ihre Wohn- und
                                Arbeitsräume zu bereichern.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Trockenbau</a></h4>
                            <p>Wir bieten maßgeschneiderte Lösungen im Bereich Trockenbau, die
                                funktionale Innenräume und ästhetische, langlebige Außenfassaden schaffen.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link"> Fliesenarbeiten und Gipskarton/Dekorbau</a></h4>
                            <p>Unsere Fliesenarbeiten sorgen für exakte Verlegung, während wir mit Gipskarton und
                                Dekorbau kreative und funktionale Raumgestaltungen umsetzen.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Malerarbeiten</a></h4>
                            <p>Unsere Malerarbeiten verleihen Ihren Räumen einen frischen, präzisen Anstrich mit
                                hochwertigen Farben.</p>
                        </div>
                    </div><!-- End Icon Box -->
                </div>

                <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);"
                     data-aos="zoom-in"
                     data-aos-delay="100"></div>
            </div>

        </div>
    </section>
    <!-- End Alt Services Section 2 -->

@endsection
