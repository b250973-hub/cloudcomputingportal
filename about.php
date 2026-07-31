<?php

$page_title = "About Cloud Computing";
include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">About</span>
            <h2 class="section-title">About Cloud Computing</h2>
            <p class="text-muted col-lg-8 mx-auto">Here you will find the basic definition, history, characteristics, advantages and disadvantages of Cloud Computing.</p>
        </div>

        
        <div class="card p-4 mb-4">
            <h4 class="text-primary"><i class="bi bi-book"></i> Definition</h4>
            <p>Cloud Computing is the delivery of computing services such as servers, storage, databases,
            networking, software and analytics over the Internet ("the cloud"). Instead of buying and
            maintaining physical hardware, users can rent computing resources from a cloud provider and
            pay only for what they use.</p>
        </div>

        
        <div class="card p-4 mb-4">
            <h4 class="text-primary"><i class="bi bi-clock-history"></i> History</h4>
            <p>The idea of cloud computing started in the 1960s when computer scientist John McCarthy
            suggested that computing could be sold like a utility, similar to electricity or water. In
            the 1990s, telecom companies started offering shared network services. In 2006, Amazon
            launched Amazon Web Services (AWS), which is considered the beginning of modern cloud
            computing. After that, companies like Google and Microsoft also launched their own cloud
            platforms, and today cloud computing is used by almost every industry.</p>
        </div>

        
        <div class="card p-4 mb-4">
            <h4 class="text-primary"><i class="bi bi-list-check"></i> Characteristics</h4>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><strong>On-Demand Self Service:</strong> Users can get resources whenever they need, without human interaction.</li>
                        <li><strong>Broad Network Access:</strong> Services can be accessed over the internet from any device.</li>
                        <li><strong>Resource Pooling:</strong> Resources are shared among multiple users.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><strong>Rapid Elasticity:</strong> Resources can be increased or decreased quickly based on demand.</li>
                        <li><strong>Measured Service:</strong> Usage is monitored and users pay only for what they use.</li>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card p-4 h-100">
                    <h4 class="text-success"><i class="bi bi-check-circle"></i> Advantages</h4>
                    <ul>
                        <li>Cost saving - no need to buy expensive hardware</li>
                        <li>Accessible from anywhere with internet</li>
                        <li>Automatic software updates</li>
                        <li>Easy to scale resources up or down</li>
                        <li>Data backup and recovery is easier</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4 h-100">
                    <h4 class="text-danger"><i class="bi bi-x-circle"></i> Disadvantages</h4>
                    <ul>
                        <li>Needs a stable internet connection</li>
                        <li>Risk of data security and privacy issues</li>
                        <li>Limited control over infrastructure</li>
                        <li>Possible downtime from provider's side</li>
                        <li>Ongoing subscription cost</li>
                    </ul>
                </div>
            </div>
        </div>

        <?php

$page_title = "Applications";

?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            
            <h2 class="section-title">Applications of Cloud Computing</h2>
            <p class="text-muted col-lg-8 mx-auto">Cloud Computing is used in almost every field today. Below are some common real-world applications.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-mortarboard feature-icon"></i>
                    <h5>Education</h5>
                    <p class="text-muted">Online classes, e-learning platforms, digital libraries and storing study material on the cloud.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-bank feature-icon"></i>
                    <h5>Banking</h5>
                    <p class="text-muted">Online banking, secure transaction processing and customer data storage using cloud servers.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-heart-pulse feature-icon"></i>
                    <h5>Healthcare</h5>
                    <p class="text-muted">Storing patient records, telemedicine consultations, and medical research data sharing.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-cart feature-icon"></i>
                    <h5>E-Commerce</h5>
                    <p class="text-muted">Online shopping websites use cloud servers to handle traffic, payments and product data.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-building-check feature-icon"></i>
                    <h5>Government</h5>
                    <p class="text-muted">Digital governance, citizen service portals, and secure storage of public records.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <i class="bi bi-film feature-icon"></i>
                    <h5>Entertainment</h5>
                    <p class="text-muted">Streaming platforms for movies, music and online games run on powerful cloud servers.</p>
                </div>
            </div>

        </div>
    </div>
</section>



        <!-- Importance -->
        <div class="card p-4 mb-4 bg-light-blue">
            <h4 class="text-primary"><i class="bi bi-star"></i> Importance</h4>
            <p class="mb-0">Cloud Computing is important because it allows businesses and individuals to
            focus on their actual work instead of managing hardware. It supports remote work, saves cost
            for startups, powers modern technologies like Artificial Intelligence and Big Data, and makes
            services available 24/7 to users across the world.</p>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>
