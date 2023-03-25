<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Edit details</h2>
     <table border="1" width="70%" >
                        <tr>
                            <td>
                               <b> Enrollment </b>
                            </td>
                            <td>
                                <b><span id="ContentPlaceHolder1_lblenroll">200170116046</span></b>
                            </td>
                        </tr>
                        
                       <tr>
                        <td>
                           <b> Name :</b>
                        </td>
                        <td>
                            <input name="ctl00$ContentPlaceHolder1$TextBox_editName" type="text" value="Suriya krupalee rameshbhai" id="ContentPlaceHolder1_TextBox_editName" disabled="disabled" class="aspNetDisabled" style="width:350px;" />
                        </td>
                           </tr>
                        <tr>
                            <td>
                              <b>  Email :</b>
                            </td>
                            <td>
                                <input name="ctl00$ContentPlaceHolder1$TextBox_EditEmail" type="text" value="Suriyark3342@gmail.com" id="ContentPlaceHolder1_TextBox_EditEmail" style="width:350px;" />
                                <span data-val-controltovalidate="ContentPlaceHolder1_TextBox_EditEmail" data-val-errormessage="Invalid email id format." data-val-validationGroup="mg" id="ContentPlaceHolder1_RegularExpressionValidator1" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" style="visibility:hidden;">Invalid email id format.</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                           <b>     Mobile :</b>
                            </td>
                            <td>
                                <input name="ctl00$ContentPlaceHolder1$TextBox_Mobile" type="text" value="9313053342" maxlength="10" id="ContentPlaceHolder1_TextBox_Mobile" />
                                 <span data-val-controltovalidate="ContentPlaceHolder1_TextBox_Mobile" data-val-errormessage="enter valid mobile number" data-val-validationGroup="mg" id="ContentPlaceHolder1_RegularExpressionValidator2" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="[0-9]{10}" style="visibility:hidden;">enter valid mobile number</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Change Password :
                            </td>
                            <td>
                                <input name="ctl00$ContentPlaceHolder1$TextBox_chgpwd" type="text" value="" id="ContentPlaceHolder1_TextBox_chgpwd" />
                                <span data-val-controltovalidate="ContentPlaceHolder1_TextBox_chgpwd" data-val-errormessage="Password length must be between 6 to 12 characters" data-val-validationGroup="mg" id="ContentPlaceHolder1_RegExp1" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="^[a-zA-Z0-9&#39;@&amp;#.\s]{6,12}$" style="visibility:hidden;">Password length must be between 6 to 12 characters</span>
                            </td>
                        </tr>
                       <tr>
                            <td>
                                CGPA :
                            </td>
                            <td>
                                <input name="ctl00$ContentPlaceHolder1$TextBox_chgpwd" type="text" value="910" id="ContentPlaceHolder1_TextBox_chgpwd" />//chgpwd=>chgcgpa
                                <span data-val-controltovalidate="ContentPlaceHolder1_TextBox_chgpwd" data-val-errormessage="Password length must be between 6 to 12 characters" data-val-validationGroup="mg" id="ContentPlaceHolder1_RegExp1" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="^[a-zA-Z0-9&#39;@&amp;#.\s]{6,12}$" style="visibility:hidden;">Password length must be between 6 to 12 characters</span>
                            </td>
                        </tr>
                      
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnSave" value="Save" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSave&quot;, &quot;&quot;, true, &quot;mg&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btnSave" style="color:White;background-color:#337AB7;" />
                                
                            </td>
                        </tr>
                    </table>
</body>
</html>