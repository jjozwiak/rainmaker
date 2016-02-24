<?php
require_once 'inc/header.php';
?>

  <div id="estimates-hero" class="hero">
    <div class="hero-inner">
      <div class="hero-copy">
        <h1>Estimates</h1>
        <p>We work very hard to make sure you are very comfortable with the whole process. Our staff can answer any questions you may have about your installation.</p>
        <p>Our staff are very efficient when it comes to installation, with most jobs completing in 4-8 hours. We use a Vermeer trencher with minimal ground disruption, so if you already have a beautiful lawn you can add a sprinkler system to it with the piece of mind that the yard does not have to be ripped apart to have it installed.</p>
      </div>
    </div>
  </div>
  <section id="sub-section">
    <div class="wrap">
      <form name="contactForm" method="post"
            action="http://www.mycontactform.com/sendform/sendform.php">
        <input name="user" type="hidden" id="user" value="foustcf"><input
          name="formid" type="hidden" id="formid" value="213446"><input
          name="subject" type="hidden" id="subject" value="New estimate">
        <table width="100%"
               style="border: 0px solid #000000; margin: 0; padding: 0;">
          <tbody>
          <tr>
            <td>
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tbody>
                <tr>
                  <td style="width: 20%; text-align: right;">First Name<span style="color:#FF0000;">*</span></td>
                  <td><input name="q[1]" type="text" value="" size="30" maxlength="30"></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Last Name<span style="color:#FF0000;">*</span></td>
                  <td><input name="q[2]" type="text" value="" size="30" maxlength="30"></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Address <span style="color:#FF0000;">*</span></td>
                  <td><input name="q[3]" type="text" value="" size="50" maxlength="50"></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">City <span style="color:#FF0000;">*</span></td>
                  <td><input name="q[4]" type="text" value="" size="50" maxlength="50"></font></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">State <span  style="color:#FF0000;">*</span></td>
                  <td><font color="#000000" size="2" face="Arial"><input
                        name="q[5]" type="text" value="IN" size="2"
                        maxlength="0"></font></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Zip Code <span style="color:#FF0000;">*</span></td>
                  <td><font color="#000000" size="2" face="Arial"><input
                        name="q[6]" type="text" value="" size="5" maxlength="5"></font>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Phone
                      Number <span  style="color:#FF0000;"> *</span></td>
                  <td><font color="#000000" size="2" face="Arial"><input
                        name="q[10]" type="text" value="" size="20"
                        maxlength="15"></font></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Services
                      Requesting<span style="color:#FF0000;"> *</span></td>
                  <td><font color="#000000" size="2" face="Arial"><input
                        name="q[7]" type="hidden" value="checkbox213446"><input
                        name="checkbox7[]" type="checkbox"
                        value="Irrigation Estimate">Irrigation
                      Estimate<br><input name="checkbox7[]" type="checkbox"
                                         value="Irrigation Repair">Irrigation
                      Repair<br><input name="checkbox7[]" type="checkbox"
                                       value="Aeration Estimate">Aeration
                      Estimate<br><input name="checkbox7[]" type="checkbox"
                                         value="Backflow Testing">Backflow
                      Testing</font></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;"> E-mail
                      Address:<span style="color:#FF0000;"> *</span></td>
                  <td><input name="email" type="text" id="email" size="20" maxlength="100"></td>
                </tr>
                <tr>
                  <td style="width: 20%; text-align: right;">Comments</td>
                  <td><textarea name="q[9]" cols="50" rows="5"></textarea></td>
                </tr>
                <tr>
                  <td style="width: 20%;"></td>
                  <td><input name="submit" type="submit" value="Submit"></td>
                </tr>
                <tr>
                  <td style="width: 20%;"></td>
                  <td><font color="#FF0000" size="1"
                            face="Verdana, Arial, Helvetica, sans-serif"><b>*</b></font>
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Required</font>
                  </td>
                </tr>
                </tbody>
              </table>
            </td>
          </tr>
          </tbody>
        </table>
      </form>
    </div>
  </section>

<?php
require_once 'inc/footer.php';
?>