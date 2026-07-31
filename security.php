<?php

$page_title = "Cloud Security";
include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">Security</span>
            <h2 class="section-title">Cloud Security</h2>
            <p class="text-muted col-lg-8 mx-auto">Security is one of the most important topics in cloud computing. Here are the key concepts every student should know.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-person-check feature-icon"></i>
                    <h4 class="text-primary">Authentication</h4>
                    <p>Authentication is the process of verifying the identity of a user before giving access
                    to cloud resources. Common methods include passwords, OTP, and multi-factor authentication (MFA).</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-key feature-icon"></i>
                    <h4 class="text-primary">Encryption</h4>
                    <p>Encryption converts readable data into a coded format that cannot be understood without
                    a decryption key. It protects data both when it is stored (at rest) and when it is being
                    sent over the network (in transit).</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-cloud-arrow-down feature-icon"></i>
                    <h4 class="text-primary">Backup</h4>
                    <p>Backup means keeping extra copies of important data so that it can be restored if the
                    original data is lost due to hardware failure, human error, or cyber attack.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-arrow-repeat feature-icon"></i>
                    <h4 class="text-primary">Disaster Recovery</h4>
                    <p>Disaster Recovery is a plan and set of tools used to recover data, applications, and
                    systems quickly after events like server crashes, natural disasters, or cyber attacks.</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card h-100 p-4">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <h4 class="text-primary">Data Privacy</h4>
                    <p>Data Privacy refers to the proper handling of personal and sensitive information stored
                    in the cloud, ensuring that it is collected, stored and shared according to privacy laws
                    and only with the user's permission.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
