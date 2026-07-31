<?php

$page_title = "Deployment Models";
include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">Deployment Models</span>
            <h2 class="section-title">Cloud Deployment Models</h2>
            <p class="text-muted col-lg-8 mx-auto">Deployment models describe where the cloud infrastructure is located and who can access it.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-globe feature-icon"></i>
                    <h4 class="text-primary">Public Cloud</h4>
                    <p>Public cloud services are owned and operated by third-party cloud providers and delivered
                    over the internet. Resources are shared among multiple organizations (multi-tenant).</p>
                    <p><strong>Example:</strong> AWS, Microsoft Azure, Google Cloud.</p>
                    <p><strong>Best For:</strong> Startups and businesses that want low cost and easy scaling.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-lock feature-icon"></i>
                    <h4 class="text-primary">Private Cloud</h4>
                    <p>Private cloud infrastructure is used exclusively by a single organization. It can be hosted
                    on-premises or by a third party, giving more control and security.</p>
                    <p><strong>Example:</strong> A bank's internal cloud system.</p>
                    <p><strong>Best For:</strong> Organizations that need high security and full control, like banks or government.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-shuffle feature-icon"></i>
                    <h4 class="text-primary">Hybrid Cloud</h4>
                    <p>Hybrid cloud is a combination of public and private clouds, allowing data and applications
                    to move between them. It gives more flexibility and optimization of resources.</p>
                    <p><strong>Example:</strong> A company keeping sensitive data on private cloud and using public cloud for extra workload.</p>
                    <p><strong>Best For:</strong> Organizations needing both security and scalability.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <i class="bi bi-people feature-icon"></i>
                    <h4 class="text-primary">Community Cloud</h4>
                    <p>Community cloud is shared between several organizations that have common goals or
                    requirements, such as security policies or compliance needs.</p>
                    <p><strong>Example:</strong> Cloud shared between government departments of the same state.</p>
                    <p><strong>Best For:</strong> Organizations with similar concerns, like universities or government bodies.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
