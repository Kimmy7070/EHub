@extends('admin.layout')

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Frequently Asked Questions</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.blade.php">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Frequently Asked Questions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
        <div class="row">
            <div class="col-lg-6">

                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Basic Questions</h5>

                        <div>
                            <h6>1.  How do I create an admin account?</h6>
                            <p>Saepe perspiciatis ea. Incidunt blanditiis enim mollitia qui voluptates. Id rem nulla
                                tenetur nihil in unde rerum. Quae consequatur placeat qui cumque earum eius omnis
                                quos.</p>
                        </div>

                        <div class="pt-2">
                            <h6>2. How do I log in to my admin account?</h6>
                            <p>Id ipsam non ut. Placeat doloremque deserunt quia tenetur inventore laboriosam
                                dolores totam odio. Aperiam incidunt et. Totam ut quos sunt atque modi molestiae
                                dolorem.</p>
                        </div>

                        <div class="pt-2">
                            <h6>3. What should I do if I forget my admin password?</h6>
                            <p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                                consequuntur voluptates et blanditiis.</p>
                        </div>

                    </div>
                </div>

                <!-- F.A.Q Group 1 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">How can I manage product listings on the website?</h5>

                        <div class="accordion accordion-flush" id="faq-group-1">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1"
                                        type="button" data-bs-toggle="collapse">
                                        How do I create and manage promotions or discounts on my website?
                                    </button>
                                </h2>
                                <div id="faqsOne-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem
                                        eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut
                                        maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente.
                                        A quaerat dignissimos.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2"
                                        type="button" data-bs-toggle="collapse">
                                        How do I add new products to the website?
                                    </button>
                                </h2>
                                <div id="faqsOne-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores
                                        minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae
                                        iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3"
                                        type="button" data-bs-toggle="collapse">
                                        How do I update or edit existing product information?
                                    </button>
                                </h2>
                                <div id="faqsOne-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit
                                        beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et
                                        et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum
                                        fuga quod ut non fuga.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4"
                                        type="button" data-bs-toggle="collapse">
                                        Can I set different prices for different customer groups or regions?
                                    </button>
                                </h2>
                                <div id="faqsOne-4" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut
                                        eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5"
                                        type="button" data-bs-toggle="collapse">
                                        How do I manage inventory and stock levels?
                                    </button>
                                </h2>
                                <div id="faqsOne-5" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui
                                        molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed.
                                        Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam.
                                        Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 1 -->

            </div>

            <div class="col-lg-6">

                <!-- F.A.Q Group 2 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">How can I track and manage customer orders?</h5>

                        <div class="accordion accordion-flush" id="faq-group-2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1"
                                        type="button" data-bs-toggle="collapse">
                                        Can I process refunds or cancellations for orders?
                                    </button>
                                </h2>
                                <div id="faqsTwo-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem
                                        eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut
                                        maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente.
                                        A quaerat dignissimos.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2"
                                        type="button" data-bs-toggle="collapse">
                                        How do I handle shipping and delivery of orders?
                                    </button>
                                </h2>
                                <div id="faqsTwo-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores
                                        minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae
                                        iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3"
                                        type="button" data-bs-toggle="collapse">
                                        Can I set up promotional discounts or coupon codes?
                                    </button>
                                </h2>
                                <div id="faqsTwo-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit
                                        beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et
                                        et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum
                                        fuga quod ut non fuga.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4"
                                        type="button" data-bs-toggle="collapse">
                                        How can I manage customer reviews and ratings?
                                    </button>
                                </h2>
                                <div id="faqsTwo-4" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut
                                        eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5"
                                        type="button" data-bs-toggle="collapse">
                                        Is it possible to integrate third-party payment gateways?
                                    </button>
                                </h2>
                                <div id="faqsTwo-5" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui
                                        molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed.
                                        Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam.
                                        Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 2 -->

                <!-- F.A.Q Group 3 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">How do I add or remove products from my e-commerce website?</h5>

                        <div class="accordion accordion-flush" id="faq-group-3">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1"
                                        type="button" data-bs-toggle="collapse">
                                        How do I update product descriptions, prices, and images on my website?
                                    </button>
                                </h2>
                                <div id="faqsThree-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem
                                        eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut
                                        maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente.
                                        A quaerat dignissimos.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2"
                                        type="button" data-bs-toggle="collapse">
                                        How do I manage customer orders and track shipments?
                                    </button>
                                </h2>
                                <div id="faqsThree-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores
                                        minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae
                                        iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3"
                                        type="button" data-bs-toggle="collapse">
                                        How do I set up and manage payment gateways?
                                    </button>
                                </h2>
                                <div id="faqsThree-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit
                                        beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et
                                        et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum
                                        fuga quod ut non fuga.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4"
                                        type="button" data-bs-toggle="collapse">
                                        How do I handle refunds and returns?
                                    </button>
                                </h2>
                                <div id="faqsThree-4" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut
                                        eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5"
                                        type="button" data-bs-toggle="collapse">
                                        How do I manage inventory and keep track of stock levels?
                                    </button>
                                </h2>
                                <div id="faqsThree-5" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui
                                        molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed.
                                        Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam.
                                        Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 3 -->

            </div>

        </div>
    </section>

</main><!-- End #main -->

@stop
