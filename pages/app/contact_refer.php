
        <div class="questionForm popup questionFormRefer">

            <form method="POST" id="referForm" enctype="multipart/form-data">

                <div id="refer_q1" class="question question_intro">
                    <label>Refer a friend</label>
                    <p>If the referral is successful and ends in a placement we will give you a console of your choice!</p>
                    <a class="btn next" data-goTo="2">Begin</a>
                </div>

                <div id="refer_q2" class="question">
                    <label><span>1 of 5</span>Your Name</label>
                    <input type="text" name="your_name" id="your_name" required>
                    <a class="btn next" data-goTo="3">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="refer_q3"class="question">
                    <label><span>2 of 5</span>Your Email Address</label>
                    <input type="email" name="your_email" id="your_email" required>
                    <a class="btn prev" data-goTo="2"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="4">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="refer_q4"class="question">
                    <label><span>3 of 5</span>Friend's Name</label>
                    <input type="tel" name="friends_name" id="friends_name">
                    <a class="btn prev" data-goTo="3"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="5">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="refer_q5"class="question">
                    <label><span>4 of 5</span>Friend's Email Address</label>
                    <input type="email" name="friends_email" id="friends_email" required>
                    <a class="btn prev" data-goTo="4"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="6">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="refer_q6"class="question">
                    <label><span>5 of 5</span>Friend's specialism <span>(developer, designer etc)</span></label>
                    <input type="text" name="friend_specialism" id="friend_specialism">
                    <p style="font-size: 0.9em;"><input type="checkbox" name="termsCheck" id="refer_termsCheck" value="Yes" style="width: 20px; margin: 20px 0 10px 0; display: inline-block;" onchange="document.getElementById('referSubmit').disabled = !this.checked;"> I have read and understood the <!-- <a href="docs/haptic-privacy-policy.docx" target="_blank">Terms &amp; Conditions</a> and  --><a href="/docs/haptic-privacy-policy.docx" target="_blank">Privacy Policy</a></p>
                    <a class="btn prev" data-goTo="5"><i class="fas fa-chevron-left"></i> Previous</a>
                    <button class="btn next" type="submit" id="referSubmit" disabled>Submit</button>
                </div>


                <div id="refer_success" class="questionEnd">
                    <i class="fas fa-check"></i>
                    <h3>Thank you, both details have been sent</h3>
                    <p>...we'll be in touch as soon as possible!</p>
                    <p><a href="#" class="btn finishBtn">Close</a></p>
                </div>

                <div id="refer_fail" class="questionEnd">
                    <i class="fas fa-times"></i>
                    <h3>Sorry about this, something went wrong</h3>
                    <p>...please go back an review your details.</p>
                    <p><a href="#" class="btn reviewPopup">Review</a></p>
                </div>

            </form>
        </div>

       

       

     