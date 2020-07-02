<?php include("header.php"); ?>

<div class="container-fluid mt-5">

<div class="row">
    <div class="col-lg-12">
        <table class="table table-dark">
            <tr>
                <td>USERID</td>
                <td>create_ticket</td>
                <td>find_usr_mng_under_reports</td>
                <td>find_service</td>
                <td>send_req_manager_oft</td>
                <td>send_req_app_owner</td>
                <td>req_approved</td>
                <td>attach_approvals_to_ticket</td>
                <td>send_email_to_orka</td>
                <td>send_req_SAP</td>
                <td>assign_user_rights</td>
                <td>configure_zebra</td>
                <td>add_user_to_group</td>
                <td>close_ticket</td>
            </tr>
            <tbody>
                <?php $users = get_users($_db); ?>
                <?php while( $user = $users->fetch_array() ): ?>
                    <tr>
                        <?php for( $i = 0; $i < 14; $i++ ): ?>
                            <td><?php echo $user[$i]; ?></td>
                        <?php endfor; ?>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</div>

<?php include("footer.php"); ?>
