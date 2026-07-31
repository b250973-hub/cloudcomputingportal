<?php

$page_title = "Service Models";
include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">Service Models</span>
            <h2 class="section-title">Cloud Service Models</h2>
            <p class="text-muted col-lg-8 mx-auto">Cloud computing services are mainly divided into three models based on how much control the user has over the resources.</p>
        </div>

        <div class="row g-4">

        
            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <i class="bi bi-server feature-icon"></i>
                    <h4 class="text-primary">IaaS</h4>
                    <p class="text-muted">Infrastructure as a Service</p>
                    <p><strong>Definition:</strong> IaaS provides basic computing infrastructure like virtual machines, storage and networks over the internet, on rent.</p>
                    <p><strong>Features:</strong></p>
                    <ul>
                        <li>Virtual servers on demand</li>
                        <li>Pay-as-you-go pricing</li>
                        <li>Full control over operating system</li>
                    </ul>
                    <p><strong>Advantages:</strong> No need to buy physical hardware, flexible scaling, reduced maintenance cost.</p>
                    <p><strong>Real Life Example:</strong> Amazon EC2, Microsoft Azure Virtual Machines.</p>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <i class="bi bi-code-slash feature-icon"></i>
                    <h4 class="text-primary">PaaS</h4>
                    <p class="text-muted">Platform as a Service</p>
                    <p><strong>Definition:</strong> PaaS provides a ready-made platform (including operating system, tools and libraries) so developers can build, test and run applications without managing infrastructure.</p>
                    <p><strong>Features:</strong></p>
                    <ul>
                        <li>Built-in development tools</li>
                        <li>Automatic scaling of application</li>
                        <li>No need to manage servers</li>
                    </ul>
                    <p><strong>Advantages:</strong> Faster application development, reduced coding time, easy collaboration for developers.</p>
                    <p><strong>Real Life Example:</strong> Google App Engine, Microsoft Azure App Service.</p>
                </div>
            </div>

        
            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <i class="bi bi-window feature-icon"></i>
                    <h4 class="text-primary">SaaS</h4>
                    <p class="text-muted">Software as a Service</p>
                    <p><strong>Definition:</strong> SaaS delivers ready-to-use software applications over the internet, without any installation on local computers.</p>
                    <p><strong>Features:</strong></p>
                    <ul>
                        <li>Accessible from web browser</li>
                        <li>No installation required</li>
                        <li>Automatic updates by provider</li>
                    </ul>
                    <p><strong>Advantages:</strong> Easy to use, works on any device, low cost for individual users.</p>
                    <p><strong>Real Life Example:</strong> Gmail, Google Docs, Netflix.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
