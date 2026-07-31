<?php

$page_title = "Cloud Providers";
include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">Providers</span>
            <h2 class="section-title">Popular Cloud Providers</h2>
            <p class="text-muted col-lg-8 mx-auto">Here is a simple comparison of the top 5 cloud providers used across the world.</p>
        </div>

        <div class="row g-4">

            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4">
                    <div class="provider-logo text-primary"><i class="bi bi-amazon"></i></div>
                    <h4>Amazon Web Services (AWS)</h4>
                    <p class="text-muted">AWS is the most widely used cloud platform, launched by Amazon in 2006. It offers the largest range of cloud services.</p>
                    <p><strong>Popular Services:</strong> EC2, S3, Lambda, RDS</p>
                    <p><strong>Advantages:</strong> Largest market share, huge number of services, strong reliability.</p>
                </div>
            </div>

            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4">
                    <div class="provider-logo text-info"><i class="bi bi-microsoft"></i></div>
                    <h4>Microsoft Azure</h4>
                    <p class="text-muted">Azure is Microsoft's cloud platform, popular among businesses already using Microsoft products.</p>
                    <p><strong>Popular Services:</strong> Azure VM, Azure App Service, Azure SQL Database</p>
                    <p><strong>Advantages:</strong> Great integration with Windows and Office 365, strong enterprise support.</p>
                </div>
            </div>

            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4">
                    <div class="provider-logo text-success"><i class="bi bi-google"></i></div>
                    <h4>Google Cloud Platform</h4>
                    <p class="text-muted">GCP is Google's cloud platform, known for strong data analytics, machine learning, and networking speed.</p>
                    <p><strong>Popular Services:</strong> Compute Engine, BigQuery, Google Kubernetes Engine</p>
                    <p><strong>Advantages:</strong> Excellent for AI/ML and big data, competitive pricing.</p>
                </div>
            </div>

        
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4">
                    <div class="provider-logo text-dark"><i class="bi bi-diagram-2"></i></div>
                    <h4>IBM Cloud</h4>
                    <p class="text-muted">IBM Cloud focuses on hybrid cloud solutions and enterprise-level artificial intelligence services.</p>
                    <p><strong>Popular Services:</strong> IBM Watson, IBM Cloud Kubernetes Service</p>
                    <p><strong>Advantages:</strong> Strong AI capabilities, good for hybrid cloud and large enterprises.</p>
                </div>
            </div>

            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4">
                    <div class="provider-logo text-danger"><i class="bi bi-database"></i></div>
                    <h4>Oracle Cloud</h4>
                    <p class="text-muted">Oracle Cloud is known for its strong database services and is widely used by businesses running Oracle software.</p>
                    <p><strong>Popular Services:</strong> Oracle Autonomous Database, Oracle Cloud Infrastructure</p>
                    <p><strong>Advantages:</strong> Best for database-heavy applications, good performance for enterprise workloads.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
