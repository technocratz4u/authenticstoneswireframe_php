<?php

include __SITE_PATH . '/service/utils/EmailUtil.php' ;

Class IndexController Extends BaseController {

	public function index() {
		if(isset($_POST["logoutFlag"]) && $_POST["logoutFlag"]=="Y"){
			/*** destroy the current session from which logged out ***/
			session_destroy();
			/*** create a new session ***/
			session_start();
		}else{
			// set the current menu as HOME
			//$_SESSION["currentMenu"] = __MENU_HOME;
			$_SESSION["dataPresent"]="Y";
		}
		
		/*** load the index template ***/
		$this->registry->template->show('home');
	}
	
	public function sendmail(){
		$sendmailRet;
		$sendmailRet["ERROR"] = array();
		$sendmailArgs = array();
		try {
			if(!(isset($_POST["mailTo"]) && isset($_POST["name"]) && isset($_POST["password"]))){
				$sendmailRet["ERROR"]["ERRMESSAGE"]="Mandatory data missing";
			}else{
				echo "----- :".$_POST["mailTo"];
				$sendmailArgs["mailTo"] = $_POST["mailTo"];
				$sendmailArgs["name"] = $_POST["name"];
				$sendmailArgs["password"] = $_POST["password"];
				$fileUploadRet = $this->validateNSendEmail($sendmailArgs);
				echo "----- : 1111111";
				//print_r($fileUploadRet);
			}
				
		} catch (Exception $e) {
			ExceptionHandler::logException($e, $this->registry->db);
		}

		$this->registry->template->model = $fileUploadRet;
		$this->registry->template->show('sendmailresponse');
			
	}
	
	
	private function validateNSendEmail($sendmailArgs){
	
		$retStatus = array();
		$retStatus["PROCESSINGSTATUS"]="FAILURE";
		$retStatus["REASON"]="FAILURE";
	
		try{
				
			$sendmailArgs["mailTo"]=filter_var($sendmailArgs["mailTo"], FILTER_SANITIZE_EMAIL);
	
			if (filter_var($sendmailArgs["mailTo"], FILTER_VALIDATE_EMAIL)) {
	
					// Welcome mail to user email id and retrieve the delivery status
					$mailStatus = $this->mailRegistrationConfirmationToUser($sendmailArgs);
					echo "11111111 --- ".$mailStatus;
					if($mailStatus){
						$retStatus["PROCESSINGSTATUS"]="SUCCESS";
						$retStatus["REASON"]="SUCCESS";
					}else{
						$retStatus["PROCESSINGSTATUS"]="FAILURE";
						$retStatus["REASON"]="EMAILSENDINGFAILURE";
					}
						
	
			}else{
				$retStatus["PROCESSINGSTATUS"]="FAILURE";
				$retStatus["REASON"]="INVALID";
			}
				
				
		}catch (Exception $e) {
			//echo "Caught in stor_user_data Exception Message : ' .$e->getMessage()";
			$retStatus["PROCESSINGSTATUS"]="FAILURE";
			$retStatus["REASON"]="UNKNOWN";
		}
	
		return $retStatus;
	}
	
	private function mailRegistrationConfirmationToUser($sendmailArgs){
		$mailingStatus = false;
		try{
	
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							    <head>
							        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
							        <title></title>
							        <style>
										.emailContainerTbl{
											background-color:#F5F5F5;
										}
		
										.emailHeaderTbl{
											background-color:#2B4877;
											color:#FFFFFF;
											font:15px Arial,Helvetica sans-serif;
										}
		
										.emailBodyTbl{
											color: #333333;
											font:15px Arial,Helvetica sans-serif;
										}
	
										.emailFooterTbl{
											background-color:#2B4877;
											color:#FFFFFF;
											font:10px Arial,Helvetica sans-serif;
										}
		
										.credentialsTbl{
											font:15px Arial,Helvetica sans-serif;
											padding-top:10px;
										}
		
										.credentialsTblCol{
											style="padding:0px 5px;"
										}
		
										.loginbutton{
											background-color: #355787;
											border: 1px solid #29447E #29447E #1A356E;
											color: #FFFFFF;
											cursor: pointer;
											display: inline-block;
											font: bold 14px tahoma,verdana,arial,sans-serif;
											margin: 20px 0px 0px 0px;
											padding: 0.3em 0.6em 0.375em; position: relative;
											text-align: center; text-decoration: none;
											white-space: nowrap;
											z-index: 1;
										}
	
										.footerLink{
											color:#FFFFFF;
										}
		
									</style>
							    </head>
							    <body>
									<table cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
									    <tr>
									        <td align="center" valign="top">
									            <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer"
													class="emailContainerTbl" style="background-color:#F5F5F5;">
									                <tr>
									                    <td align="center" valign="top">
									                        <table border="0" cellpadding="5" cellspacing="0" width="100%" id="emailHeader"
																class="emailHeaderTbl" style="background-color:#2B4877;color:#FFFFFF;font:15px Arial,Helvetica sans-serif;">
									                            <tr>
									                                <td align="center" valign="top">
									                                    Greetings from '.__APPLICATION_NAME.'
									                                </td>
									                            </tr>
									                        </table>
									                    </td>
									                </tr>
									                <tr>
									                    <td align="center" valign="top">
									                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailBody"
									                            class="emailBodyTbl" style="font:15px Arial,Helvetica sans-serif;color: #333333;">
									                            <tr>
									                                <td align="center" valign="top">
									                                    Hi <strong>'.$sendmailArgs["name"].'</strong>, <br/><br/>
																		Welcome to '.__APPLICATION_NAME.'.<br/>
																		Your account has been setup succesfully.<br/>
																		Your credentials are given below.
									                                </td>
									                            </tr>
																<tr>
									                                <td align="center" valign="top">
									                                    <table class="credentialsTbl" cellpadding="0"
																				style="padding-top:10px;font:15px Arial,Helvetica sans-serif;" >
																			<tr>
																				<td class="credentialsTblCol" style="padding:0px 5px;"><strong>Username :</strong></td>
																				<td class="credentialsTblCol" style="padding:0px 5px;">'.$sendmailArgs["mailTo"].'</td>
																			</tr>
																			<tr>
																				<td class="credentialsTblCol" style="padding:0px 5px;"><strong>Password :</strong> </td>
																				<td class="credentialsTblCol" style="padding:0px 5px;">'.$sendmailArgs["password"].'</td>
																			</tr>
																		</table>
									                                </td>
									                            </tr>
																<tr>
									                                <td align="center" valign="top">
																		<a target="_blank" href="'.__APPLICATION_URL.'" class="loginbutton"
																			style="background-color: #355787; border: 1px solid #29447E #29447E #1A356E;
																				color: #FFFFFF; cursor: pointer; display: inline-block; font: bold 14px tahoma,verdana,arial,sans-serif; margin: 20px 0px 0px 0px;
																				padding: 0.3em 0.6em 0.375em; position: relative; text-align: center; text-decoration: none; white-space: nowrap;
																				z-index: 1;">Login to '.__APPLICATION_NAME.'</a>
																	</td>
																</tr>
									                        </table>
									                    </td>
									                </tr>
									                <tr>
									                    <td align="center" valign="top">
									                        <table border="0" cellpadding="5" cellspacing="0" width="100%" id="emailFooter"
																class="emailFooterTbl" style="background-color:#2B4877;color:#FFFFFF;font:10px Arial,Helvetica sans-serif;">
									                            <tr>
									                                <td align="left" valign="top">
									                                    This is an auto-mailer. Please do not reply to this mail.<br/>
																		Website : <a class="footerLink" style="color:#FFFFFF;" target="_blank" href="'.__APPLICATION_URL.'">'.__APPLICATION_URL.'</a> |
																			Mail : <a class="footerLink" style="color:#FFFFFF;" href="mailto:'.__MY_MAIL_ID.'">'.__MY_MAIL_ID.'</a>
	
									                                </td>
																	<td align="right" valign="bottom">
																		Copyright &copy; 2013 | <a class="footerLink" style="color:#FFFFFF;" target="_blank" href="'.__APPLICATION_URL.'privacypolicy">Privacy Policy</a>
																	</td>
									                            </tr>
									                        </table>
									                    </td>
									                </tr>
									            </table>
									        </td>
									    </tr>
									</table>
								</body>
							</html>';
	
			$mailData=array();
			$mailData["message"] = $message;
			$mailData["emailto"] = $sendmailArgs["mailTo"];
			$mailData["emailsubject"] = "Welcome to ".__APPLICATION_NAME;
	
			$mailingStatus = EmailUtil::sendMail($mailData);
	
		}catch (Exception $e) {
			$mailingStatus = false;
		}
	
		return $mailingStatus;
	}

}

?>
