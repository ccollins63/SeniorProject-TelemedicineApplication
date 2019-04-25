
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>Sign Up</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">

  </head>

  <body>
    <div class="container, whiteContainer">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <a href="login.php"><img src="images/logo.png" width="150"></a>
          </div>
          <div class="col, justifyCenter">
            <h1>Equinox Medicine Health Portal</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center><h2 class="appTitle">Sign Up</h2></center>
          </div>
        </div>
        <div class="row">
          <div class="col, skinnyForm">
            <form action="signUpSubmit.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">First Name*</label>
                  <input type="text" class="form-control" id="inputName" name="inputName"
                    placeholder="First name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLastName">Last Name*</label>
                  <input type="text" class="form-control" id="inputLastName" name="inputLastName"
                    placeholder="Last name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="emailAddress">Email address*</label>
                <input type="email" class="form-control" id="emailAddress" name="emailAddress"
                  placeholder="name@example.com" required>
              </div>
                <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" class="form-control" id="password" name="password"
                  placeholder="Password123" required>
              </div>
              <div class="form-group">
                <label for="key">Generated Key*</label>
                <input type="text" class="form-control" id="key" name="key"
                  placeholder="Given to you by your doctor or admin">
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="inputAddress"
                  placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2"
                  placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" name="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" name="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AR">AR</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip" name="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="termCheck"
                    required>
                    <label class="form-check-label" for="termCheck">
                    <a href="" data-toggle="modal" data-target="#termsModal">I agree to the terms and conditions. *</a>
    
                    </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                  <!--Begin Modal-->
                  <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="termsLabel">Terms and Conditions</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <strong>PRIVACY POLICY</strong>
                              <p>Please review our Privacy Policy, which governs your visit to Equinox Medicine® Health Portal, to understand our practices.</p>
                              <strong>ELECTRONIC COMMUNICATIONS</strong>
                              <p>When you visit Equinox Medicine® Health Portal or send e-mails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices on this site. You agree that all agreements, notices, disclosures and other communications that we provide you electronically satisfy any legal requirements that such communications be in writing.</p>
                              <strong>COPYRIGHT AND TRADEMARKS</strong>
                              <p>Equinox Medicine® Health Portal is the registered trademark of Equinox Medicine Information Systems, Inc. and the website contains our copyrighted and protected material. Some material in the website is from copyrighted sources of the respective copyright claimants. Users of this material are solely responsible for compliance with any copyright restrictions and are referred to the copyright notices appearing in the original sources, all of which are hereby incorporated by reference.</p>
                              The trademarks, service marks, trade names, trade dress, patents and copyrights featured on this site, including Equinox Medicine® Health Portal are owned by Equinox Medicine Information Systems, Inc. in the United States and internationally. The trademarks, service marks, trade names, trade dress and products featured on this site are protected by laws in the United States and internationally. All other trademarks not owned by Equinox Medicine Information Systems, Inc. or its subsidiaries that appear on this site are the property of their respective owners, who may or may not be affiliated with, connected to, or sponsored by Equinox Medicine Information Systems, Inc. or its subsidiaries. This site is the copyrighted property of Equinox Medicine Information Systems,Inc. and/or its various third party providers and distributors, and is protected by U.S. Copyright laws and other laws including international treaties. Third party providers and distributors own much of the content found on this site. Equinox Medicine Information Systems, Inc. is not responsible for the privacy practices of third parties. We recommend that you review the privacy and security policies of such third parties should you so desire. You may download content only for your personal use for noncommercial purposes, but no modification or further reproduction of the content is permitted. The content may otherwise not be copied, disseminated or used in any other way. If you violate any of these Conditions of Use, your permission to use the Content automatically terminates and you must immediately destroy any copies you have made of any portion of the Content. No portion of this site, including but not limited to any Equinox Medicine® Health Portal channel, structure, text, graphics, designs, algorithms, object code, source code, creative concepts or results, may be reverse-engineered, disassembled, de-compiled, reproduced, transcribed, stored in a retrieval system, translated into any language or computer language, retransmitted in any form or by any means (electronic, mechanical, photo reproduction, recordation or otherwise), resold or redistributed without the prior written consent of Equinox Medicine Information Systems, Inc., except to identify the products or services of the company or to reproduce limited excerpts of the data for personal use only, provided that each such copy contains the following copyright notice: Copyright © 2015-2019, Equinox Medicine Information Systems, Inc. All rights reserved.</p>
                              <strong>LICENSE AND SITE ACCESS</strong>
                              <p>Equinox Medicine Information Systems, Inc. grants you a limited license to access and make personal use of this site and not to download (other than page caching) or modify it, or any portion of it, except with tools provided by Equinox Medicine Information Systems, Inc. or with the express written consent of Equinox Medicine Information Systems, Inc. This license does not include any resale or commercial use of this site or its contents; any derivative use of this site or its contents; any downloading or copying of account information for the benefit of another party; or any use of data mining, robots, or similar data gathering and extraction tools. This site or any portion of this site may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without express written consent of Equinox Medicine Information Systems, Inc. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of Equinox Medicine Information Systems, Inc., third party providers or our affiliates without express written consent. You may not use any meta tags or any other "hidden text" utilizing Equinox Medicine Information Systems, Inc.'s name or trademarks without the express written consent of Equinox Medicine Information Systems, Inc. Any unauthorized use terminates the permission or license granted by Equinox Medicine Information Systems, Inc. You are granted a limited, revocable, and nonexclusive right to create a hyperlink solely to the home page of Equinox Medicine Information Systems, Inc. so long as the link does not portray Equinox Medicine Information Systems, Inc., its affiliates, or their products or services in a false, misleading, derogatory, or otherwise offensive matter. You may not use any Equinox Medicine Information Systems, Inc. logo or other proprietary graphic or trademark as part of the link without express written permission.</p>
                              <strong>YOUR ACCOUNT</strong>
                              <p>If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. Equinox Medicine Information Systems, Inc. and its affiliates reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.</p>
                              <p>In addition, we may automatically gather general statistical information about our Web site and users, such as IP addresses, browsers, pages viewed, number of visitors and, possibly in the future, goods and services purchased/used, etc., but in doing so we do not reference you by individual name, e-mail address, home address, or telephone number. We use this data in the aggregate to determine how much our customers use parts of our site so we can improve our site. We may provide this statistical information to third parties, but when we do so we do not provide personally-identifying information without your permission. We do not sell or rent or share personally-identifying information collected during your use of our Web site without your permission. We collect and store your profile in order for you to manage your health.</p>
                              <p>As part of our service, we may use cookies to store and sometimes track information about you. A cookie is a small amount of data that is sent to your browser from a Web server and stored on your computer's hard drive. Generally, we use cookies to remind us who you are and enable us to access your account information so you do not have to reenter it; gather statistical information about usage by registered or unregistered users, research visiting patterns, and help target advertisements based on user interests; assist our partners track visits and process orders; and track progress and participation in promotions. In some instances, our partners and advertisers appearing at our site may use their own cookies. Preference and options configurations in your browser determine if and how a cookie will be accepted. You can change those configurations on your computer if you desire. By changing your preferences, you can accept all cookies, you can be notified when a cookie is set, or you can reject all cookies. If you do so and cookies are disabled, you may be required to reenter your information more often and certain features of our site may be unavailable.</p>
                              <strong>HOW YOU CAN OPT-OUT</strong>
                              <p>You must notify your practice to disengage You from the Equinox Medicine® Health Portal.</p>
                              <strong>SECURITY</strong>
                              <p>We employ reasonable and current security methods to prevent unauthorized access, maintain data accuracy, and ensure correct use of information Your account information and profile are password-protected. We recommend that you do not divulge your password to anyone. Our personnel will never ask you for your password in an unsolicited phone call or in an unsolicited e-mail. Remember to sign out of your account and close your browser window when you have finished your session. This is to help ensure that others cannot access your personal information and correspondence if you share a computer with someone else or are using a computer in a public place where others may have access to it. Whenever you voluntarily disclose personal information online - for example on message boards, through e-mail or in chat areas - that information can be collected and used by others. No data transmission over the Internet or any wireless network can be guaranteed to be perfectly secure. As a result, while we try to protect your personal information, we cannot ensure or guarantee the security of any information you transmit to us, and you do so at your own risk. Access to our database is protected by physical plant security, with access limited to few personnel. Thumbprint key-access locks as well as motion, and temperature detectors are also part of our security. Our database IP is only accessible through our application and not visible over the Internet.</p>
                              <strong>MINOR POLICY</strong>
                              <p>Each practice is responsible for granting or restricting minors access to this site based on their applicable state laws. Certain states may restrict use of this site by minors. We have no way of monitoring or distinguishing the age of individuals who access this site and so we carry out the same Privacy Policy for individuals of all ages. If a minor has provided us with personally-identifying information without parental or guardian consent, the parent or guardian should contact the practice to restrict access and remove the information.</p>
                              <p>You represent that you are of sufficient legal age to use this site and to create binding legal obligations for any liability you may incur as a result of the use of this site. You understand that you are financially responsible for all uses of this site by you and those using your login information.</p>
                              <strong>REVIEWS, COMMENTS, COMMUNICATIONS, FORUMS, AND OTHER CONTENT</strong>
                              <p>Visitors may post reviews, comments, and other content; send communications; engage in chat rooms and submit suggestions, ideas, comments, questions, or other information, so long as the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties or objectionable and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of "spam." You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of any content. You agree that you will not upload or transmit any communications that infringe any patent, trademark, trade secret, service mark, copyright or other proprietary rights of any party. Equinox Medicine Information Systems, Inc. reserves the right (but not the obligation) to remove or edit such content, but does not regularly review posted content. Please remember that any information (including personal and medical information) that you reveal in a Equionx Medicine® Health Portal public forum (such as a bulletin board, posting, chat room/event) is not protected by this Privacy Policy. Third parties not related to Equinox Medicine® Health Portal may see such postings. If you do post content or submit material, and unless we indicate otherwise, you grant Equinox Medicine Information Systems, Inc. and its affiliates a nonexclusive, royalty-free, perpetual, irrevocable, and fully sub-licensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content throughout the world in any media. You also grant Equinox Medicine Information Systems, Inc. and its affiliates and sub-licensees the right to use the name that you submit in connection with such content, if they choose. You represent and warrant that you own or otherwise control all of the rights to the content that you post; that the content is accurate; that use of the content you supply does not violate this Privacy Policy and will not cause injury to any person or entity; and that you will indemnify Equinox Medicine Information Systems, Inc. or its affiliates for all claims resulting from content you supply. You warrant that your communications comply with federal, local and international laws respecting trademark, trade secret, service mark, copyright or other proprietary rights of any party. Equinox Medicine Information Systems, Inc. takes no responsibility and assumes no liability for any content posted by you or any third party.</p>
                              <strong>DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY</strong>
                              <p>THIS SITE IS PROVIDED BY Equinox Medicine Information Systems, INC. ON AN "AS IS" AND "AS AVAILABLE" BASIS. EQUINOX MEDICINE INFORMATION SYSTEMS, INC. MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THIS SITE OR THE INFORMATION, CONTENT, MATERIALS, OR PRODUCTS INCLUDED ON THIS SITE. YOU EXPRESSLY AGREE THAT YOUR USE OF THIS SITE IS AT YOUR SOLE RISK. TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, EQUINOX MEDICINE INFORMATION SYSTEMS, INC. DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. EQUINOX MEDICINE INFORMATION SYSTEMS, INC. DOES NOT WARRANT THAT THIS SITE, ITS SERVERS, OR E-MAIL SENT FROM EQUINOX MEDICINE INFORMATION SYSTEMS, INC. ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. EQUINOX MEDICINE INFORMATION SYSTEMS, INC. WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THIS SITE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES. CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS.</p>
                              <p>APPLICABLE LAW</p>
                              <p>CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS. EQUINOX MEDICINE INFORMATION SYSTEMS, INC., INDIVIDUALLY AND COLLECTIVELY, AND ANY OF THEIR WEBSITE PROPERTIES ("SITE") DO NOT RENDER MEDICAL ADVICE. SITE CONTENT IS NOT INTENDED IN ANY WAY TO BE A SUBSTITUTE FOR PROFESSIONAL MEDICAL ADVICE FROM YOUR HEALTH CARE TEAM. ALL CONTENT IS GENERAL IN NATURE, IS PRESENTED IN SUMMARY FORM, AND IS PROVIDED FOR INFORMATIONAL PURPOSES ONLY TO IMPROVE YOUR COLLABORATION WITH YOUR HEALTH CARE TEAM. THIS WEBSITE IS NOT INTENDED FOR USE IN THE DIAGNOSIS OF DISEASE OR OTHER CONDITIONS, OR IN THE CURE, MITIGATION, TREATMENT, OR PREVENTION OF DISEASE. ALWAYS SEEK THE ADVICE OF YOUR PHYSICIAN OR OTHER QUALIFIED HEALTHCARE PROFESSIONAL FOR YOUR QUESTIONS CONCERNING A MEDICAL OR CLINICAL CONDITION, DECISIONS, GUIDELINES, MANAGEMENT OR TREATMENT. DO NOT RELY ON CONTENT, GUIDELINES, PRODUCTS OR ANY OTHER SERVICE OFFERED BY OR THROUGH NEXTGEN® PATIENT PORTAL OR THE SITE FOR MEDICAL OR CLINICAL DECISIONS, DIAGNOSIS, MANAGEMENT OR TREATMENT. NEVER DISREGARD MEDICAL ADVICE OR DELAY IN SEEKING IT BECAUSE OF SOMETHING YOU HAVE READ ON THIS SITE.</p>
                              <p>RELEASE</p>
                              <p>Because we are not involved in the rendering of medical advice, in the event that you have a dispute with any individual and/or entity that arises out of your use of Equinox Medicine® Health Portal, you release Equinox Medicine Information Systems, Inc. (and our officers, directors, agents, subsidiaries and employees) from claims, demands and damages (actual and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed, arising out of or in any way connected with such disputes. If you are a California resident, you waive California Civil Code §1542, which says: "A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which if known by him must have materially affected his settlement with the debtor."</p>
                              <strong>INFORMATION CONTROL</strong>
                              <p>We do not control the information provided by other users that is made available through our system. You may find other user's information to be offensive,harmful, inaccurate, or deceptive. Please use caution, common sense, and practice safe trading when using our site. Please note that there are also risks of dealing with underage persons or people acting under false pretense. Additionally, there may also be risks dealing with international trade and foreign nationals.</p>
                              <strong>MODIFICATION, AND SEVERABILITY</strong>
                              <p>We reserve the right to make changes to our site, policies, and these Conditions of Use at any time. Any changes to our policies will be communicated through our web site at least in advance of its effective date. Information collected before changes are made will be secured according to the previous policies. If any of these conditions shall be deemed invalid, void, or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.</p>
                              <strong>GENERAL</strong>
                              <p>This Agreement shall be governed in all respects by the laws of the State of Georgia as such laws are applied to agreements entered into and to be performed entirely within Georgia between California residents. We do not guarantee continuous, uninterrupted or secure access to our services, and operation of our site may be interfered with by numerous factors outside of our control. If any provision of this Agreement is held to be invalid or unenforceable, such provision shall be struck and the remaining provisions shall be enforced. You agree that this Agreement and all incorporated agreements may be automatically assigned by Equinox Medicine Information Systems, Inc., in our sole discretion, to a third party in the event of a merger or acquisition. Headings are for reference purposes only and in no way define, limit, construe or describe the scope or extent of such section. Our failure to act with respect to a breach by you or others does not waive our right to act with respect to subsequent or similar breaches. This Agreement sets forth the entire understanding and agreement between us with respect to the subject matter hereof. The United States controls the export of products and information from US companies abroad across the Internet. You are responsible for compliance with all federal and local laws regarding the import, export, or re-export of the Contents of this site (all forms of intellectual property, including Software). Sections on Release, License, Liability Limit and Indemnity shall survive any termination or expiration of this Agreement.</p>
                              <strong>Our Address:</strong>
                              <p>Equinox Medicine Information Systems, Inc.</p>
                              <p>795 Main St.</p>
                              <p>Kennesaw, GA 30102</p>
                              <p><a target="_blank" rel="noopener noreferrer" href="http://www.equinoxhp.com">http://www.equinoxhp.com</a> (Opens in new window)</p>
                              <p>If you have any questions about this Privacy Policy, the practices of this site or your dealings with this web site, please contact PrivacyOfficer@equinoxhp.com.  </p>   
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                          </div>
                      </div>
                      </div>
                  </div>
                  <!--End Modal-->
                </div>
              <button type="submit" class="btn btn-primary">Sign Up</button><br><br>
              <p>Already have an account? <a href="login.php">Login here.</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</html>