<main>
        <div class="container">
            <section class="page-header">
                <h2>Tell us about yourself</h2>
                <h5>Whether you have questions or you would just like to say hello, contact us.</h5>
            </section>
            <section class="contact-content">
                <div class="contact-widget media">
                    <img src="/assets/img/icon-4.png" alt="monitor" width="50px">
                    <div class="media-body">
                        <h6 class="widget-title">Production Office</h6>
                        <p class="widget-content">hello@youriste.com</p>
                    </div>
                </div>
                <div class="contact-widget media">
                    <img src="/assets/img/icon-5.png" alt="book" width="40px">
                    <div class="media-body">
                        <h6 class="widget-title">Administration Office</h6>
                        <p class="widget-content">hello@youriste.com</p>
                    </div>
                </div>
            </section>
            <section class="contact-form-wrapper">
                <form action="/home/contactUs" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">YOUR NAME <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name *">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">YOUR EMAIL ADDRESS <sup>*</sup></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="feeney.matteo@schmeler.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="subject">SUBJECT <sup>*</sup></label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Reservations">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">YOUR PHONE NUMBER <sup>*</sup></label>
                            <input type="number" class="form-control" id="tel" name="tel" placeholder="0624535746">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="help">HOW CAN WE HELP YOU? <sup>*</sup></label>
                            <textarea name="help" id="help" class="form-control" rows="7" placeholder="Hi there, I would like to ..."></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        <p class="form-footer-text">We'll get back to you in 1-2 days.</p>
                    </div>
                </form>
            </section>
        </div>
    </main>
