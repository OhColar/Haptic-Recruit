
        <div class="questionForm popup questionFormCandidate">

            <form method="POST" id="candidateForm" enctype="multipart/form-data">
                    
                <div id="q1" class="question question_intro">
                    <label>Start your search</label>
                    <p>To help us find the right role for you all you need to do is answer 6 simple questions. Once submitted sit back and we'll do the rest!</p>
                    <a class="btn next" data-goTo="2">Begin</a>
                </div>

                <div id="q2" class="question">
                    <label><span>1 of 6</span>Enter your name</label>
                    <input type="text" name="fullName" id="fullName" required>
                    <a class="btn next" data-goTo="3">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="q3"class="question">
                    <label><span>2 of 6</span>Enter your email address</label>
                    <input type="email" name="email" id="email" required>
                    <a class="btn prev" data-goTo="2"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="4">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="q4"class="question">
                    <label><span>3 of 6</span>Enter your phone number <span>(optional)</span></label>
                    <input type="tel" name="telephone" id="telephone">
                    <a class="btn prev" data-goTo="3"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="5">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="q5"class="question">
                    <label><span>4 of 6</span>Which hub(s) are you interested in?</label>
                    <ul class="hubChecklist">
                        <li><input type="checkbox" id="Barcelona" class="get_value" name="hub" value="Barcelona" /> <label for="Barcelona">Barcelona</label></li>
                        <li><input type="checkbox" id="Brighton" class="get_value" name="hub" value="Brighton" /> <label for="Brighton">Brighton</label></li>
                        
                        <li><input type="checkbox" id="London" class="get_value" name="hub" value="London" /> <label for="London">London</label></li>
                        <li><input type="checkbox" id="Los_Angeles" class="get_value" name="hub" value="Los_Angeles" /> <label for="Los_Angeles">Los Angeles</label></li>
                        <li><input type="checkbox" id="Berlin" class="get_value" name="hub" value="Berlin" /> <label for="Berlin">Berlin</label></li>
                        <li><input type="checkbox" id="Stockholm" class="get_value" name="hub" value="Stockholm" /> <label for="Stockholm">Stockholm</label></li>
                    </ul>
                    <a class="btn prev" data-goTo="4"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="6">Next <i class="fas fa-chevron-right"></i></a>
                </div>


                <div id="q6"class="question">
                    <label><span>5 of 6</span>What's your area of speciality/interest:</label>
                    <input type="text" name="interest" id="interest">
                    <a class="btn prev" data-goTo="5"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a class="btn next" data-goTo="7">Next <i class="fas fa-chevron-right"></i></a>
                </div>

                <div id="q7"class="question">
                    <label><span>6 of 6</span>Upload your CV: <span>(optional)</span></label>
                    <input type="file" name="file_attach" id="cv">
                    <p style="font-size: 0.9em;"><input type="checkbox" name="termsCheck" id="termsCheck" value="Yes" style="width: 20px; margin: 20px 0 10px 0; display: inline-block;" onchange="document.getElementById('candidateSubmit').disabled = !this.checked;"> I have read and understood the <!-- <a href="#" target="_blank">Terms &amp; Conditions</a> --> <a href="/docs/haptic-privacy-policy.docx" target="_blank">Privacy Policy</a></p>
                    <a class="btn prev" data-goTo="6"><i class="fas fa-chevron-left"></i> Previous</a>
                    <button class="btn next" type="submit" id="candidateSubmit" disabled>Submit</button>
                </div>

                <div id="success" class="questionEnd">
                    <i class="fas fa-check"></i>
                    <h3>Thank you, your details have been sent</h3>
                    <p>...one step closer to your dream job!</p>
                    <p><a href="#" class="btn finishBtn">Close</a></p>
                </div>

                <div id="fail" class="questionEnd">
                    <i class="fas fa-times"></i>
                    <h3>Sorry about this, something went wrong</h3>
                    <p>...please go back an review your details.</p>
                    <p><a href="#" class="btn reviewPopup">Review</a></p>
                </div>

            </form>
        </div>

       

       

     