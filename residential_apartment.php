<style>
#card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: 0.3s;
    width: 100%;
    height: 250px;
    text-align: center;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2);
    transform: scale(1.1);
}


.container {
    padding: 2px 16px;
}
</style>
<?php include 'header.php'; ?>
<main id="main">
    <!-- End Breadcrumbs Section -->
    <div class="container-fluid" id="card" style="padding: 25px; background: linear-gradient(to right, #ffafbd, #ffc3a0); 
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/apartment1.png" alt="" width="70%">

                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;">
                            <span style="color: black;">
                                Get The Right Advice
                                on<br>Residential apartment
                            </span>
                        </h4>

                        <div class="container" data-aos="fade-up">
                            <div class="container">
                                <div class="form">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-6">

                                                <input type="text" name="name"
                                                    class="rounded border-secondary form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="email" class="form-control rounded border-secondary"
                                                    name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="tel" class="form-control rounded border-secondary"
                                                name="message" placeholder="Phone Number" required></input>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control rounded border-secondary" rows="2"
                                                id="comment" placeholder="Massage"></textarea>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="example1">
                                            <label class="custom-control-label" for="customCheck"><small>I have read and
                                                    I agree to the <a href="privacy_policy.php">Privacy
                                                        Policy</a></small> </label>
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>

                                        <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                </div>

                            </div>
                    </section>
                    <!-- End Contact Section -->

                </div>
            </div>

        </div>

        <!-- card for test -->
    </div>
    </section><br>

    <!--content section-->

    <div class="text-center">
        <h4 class="spanals"><b>Residential apartment</b></h4>
    </div>

    <div style="  background: linear-gradient(to right, #faa09b, #ff9068); padding: 30px;" data-aos="fade-down-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h6><b>What is Residential apartment</b></h6>
                    <p>You purchase a residential apartment commonly called a flat as a place to reside/stay. </p>
                    <h6><b>How do you pay for your residential apartment? </b></h6>
                    <ul>If you are purchasing an under construction flat check for the:
                        <li>Down Payment</li>
                        <li>Construction linked costs</li>
                        <li>Flexi payment options</li>
                    </ul>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="img/apartment2.png" alt="" width="70%">
                </div>
            </div>
        </div>
    </div><br>

    <div class="container">
        <div id="card"
            style="background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5 class="text-center text-white"><b>Why buy Residential Apartment?</b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Roof over your head</b></h6>
                            <p>A roof over your head is a basic necessity. A residential apartment provides you a place
                                to reside.</p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>A Good Investment</b></h6>
                            <p>You can buy a second apartment as an investment. You can also use it as a vacation home.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>No more rent</b></h6>
                            <p>Tired of living in a rented apartment? Tired of shifting houses? Your own apartment is
                                the answer. </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Save on Tax</b></h6>
                            <p>You save on tax, if you take a home loan to buy your apartment. You save both on the
                                principal and the interest. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div>
    </div><br>
    <div style="background: linear-gradient(to right, #fcccd5, #ffc3a0);  padding: 30px;" data-aos="flip-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h5><b>Things to remember while purchasing an apartment</b></h5>
                    <h6><b>Check the title of the land </b></h6>
                    <ul>
                        <li>The builder needs to have the title deed showing the ownership of the land. The title of the
                            property needs to be clear and marketable. The builder then needs to get approvals from the
                            municipal and other authorities.
                        </li>

                        <li><b>Group Accident Policies: </b>A the term itself suggests, a Group Accident Policy is not
                            meant for
                            individuals. It is taken by employers for their employees. Depending on the group size,
                            discount on
                            premium may be offered. It is
                            a good value added benefit for small organizations and is available at a low cost. However,
                            this is
                            very basic cover and may not offer benefits like that of individual accidental insurance
                            plan.</li>

                        <h5>How to make a claim on a Personal Accidental Insurance Plan?</h5>
                        <li><b>Inform the insurer about the accident:</b> The insurer must be informed about the
                            accident as
                            soon as possible. The insurer may also be informed while the insured is on the way to the
                            hospital.
                            In order to show proof that the claim
                            has been filed with the insurer, the policy number or reference number of the insurer should
                            be
                            communicated.</li>

                        <li><b>Inform the insurer at the time of hospitalization:</b> Fill the claim form.
                        </li>
                        <li>Submit the FIR or police report if required.
                        </li>
                    </ul>

                </div>
                <div class="col-sm-6">
                    <h5><b>Features of Accidental Insurance Plan</b></h5>
                    <ul>
                        <li>You have to pay around 10-15% of the cost of the apartment at the time of the purchase.
                        </li>
                        <li>This is the down
                            payment for the apartment.</li>
                        <li>Builders ask you to make a down payment at the time of booking of the apartment
                            (10-15% of the cost) and another
                            (70-75%) within a couple of months after booking the apartment.</li>
                        <li>You make the remaining payment at the time
                            you take possession of the flat.</li>
                        <li>This is a highly risky method of making the payments, as you are stuck if
                            the builder delays the
                            construction of your apartment.</li>
                        <li>You could opt for a construction linked plan where you pay 10-15% of the
                            amount as a down payment and the rest of the payments are made as each level of
                            construction is complete.</li>
                        <li> You could opt for the flexi
                            plan where 30-40% of the payments are made as a down payment and the rest as each stage
                            of construction is
                            completed.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
<?php include 'footer.php'; ?>