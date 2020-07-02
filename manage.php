<?php include("header.php"); ?>
<?php 

    if( isset($_GET['user_id']) ){

        /** Clear it */
        $user_id = htmlentities( $_GET['user_id'], ENT_COMPAT, 'utf-8' );

        /** User Data */
        $user_data = get_user($_db, (int)$user_id)->fetch_assoc(); /** Be sure we sant Int */

    }

?>
<div class="container mt-5">
<div class="row">
    <div class="col-sm-12">
    <h1><i class="fa fa-user"></i> Manage Users</h1>
    <hr>
    <div class="form-container">
        <?php if(empty($user_data)): ?>
        <form action="manage.php" id="find-user" method="">
            <label for="user_id">Enter User ID</label>
            <input type="text" name="user_id" class="" />
            <button class="btn btn-success">Confirm</button>
            <?php if(@$user_id): ?>
                <div class="alert alert-danger">User with id <?php echo $user_id; ?> not exists!</div>
            <?php endif; ?>
        </form>
        <?php else: ?>
        <form action="manage_fun.php" method="POST" class="add-user mt-4">
                <h2>Information about user ID <b><?php echo $user_id; ?></b></h2>
                <input type="hidden" name="user_id" value="<?php echo $user_data['user_ID']; ?>" />
                <ul>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="create_ticket" <?php if($user_data['create_ticket']){ echo "checked"; } ?> /> Create ticket (BIH SM Ticket OWIS NEW.txt) <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="find_usr_mng_under_reports" <?php if($user_data['find_usr_mng_under_reports']){ echo "checked"; } ?> />  Find user's Manager in CMS under REPORTS-Federated Databases-AD-Users <a href="blank.php" target="_blank" class="btn btn-secondary">User Managers Report</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="find_service" <?php if($user_data['find_service']){ echo "checked"; } ?>  />  Find service price in price list and type in email for approval <a href="blank.php" target="_blank" class="btn btn-link">link</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="send_req_manager_oft" <?php if($user_data['send_req_manager_oft']){ echo "checked"; } ?> />  Send Request for approval using email template BIH OWIS User New Approval Manager.oft template <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="send_req_app_owner" <?php if($user_data['send_req_app_owner']){ echo "checked"; } ?> />  Send Request for approval using email template BIH OWIS User New Approval AppOwner.oft template <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="req_approved" <?php if($user_data['req_approved']){ echo "checked"; } ?> />  If Request Approved
                    </li>
                    <li class="only-approved">
                        <ul>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="attach_approvals_to_ticket" <?php if($user_data['attach_approvals_to_ticket']){ echo "checked"; } ?> />  Attach approval(s) to ticket
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="send_email_to_orka" <?php if($user_data['send_email_to_orka']){ echo "checked"; } ?> />  If Request approved send email to company Orka to create user email template BIH OWIS User New Create ORKA.oft <a href="blank.php" target="_blank" class="btn btn-secondary">Send</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="send_req_SAP" <?php if($user_data['send_req_SAP']){ echo "checked"; } ?>/>  If procedure 'Import faktura' will be assigned send request t SAP CC-SD team to add user in AD group <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="assign_user_rights" <?php if($user_data['assign_user_rights']){ echo "checked"; } ?> />  Assign user rights
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="configure_zebra" <?php if($user_data['configure_zebra']){ echo "checked"; } ?> />  If user will use bar code reader device type "Zebra LS1203" after installation you have to configure it using this manual <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                            </li>
                            <li>
                                <input type="checkbox" name="korisnik[]" value="add_user_to_group" <?php if($user_data['add_user_to_group']){ echo "checked"; } ?> />  If email distribution group(s) exist (check in Basic Information) add user to group(s)
                            </li>
                    </ul>
                    </li>
                    <li>
                        <input type="checkbox" name="korisnik[]" value="close_ticket" <?php if($user_data['close_ticket']){ echo "checked"; } ?> />  Close the ticket (BIH SM Ticket OWIS NEW.txt) <a href="blank.php" target="_blank" class="btn btn-secondary">Open</a>
                    </li>
                </ul>
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Submit Form</button>
            </form>
            <?php endif; ?>
    </div>

    </div>
</div>
</div>
<?php include("footer.php"); ?>     