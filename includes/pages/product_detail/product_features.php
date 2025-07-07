<section class="product-features-container">
    <ul class="nav nav-pills justify-content-center mb-4" id="productTab"
        role="tablist">
        <li class="nav-item" role="presentation" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <button class="nav-link active rounded-pill px-4" id="details-tab" data-bs-toggle="pill"
                    data-bs-target="#details" type="button" role="tab">
                Details
            </button>
        </li>
        <li class="nav-item" role="presentation" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <button class="nav-link rounded-pill px-5" id="description-tab" data-bs-toggle="pill"
                    data-bs-target="#description" type="button" role="tab">
                Description
            </button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="productTabContent">

        <!-- Details Tab -->
        <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
            <div class="accordion" id="detailsAccordion">

                <!-- Accordion Item 1 -->
                <div class="accordion-item" data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                            KEY FEATURES
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#detailsAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item" data-aos="fade-down" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                            INGREDIENTS
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#detailsAccordion">
                        <div class="accordion-body">
                            Ingredient list goes here...
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 (open by default) -->
                <div class="accordion-item" data-aos="fade-down" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                            HOW TO USE
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#detailsAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150" data-aos-easing="ease-in-out">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                            QUALITY
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#detailsAccordion">
                        <div class="accordion-body">
                            Product quality content here.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Tab -->
        <div class="tab-pane fade animate__animated animate__fadeIn" id="description" role="tabpanel" aria-labelledby="description-tab">
            <p class="px-3 py-2">This is the product description tab content. This is the product description tab content. This is the product description tab content. This is the product description tab content.</p>
        </div>

    </div>

</section>