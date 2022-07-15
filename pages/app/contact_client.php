
        <div class="questionForm popup questionFormClient">

            <form method="POST" id="clientForm" enctype="multipart/form-data">

                <div id="client_q1" class="question question_intro">
                    <label>Start your search</label>
                    <p>Let's find out a little more about your business. Fill out the next 5 questions and we'll get back to you as soon as possible.</p>
                    <a class="btn next" data-goTo="2">Begin</a>
                </div>

                <div id="client_q2" class="question">
                    <label><span>1 of 5</span>Name of studio</label>
                    <input type="text" name="studio" id="studio" required>
                    <a class="btn next" data-goTo="3">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="client_q3"class="question">
                    <label><span>2 of 5</span>Location of studio</label>
                    <input type="text" name="location" id="location" required>
                    <a class="btn prev" data-goTo="2"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="4">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="client_q4"class="question">
                    <label><span>3 of 5</span>Your name and position in studio:</label>
                    <input type="tel" name="name_position" id="name_position">
                    <a class="btn prev" data-goTo="3"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="5">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="client_q5"class="question">
                    <label><span>4 of 5</span>Email Address</label>
                    <input type="email" name="client_email" id="client_email" required>
                    <a class="btn prev" data-goTo="4"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="6">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="client_q6"class="question">
                    <label><span>5 of 5</span>Enter your phone number <span>(optional)</span></label>
                    <input type="tel" name="client_telephone" id="client_telephone">
                    <p style="font-size: 0.9em;"><input type="checkbox" name="termsCheck" id="client_termsCheck" value="Yes" style="width: 20px; margin: 20px 0 10px 0; display: inline-block;" onchange="document.getElementById('clientSubmit').disabled = !this.checked;"> I have read and understood the <!-- <a href="docs/haptic-privacy-policy.docx" target="_blank">Terms &amp; Conditions</a> and  --><a href="/docs/haptic-privacy-policy.docx" target="_blank">Privacy Policy</a></p>
                    <a class="btn prev" data-goTo="5"><i class="fas fa-chevron-left"></i> Previous</a>
                    <button class="btn next" type="submit" id="clientSubmit" disabled>Submit</button>
                </div>


                <div id="client_success" class="questionEnd">
                    <i class="fas fa-check"></i>
                    <h3>Thank you, your details have been sent</h3>
                    <p>...we'll be in touch as soon as possible!</p>
                    <p><a href="#" class="btn finishBtn">Close</a></p>
                </div>

                <div id="client_fail" class="questionEnd">
                    <i class="fas fa-times"></i>
                    <h3>Sorry about this, something went wrong</h3>
                    <p>...please go back an review your details.</p>
                    <p><a href="#" class="btn reviewPopup">Review</a></p>
                </div>

            </form>
        </div>

       

       

     