<?php include("header.php"); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h1><i class="fa fa-users"></i> Add New User</h1>
            <hr>
            <form action="add_user_fun.php" method="POST" class="add-user mt-4">
                <ul>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="create_ticket" /> Create ticket (BIH SM Ticket OWIS NEW.txt) <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="find_usr_mng_under_reports" />  Find user's Manager in CMS under REPORTS-Federated Databases-AD-Users <a href="blank.php" target="_blank" class="btn btn-secondary">User Managers Report</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="find_service" />  Find service price in price list and type in email for approval <a href="blank.php" target="_blank" class="btn btn-link">link</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="send_req_manager_oft" />  Send Request for approval using email template BIH OWIS User New Approval Manager.oft template <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="send_req_app_owner" />  Send Request for approval using email template BIH OWIS User New Approval AppOwner.oft template <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="req_approved" />  If Request Approved
                    </li>
                    <li class="only-approved">
                        <ul>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="attach_approvals_to_ticket" />  Attach approval(s) to ticket
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="send_email_to_orka" />  If Request approved send email to company Orka to create user email template BIH OWIS User New Create ORKA.oft <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="send_req_SAP" />  If procedure 'Import faktura' will be assigned send request t SAP CC-SD team to add user in AD group <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="assign_user_rights" />  Assign user rights
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="configure_zebra" />  If user will use bar code reader device type "Zebra LS1203" after installation you have to configure it using this manual <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="add_user_to_group" />  If email distribution group(s) exist (check in Basic Information) add user to group(s)
                            </li>
                    </ul>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="close_ticket" />  Close the ticket (BIH SM Ticket OWIS NEW.txt) <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                    </li>
                </ul>
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Submit Form</button>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>